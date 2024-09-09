<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
		'header_ad', 'footer_ad', 'footer_custom_ad', 'google_code', 'site_name', 'site_title', 'site_description', 'site_keywords', 'og_image', 'about_us', 'contant_us', 'policy', 'tc', 'footer_custom_link', 'verification', 'footer',
    ];
}
