<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
     * Run the database seeds.
     *
     * @return void
     */
        $bookstore = [
            [
                'title' => 'Foto1', 
                'slug' => ' INI FOTO-01!!!', 
                'image' => 'image-01.jpg', 
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloremque saepe, ea soluta perspiciatis vitae!', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto2', 
                'slug' => ' INI FOTO-02!!!', 
                'image' => 'image-02.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto3', 
                'slug' => ' INI FOTO-03!!!', 
                'image' => 'image-03.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto4', 
                'slug' => ' INI FOTO-04!!!', 
                'image' => 'image-04.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto5', 
                'slug' => ' INI FOTO-05!!!', 
                'image' => 'image-05.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto6', 
                'slug' => ' INI FOTO-06!!!', 
                'image' => 'image-06.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto7', 
                'slug' => ' INI FOTO-07!!!', 
                'image' => 'image-07.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'Foto8', 
                'slug' => ' INI FOTO-08!!!', 
                'image' => 'image-08.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
        ];

        DB::table('posts')->insert($bookstore);
    }
}
