<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Admin Bunglon',
            'email' => 'bunglonhamster@gmail.com',
            'password' => bcrypt('gataulupa')
        ];

        Admin::create($admin);
    }
}
