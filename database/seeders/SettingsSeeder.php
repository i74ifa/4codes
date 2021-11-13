<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // format
        DB::table('dashboard_settings')->insert([
            [
                'type' => 'project_logo',
                'data' => '{"url":"public\/logo.png"}',
            ],
            [
                'type' => 'popular_product',
                'data' => '[]',
            ]
        ]);
    }
}
