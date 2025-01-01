<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'name'=>'  Fridge',
                'price'=>'21000',
                'category'=>'fridge',
                'description'=>'red whidploor Fridge ',
                'gallery'=>'https://5.imimg.com/data5/SELLER/Default/2021/1/LE/SM/PY/26041408/whirlpool-245-l-2-star-frost-free-double-door-refrigerator-500x500.jpg'
                
            ],
            [
                'name'=>' Dresh set',
                'price'=>'700',
                'category'=>'kurta',
                'description'=>'red whidploor Fridge ',
                'gallery'=>'https://assets0.mirraw.com/images/11898397/3170565_long_webp.webp?1695802136'
                
            ],
          
        ]);
    }
}
