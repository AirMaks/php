<?php

$message = false;
$error = false;
if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {

    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    if (empty($name) || empty($phone)) {
        $error = 'Заполните поля';
    }

    else

        {

        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер: ' . $phone . PHP_EOL;

        file_put_contents('./contacts.txt', $row, FILE_APPEND);

        $message = 'Спасибо! Мы с вами свяжемся.';

    }
}
?>



<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


<div>
<div class="container">

<h3>Форма обратной связи</h3>
<?php if ( $message) : ?>
<?= $message ?>
<?php else: ?>

    <form class="form-horizontal" action="index.php" method="post">


        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Имя</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control"  placeholder="Напишите имя">
            </div>
        </div>



        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="phone" placeholder="Напишите номер телефона">
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
        <p class="alert-danger col-md-4"><?= $error ?></p>

    </form>

<?php  endif; ?>
</div>

</body>
</html>