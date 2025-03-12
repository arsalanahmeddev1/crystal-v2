<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name' => 'Crystal LMS',
            // 'logo' => 'company_default/logo.png',
            // 'auth_logo' => 'company_default/auth_logo.png',
            // 'favicon' => 'company_default/favicon.svg',
            'footer_text' => 'Copyright 2025 © Crystal LMS',
        ]);
    }
}
