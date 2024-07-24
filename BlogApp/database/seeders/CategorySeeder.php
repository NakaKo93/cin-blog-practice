<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'category_name' => 'インテリア'
            ],
            [
                'category_id' => 2,
                'category_name' => '料理'
            ],
            [
                'category_id' => 3,
                'category_name' => '映画'
            ],
        ]);
    }
}
