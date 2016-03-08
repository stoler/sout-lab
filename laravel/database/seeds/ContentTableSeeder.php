<?php
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder {

    public function run () {
        DB::table('content') -> delete();

        $content = array(
            array(
                'id' => 1,
                'header' => 'Тест 1',
                'city' => 'Город',
                'text' => 'Тут какой-то длинный текст',
                'utm' => 'Тут утм метка',
            ),
            array(
                'id' => 2,
                'header' => 'Тест 2',
                'city' => 'Город 2',
                'text' => 'Тут какой-то длинный текст 2',
                'utm' => 'Тут утм метка 2',
            )
        );

        DB::table('content') -> insert($content);
    }

}