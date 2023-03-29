<?php
     $pass = $_POST["password"];
     $name = $_POST["username"];
     $email = $_POST["email"];
     if(trim($name) == ""){
    echo "Error! Vi dalbayob";
}
     else if(strlen(trim($name)) <= 1){
         echo "Ti eblan???";
     }
     else if(trim($email) == "" || trim($pass) == "" || trim($_POST["message"]) == ""){
         echo "Ne, nu ti eblan";
     }
