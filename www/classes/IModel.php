<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2015
 * Time: 14:18
 */
namespace Application\Classes;
interface IModel {
    public static function getAll();
    public static function getOne($id);
    public static function findByColumn($column, $value);
    public function add();
}