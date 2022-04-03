<?php
if (isset($_POST['day'])); {
    switch ($_POST['day']) {
        case "Monday":
            $a1 = "Laugh on Monday, laugh for danger.";
            break;
        case "Tuesday":
            $a1 = "Laugh on Tuesday, kiss a stranger.";
            break;
        case "Wednesday":
            $a1 = "Laugh on Wednesday, laugh for a letter.";
            break;
        case "Thursday":
            $a1 = "Laugh on Thursday, something better.";
            break;
        case "Friday":
            $a1 = "Laugh on Friday, laugh for sorrow.";
            break;
        case "Saturday":
            $a1 = "Laugh on Saturday, joy tomorrow.";
            break;
        case "Sunday":
            $a1 = "";
            break;
    }
    header("Location: a1.php?day=$a1");
}

