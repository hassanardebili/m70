<?php

// $uploadOk = 1; 
// var_dump($_FILES);
$num_ran= rand(100000 ,999999);

if (isset($_POST['submit'])) {
    if (isset($_FILES)) {
        
        $extention = pathinfo($_FILES['national_card']['name'], PATHINFO_EXTENSION);
        if (($_FILES['national_card']['type'] == 'text/plain' && $_FILES['national_card']["size"] < 512000)) {
            
           
            $target_dir ="text/";
            $target_file = $target_dir .rand(100000 , 999999) . $_POST['text']."." . $extention;
            if (file_exists($target_file)){
                echo "erorr";
            
            }
            else

            move_uploaded_file($_FILES['national_card']["tmp_name"], $target_file );
        
        }
else if ((($extention == 'png' || $extention == 'jpg')&&($_FILES['national_card']["size"] < 1024*1024))){
            $target_dir = "img/";
            $target_file =$target_dir . rand(100000 , 999999) ."_". $_POST['text']."." . $extention;
            if (file_exists($target_file)){
                echo "erorr";
            }
            else 
            move_uploaded_file($_FILES['national_card']["tmp_name"], $target_file);
    }
    }

 
}


// (($extention == 'png' || $extention == 'jpg')&&($_FILES['national_card']["size"] < 1024*1024))