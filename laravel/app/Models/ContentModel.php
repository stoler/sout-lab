<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{

    protected static $contentTable = 'content';

    /****************************************************************
     * Получение данных из таблицы контента
     * $arField - список необходимых полей (пустой массив - все поля)
     * ************************************************************/
    public static function getContent ($arField = array()) {

        if ($arField) {
            $content = DB::table(self::$contentTable)
                ->select($arField)
                ->get();
        } else {
            $content = DB::table(self::$contentTable)
                ->get();
        }

        // преобразуем строки выборки в массив
        foreach ($content as $kContent => $item) {
            $content[$kContent] = (array)$item;
        }

        return $content;
    }

    /****************************************************************
     * Загрузка данных в таблицу контента
     * $arData массив данных для загрузки
     * ************************************************************/
    public static function setContent ($arData = array()) {

        if (!count($arData)) {
            return false;
        }

        echo '<pre>';
        print_r($arData);
        echo '</pre>';

        DB::table(self::$contentTable)
            ->truncate();

        DB::table(self::$contentTable)
            ->insert($arData);

    }
}