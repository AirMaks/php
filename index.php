<?php

$message = false;
$error = false;



           if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])
          and isset($_REQUEST['email']) and isset($_REQUEST['Position1'])
      and isset($_REQUEST['Position2']) and isset($_REQUEST['Position3'])
      and isset($_REQUEST['Position4']) and isset($_REQUEST['Position5'])
      and isset($_REQUEST['Position6']) and isset($_REQUEST['Position7'])
      and isset($_REQUEST['Position8']) and isset($_REQUEST['Position9'])
     and isset($_REQUEST['Position10']) and isset($_REQUEST['Position11']))

{
          $name = $_REQUEST['name'];
         $phone = $_REQUEST['phone'];
         $email = $_REQUEST['email'];
     $Position1 = $_REQUEST['Position1'];
     $Position2 = $_REQUEST['Position2'];
     $Position3 = $_REQUEST['Position3'];
     $Position4 = $_REQUEST['Position4'];
     $Position5 = $_REQUEST['Position5'];
     $Position6 = $_REQUEST['Position6'];
     $Position7 = $_REQUEST['Position7'];
     $Position8 = $_REQUEST['Position8'];
     $Position9 = $_REQUEST['Position9'];
    $Position10 = $_REQUEST['Position10'];
    $Position11 = $_REQUEST['Position11'];


    if       (empty($name) || empty($phone) ||
             empty($email) || empty($Position1) ||
         empty($Position2) || empty($Position3) ||
         empty($Position4) || empty($Position5) ||
         empty($Position6) || empty($Position7) ||
         empty($Position8) || empty($Position9) ||
        empty($Position10) || empty($Position11))

    {
        $error = 'Не все поля заполнены?';
    }

    else
        {
        $row = 'Здравствуйте, ' . $name .
            '. Ваш номер: ' . $phone .
            '. Ваш email: ' . $email .
            '. Ваш Вратарь: ' . $Position1 .
            '. Ваш Левый защитник: ' . $Position2 .
            '. Ваш Центральный защитник: ' . $Position3 .
            '. Ваш Центральный защитник: ' . $Position4 .
            '. Ваш Правый защитник: ' . $Position5 .
            '. Ваш Опорный полузащитник: ' . $Position6 .
            '. Ваш Левый полузащитник: ' . $Position7 .
            '. Ваш Правый полузащитник: ' . $Position8 .
            '. Ваш Центральный полузащитник: ' . $Position9 .
            '. Ваш Нападающий: ' . $Position10 .
            '. Ваш Нападающий: ' . $Position11 .
            PHP_EOL;

        file_put_contents('./contacts.txt', $row, FILE_APPEND);
        $message = 'Спасибо, что проголосовали!';
    }
}

?>

<!doctype html>
<html>

<body style="background: #fcf8e3";>

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
                <input type="text" name="Position1" class="form-control"
                       placeholder="Вратарь" value="<?= $Position1 ?? '' ?>">
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position2"
                       placeholder="Левый защитник" value="<?= $Position2 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position3"
                       placeholder="Центральный защитник" value="<?= $Position3 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">4.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position4"
                       placeholder="Центральный защитник" value="<?= $Position4 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">5.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position5"
                       placeholder="Правый защитник" value="<?= $Position5 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">6.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position6"
                       placeholder="Опорный полузащитник" value="<?= $Position6 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">7.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position7"
                       placeholder="Левый полузащитник" value="<?= $Position7 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">8.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position8"
                       placeholder="Правый полузащитник" value="<?= $Position8 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">9.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position9"
                       placeholder="Центральный полузащитник" value="<?= $Position9 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">10.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position10"
                       placeholder="Нападающий" value="<?= $Position10 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">11.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="Position11"
                       placeholder="Нападающий" value="<?= $Position11 ?? '' ?>">
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Ваше имя</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name"
                       placeholder="Впишите имя" value="<?= $name ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Номер Телефона</label>
            <div class="col-sm-4">
                <input type="phone" class="form-control" name="phone"
                       placeholder="Впишите номер телефона" value="<?= $phone ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Ваш EMAIL:</label>
            <div class="col-sm-4">

                <input type="email" class="form-control" name="email"
                       placeholder="Email" value="<?= $email ?? '' ?>">
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