<?php

namespace App\Models;
use CodeIgniter\Model;

class TaskModel extends Model {
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'description', 'start_date', 'end_date'];
}

