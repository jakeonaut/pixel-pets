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
	$response = "";
	//GET USERID (ONLY IF USERNAME AND PASSWORD MATCH UP)
  $checkQry = "SELECT * FROM ppusers WHERE userName = '".$name."'";
  $userId = -1;
	if ($result = $mysqli -> query($checkQry)) {
    $row = $result -> fetch_assoc();
    if (password_verify($pass, $row["password"])) {
      // login=Ok
      $userId = $row["userId"];
      $response = $row["themeColor"].",";
    } else {
      die("Incorrect username/password.");
    }
    // Free result set
    $result -> free_result();
  }
	
	//AFTER GETTING USERID, GET PET IDs
	$checkQry = "SELECT * FROM ppuserPets WHERE userId = '".$userId."'";
  $pet1Id = -1;
  $pet2Id = -1;
  $pet3Id = -1;
  $pet4Id = -1;
  if ($result = $mysqli -> query($checkQry)) {
    $row = $result -> fetch_assoc();
    $pet1Id = $row["pet1Id"];
    $pet2Id = $row["pet2Id"];
    $pet3Id = $row["pet3Id"];
    $pet4Id = $row["pet4Id"];
    
    // Free result set
    $result -> free_result();
  }
	
	//OKAY, NOW LETS FIRST GET ALL THE PET INFORMATION
	$qry = "SELECT * FROM pppets WHERE petId='".$pet1Id."' OR petId='".$pet2Id."' OR petId='".$pet3Id."' OR petId='".$pet4Id."'";
  if ($result = $mysqli -> query($qry)) {
    $pet1response = "";
    $pet2response = "";
    $pet3response = "";
    $pet4response = "";
    while ($row = $result -> fetch_assoc()) {
      if (strpos($row["petId"], ",pet1") !== false){ //PET 1 Was Found!!!
        $pet1response = $row["petExists"].","; 
        $pet1response.= $row["canRelease"].",";
        $pet1response.= $row["petSpecies"].",";
        $pet1response.= $row["speciesIndex"].",";
        $pet1response.= $row["petForm"].",";
        $pet1response.= $row["wasHappyTeen"].",";
        $pet1response.= $row["mood"].",";
        $pet1response.= $row["nextEventTime"].",";
        $pet1response.= $row["expTimer"].",";
        $pet1response.= $row["aniY"].",";
        $pet1response.= $row["name"].",";
        $pet1response.= $row["formChange"].",";
      }
      if (strpos($row["petId"], ",pet2") !== false){ //PET 2 Was Found!!!
        $pet2response = $row["petExists"].","; 
        $pet2response.= $row["canRelease"].",";
        $pet2response.= $row["petSpecies"].",";
        $pet2response.= $row["speciesIndex"].",";
        $pet2response.= $row["petForm"].",";
        $pet2response.= $row["wasHappyTeen"].",";
        $pet2response.= $row["mood"].",";
        $pet2response.= $row["nextEventTime"].",";
        $pet2response.= $row["expTimer"].",";
        $pet2response.= $row["aniY"].",";
        $pet2response.= $row["name"].",";
        $pet2response.= $row["formChange"].",";
      }
      if (strpos($row["petId"], ",pet3") !== false){ //PET 3 Was Found!!!
        $pet3response = $row["petExists"].","; 
        $pet3response.= $row["canRelease"].",";
        $pet3response.= $row["petSpecies"].",";
        $pet3response.= $row["speciesIndex"].",";
        $pet3response.= $row["petForm"].",";
        $pet3response.= $row["wasHappyTeen"].",";
        $pet3response.= $row["mood"].",";
        $pet3response.= $row["nextEventTime"].",";
        $pet3response.= $row["expTimer"].",";
        $pet3response.= $row["aniY"].",";
        $pet3response.= $row["name"].",";
        $pet3response.= $row["formChange"].",";
      }
      if (strpos($row["petId"], ",pet4") !== false){ //PET 4 Was Found!!!
        $pet4response = $row["petExists"].","; 
        $pet4response.= $row["canRelease"].",";
        $pet4response.= $row["petSpecies"].",";
        $pet4response.= $row["speciesIndex"].",";
        $pet4response.= $row["petForm"].",";
        $pet4response.= $row["wasHappyTeen"].",";
        $pet4response.= $row["mood"].",";
        $pet4response.= $row["nextEventTime"].",";
        $pet4response.= $row["expTimer"].",";
        $pet4response.= $row["aniY"].",";
        $pet4response.= $row["name"].",";
        $pet4response.= $row["formChange"].",";
      }
    }
    $response.= $pet1response.$pet2response.$pet3response.$pet4response;
    
    // Free result set
    $result -> free_result();
  }
	
	//OKAY, NOW LETS GET ALL THE CODEX INFORMATION//////////////////////////////////////////////////
	$qry = "SELECT * FROM ppuserCodex WHERE userId=".$userId;
  if ($result = $mysqli -> query($qry)) {
    $row = $result -> fetch_assoc();
    $response .= $row["uc01"].",".$row["uc02"].",".$row["uc03"].",".$row["uc04"].",".$row["uc05"].",".$row["uc06"].",".$row["uc07"].",".$row["uc08"].",".$row["uc09"].",";
    $response .= $row["uc11"].",".$row["uc12"].",".$row["uc13"].",".$row["uc14"].",".$row["uc15"].",".$row["uc16"].",".$row["uc17"].",".$row["uc18"].",".$row["uc19"].",";
    $response .= $row["uc21"].",".$row["uc22"].",".$row["uc23"].",".$row["uc24"].",".$row["uc25"].",".$row["uc26"].",".$row["uc27"].",".$row["uc28"].",".$row["uc29"].",";
    $response .= $row["uc31"].",".$row["uc32"].",".$row["uc33"].",".$row["uc34"].",".$row["uc35"].",".$row["uc36"].",".$row["uc37"].",".$row["uc38"].",".$row["uc39"].",";
    $response .= $row["uc41"].",".$row["uc42"].",".$row["uc43"].",".$row["uc44"].",".$row["uc45"].",".$row["uc46"].",".$row["uc47"].",".$row["uc48"].",".$row["uc49"].",";
    $response .= $row["uc51"].",".$row["uc52"].",".$row["uc53"].",".$row["uc54"].",".$row["uc55"].",".$row["uc56"].",".$row["uc57"].",".$row["uc58"].",".$row["uc59"].",";
    $response .= $row["uc61"].",".$row["uc62"].",".$row["uc63"].",".$row["uc64"].",".$row["uc65"].",".$row["uc66"].",".$row["uc67"].",".$row["uc68"].",".$row["uc69"].",";
    $response .= $row["uc71"].",".$row["uc72"].",".$row["uc73"].",".$row["uc74"].",".$row["uc75"].",".$row["uc76"].",".$row["uc77"].",".$row["uc78"].",".$row["uc79"].",";
    $response .= $row["uc81"].",".$row["uc82"].",".$row["uc83"].",".$row["uc84"].",".$row["uc85"].",".$row["uc86"].",".$row["uc87"].",".$row["uc88"].",".$row["uc89"].",";
    
    // Free result set
    $result -> free_result();
  }
	
	//FINISH LOADING, RETURN RESPONSE///////////////////////////////////////////////////////////////
	$response.="load=Ok";
	echo $response;
	exit();
	$mysqli -> close();
?>