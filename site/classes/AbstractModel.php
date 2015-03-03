<?php

abstract class AbstractModel
{
    protected static $table;

    public static function  getAll(){
        $db = new db;
        return $db->queryAll('Select * from ' . static::$table,'News');

    }
    public static function getOne($id){
        $db = new db();
        $sql = 'SELECT * FROM' . static::$table . ' WHERE id='. $id;
        return $db->queryOne($sql, static::$class);

    }
}