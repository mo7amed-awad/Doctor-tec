<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class PharmacistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmacists')->delete();
        DB::table('pharmacists')->insert([
            'name' => 'pharmacist',
            'email' => 'pharmacist@gmail.com',
            'mobileNumber'=>'123123123',
            'province'=>'حي الجامعة',
            'city'=>'المنصورة',
            'password' => Hash::make('12345678'),
        ]);
    }
}
