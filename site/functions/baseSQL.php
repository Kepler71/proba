<?php

class baseSQL {

    public function __construct($host, $name, $base, $pass='')
    {
        $this->host = $host;
        $this->name = $name;
        $this->base = $base;
    }

protected function zapros($query){
    $result = mysql_query($query);
    $data = [];
    while (false !== ($row = mysql_fetch_assoc($result))) {
        $data[] = $row;
    }
    return $result;
}

} 