<?
    session_start();

    if(!isset($_SESSION["USER"])){
        header("Location: signin.php");
        exit;
    }
    
    //We be testing, yo chiilllaiowdjaiow
    include "secret.php";

    $mysqli = new mysqli($SECRET["url"], $SECRET["user"], $SECRET["password"], $SECRET["database"]);
    
    if($mysqli->connect_errno){
        echo "something is wrong my dude ".$mysqli->connect_error;
    }



    $mysqli->close();
?>