<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2015
 * Time: 15:31
 */

/**
 * Class NewsModel
 *  @property $id;
 * @property $title;
 * @property $text;
 */

class NewsModel
extends AbstractModel
{
protected static $ntable = 'news';
protected static $likeUserTable = 'like';
}