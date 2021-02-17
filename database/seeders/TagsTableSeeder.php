<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Песни',
            'Фильмы',
            'Сериалы',
            'Книги',
            'Великие люди',
            'Аниме',
            'Компьютерные игры',
            'Персонажи',
            'Жизнь',
            'Мемы',
        ];

        foreach($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
