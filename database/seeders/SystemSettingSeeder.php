<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SystemSetting;

class SystemSettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key' => 'maintenance_mode',
                'value' => 'false',
                'description' => 'Put the site in maintenance mode'
            ],
            [
                'key' => 'allow_registration',
                'value' => 'true',
                'description' => 'Allow new users to register'
            ],
            [
                'key' => 'auto_ban_threshold',
                'value' => '5',
                'description' => 'Number of reports before auto-ban'
            ]
        ];

        foreach ($settings as $setting) {
            SystemSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
