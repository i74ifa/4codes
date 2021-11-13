<?php

namespace App\Settings;

use App\Models\DashboardSetting;
use Illuminate\Support\Str;
class Settings
{

    public static function toObject()
    {
        $settings = DashboardSetting::all();
        $project = [];
        foreach ($settings as $setting) {

            $project[$setting->type] = json_decode($setting->data);

        }
        return $project;
    }
}
