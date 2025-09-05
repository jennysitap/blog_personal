<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "title"=>"Como cuidar las suculentas",
            "description"=>"Aprende como cuidarlas y regarlas",
            "img"=>"default.jpg",
            "content"=>"Contenido del post",
            "likes"=>0,
            "slug"=>"Como-cuidar-suculentas",
            "user_id"=>1,
            "category_id"=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('posts')->insert([
            "title"=>"Como cuidar la lengua de suegra",
            "description"=>"Aprende como cuidarlas y regarlas",
            "img"=>"default.jpg",
            "content"=>"Contenido del post",
            "likes"=>0,
            "slug"=>"Como-cuidar-lengua-suegra",
            "user_id"=>1,
            "category_id"=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
