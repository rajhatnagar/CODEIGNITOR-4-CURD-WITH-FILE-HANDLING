<h2>Insert Employee Details:</h2>

<form action="<?php echo base_url('/update'.$emp['id']); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">EMP Name</label>
    <input type="text" class="form-control" name="name" value='<?= $emp['emp_name'] ?>' aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" value='<?= $emp['email'] ?>' aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" class="form-control" name="phone" value='<?= $emp['phone'] ?>' aria-describedby="emailHelp" placeholder="Enter phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>