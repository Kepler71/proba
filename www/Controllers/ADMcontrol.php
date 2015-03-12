<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.03.2015
 * Time: 22:20
 */
namespace Application\Controllers;
class ADMcontrol

{
    function kill($dir=""){
        if (file_exists($dir))
            foreach (glob($dir.'/*') as $file)
            unlink($file);
    }

}