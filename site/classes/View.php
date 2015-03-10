<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2015
 * Time: 13:33
 */

class View
{

    protected $data = [];

    public function __set($k , $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {

    return $this->data[$k];

    }

    public function render ($template){

        foreach ($this->data as $key => $val)
        {
            $$key = $val;
        }
        ob_start();
        include_once __DIR__ . '/../views/'. $template;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    public function display($template){
        echo $this->render($template);
    }


}