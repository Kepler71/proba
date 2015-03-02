<?php
require_once __DIR__.'/../classes/db.php';
class News {

    public $id;
    public $title;
    public $text;

     public static function  getAll(){
        $db = new db;
        return $db->queryAll('Select * from news','News');

    }

    public static function getOne($id){
        $db = new db();
        return $db->queryOne('SELECT * FROM news WHERE id='. $id,'News');

    }
}