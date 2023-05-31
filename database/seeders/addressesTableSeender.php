<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addressesTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
{
    DB::table('address')->insert([
        [

            'district' => 'Son Tra',
            'streey' =>'101B',
            'wards' =>'Phuoc My',
        ],
        [

            'district' => 'Hai Chau',
            'streey' =>'101B',
            'wards' =>'An Dong',
        ]
    ]);
}

}
