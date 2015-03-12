<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2015
 * Time: 15:31
 */



namespace Application\Models;
use Application\Classes\AbstractModel;
/**
 * Class NewsModel
 *  @property $id;
 * @property $title;
 * @property $text;
 */

class News
extends AbstractModel
{
protected static $ntable = 'news';

}