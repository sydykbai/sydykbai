
<?php require_once  './products.php'?>

<?php    require_once  './functions.php'?>
<?php    require_once  'templeate_shop/detail.php'?>
<div id="box"></div>
<?php include_once 'inc_shop/header.php'?>
<div class="wrapper">
   <?php include_once 'inc_shop/sidebar.php'?>
<main class="comp-nond">
<!-- <h1 style="margin:20px 0 0 20px;">Главная/Корзина</h1> -->
    <div class="comp">
<!-- <p style="background: none; font-size:20px;">Корзина пуста!</p> -->
<?php
    switch ($page){
        case 'home':
            require_once "templeate_shop/home.php";
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
   <!--  <div class="korzin" style="width:500px; height: 300px; background: #FFE4E1;">
        <h1 style="margin:10px;">Смартфон Samsung Galaxy A23, 128 GB, Black (SM-A235F)</h1>
        <div style="display: flex;">
            <label><p style="background: none;">Количество</p></label>
        <input style="margin:10px;"   name="psw" required>
        </div>
        <div style="display: flex;">
            <button style="margin:20px 0 0 100px; background: #222222; padding: 5px; border-radius: 10px; "><a>Заказать</a></button>
        <button style="margin:20px 0 0 10px; background: #222222; padding: 5px; border-radius: 10px; "><a>Добавить</a></button>
        <button style="margin:20px 0 0 10px; background: #222222; padding: 5px; border-radius: 10px; "><a>Удалить</a></button>
        
        </div>
        
    </div> -->
    </div>
</main>
</div>

<?php include_once 'inc_shop/footer.php'?>

