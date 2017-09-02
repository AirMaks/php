<?php

$message = false;
$error = false;




$email = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = test_input($_POST["email"]);
    }

function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }




if (isset($_REQUEST['name']) and isset($_REQUEST['phone'])
          and isset($_REQUEST['email']) and isset($_REQUEST['Position1'])
      and isset($_REQUEST['Position2']) and isset($_REQUEST['Position3'])
      and isset($_REQUEST['Position4']) and isset($_REQUEST['Position5'])
      and isset($_REQUEST['Position6']) and isset($_REQUEST['Position7'])
      and isset($_REQUEST['Position8']) and isset($_REQUEST['Position9'])
      and isset($_REQUEST['Position10']) and isset($_REQUEST['Position11'])
      and isset($_REQUEST['age']) and isset($_REQUEST['country'])
      and isset($_REQUEST['gender']) and isset($_REQUEST['favcolor']))


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
    $age = $_REQUEST['age'];
    $country = $_REQUEST['country'];
    $gender = $_REQUEST['gender'];
    $favcolor = $_REQUEST['favcolor'];



    if       (empty($name) || empty($phone) ||
             empty($email) || empty($Position1) ||
         empty($Position2) || empty($Position3) ||
         empty($Position4) || empty($Position5) ||
         empty($Position6) || empty($Position7) ||
         empty($Position8) || empty($Position9) ||
        empty($Position10) || empty($Position11) ||
    empty($age) || empty($country) || empty($gender) || empty($favcolor))

    {
      $error = 'Not all the strings filled?';
    }

    else
        {
        $row = 'Здравствуйте, ' . $name .
            '. Ваш пол: ' . $gender .
            '. Страна: ' . $country .
            '. Ваш возраст: ' . $age .
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
            '. Ваш любимый цвет: ' . $favcolor .
            PHP_EOL;

        file_put_contents('./contacts.txt', $row, FILE_APPEND);
        $message = '<h3><strong>Thanks for the vote, '. $name . '!</strong></h3>';
    }
}



?>



<!doctype html>
<html>

<body>




<head>

    <style>

        body {
            background: url(img/italian.jpg);
            background-size: 1800px 1800px;
            
        }
    </style>


    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>




<div class="container" align="center"  style="font-family: Broadway">

<label style="margin-top: 30px">
    <h1>Dream Team</h1>
</label>

    <?php if ( $message) : ?>
    <?= $message ?>
    <?php else: ?>


    <form class="form-horizontal" action="index.php" method="post">

        <label for="color">Favorite Color: </label>
        <input type="color" id="color" name="favcolor">
        <br>

       <p>Your age:</p>
           <input type="number" name="age"  min="14" max="112" style="width: 50px" required><br>

<div style="margin-top: 20px">
       Height <input type="range" min="0" max="220" value="0" name="percentage"><br>
 Weight <input type="range" min="0" max="400" value="0" name="percentage"><br>

