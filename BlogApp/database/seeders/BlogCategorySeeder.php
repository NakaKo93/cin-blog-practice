<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            [
                'id' => 1,
                'blog_id' => 1,
                'category_id' => 1,
            ],
            [
                'id' => 2,
                'blog_id' => 2,
                'category_id' => 2,
            ],
            [
                'id' => 3,
                'blog_id' => 3,
                'category_id' => 1,
            ],
        ]);
    }
}
