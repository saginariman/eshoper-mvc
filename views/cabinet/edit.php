<?php include ROOT . '/views/layouts/header.php';?>


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php if($result):?>
                    <p>Данные отредактированы!</p>
                <?php else:?>
                    <?php if(isset($errors) && is_array($errors)):?>
                        <ul>
                            <?php foreach($errors as $error):?>
                                <li>- <?=$error?></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                    <div class="signup-form"><!--login form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" value="<?=$name?>"/>
                            <input type="password" name="password" placeholder="Your password" value="<?=$password?>"/>
                            
                            <button type="submit" name="submit" class="btn btn-default">Сохранить</button>
                        </form>
                    </div><!--/login form-->
                <?php endif;?>
            </div>
        </div>
    </div>
</section><!--/form-->