<?php 
class view{
    public $db;
    function __construct(){
        require_once("database/database.php");
        $this->db= new Database();
        $as=$this->db;
    }
    function menuview(){
        $menu=$this->db;
        $menujson=json_decode($menu->menu());
        $s=count($menujson);
        $menuli="";
        for($i=0;$i<$s;$i++){
            $menuli.="<li><a href=".$menujson[$i]->url.">".$menujson[$i]->baslik."</a></li>";
        }
        $menunav="<nav>".$menuli."</nav>";
        print($menunav);
    }

}

