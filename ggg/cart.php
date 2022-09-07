<?php
 session_start();

 require_once './products.php'
require_once  '/templeate_shop/home.php';

if (isset($_GET['cart'])){
    switch ($_GET['cart']) {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id']: 0;
            echo json_encode(['code' => 'ok', 'answer' => $id]);
            break;
    }
}