<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Aden Ahmad Rifai',
                'username' => 'Aden',
                'password' => Hash::make('Aden'),
                'role' => 'Manager',
            ],
            [
                'name' => 'kasir',
                'username' => 'kasir',
                'password' => Hash::make('kasir'),
                'role' => 'Kasir',
            ]
        ];
        User::insert($data);
    }
}
