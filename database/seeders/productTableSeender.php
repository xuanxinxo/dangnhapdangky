<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class productTableSeender extends Seeder  //cho phép chèn dữ liệu giả mạo
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        // \App\Models\User::factory(10)->create();  //Sử dụng mô hình Product để tạo 100 bản ghi
       Product::factory()->count(100)->create();

    }
}
