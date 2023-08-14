<?php
namespace App\Models;
use CodeIgniter\Model;
    class userModel extends Model
    {
        protected $table = 'emp';
        protected $allowedFields=['id','emp_name', 'phone', 'email','photo','resume'];

    }
?>
