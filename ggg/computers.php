
<?php require_once  './products.php'?>
<?php    require_once  './functions.php'?>
<?php    require_once  'templeate_shop/detail.php'?>

<div id="box"></div>
<?php include_once 'inc_shop/header.php'?>
<div class="wrapper">
   <?php include_once 'inc_shop/sidebar.php'?>
<main class="comp-nond">

    <div class="comp">
<?php
    switch ($page){
        case 'home2':
            require_once "templeate_shop/home2.php";
            break;
        case 'detail':
            require_once "templeate_shop/detail.php";
            break;
        default:
            require_once "templeate_shop/404.php";
            break;
    }
?>
<?php //include_once 'templeate_shop/detile_shop.php'?>
    </div>
</main>
</div>

<?php include_once 'inc_shop/footer.php'?>

