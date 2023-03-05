<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigMenuModel extends Model
{
    protected $table = 'config_menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'home', 'service', 'pricing', 'our_apps', 'about_us', 'contact_us', 'signin', 'get_started', 'tell_bussiness', 'watch_video', 'plan_pricing', 'day_trial', 'daily', 'monthly', 'yearly', 'day', 'month', 'year', 'lets_try', 'chat_us', 'email_us', 'call_us', 'our_app_category', 'choose_app_category', 'choose_app'];
}
