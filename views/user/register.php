<?php include ROOT . '/views/layouts/header.php';?>


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php if($result):?>
                    <p>Вы зарегистрированы!</p>
                <?php else:?>
                    <?php if(isset($errors) && is_array($errors)):?>
                        <ul>
                            <?php foreach($errors as $error):?>
                                <li>- <?=$error?></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                    <div class="signup-form"><!--login form-->
                        <h2>Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" value="<?=$name?>"/>
                            <input type="email" name="email" placeholder="Email Address" value="<?=$email?>"/>
                            <input type="password" name="password" placeholder="Your password" value="<?=$password?>"/>
                            
                            <button type="submit" name="submit" class="btn btn-default">Регистрация</button>
                        </form>
                    </div><!--/login form-->
                <?php endif;?>
            </div>
        </div>
    </div>
</section><!--/form-->