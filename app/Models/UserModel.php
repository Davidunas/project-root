<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // ...
    protected $table = 'user';
    protected $allowedFields = ['id_user', 'username', 'fullname', 'email', 'password', 'image', 'phone', 'age', 'birthday', 'gender', 'address', 'job', 'national', 'type', 'last_activity'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
