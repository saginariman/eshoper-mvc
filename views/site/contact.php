<?php include ROOT . '/views/layouts/header.php';?>


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php if($result):?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный вами почтовый адресс.</p>
                <?php else:?>
                    <?php if(isset($errors) && is_array($errors)):?>
                        <ul>
                            <?php foreach($errors as $error):?>
                                <li>- <?=$error?></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                    <div class="signup-form"><!--login form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Напишите нам</h5>
                        <br>
                        <form action="#" method="post">
                            <input type="text" name="userEmail" placeholder="email" value="<?=$userEmail?>"/>
                            <input type="text" name="userText" placeholder="Your message" value="<?=$userText?>"/>
                            
                            <button type="submit" name="submit" class="btn btn-default">Отправить</button>
                        </form>
                    </div><!--/login form-->
                <?php endif;?>
            </div>
        </div>
    </div>
</section><!--/form-->