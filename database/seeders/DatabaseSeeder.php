<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('password'), // password
            'role' => 1,
            'email' => 'admin@admin'
        ]);

        $this->call([
            SettingsSeeder::class
        ]);
        \App\Models\Category::factory(4)->create();
    }
}
