<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>pick a Day</h1>
    <?php if (isset($_GET['day'])) {?>
        <p><?php echo $_GET['day'];  ?></p>
    <?php } ?>    
    <p>Please choose a day</p>
    <form action="b1.php" method="post" >
        <select name="day" >
            <option value="Monday">
                Monday
            </option>
            <option value="Tuesday">
                Tuesday
            </option>
            <option value="Wednesday">
                Wednesday
            </option>
            <option value="Thursday">
                Thursday
            </option>
            <option value="Friday">
                Friday
            </option>
            <option value="Saturday">
                Saturday
            </option>
            <option value="Sunday">
                Sunday
            </option>
        </select>
        <button type="submit">go</button>
    </form>
    
</body>

</html>