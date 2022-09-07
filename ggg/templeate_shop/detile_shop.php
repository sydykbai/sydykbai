<!-- <?php require_once './products.php'?>
<?php require_once './functions.php'?> -->


<div class="context">
    <div class="context-card">
        <div class="context-title">
            <?=$detail['title']?>
        </div>
        <div class="context-img">
            <img src="<?php echo $detail['img']?>" alt="">
        </div>
        <div class="context-text">
            <?=$detail['text']?>
        </div>
        <div class="context-price">
            <?=$detail['price']?>
        </div>
    </div>
</div>
