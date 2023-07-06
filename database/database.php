<?php
class database{
    private $Host,$Port,$User,$Pass,$Db,$Table,$connection;
    function __construct(){
        require_once('config/config.php');
        $this->Host=HOST;
        $this->Port=PORT;
        $this->User=USER;
        $this->Pass=PASSWORD;
        $this->Db=DATABASE;
        $this->Table=TABLE;
        $this->connection=mysqli_connect($this->Host,$this->User,$this->Pass,$this->Db,$this->Port);
        mysqli_select_db($this->connection,$this->Db);
        mysqli_query($this->connection,"SET NAMES utf8");
        mysqli_query($this->connection,"SET CHARACTER SET utf8");
        mysqli_query($this->connection,"SET COLLATION_CONNECTION='utf8_turkish_ci'");
        mysqli_query($this->connection,"SET character_set_results=utf8");
    }
    function menu(){
        $menu=[];
        $counter=0;
        $result=mysqli_query($this->connection,'SELECT sayfa_baslik,sef_url FROM '.$this->Table);
        if(mysqli_num_rows($result)!=0){
            while($row=mysqli_fetch_assoc($result)){
                $menu[$counter]['baslik']=$row['sayfa_baslik'];
                $menu[$counter]['url']=$row['sef_url'];
                $counter++;
            }
        }else{
            return "hata";
        }
        return $menu;
    }
    function test(){
        print("test yazısı");
        print("<br>");
    }
    function __destruct(){
        mysqli_close($this->connection);
    }
}


?>