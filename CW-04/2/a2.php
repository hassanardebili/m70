<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>How's your weather?</h1>
    <p>please enter your information:</p>
    <form action="b2.php" method="get" >
        <label for="">City:</label>
        <input type="text" name="city">
        <label for="">Month:</label>
        <input type="text" name="month">
        <label for="">Year:</label>
        <input type="number" name="year">
        <p>please choose the kinds of weather you exprienced from the list blow.</p>
        <p>Choos all that apply.</p>
        <input type="checkbox" id="" name="weather[]" value="sunshine">
        <label for="">sunshine</label><br>
        <input type="checkbox" id="" name="weather[]" value="clouds">
        <label for="">clouds</label><br>
        <input type="checkbox" id="" name="weather[]" value="rain">
        <label for="">rain</label><br>
        <input type="checkbox" id="" name="weather[]" value="hail">
        <label for="">hail</label><br>
        <input type="checkbox" id="" name="weather[]" value="sleet">
        <label for="">sleet</label><br>
        <input type="checkbox" id="" name="weather[]" value="snow">
        <label for="">snow</label><br>
        <input type="checkbox" id="" name="weather[]" value="wind">
        <label for="">wind</label><br>
        <input type="checkbox" id="" name="weather[]" value="cold">
        <label for="">cold</label><br>
        <input type="checkbox" id="" name="weather[]" value="heat">
        <label for="">heat</label><br>
        <button type="submit">go</button>
    </form>
</body>

</html>