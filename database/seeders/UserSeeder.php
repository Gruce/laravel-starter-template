<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->add([
            'name' => 'Company',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);
    }
}
