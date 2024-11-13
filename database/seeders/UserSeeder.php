<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Dindy Pierre',
            'username'=>'Dindy',
            'email'=>'ing.pierredindy@gmail.com',
            'role'=>'admin',
            'status'=>'active',
            'password'=>bcrypt('12345678'),
        ],);
        User::create([
            'name'=>'Vendor Vendor',
            'username'=>'Vendor',
            'email'=>'vendor@gmail.com',
            'role'=>'vendor',
            'status'=>'active',
            'password'=>bcrypt('12345678'),
        ],);
        User::create([
            'name'=>'Client Client',
            'username'=>'Client',
            'email'=>'client@gmail.com',
            'role'=>'user',
            'status'=>'active',
            'password'=>bcrypt('12345678'),
        ],);
    }
}
