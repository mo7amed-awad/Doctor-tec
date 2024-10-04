<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    public function run()
    {
       // DB::table('doctors')->truncate();

        $doctors = [
            [
                'name' => 'doctor1',
                'email' => 'doctor1@gmail.com',
                'mobileNumber' => '123123123',
               
                'province' => 'حي الجامعة',
                'city' => 'المنصورة',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'doctor2',
                'email' => 'doctor2@gmail.com',
                'mobileNumber' => '456456456',
             
                'province' => 'العجوزة',
                'city' => 'اسكندرية',
                'password' => Hash::make('123123123'),
            ],
            [
                'name' => 'doctor3',
                'email' => 'doctor3@gmail.com',
                'mobileNumber' => '123456456',
        
                'province' => 'القاهرة',
                'city' => 'التجمع لخامس',
                'password' => Hash::make('12341234'),
            ],
        ];

        DB::table('doctors')->insert($doctors);
    }
}
