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
    }
    function test(){
        print("test yazısı");
    }
    function __destruct(){
        mysqli_close($this->connection);
    }

    
}


?>