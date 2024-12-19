<?php
	$username = "cakeandturtles";
	$password = "j0vbHtR4838JPyrZ";
	
  $mysqli = new mysqli('catgamescoresnew.db', $username, $password, 'pixelpets');
	
  // Check connection
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
  
  $themeColor = clean($_POST['themeColor'], $mysqli);

	////////////////////////////////////////////////////////////////////////////////////////////////
	//CREATE INSERT STATEMENT
	$qry = "INSERT INTO ppusers (username, password, themeColor) VALUES ('".$name."', '".password_hash($pass, PASSWORD_BCRYPT)."', '".$themeColor."')";
  $mysqli -> query($qry);
	
	//GET USER ID BACK FROM DB
	$qry = "SELECT userId FROM ppusers WHERE userName = '".$name."'";
  $userId = -1;
  if ($result = $mysqli -> query($qry)) {
    while ($row = $result -> fetch_assoc()) {
      $userId = $row["userId"];
    }
    // Free result set
    $result -> free_result();    
  }
	
	//INSERT DEFAULT PETS INTO DB
	$qry = "INSERT iNTO ppuserPets (userId, pet1Id, pet2Id, pet3Id, pet4Id) VALUES (".$userId.",'".$name.",pet1','".$name.",pet2','".$name.",pet3','".$name.",pet4')";
  $mysqli -> query($qry);
	
	echo "writing=Ok";
  exit();
	$mysqli -> close();
?>