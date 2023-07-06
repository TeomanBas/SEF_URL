<?php
class database{
    private $Host,$Port,$User,$Pass,$Db,$connection;
    function __construct(){
        require_once('config/config.php');
        $this->Host=HOST;
        $this->Port=PORT;
        $this->User=USER;
        $this->Pass=PASSWORD;
        $this->Db=DATABASE;
        $this->connection=mysqli_connect($this->Host,$this->User,$this->Pass,$this->Db,$this->Port);
        mysqli_select_db($this->connection,$this->Db);
        mysqli_query($this->connection,"SET NAMES utf8");
        mysqli_query($this->connection,"SET CHARACTER SET utf8");
        mysqli_query($this->connection,"SET COLLATION_CONNECTION='utf8_turkish_ci'");
        mysqli_query($this->connection,"SET character_set_results=utf8");
    }
    function test(){
        print("test yazısı");
    }
    function __destruct(){
        mysqli_close($this->connection);
    }
}


?>