</div>

        <div style="margin-top: 20px" >

    <label for="country">Your Country: </label><br>
 <select id="country" name="country" style="width: 250px">

     <option value="AX">AALAND ISLANDS</option>
    <option value="AF">AFGHANISTAN</option>
    <option value="AL">ALBANIA</option>
    <option value="DZ">ALGERIA</option>
    <option value="AS">AMERICAN SAMOA</option>
    <option value="AD">ANDORRA</option>
    <option value="AO">ANGOLA</option>
    <option value="AI">ANGUILLA</option>
    <option value="AQ">ANTARCTICA</option>
    <option value="AG">ANTIGUA AND BARBUDA</option>
    <option value="AR">ARGENTINA</option>
    <option value="AM">ARMENIA</option>
    <option value="AW">ARUBA</option>
    <option value="AU">AUSTRALIA</option>
    <option value="AT">AUSTRIA</option>
    <option value="AZ">AZERBAIJAN</option>
    <option value="BS">BAHAMAS</option>
    <option value="BH">BAHRAIN</option>
    <option value="BD">BANGLADESH</option>
    <option value="BB">BARBADOS</option>
    <option value="BY">BELARUS</option>
    <option value="BE">BELGIUM</option>
    <option value="BZ">BELIZE</option>
    <option value="BJ">BENIN</option>
    <option value="BM">BERMUDA</option>
    <option value="BT">BHUTAN</option>
    <option value="BO">BOLIVIA</option>
    <option value="BA">BOSNIA AND HERZEGOWINA</option>
    <option value="BW">BOTSWANA</option>
    <option value="BV">BOUVET ISLAND</option>
    <option value="BR">BRAZIL</option>
    <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
    <option value="BN">BRUNEI DARUSSALAM</option>
    <option value="BG">BULGARIA</option>
    <option value="BF">BURKINA FASO</option>
    <option value="BI">BURUNDI</option>
    <option value="KH">CAMBODIA</option>
    <option value="CM">CAMEROON</option>
    <option value="CA">CANADA</option>
    <option value="CV">CAPE VERDE</option>
    <option value="KY">CAYMAN ISLANDS</option>
    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
    <option value="TD">CHAD</option>
    <option value="CL">CHILE</option>
    <option value="CN">CHINA</option>
    <option value="CX">CHRISTMAS ISLAND</option>
    <option value="CO">COLOMBIA</option>
    <option value="KM">COMOROS</option>
    <option value="CK">COOK ISLANDS</option>
    <option value="CR">COSTA RICA</option>
    <option value="CI">COTE D'IVOIRE</option>
    <option value="CU">CUBA</option>
    <option value="CY">CYPRUS</option>
    <option value="CZ">CZECH REPUBLIC</option>
    <option value="DK">DENMARK</option>
    <option value="DJ">DJIBOUTI</option>
    <option value="DM">DOMINICA</option>
    <option value="DO">DOMINICAN REPUBLIC</option>
    <option value="EC">ECUADOR</option>
    <option value="EG">EGYPT</option>
    <option value="SV">EL SALVADOR</option>
    <option value="GQ">EQUATORIAL GUINEA</option>
    <option value="ER">ERITREA</option>
    <option value="EE">ESTONIA</option>
    <option value="ET">ETHIOPIA</option>
    <option value="FO">FAROE ISLANDS</option>
    <option value="FJ">FIJI</option>
    <option value="FI">FINLAND</option>
    <option value="FR">FRANCE</option>
    <option value="GF">FRENCH GUIANA</option>
    <option value="PF">FRENCH POLYNESIA</option>
    <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
    <option value="GA">GABON</option>
    <option value="GM">GAMBIA</option>
    <option value="GE">GEORGIA</option>
    <option value="DE">GERMANY</option>
    <option value="GH">GHANA</option>
    <option value="GI">GIBRALTAR</option>
    <option value="GR">GREECE</option>
    <option value="GL">GREENLAND</option>
    <option value="GD">GRENADA</option>
    <option value="GP">GUADELOUPE</option>
    <option value="GU">GUAM</option>
    <option value="GT">GUATEMALA</option>
    <option value="GN">GUINEA</option>
    <option value="GW">GUINEA-BISSAU</option>
    <option value="GY">GUYANA</option>
    <option value="HT">HAITI</option>
    <option value="HM">HEARD AND MC DONALD ISLANDS</option>
    <option value="HN">HONDURAS</option>
    <option value="HK">HONG KONG</option>
    <option value="HU">HUNGARY</option>
    <option value="IS">ICELAND</option>
    <option value="IN">INDIA</option>
    <option value="ID">INDONESIA</option>
    <option value="IQ">IRAQ</option>
    <option value="IE">IRELAND</option>
    <option value="IL">ISRAEL</option>
    <option value="IT">ITALY</option>
    <option value="JM">JAMAICA</option>
    <option value="JP">JAPAN</option>
    <option value="JO">JORDAN</option>
    <option value="KZ">KAZAKHSTAN</option>
    <option value="KE">KENYA</option>
    <option value="KI">KIRIBATI</option>
    <option value="KW">KUWAIT</option>
    <option value="KG">KYRGYZSTAN</option>
    <option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
    <option value="LV">LATVIA</option>
    <option value="LB">LEBANON</option>
    <option value="LS">LESOTHO</option>
    <option value="LR">LIBERIA</option>
    <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
    <option value="LI">LIECHTENSTEIN</option>
    <option value="LT">LITHUANIA</option>
    <option value="LU">LUXEMBOURG</option>
    <option value="MO">MACAU</option>
    <option value="MG">MADAGASCAR</option>
    <option value="MW">MALAWI</option>
    <option value="MY">MALAYSIA</option>
    <option value="MV">MALDIVES</option>
    <option value="ML">MALI</option>
    <option value="MT">MALTA</option>
    <option value="MH">MARSHALL ISLANDS</option>
    <option value="MQ">MARTINIQUE</option>
    <option value="MR">MAURITANIA</option>
    <option value="MU">MAURITIUS</option>
    <option value="YT">MAYOTTE</option>
    <option value="MX">MEXICO</option>
    <option value="MC">MONACO</option>
    <option value="MN">MONGOLIA</option>
    <option value="MS">MONTSERRAT</option>
    <option value="MA">MOROCCO</option>
    <option value="MZ">MOZAMBIQUE</option>
    <option value="MM">MYANMAR</option>
    <option value="NA">NAMIBIA</option>
    <option value="NR">NAURU</option>
    <option value="NP">NEPAL</option>
    <option value="NL">NETHERLANDS</option>
    <option value="AN">NETHERLANDS ANTILLES</option>
    <option value="NC">NEW CALEDONIA</option>
    <option value="NZ">NEW ZEALAND</option>
    <option value="NI">NICARAGUA</option>
    <option value="NE">NIGER</option>
    <option value="NG">NIGERIA</option>
    <option value="NU">NIUE</option>
    <option value="NF">NORFOLK ISLAND</option>
    <option value="MP">NORTHERN MARIANA ISLANDS</option>
    <option value="NO">NORWAY</option>
    <option value="OM">OMAN</option>
    <option value="PK">PAKISTAN</option>
    <option value="PW">PALAU</option>
    <option value="PA">PANAMA</option>
    <option value="PG">PAPUA NEW GUINEA</option>
    <option value="PY">PARAGUAY</option>
    <option value="PE">PERU</option>
    <option value="PH">PHILIPPINES</option>
    <option value="PN">PITCAIRN</option>
    <option value="PL">POLAND</option>
    <option value="PT">PORTUGAL</option>
    <option value="PR">PUERTO RICO</option>
    <option value="QA">QATAR</option>
    <option value="RE">REUNION</option>
    <option value="RO">ROMANIA</option>
    <option selected value="RU">RUSSIAN FEDERATION</option>
    <option value="RW">RWANDA</option>
    <option value="SH">SAINT HELENA</option>
    <option value="KN">SAINT KITTS AND NEVIS</option>
    <option value="LC">SAINT LUCIA</option>
    <option value="PM">SAINT PIERRE AND MIQUELON</option>
    <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
    <option value="WS">SAMOA</option>
    <option value="SM">SAN MARINO</option>
    <option value="ST">SAO TOME AND PRINCIPE</option>
    <option value="SA">SAUDI ARABIA</option>
    <option value="SN">SENEGAL</option>
    <option value="CS">SERBIA AND MONTENEGRO</option>
    <option value="SC">SEYCHELLES</option>
    <option value="SL">SIERRA LEONE</option>
    <option value="SG">SINGAPORE</option>
    <option value="SK">SLOVAKIA</option>
    <option value="SI">SLOVENIA</option>
    <option value="SB">SOLOMON ISLANDS</option>
    <option value="SO">SOMALIA</option>
    <option value="ZA">SOUTH AFRICA</option>
    <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
    <option value="ES">SPAIN</option>
    <option value="LK">SRI LANKA</option>
    <option value="SD">SUDAN</option>
    <option value="SR">SURINAME</option>
    <option value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
    <option value="SZ">SWAZILAND</option>
    <option value="SE">SWEDEN</option>
    <option value="CH">SWITZERLAND</option>
    <option value="SY">SYRIAN ARAB REPUBLIC</option>
    <option value="TW">TAIWAN</option>
    <option value="TJ">TAJIKISTAN</option>
    <option value="TH">THAILAND</option>
    <option value="TL">TIMOR-LESTE</option>
    <option value="TG">TOGO</option>
    <option value="TK">TOKELAU</option>
    <option value="TO">TONGA</option>
    <option value="TT">TRINIDAD AND TOBAGO</option>
    <option value="TN">TUNISIA</option>
    <option value="TR">TURKEY</option>
    <option value="TM">TURKMENISTAN</option>
    <option value="TC">TURKS AND CAICOS ISLANDS</option>
    <option value="TV">TUVALU</option>
    <option value="UG">UGANDA</option>
    <option value="UA">UKRAINE</option>
    <option value="AE">UNITED ARAB EMIRATES</option>
    <option value="GB">UNITED KINGDOM</option>
    <option value="US">UNITED STATES</option>
    <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
    <option value="UY">URUGUAY</option>
    <option value="UZ">UZBEKISTAN</option>
    <option value="VU">VANUATU</option>
    <option value="VE">VENEZUELA</option>
    <option value="VN">VIET NAM</option>
    <option value="WF">WALLIS AND FUTUNA ISLANDS</option>
    <option value="EH">WESTERN SAHARA</option>
    <option value="YE">YEMEN</option>
    <option value="ZM">ZAMBIA</option>
    <option value="ZW">ZIMBABWE</option>

