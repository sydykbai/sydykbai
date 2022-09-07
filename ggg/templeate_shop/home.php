
<?php require_once './functions.php'?>
<?php require_once './products.php'?>
<?php 
foreach ($products as $product):?>
    <div class="card">
        <a href=""><p class="card-text"><?php echo $product['title']?></p></a>
        <img src="./img/<?php echo $product['img']?>" alt="<?=$product['text']?>">
        <div class="cost"><?php echo $product['price']?></div>
        <a class="button-cart add-to-cart" href="?cart=add&id=<?php echo $product['id']?>" data-id="<?php echo $product['id']?>">
        
        </a>
    </div>
<?php endforeach;

?>

  

<!--<div class="context">-->
<!--    <a href="html.php">dd</a>-->
<!--    <div class="context-card">-->
<!--        <div class="context-title">-->
<!--            --><?//=$detail['title']?>
<!--        </div>-->
<!--        <div class="context-img">-->
<!--            <img src="--><?php //echo $detail['img']?><!--" alt="">-->
<!--        </div>-->
<!--        <div class="context-text">-->
<!--            --><?//=$detail['text']?>
<!--        </div>-->
<!--        <div class="context-price">-->
<!--            --><?//=$detail['price']?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->