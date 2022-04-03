<!DOCTYPE html>
<?php
$firstname=$lastname=$dadname=$shomareshenasname=$kodemeli=$addresswork=$address=$email=$kode="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $zipCodeErr = "firstname is required";
    } else {
        $zipCode = test_input($_POST["firstname"]);
    }


    if (empty($_POST["lastname"])) {
        $countryErr = "lastname is required";
    } else {
        $country = test_input($_POST["lastname"]);
    }

    if (empty($_POST["dadname"])) {
        $favColorErr = "dadname is required";
    }
    if (empty($_POST["shomareshenasname"])) {
        $phoneNumberErr = "shomareshenasname is required";
    } else {
        $phoneNumber = test_input($_POST["shomareshenasname"]);
    }

    if (empty($_POST["addresswork"])) {
        $passwordErr = "addresswork is required";
    } else {
        $password = test_input($_POST["addresswork"]);
    }

    if (empty($_POST["address"])) {
        $passwordConfirmErr = "address is required";
    } else {
        $passwordConfirm = test_input($_POST["address"]);
    }

    if (empty($_POST["email"])) {
        $nameErr = "email is required";
    } else {
        $firstName = test_input($_POST["email"]);
    }

    if (empty($_POST["address"])) {
        $emailErr = "address is required";
    } else {

        $email = test_input($_POST["address"]);
    }

    if (empty($_POST["kode"])) {
        $genderErr = "kode req";
    } else {
        $gender = test_input($_POST["kode"]);
    }

    if (empty($_POST["kodemeli"])) {
        $addressErr = "kodemeli req";
    } else {
        $address = test_input($_POST["kodemeli"]);
    }
    if (!empty($Name) and !empty($email) and !empty($gender)  and !empty($prefernces) and !empty($address) and !empty($zipCode) and !empty($country) and !empty($phone) and !empty($password)  and !empty($confirmPassword)) {
        echo "enter";
        $status = "save";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <link  rel="stylesheet" type="text/css" href="cssform2.css">
</head>
<body  dir="rtl" >
    <div>
        <div class="rows"> 
            <div class="col1">
                <label for="firstname"> نام"<span style="color: red;">*</span></label>
                <input name="firstname" type="text" >
            </div>
            <div class="col1" >
                <label for="lastname" > نام خانوادگی<span style="color: red;">*</span></label>
                <input name="lastname" type="text" >
            </div>
            <div class="col1">
            <label for="dadname">نام پدر<span style="color: red;">*</span></label>
            <input name="dadname" type="text" >
            </div>
        </div>
        <div class="rows" >
            <div class="col2">
            <label for="shomareshenasname">شماره شناسنامه<span style="color: red;">*</span></label>
            <input name="shomareshenasname" type="text" class="input">
            </div>
            <div class="col2">
            <label for="kodemeli">شماره ملی<span style="color: red;">*</span></label>
            <input name="kodemeli" type="text" class="input">
            </div>
        </div>
        <div class="rows">
            <div class="col3" >
            <label for="tahsil" >وضعیت تحصیلی<span style="color: red;">*</span></label>
            <div class="esm">دانشجو کارشناسی</div><input type="radio" name="tahsil"   class="radio"><br>
            <div class="esm">دانش آموخته کارشناسی</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانشجو کارشناسی ارشد</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانش آموخته  کارشناسی ارشد</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانشجو دکتری </div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانش آموخته</div><input type="radio" name="tahsil" class="radio"><br>
            </div>
            <div class="col3" >
            <label for="tahsil" >وضعیت تحصیلی<span style="color: red;">*</span></label>
            <div class="esm">دانشجو کارشناسی</div><input type="radio" name="tahsil"   class="radio"><br>
            <div class="esm">دانش آموخته کارشناسی</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانشجو کارشناسی ارشد</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانش آموخته  کارشناسی ارشد</div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانشجو دکتری </div><input type="radio" name="tahsil" class="radio"><br>
            <div class="esm">دانش آموخته</div><input type="radio" name="tahsil" class="radio"><br>
            </div>
        </div>
        <div class="rows">
            <div class="col2">
            <label for="address">نشانی محل سکونت<span style="color: red;">*</span></label>
            <input name="address" type="text" class="input">
            </div>
            <div class="col4">
            <label for="addresswork">نشانی محل کار </label>
            <input name="addresswork" type="text" class="input">
            </div>
        </div>
        <div class="rows" >
        <label for="email" >نشانی پست الکترنیکی </label>
            <input name="email" type="text" class="input" style="padding-right: 607px;"> 
        </div>
        <div class="rows" >
        <label for="kode" >کد امنیتی:<span style="color: red;">*</span> <img src="1.png" alt="کد امنیتی" width="100px"> </label>
            <input name="dadname" type="text" class="input" style="padding-right: 20px;"> 
        </div>
        <div class="rows">
            <div>
                <button type="submit">send</button>
            </div>
        </div>
    </div>
</body>
</html>