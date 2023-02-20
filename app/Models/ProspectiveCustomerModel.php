<?php

namespace App\Models;
use CodeIgniter\Model;

class ProspectiveCustomerModel extends Model {
    protected $table = 'prospective_customer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'customer_type_id', 'name', 'phone_number', 'address'];
}

