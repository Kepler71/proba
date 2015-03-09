<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2015
 * Time: 13:33
 */

class View {

    protected $data = [];

    public function assign($name, $value){

    $this->data[$name] = $value;
}


    public function display($template){

        foreach ($this->data as $key => $val){
            $$key = $val;
        }
        include_once __DIR__ . '/../views/'. $template;
    }
}