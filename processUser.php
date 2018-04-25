<?php

    if(checkForm()){
        $newUser = new User (     );
        if($newUser->createUser()){
            header('userPage.php');
        }
        else{
            header('failedUser.php');
        }
    }
    else
        head('failedUser.php');


 ?>
