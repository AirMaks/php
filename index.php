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
        $error = 'Not all the strings filled?';
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
        $message = '<h3><strong>Thanks for the vote!</strong></h3>';
    }
}
?>




<!doctype html>
<html>

<body;>

<head>
    <style>
        body{
            background: url(img/italian.jpg);
            background-size: 1800px 1800px;

        }

    </style>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>




<div class="container" align="center" style="font-family: Broadway">

<label style="margin-top: 30px">
    <h1>Dream Team</h1>
</label>

    <?php if ( $message) : ?>
    <?= $message ?>
    <?php else: ?>


    <form class="form-horizontal" action="index.php" method="post">


<select name="country">
    <option value="Have not chosen">Choose your country</option>
    <option value="Russia">Russian Federation</option>
    <option value="England">China</option>
    <option value="China">England</option>
    <option value="Italy">Italy</option>
    <option value="Spain">Spain</option>
     <option value="Spain">USA</option>
     <option value="Spain">France</option>
     <option value="Spain">Slovakia</option>
     <option value="Spain">Greece</option>
     <option value="Spain">Japan</option>
     <option value="Spain">Iceland</option>
     <option value="Spain">Denmark</option>
     <option value="Spain">Canada</option>
     <option value="Spain">Norway</option>
     <option value="Spain">Portugal</option>
     <option value="Spain">Hungary</option>
     <option value="Spain">South Korea</option>
     <option value="Spain">Ukraine</option>
     <option value="Spain">Finland</option>
     <option value="Spain">Sweden</option>
     <option value="Spain">Switzerland</option>

</select><br>



<div class="custom-radio" style="margin-top: 20px">

        <label for="name" class="col-sm-2 control-label">SEX:</label><br>
        <input type="radio" name="voice" value="one" /> Male<br />
        <input type="radio" name="voice" value="two" /> Female<br />

</div>


<div class="container" style="margin-top: 20px">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">1.</label>
            <div class="col-sm-4">
                <input  type="text" style="font-family: Serif" name="Position1" class="form-control"
                       placeholder="Goalkeeper" value="<?= $Position1 ?? '' ?>">
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position2"
                       placeholder="Left defender" value="<?= $Position2 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position3"
                       placeholder="Center back" value="<?= $Position3 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">4.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position4"
                       placeholder="Center back" value="<?= $Position4 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">5.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position5"
                       placeholder="Right defender" value="<?= $Position5 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">6.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position6"
                       placeholder="Defensive midfielder" value="<?= $Position6 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">7.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position7"
                       placeholder="Left midfielder" value="<?= $Position7 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">8.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position8"
                       placeholder="Right midfielder" value="<?= $Position8 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">9.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position9"
                       placeholder="Center midfielder" value="<?= $Position9 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">10.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position10"
                       placeholder="Forward" value="<?= $Position10 ?? '' ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">11.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" style="font-family: Serif" name="Position11"
                       placeholder="Forward" value="<?= $Position11 ?? '' ?>">
            </div>
        </div>


<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Your Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" style="font-family: Serif" name="name"
               placeholder="Type your name" value="<?= $name ?? '' ?>">
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-4">
        <input type="phone" class="form-control" style="font-family: Serif" name="phone"
               placeholder="Type your phone number" value="<?= $phone ?? '' ?>">
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">EMAIL:</label>
    <div class="col-sm-4">

        <input type="email" class="form-control" style="font-family: Serif" name="email"
               placeholder="Email" value="<?= $email ?? '' ?>">
    </div>
</div>




        <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Your hobby:</label>
    <p> <input type='checkbox' class='checkbox'
               name="delete_1" value="123">
        Sport</p>
</div>

<div class="form-group">
    <p> <input type='checkbox' class='checkbox'
               name="delete_2" value="456">
        Music</p>
</div>

<div class="form-group">
    <p> <input type='checkbox' class='checkbox'
               name="delete_3" value="789">
        Coding</p>
</div>

<div class="form-group">
    <p> <input type='checkbox' class='checkbox'
               name="delete_4" value="111">
        Other</p>
</div>



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">SEND TO FIFA</button>
    </div>
</div>

</div>

<p class="alert-danger col-md-4"><?= $error ?></p>
        </form>







<?php  endif; ?>
</div>

</body>
</html>