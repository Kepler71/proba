<?php

class db {
public function __construct(){
   mysql_connect('localhost', 'root', '');
   mysql_select_db('test');
}
   public function queryAll($sql, $class = 'stdClass')
    {
        $result = mysql_query($sql);
        $data = [];
        while (false !== ($row = mysql_fetch_object($result, $class))) {
            $data[] = $row;
        }
        return $data;
    }

 public function queryOne($sql, $class = 'stdClass'){
    return $this->queryAll($sql, $class)[0];
}
} 