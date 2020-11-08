<?php

private $hostname ="localhost";
private $username = "root";
private $password = "";

private $dbname;
private $dblink;
private $results;
private $affected;

function __construct ($dbname){
    $this->dbname= $dbname;
    $this->connect();
}


function Connect() {
    $this->dblink= new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
}







?>
