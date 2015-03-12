<?php
/**
 * Created by PhpStorm.
 * User: ПушкаревЯ
 * Date: 11.03.15
 * Time: 10:50
 */
namespace Application\Classes;
class E404Ecxeption
extends Exception
{
   public function getAllInfoError()
   {
    $e = new E404Ecxeption();
    $a['codeError'] = $e->getCode();
    $a['massageError'] = $e->getMessage();
    $a['lineError'] = $e->getLine();
    $a['fileError'] = $e->getFile();
    $e->recordLogError($a);
       return $a;

   }

   public function recordLogError($a)
     {
       $current = file_get_contents(__DIR__ . '/../erorr.log');
       foreach ($a as $value)
       {
        $current .= "$value\n";
       }
     }

} 