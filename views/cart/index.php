<?php include ROOT . './views/layouts/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <?php include ROOT . './views/layouts/sidebar.php';?>
            <div class="col-sm-9 padding-right">
                <h2 class="title text-center">Корзина</h2>

                <?php if($productsInCart):?>
                    <p>Вы выбрали такие товары:</p>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>ID:</th>
                            <th>Код товара</th>
                            <th>Название</th>
                            <th>Стоимость, грн</th>
                            <th>Количество, шт</th>
                        </tr>
                        <?php foreach($products as $product):?>
                            <tr>
                                <td><?=$product['id']?></td>
                                <td><?=$product['code']?></td>
                                <td>
                                    <a href="/product/<?=$product['id']?>">
                                        <?=$product['name']?>
                                    </a>
                                </td>
                                <td><?=$product['price']?></td>
                                <td><?=$productsInCart[$product['id']]?></td>
                            </tr>
                        <?php endforeach;?>
                        <tr>
                            <td colspan="4">Общая стоимость:</td>
                            <td><?=$totalPrice;?></td>
                        </tr>
                    </table>
                <?php else:?>
                    <p>Корзина пуста</p>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>