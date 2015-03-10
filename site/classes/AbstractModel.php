<?php


abstract class AbstractModel
{
    static protected $ntable;
    static protected $likeUserTable;

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;

    }

    public function __get($k)
    {
        return $this->data[$k];

    }

    public static function getNtable()
    {
        return static::$ntable;
    }

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$ntable;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOne($id)
    {
        $class = get_called_class();

        $sql = 'SELECT * FROM ' . static::$ntable . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id]) [0];
    }

    public static function findByColum ($colum, $value){
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$ntable . ' WHERE ' . colum . ' = :value';
        $db = new DB();
        $db->setClassName($class);
        $db->query($sql, [':value' => $value ]);
    }


    public function add()
    {
        $cols = array_keys($this->data);
        $ins = [];
        $data = [];

        foreach ($cols as $col){
            $ins[] = ':' . $col;
            $data[':' . $col] = $this->data[$col];
        }
       $sql = 'INSERT INTO ' . static::$ntable . '
        (' . implode(', ',$cols) . ')
        VALUE
        (' . implode(', ',$ins) . ')';

        $db = new DB();
        $db->execut($sql , $data);

    }
}