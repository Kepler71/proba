<?php
namespace Application\Classes;
class DB {

    private $dbh;
    private $className = 'stdClass';
    public function __construct()

    {

        $this->dbh = new PDO('mysql:dbname=test;host=localhost','root','');
    }
    public function query ($sql,$paramtrs=[] )
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($paramtrs);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);

    }

    public function setClassName($className)
    {
        $this->className = $className;
    }
    public function execut ($sql,$paramtrs=[] )
    {
        $sth = $this->dbh->prepare($sql);
        return  $sth->execute($paramtrs);
    }


} 