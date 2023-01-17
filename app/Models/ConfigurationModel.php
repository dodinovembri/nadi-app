<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigurationModel extends Model
{
    protected $table = 'configuration';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'faveicon', 'author', 'description', 'title', 'logo_white', 'logo_color','hero_background_image', 'hero_text1', 'hero_text2', 'hero_text_button1', 'demo_url', 'hero_text_button2', 'hero_banner_image', 'hero_dot_image1', 'hero_dot_image2', 'service_text1', 'service_text2', 'service_background_image', 'pricing_text1', 'pricing_text2', 'pricing_text3', 'pricing_text_button_daily', 'pricing_text_button_monthly', 'pricing_text_button_yearly', 'pricing_text1_daily', 'pricing_text2_daily', 'pricing_text3_daily', 'pricing_text4_daily', 'pricing_text_button_trial', 'pricing_text1_monthly', 'pricing_text2_monthly', 'pricing_text3_monthly', 'pricing_text4_monthly', 'pricing_text1_yearly', 'pricing_text2_yearly', 'pricing_text3_yearly', 'pricing_text4_yearly', 'subscribe_text1', 'subscribe_text2', 'subscribe_text3', 'subscribe_text_button1', 'subscribe_text_watch_demo', 'brand_text1', 'brand_text2', 'copyright'];
}
