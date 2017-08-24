<?php
$message = false;
$error = false;
if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])) {


    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    if (empty($name) || empty($phone)) {
        $error = 'Не все поля заполнены?';
    } else {
        $row = 'Здравствуйте, ' . $name .
             '. Ваш номер: ' . $phone . PHP_EOL;

        file_put_contents('./contacts.txt', $row, FILE_APPEND);
        $message = 'Спасибо, что проголосовали!';  //
    }
}

?>




<!doctype html>
<html>
<body style="background: #b1dfbb";>
<head>
   <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


<div class="container">

<h2>Команда Мечты</h2>
   <h3>Проголосуй за свою команду:</h3>
<?php if ( $message) : ?>
<?= $message ?>
<?php else: ?>

    <form class="form-horizontal" action="index.php" method="post">


        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">1.</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control"  placeholder="Вратарь">
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Левый защитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Центральный защитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">4.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Центральный защитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">5.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Правый защитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">6.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Опорный полузащитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">7.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Левый полузащитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">8.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Правый полузащитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">9.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Центральный полузащитник">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">10.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Нападающий">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">11.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Нападающий">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Ваше имя</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" placeholder="Впишите имя">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Номер Телефона</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="phone" placeholder="Впишите номер телефона">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Ваш EMAIL:</label>
            <div class="col-sm-4">

                <input type="text" class="form-control" name="personal[email]" placeholder="Email">
            </div>
        </div>


            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Ваши интересы:</label>
           <p> <input type='checkbox' class='checkbox'
                   name="delete_1" value="123">
               Спорт</p>
            </div>

            <div class="form-group">
                <p> <input type='checkbox' class='checkbox'
                           name="delete_2" value="456">
                    Музыка</p>
            </div>

            <div class="form-group">
                <p> <input type='checkbox' class='checkbox'
                           name="delete_3" value="789">
                    Программирование</p>
            </div>

            <div class="form-group">
                <p> <input type='checkbox' class='checkbox'
                           name="delete_4" value="111">
                    Другое</p>
            </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Отправить в FIFA</button>
            </div>
        </div>




        <p class="alert-danger col-md-4"><?= $error ?></p>

    </form>



<?php  endif; ?>
</div>

</body>
</html>