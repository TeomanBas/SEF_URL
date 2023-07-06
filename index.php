<?php 
if(empty($_GET['sayfa'])){
    $_GET['sayfa']="ana-sayfa";
}
require_once("./view/view.php");
$get_view= new view();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEF_URL</title>
</head>
<body>
<?php 
$get_view->menuview();
$get_view->icerikview($_GET['sayfa']);
?>
</body>
</html>

