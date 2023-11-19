<?php
function registering():void{
    $login=$_POST["login_reg"];
    $user_password=$_POST["password_reg"];
    $user_password_test=$_POST["password_conf"];

    #$user_password=hash($user_password);
    
    $server="localhost";
    $user="root";
    $password="";
    $dbname="minesweeper";

    if($user_password!==$user_password_test){
        echo '<script src="js/registering/uncompatible_passwords.js"></script>';
        return;
    }

    if($login==NULL){
        echo '<script src="js/registering/no_login.js"></script>';
        return;
    }

    if($user_password==NULL){
        echo '<script src="js/registering/no_password.js"></script>';
        return;
    }

    $conn= mysqli_connect ($server, $user, $password, $dbname);

    if($conn->connect_error){   
        echo '<script src="js/registering/process_failed.js"></script>';
        return;
    }

    $sql="INSERT INTO users values('".$login."', '".$user_password."')";

    if($conn->query($sql)===TRUE){
        echo '<script src="js/registering/register_true.js"></script>';
        return;
    }

    else{
        echo '<script src="js/registering/process_failed.js"></script>';
        return;
    }
    $conn->close();

}
if(isset($_POST["submit"])){
    registering();
}

?>