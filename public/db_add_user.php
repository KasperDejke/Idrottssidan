<?

	include "secret.php";
	$mysqli = new mysqli($SECRET["url"], $SECRET["user"], $SECRET["password"], $SECRET["database"]);
    
    if($mysqli->connect_errno){
        echo "something is wrong my dude".$mysqli->connect_error;
        exit;
    }

    $mysqli->set_charset("utf8");


    if ($_POST["email"] && $_POST["password"]){


    	echo "it be working";
    	$ay = password_hash($_POST["password"], PASSWORD_BCRYPT);
    	echo strlen($ay);


    } else echo "sorry fam";


	$mysqli->close();

?>