<?php

namespace App\Controllers;
 use App\Models\userModel;
 use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $model = new userModel();
        $data['emp']= $model->findAll();
        return view('welcome_message',$data);
    }
    public function contact()
    {
        echo "Contact Page";
        // return view('404');
    }
    //create employee edit function in controller?
    public function edit($id)
    {
        $newemp = new userModel();
        $data['emp'] = $newemp->find($id);
        return view('addemp',$data);
    }
    
    public function update($id)
    {
        $newemp = new userModel();
        $newemp->find($id);
        $data=[
            'emp_name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];
        $newemp->update($id, $data);
        return redirect()->to(base_url())->with('status','Employee updated Successfully') ;
    }
       
    public function delete($id)
    {
        $newemp = new userModel();
        $newemp->delete($id);
        return redirect()->to(base_url())->with('status','Employee Deleted Successfully') ;
    }

    public function insert()
    {
        // Get the uploaded files
        $photo = $this->request->getFile('photo');
        $resume = $this->request->getFile('resume');
    
        // Move the uploaded files to a writable directory
        $photo->move('public/uploads/img');
        $resume->move('public/uploads/pdf');
    
        // Save the form data to the database
        $userData = [
            'emp_name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'photo' => $photo->getName(),
            'resume' => $resume->getName()
        ];
    
        $newemp = new userModel();
        $newemp->insert($userData);
    
        // Redirect to a success page or show a success message
        return redirect()->to(base_url());
    }
}
