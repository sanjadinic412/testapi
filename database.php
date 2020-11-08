<?php

private $hostname ="localhost";
private $username = "root";
private $password = "";

private $dbname;
private $dblink;
private $results;
private $affected;
private $records;

function __construct ($dbname){
    $this->dbname= $dbname;
    $this->connect();
}


function Connect() {
    $this->dblink= new mysqli($this->hostname,$this->username,$this->password,$this->dbname);

    if( $this->dblink ->connect_errno){
        printf("Konekcija neuspesna %s\n",$this->dblink ->connect_errno );
        exit();
    
    }
    $this->dblink->set_charset("utf8");
}

function ExecuteQuery($query){

if($this->result= $this->dblink->query($query)){
    if(isset($this->result->num_rows)){
        $this->records= $this->result->num_rows;
    }
    if(isset($this->result->affected_rows)){
        $this->affected= $this->result->affected_rows;
    }
}


}







?>
