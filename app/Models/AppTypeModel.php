<?php

namespace App\Models;
use CodeIgniter\Model;

class AppTypeModel extends Model {
    protected $table = 'app_type';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'code', 'name', 'image'];
}

