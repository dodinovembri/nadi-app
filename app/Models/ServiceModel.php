<?php

namespace App\Models;
use CodeIgniter\Model;

class ServiceModel extends Model {
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'image', 'title', 'description'];
}

