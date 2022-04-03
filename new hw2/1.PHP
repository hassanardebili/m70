<!DOCTYPE html>
<?php
$name=$address=$zipcode=$country=$gender=$preferences=$phone=$email=$password=$confirmPassword="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["zipCode"])) {
        $zipCodeErr = "zipCode is required";
    } else {
        $zipCode = test_input($_POST["zipCode"]);
    }


    if (empty($_POST["country"])) {
        $countryErr = "country is required";
    } else {
        $country = test_input($_POST["country"]);
    }

    if (empty($_POST["prefernces"])) {
        $favColorErr = "color is required";
    }
    if (empty($_POST["phone"])) {
        $phoneNumberErr = "phone is required";
    } else {
        $phoneNumber = test_input($_POST["phone"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["confirmPassword"])) {
        $passwordConfirmErr = "password is required";
    } else {
        $passwordConfirm = test_input($_POST["confirmPassword"]);
    }

    if (empty($_POST["Name"])) {
        $nameErr = "Name is required";
    } else {
        $firstName = test_input($_POST["Name"]);
    }

    if (empty($_POST["address"])) {
        $emailErr = "address is required";
    } else {

        $email = test_input($_POST["address"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "gender req";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["email"])) {
        $addressErr = "email req";
    } else {
        $address = test_input($_POST["email"]);
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <link  rel="stylesheet" type="text/css" href="cssform1.css">
    <title>Form1</title>
</head>
<body>
    <div class="body">
    <form method="$_POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
        <label for="name" >name:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="text" name="name"  value="" ><br>
        </div>
        <div>
        <label for="address">address</label>
        <input type="text" name="address" value="" ><br>
        </div>
        <div>
        <label for="zipcode">zip code:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="text" name="zipcode" value="" ><br>
        </div>
        <div>
        <label for="country" >contry:<span style="color: red; display:inline-flex;" >*</span></label>
        <select name="country" style="width: 100px;">
            <option selected>iran</option>
            <option>iraq</option>
            <option>us</option>
            <option>uk</option>       
        </select><br>
        </div>
        <div>
        <label for="gender" >gender:<span style="color: red; display:inline-flex;" >*</span></label>
        <input name="gender" type="radio" style="width:  20px;margin:5px auto 5px auto; padding:auto" checked >non
        <input name="gender" type="radio" style="width:  20px;margin:5px auto 5px auto; padding:auto" >female
        <input name="gender" type="radio" style="width:  20px;margin:5px auto 5px auto; padding:auto" >male<br>
        </div>
        <div>
        <label for="preferences" >preferences:<span style="color: red; display:inline-flex;" >*</span></label>
        <input  name="preferences" type="checkbox" style="width: 20px;margin:5px auto 5px auto; padding:auto" >red
        <input  name="preferences" type="checkbox" style="width: 20px;margin:5px auto 5px auto; padding:auto" >blue
        <input  name="preferences" type="checkbox" style="width: 20px;margin:5px auto 5px auto; padding:auto" >green<br>
        </div>
        <div>
        <label for="phone" >phone:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="tel" name="phone" value=""><br> 
        </div>
        <div>
        <label for="email" >Email:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="email" name="email" value=""><br> 
        </div>
        <div>
        <label for="password" >password:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="password" name="password" value=""><br>
        </div>
        <div>
        <label for="confirmPassword" >password:<span style="color: red; display:inline-flex;" >*</span></label>
        <input type="password" name="confirmPassword" value=""><br>
        </div>
        <div>
        <button style="margin-left: 110px;"  name="send"  type="submit" value="send">send</button>
        <button  name="reset" type="reset" value="Reset" >clear</button>
        </div>
    </form>
    </div>
</body>
</html>
