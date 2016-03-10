<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MainModel extends Model {

    protected $tableName;

    function __construct($tableName) {
        $this->tableName = $tableName;
    }

    /****************************************************************
     * Получение списка
     * ************************************************************/
    public function getList ($arField = array()) {
        if (count(array_filter($arField))) {
            return DB::table($this->tableName)
                ->where($arField)
                ->get();
        }
        return DB::table($this->tableName)->get();
    }

    /****************************************************************
     * Получение единицы
     * ************************************************************/
    public function getItem ($id = false) {
        if ($id) {
            return DB::table($this->tableName)
                ->where('id','=', $id)
                ->get();
        }
        return array();
    }

    /****************************************************************
     * Обновление единицы
     * ************************************************************/
    public function updateItem ($id, $arField = array()) {
        return DB::table($this->tableName)
                ->where('id', $id)
                ->update($arField);
    }

    /****************************************************************
     * Добавление единицы
     * ************************************************************/
    public function addItem ($arField = array()) {
        return DB::table($this->tableName) -> insert($arField);
    }

    /****************************************************************
     * Удаление единицы
     * ************************************************************/
    public function deleteItem ($id) {
        DB::table($this->tableName)->where('id', '=', $id)->delete();
    }

}