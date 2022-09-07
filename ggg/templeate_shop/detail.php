<!-- <?php require_once './products.php'?> -->
<!-- <?php require_once './functions.php'?> -->



 <?php
if (isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page='home';
}
?>

<!-- if (isset($_GET['id'])){
    $id=$_GET['id'];
    $detail=pageDetail($products,$id);
} -->