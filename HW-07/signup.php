<?php
$erorr = [];
if (!file_exists("users.json")) {
    file_put_contents("users.json", "");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);

    if (!preg_match('/[a-zA-Z0-9_]{3,32}/', $_POST['username'])) {

        $erorr[] = "username is not valid!!!";
    }
    if (!preg_match('/[a-z\s]{3,32}/', $_POST['name'])) {
        $erorr[] = "name is not valid!!!";
    }
    if (!preg_match('/.{4,32}/', $_POST['password'])) {
        $erorr[] = "password is not valid!!!";
    }


    $file = file_get_contents('users.json');
    $data = json_decode($file, true) ?? [];
    $check = array_filter($data, function ($a) use ($email, $username) {
        if (($a["username"] == $username) || ($a["email"] == $email)) {
            return $a;
        }
    });
    $check = array_values($check);
    if (count($check) != 0) {
        $erorr[] = "user already exict";
        exit;
    }
    $data[] = ['username' => $_POST['username'], 'password' => $_POST['password'] , $_POST['email']];
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $data);
    if (count($erorr) == 0) {
        header('Location:login.php');
    }
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="Register">

    </form>

    <?php if (count($erorr) !== 0) {
        foreach ($erorr as $e) {

            echo $e . '<br>';
        }
    }
    ?>
</body>

</html>