</select><br>

</div>


<div class="custom-radio" style="margin-top: 20px">

        <label for="name" class="col-sm-2 control-label">SEX:</label><br>
        <input type="radio" name="gender" value="Мужской" checked> Male<br />
        <input type="radio" name="gender" value="Женский"> Female<br />

</div>


<div class="container" style="margin-top: 20px">
    <div style="width: 300px">

            <label for="name" class="col-sm-2 control-label">1.</label>
            <input  type="text" pattern="[A-Za-zА-Яа-я]+" style="font-family: Serif" name="Position1" class="form-control"
                       placeholder="Goalkeeper" value="<?= $Position1 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">2.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position2"
                       placeholder="Left defender" value="<?= $Position2 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">3.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position3"
                       placeholder="Center back" value="<?= $Position3 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">4.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position4"
                       placeholder="Center back" value="<?= $Position4 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">5.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position5"
                       placeholder="Right defender" value="<?= $Position5 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">6.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position6"
                       placeholder="Defensive midfielder" value="<?= $Position6 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">7.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position7"
                       placeholder="Left midfielder" value="<?= $Position7 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">8.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position8"
                       placeholder="Right midfielder" value="<?= $Position8 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">9.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position9"
                       placeholder="Center midfielder" value="<?= $Position9 ?? '' ?>" required>

            <label for="name" class="col-sm-2 control-label">10.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position10"
                       placeholder="Forward" value="<?= $Position10 ?? '' ?>" required>


            <label for="name" class="col-sm-2 control-label">11.</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="Position11"
                       placeholder="Forward" value="<?= $Position11 ?? '' ?>" required>

        <label  for="name">Your Name</label>
            <input type="text" pattern="[A-Za-zА-Яа-я]+" class="form-control" style="font-family: Serif" name="name"
               placeholder="Type your name" value="<?= $name ?? '' ?>" required>


            <label for="name">Phone Number:</label>
            <input name="phone" type="number" value="<?= $name ?? '' ?>" class="form-control" style="font-family: Serif" required
                   placeholder="+x-xxx-xxx-xx-xx"/>

        <label for="name">EMAIL:</label>
            <input type="email" class="form-control" style="font-family: Serif" name="email"
               placeholder="example@mail.com" value="<?= $email ?? '' ?>" required>


<!--8-->


<form action="index.php" method="post" required>
    <div class="form-horizontal" style="margin-top: 20px">
        <p>Hobby:</p>

                    <input type="checkbox" value="sport">Sport</input><br>
                    <input type="checkbox" value="photos">Photos</input><br>
                    <input type="checkbox" value="coding">Coding</input><br>
                    <input type="checkbox" value="snowboarding">Snowboarding</input>
    </div>
</form>

        <div class="col-sm-offset-2 col-sm-10" style="margin-top: 20px">
        <button type="submit" class="btn btn-primary">SEND TO FIFA</button>
        </div>

</div>

<p class="alert-danger col-md-4"><?= $error ?></p>

        </form>

    <?php  endif; ?>
    </div>

    </body>
    </html>