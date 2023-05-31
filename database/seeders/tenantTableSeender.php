<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tenantTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenant')->insert([
            [
    
                'name' => 'Ho Van Di',
                'email' =>'hovandi@gmail.com',
                'phone' =>012356,
                'address' =>'101B Lê Hữu Trắc',
                'password' =>'hovandi12345',
            ],
            [   
                'name' => 'Ho Van Duong',
                'email' =>'hovanduong@gmail.com',
                'phone' =>012356457,
                'address' =>'101A Lê Hữu Trắc',
                'password' =>'hovanduong12345',
            ]
        ]);
    }
}
