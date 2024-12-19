<?php
	$username = "cakeandturtles";
	$password = "j0vbHtR4838JPyrZ";
	
	$mysqli = new mysqli("catgamescoresnew.db",$username,$password,"pixelpets");
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
	}
	
	//function to sanitize values recieved from the form. Prevents SQL injection
	function clean($str, $mysqli)
	{
		$str = @trim($str);
		if (get_magic_quotes_gpc()){
			$str = stripslashes($str);
		}
		return $mysqli -> real_escape_string($str); //error
	}
	
	//Sanitize the POST values
	$name = clean($_POST['name'], $mysqli);
	$pass = clean($_POST['pass'], $mysqli);

	////////////////////////////////////////////////////////////////////////////////////////////////
	//CREATE SELECT STATEMENT	
  $qry = "SELECT userId, password FROM ppusers WHERE userName = '".$name."'";
	if ($result = $mysqli -> query($qry)) {
    $row = $result -> fetch_assoc();
    if (password_verify($pass, $row["password"])) {
      echo "login=Ok";
    } else {
      echo "login=Bad, ".$name.", ".$pass.", ".$row["password"].", ".password_verify($pass, $row["password"]);
    }
    // Free result set
    $result -> free_result();
  }

  exit();
	$mysqli -> close();
?>