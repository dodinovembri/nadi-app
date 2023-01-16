<?php

namespace App\Models;
use CodeIgniter\Model;

class FeatureModel extends Model {
    protected $table = 'feature';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'description'];
}

