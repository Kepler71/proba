<?php
/**
 * Created by PhpStorm.
 * User: ПушкаревЯ
 * Date: 11.03.15
 * Time: 11:13
 */
namespace Application\Controllers;
use Application\Models\News;
use Application\Classes\View;
use Application\Classes\E404Exception;
use Application\Classes\Sendmail;
class Action
{
public function actionAddNews()
 {
     if (isset($_POST))
     {
         if (!empty($_POST['title']) && !empty($_POST['text']))
         {
            $news = new NewsModel();
            $news->title = $_POST['title'];
            $news->text = $_POST['text'];
            $news->save();
            $mail = New Sendmail();
            $mail->Subject = 'Новая новость';
            $mail->send();

         }
     }
 }
}