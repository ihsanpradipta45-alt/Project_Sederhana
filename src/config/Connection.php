<?php
class Connection{
    private $hostName = "";
    private $user = "";
    private $password = "";
    private $databaseName = "";
    private $connection;

public function __construct($hostName, $user, $password, $databaseName){
    $this->hostName = $hostName;
    $this->user = $user;
    $this->password = $password;
    $this->databaseName = $databaseName;

}


public function connect( ){
    $this->connection = new mysqli(
        $this->hostName,
        $this->user,
        $this->password, 
        $this->databaseName
    );
    if($this->connection->connect_error){
        die("Connection failed: " . $this->connection->connect_error);
    }
    return $this->connection;
}
}












?>