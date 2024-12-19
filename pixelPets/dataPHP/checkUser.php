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
	$qry = "SELECT userId FROM ppusers WHERE userName = '".$name."'";
	if ($result = $mysqli -> query($qry)) {
    $num = $result -> num_rows;
    // Free result set
    $result -> free_result();
    
    if ($num > 0){ //THE USERNAME ALREADY EXISTS
      echo "username=Exists";
    }else{ //THE USERNAME DOES NOT EXIST
      echo "username=Ok";
    }
  }

  exit();
	$mysqli -> close();
?>