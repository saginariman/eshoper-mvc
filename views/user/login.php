<?php include ROOT . '/views/layouts/header.php';?>


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php if(isset($errors) && is_array($errors)):?>
                    <ul>
                        <?php foreach($errors as $error):?>
                            <li>- <?=$error?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
                <div class="signup-form"><!--login form-->
                    <h2>Вход на сайте</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Email Address" value="<?=$email?>"/>
                        <input type="password" name="password" placeholder="Your password" value="<?=$password?>"/>
                        <button type="submit" name="submit" class="btn btn-default">Регистрация</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
<?php include ROOT . '/views/layouts/footer.php';?>