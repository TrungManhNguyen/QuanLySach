<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Extension\Table\Table;
use DB;
class danhmuc extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('danhmuc')->insert([
            'Cat_name' => 'Minh Quan',
        ]);
    }
}
