<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Asad',
            'last_name' => 'Mahmood',
            'email' => 'admin@gmail.com',
            'refer_by' => 'Developer',
            'user_name' => 'Super Admin',
            'phone_number' => '+92123456789',
            'street_address' => 'USA',
            'city' => 'Multan',
            'state' => 'Punjab',
            'postal_code' => '66000',
            'country' => 'Pakistan',
            'plane' => 'Admin',
            'utype' => 'admin',
            'password' => bcrypt('111222333'),
        ]);
        User::create([
            'first_name' => 'Asad',
            'last_name' => 'Mahmood',
            'email' => 'asadbala41@gmail.com',
            'refer_by' => 'Admin',
            'user_name' => 'AsadJutt',
            'phone_number' => '+923087742186',
            'street_address' => 'Larr',
            'city' => 'Multan',
            'state' => 'Punjab',
            'postal_code' => '66000',
            'country' => 'Pakistan',
            'plane' => 'Free Member',
            'utype' => 'user',
            'password' => bcrypt('111222333'),
        ]);
    }
}
