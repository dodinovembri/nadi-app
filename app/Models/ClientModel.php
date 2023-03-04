<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model {
    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'app_id', 'name', 'email', 'phone_number', 'password'];
}

