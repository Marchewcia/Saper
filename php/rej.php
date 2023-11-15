<?php
if(isset($_POST["wyslij"])){
    if($_POST["haslo_rej"]==$_POST["haslo_test"]){
        if($_POST["login_rej"]==NULL){
            echo '<script src="js/brak_loginu.js"></script>';
        }
        else if($_POST["haslo_rej"]==NULL){
            echo '<script src="js/brak_hasla.js"></script>';
        }
        else{
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="saper";
            $conn= mysqli_connect ($servername, $username, $password, $dbname);
            if($conn->connect_error){   
                echo '<script src="js/nie_powiodlo_sie.js"></script>';
            }
            $sql="INSERT INTO uzytkownicy values('".$_POST['login_rej']."', '".$_POST['haslo_rej']."')";
            if($conn->query($sql)===TRUE){
                echo"Konto utworzone";
            }
            else{
                echo"Błąd: ".$sql."<br>".$conn->error;
            }
            $conn->close();        
        }
    }
    else{
        echo '<script src="js/nie_kompatybilne_hasla.js"></script>';
    }    
}
//lol
?>