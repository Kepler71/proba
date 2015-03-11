<?php
/**
 * Created by PhpStorm.
 * User: ПушкаревЯ
 * Date: 11.03.15
 * Time: 11:13
 */

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
         }
     }
 }
}