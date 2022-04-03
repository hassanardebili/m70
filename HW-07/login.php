<?php
session_start();

$file = file_get_contents('users.json');
$users_decode = json_decode($file , true);
if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $check = array_filter($users_decode, function ($a) use ($username) {
    if ($a["username"] == $username ) {
      return $a;
    }
  });
  $check = array_values($check);
  // foreach ($check as $key =>$valeu){
  //   var_dump($valeu);
  // }
  if (isset($check[0]["password"])) {
    if ($check[0]["password"] == $password ) {
      $_SESSION["username"] = $username;
      header("Location: home.php");
      exit;
    } else  echo 'erorr';
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<body>
  <form method="POST">

    <input type="text" name="username" placeholder="Username">

    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit" value="login">

  </form>
</body>

</html>