<?php require_once(ROOT . '/views/layouts/header.php');?>
<?php //require_once(ROOT . '/views/layouts/slider.php');?>

<section>
    <div class="container">
        <div class="row">
            
            <?php require_once(ROOT . '/views/layouts/sidebar.php');?>
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <?php foreach($categoryProducts as $product):?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?=$product['image']?>" alt="" />
                                    <h2>ID: <?=$product['id']?> <br>$<?=$product['price']?></h2>
                                    <p>
                                        <a href="/product/<?=$product['id']?>">
                                            <?=$product['name']?>
                                        </a>
                                    </p>
                                    <a href="/cart/add/<?=$product['id']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <?php if($product['is_new']):?>
                        <img src="/template/images/home/new.png" class="new" alt=""/>
                        <?php endif;?>
                    </div>
                    <?php endforeach;?>
                </div><!--features_items-->
                <?=$pagination->get()?>
            </div>
        </div>
    </div>
</section>
<?php require_once(ROOT . '/views/layouts/footer.php');?>