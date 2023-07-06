<?php 
class view{
    public $db;
    function __construct(){
        require_once("database/database.php");
        $this->db= new Database();
    }
    function menuview(){
        $menu=$this->db;
        $menujson=json_decode($menu->menu());
        $s=count($menujson);
        $menuli="";
        for($i=0;$i<$s;$i++){
            $menuli.="<li><a href='/SEF_URL/sayfa/".$menujson[$i]->url."'>".$menujson[$i]->baslik."</a></li>";
        }
        $menunav="<nav>".$menuli."</nav>";
        print($menunav);
    }
    function icerikview($get_url){
        $icerik=$this->db;
        $icerikjson=json_decode($icerik->page($get_url));
        $icerik="";
        $icerik.="<div align='center'><h1>".$icerikjson[0]->baslik."</h1></div><br><hr>";
        $icerik.="<div>".$icerikjson[0]->icerik."</div><br>";
        print $icerik;
    }

}
?>
