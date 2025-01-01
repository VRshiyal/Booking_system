<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\support\Facades\DB;

use Illuminate\support\Facades\Hash;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                
            'name'=>'admin',
            'email'=>'admin@email.com',
            'password'=>Hash::make('admin12@')
            ],
            [
                'name'=>'vishal',
                'email'=>'vishalshiyal@email.com',
                'password'=>Hash::make('vishal12@')
            ]
        ]);
        
    }
}
