<?php

namespace App\Models;
use CodeIgniter\Model;

class CustomerTypeModel extends Model {
    protected $table = 'customer_type';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'code', 'name', 'message'];
}

