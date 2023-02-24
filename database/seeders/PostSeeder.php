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
        \App\Models\Post::factory(50)->create();

        /*
        $data = [
            [
                'title' => 'Titulo 1',
                'content' => 'Texto de mi primer post',
                'color' => 'rojo',
                'phone' => '35556698',
                'author' => 'andres',
                'author_age' => 31,
            ],
            [
                'title' => 'Titulo 2',
                'content' => 'Texto de mi segundo post',
                'color' => 'verde',
                'phone' => '6914847',
                'author' => 'andres',
                'author_age' => 21,
            ],
            [
                'title' => 'Titulo 3',
                'content' => 'Texto de mi tercer post',
                'color' => 'amarillo',
                'phone' => '666999555',
                'author' => 'juan',
                'author_age' => 22,
            ],
        ];
        DB::table('posts')->insert($data);
        */
    }
}