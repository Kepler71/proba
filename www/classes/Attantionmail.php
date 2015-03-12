<?php
/**
 * Created by PhpStorm.
 * User: ПушкаревЯ
 * Date: 12.03.15
 * Time: 16:07
 */


namespace Application\Classes;

class Sendmail  extends \PHPMailer{

   public function sendmail(){
        $this->From = 'mail@mail.com';
        $this-> FromName = 'sitename';
       $this->addAddress('ya@ya.ru');
    }
} 