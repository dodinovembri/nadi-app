<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table = 'config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'favicon', 'author', 'keyword', 'description', 'title', 'logo_white', 'logo_black', 'auth_background_image', 'hero_background_image', 'hero_title', 'hero_subtitle', 'demo_url', 'hero_banner_image', 'service_title', 'service_subtitle', 'pricing_title', 'pricing_subtitle', 'pricing_daily_title', 'pricing_daily_subtitle', 'pricing_daily_price', 'pricing_monthly_title', 'pricing_monthly_subtitle', 'pricing_monthly_price', 'pricing_yearly_title', 'pricing_yearly_subtitle', 'pricing_yearly_price', 'subscribe_title', 'subscribe_subtitle', 'brand_title', 'brand_subtitle', 'copyright', 'contact_us_subtitle', 'chat_us_description', 'email_us_description', 'call_us_description', 'whatsapp_url', 'email_address', 'phone_number', 'user_image_default'];
}
