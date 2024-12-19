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
	
	$themeColor = clean($_POST['themeColor'], $mysqli);
	
	//PET 1
	$pet1exists = clean($_POST['pet1exists'], $mysqli);
	$pet1canRelease = clean($_POST['pet1canRelease'], $mysqli);
	$pet1petSpecies = clean($_POST['pet1petSpecies'], $mysqli);
	$pet1speciesIndex = clean($_POST['pet1speciesIndex'], $mysqli);
	$pet1petForm = clean($_POST['pet1petForm'], $mysqli);
	$pet1wasHappyTeen = clean($_POST['pet1wasHappyTeen'], $mysqli);
	$pet1mood = clean($_POST['pet1mood'], $mysqli);
	$pet1nextEventTime = clean($_POST['pet1nextEventTime'], $mysqli);
	$pet1expTimer = clean($_POST['pet1expTimer'], $mysqli);
	$pet1aniY = clean($_POST['pet1aniY'], $mysqli);
	$pet1name = clean($_POST['pet1name'], $mysqli);
	$pet1formChange = clean($_POST['pet1formChange'], $mysqli);
	//PET 2
	$pet2exists = clean($_POST['pet2exists'], $mysqli);
	$pet2canRelease = clean($_POST['pet2canRelease'], $mysqli);
	$pet2petSpecies = clean($_POST['pet2petSpecies'], $mysqli);
	$pet2speciesIndex = clean($_POST['pet2speciesIndex'], $mysqli);
	$pet2petForm = clean($_POST['pet2petForm'], $mysqli);
	$pet2wasHappyTeen = clean($_POST['pet2wasHappyTeen'], $mysqli);
	$pet2mood = clean($_POST['pet2mood'], $mysqli);
	$pet2nextEventTime = clean($_POST['pet2nextEventTime'], $mysqli);
	$pet2expTimer = clean($_POST['pet2expTimer'], $mysqli);
	$pet2aniY = clean($_POST['pet2aniY'], $mysqli);
	$pet2name = clean($_POST['pet2name'], $mysqli);
	$pet2formChange = clean($_POST['pet2formChange'], $mysqli);
	//PET 3
	$pet3exists = clean($_POST['pet3exists'], $mysqli);
	$pet3canRelease = clean($_POST['pet3canRelease'], $mysqli);
	$pet3petSpecies = clean($_POST['pet3petSpecies'], $mysqli);
	$pet3speciesIndex = clean($_POST['pet3speciesIndex'], $mysqli);
	$pet3petForm = clean($_POST['pet3petForm'], $mysqli);
	$pet3wasHappyTeen = clean($_POST['pet3wasHappyTeen'], $mysqli);
	$pet3mood = clean($_POST['pet3mood'], $mysqli);
	$pet3nextEventTime = clean($_POST['pet3nextEventTime'], $mysqli);
	$pet3expTimer = clean($_POST['pet3expTimer'], $mysqli);
	$pet3aniY = clean($_POST['pet3aniY'], $mysqli);
	$pet3name = clean($_POST['pet3name'], $mysqli);
	$pet3formChange = clean($_POST['pet3formChange'], $mysqli);
	//PET 4
	$pet4exists = clean($_POST['pet4exists'], $mysqli);
	$pet4canRelease = clean($_POST['pet4canRelease'], $mysqli);
	$pet4petSpecies = clean($_POST['pet4petSpecies'], $mysqli);
	$pet4speciesIndex = clean($_POST['pet4speciesIndex'], $mysqli);
	$pet4petForm = clean($_POST['pet4petForm'], $mysqli);
	$pet4wasHappyTeen = clean($_POST['pet4wasHappyTeen'], $mysqli);
	$pet4mood = clean($_POST['pet4mood'], $mysqli);
	$pet4nextEventTime = clean($_POST['pet4nextEventTime'], $mysqli);
	$pet4expTimer = clean($_POST['pet4expTimer'], $mysqli);
	$pet4aniY = clean($_POST['pet4aniY'], $mysqli);
	$pet4name = clean($_POST['pet4name'], $mysqli);
	$pet4formChange = clean($_POST['pet4formChange'], $mysqli);
	//USER CODEX PAGE 1
	$uc01 = clean($_POST['uc01'], $mysqli); $uc02 = clean($_POST['uc02'], $mysqli); $uc03 = clean($_POST['uc03'], $mysqli);
	$uc04 = clean($_POST['uc04'], $mysqli); $uc05 = clean($_POST['uc05'], $mysqli); $uc06 = clean($_POST['uc06'], $mysqli);
	$uc07 = clean($_POST['uc07'], $mysqli); $uc08 = clean($_POST['uc08'], $mysqli); $uc09 = clean($_POST['uc09'], $mysqli);
	//PAGE 2
	$uc11 = clean($_POST['uc11'], $mysqli); $uc12 = clean($_POST['uc12'], $mysqli); $uc13 = clean($_POST['uc13'], $mysqli);
	$uc14 = clean($_POST['uc14'], $mysqli); $uc15 = clean($_POST['uc15'], $mysqli); $uc16 = clean($_POST['uc16'], $mysqli);
	$uc17 = clean($_POST['uc17'], $mysqli); $uc18 = clean($_POST['uc18'], $mysqli); $uc19 = clean($_POST['uc19'], $mysqli);
	//PAGE 3
	$uc21 = clean($_POST['uc21'], $mysqli); $uc22 = clean($_POST['uc22'], $mysqli); $uc23 = clean($_POST['uc23'], $mysqli);
	$uc24 = clean($_POST['uc24'], $mysqli); $uc25 = clean($_POST['uc25'], $mysqli); $uc26 = clean($_POST['uc26'], $mysqli);
	$uc27 = clean($_POST['uc27'], $mysqli); $uc28 = clean($_POST['uc28'], $mysqli); $uc29 = clean($_POST['uc29'], $mysqli);
	//PAGE 4
	$uc31 = clean($_POST['uc31'], $mysqli); $uc32 = clean($_POST['uc32'], $mysqli); $uc33 = clean($_POST['uc33'], $mysqli);
	$uc34 = clean($_POST['uc34'], $mysqli); $uc35 = clean($_POST['uc35'], $mysqli); $uc36 = clean($_POST['uc36'], $mysqli);
	$uc37 = clean($_POST['uc37'], $mysqli); $uc38 = clean($_POST['uc38'], $mysqli); $uc39 = clean($_POST['uc39'], $mysqli);
	//PAGE 5
	$uc41 = clean($_POST['uc41'], $mysqli); $uc42 = clean($_POST['uc42'], $mysqli); $uc43 = clean($_POST['uc43'], $mysqli);
	$uc44 = clean($_POST['uc44'], $mysqli); $uc45 = clean($_POST['uc45'], $mysqli); $uc46 = clean($_POST['uc46'], $mysqli);
	$uc47 = clean($_POST['uc47'], $mysqli); $uc48 = clean($_POST['uc48'], $mysqli); $uc49 = clean($_POST['uc49'], $mysqli);
	//PAGE 6
	$uc51 = clean($_POST['uc51'], $mysqli); $uc52 = clean($_POST['uc52'], $mysqli); $uc53 = clean($_POST['uc53'], $mysqli);
	$uc54 = clean($_POST['uc54'], $mysqli); $uc55 = clean($_POST['uc55'], $mysqli); $uc56 = clean($_POST['uc56'], $mysqli);
	$uc57 = clean($_POST['uc57'], $mysqli); $uc58 = clean($_POST['uc58'], $mysqli); $uc59 = clean($_POST['uc59'], $mysqli);
	//PAGE 7
	$uc61 = clean($_POST['uc61'], $mysqli); $uc62 = clean($_POST['uc62'], $mysqli); $uc63 = clean($_POST['uc63'], $mysqli);
	$uc64 = clean($_POST['uc64'], $mysqli); $uc65 = clean($_POST['uc65'], $mysqli); $uc66 = clean($_POST['uc66'], $mysqli);
	$uc67 = clean($_POST['uc67'], $mysqli); $uc68 = clean($_POST['uc68'], $mysqli); $uc69 = clean($_POST['uc69'], $mysqli);
	//PAGE 8
	$uc71 = clean($_POST['uc71'], $mysqli); $uc72 = clean($_POST['uc72'], $mysqli); $uc73 = clean($_POST['uc73'], $mysqli);
	$uc74 = clean($_POST['uc74'], $mysqli); $uc75 = clean($_POST['uc75'], $mysqli); $uc76 = clean($_POST['uc76'], $mysqli);
	$uc77 = clean($_POST['uc77'], $mysqli); $uc78 = clean($_POST['uc78'], $mysqli); $uc79 = clean($_POST['uc79'], $mysqli);
	//PAGE 9
	$uc81 = clean($_POST['uc81'], $mysqli); $uc82 = clean($_POST['uc82'], $mysqli); $uc83 = clean($_POST['uc83'], $mysqli);
	$uc84 = clean($_POST['uc84'], $mysqli); $uc85 = clean($_POST['uc85'], $mysqli); $uc86 = clean($_POST['uc86'], $mysqli);
	$uc87 = clean($_POST['uc87'], $mysqli); $uc88 = clean($_POST['uc88'], $mysqli); $uc89 = clean($_POST['uc89'], $mysqli);

	////////////////////////////////////////////////////////////////////////////////////////////////
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
	
	//CREATE UPDATE QUERY (FOR THEME COLOR)
	$updateQry = "INSERT INTO ppusers (username, themeColor) VALUES ('".$name."','".$themeColor."') "."ON DUPLICATE KEY UPDATE themeColor=VALUES(themeColor);";
	//EXECUTE UPDATE QUERY (FOR THEME COLOR)
  $mysqli -> query($updateQry);

	//CREATE UPDATE QUERY (FOR PETS)
	$updateQry = "INSERT INTO pppets VALUES ('".$pet1Id."',".$pet1exists.",".$pet1canRelease.",'".$pet1petSpecies."',".$pet1speciesIndex.",'".$pet1petForm."',".$pet1wasHappyTeen.",".$pet1mood.",".$pet1nextEventTime.",".$pet1expTimer.",".$pet1aniY.",'".$pet1name."',".$pet1formChange."),('".$pet2Id."',".$pet2exists.",".$pet2canRelease.",'".$pet2petSpecies."',".$pet2speciesIndex.",'".$pet2petForm."',".$pet2wasHappyTeen.",".$pet2mood.",".$pet2nextEventTime.",".$pet2expTimer.",".$pet2aniY.",'".$pet2name."',".$pet2formChange."),('".$pet3Id."',".$pet3exists.",".$pet3canRelease.",'".$pet3petSpecies."',".$pet3speciesIndex.",'".$pet3petForm."',".$pet3wasHappyTeen.",".$pet3mood.",".$pet3nextEventTime.",".$pet3expTimer.",".$pet3aniY.",'".$pet3name."',".$pet3formChange."),('".$pet4Id."',".$pet4exists.",".$pet4canRelease.",'".$pet4petSpecies."',".$pet4speciesIndex.",'".$pet4petForm."',".$pet4wasHappyTeen.",".$pet4mood.",".$pet4nextEventTime.",".$pet4expTimer.",".$pet4aniY.",'".$pet4name."',".$pet4formChange.") "."ON DUPLICATE KEY UPDATE petExists=VALUES(petExists), canRelease=VALUES(canRelease), petSpecies=VALUES(petSpecies), speciesIndex=VALUES(speciesIndex), petForm=VALUES(petForm), wasHappyTeen=VALUES(wasHappyTeen), mood=VALUES(mood), nextEventTime=VALUES(nextEventTime), expTimer=VALUES(expTimer), aniY=VALUES(aniY), name=VALUES(name), formChange=VALUES(formChange);";
	//EXECUTE UPDATE QUERY (FOR PETS)
	$mysqli -> query($updateQry);
	
	//CREATE UPDATE QUERY (FOR CODEX)
	$updateQry = "INSERT INTO ppuserCodex VALUE (".$userId.",".$uc01.",".$uc02.",".$uc03.",".$uc04.",".$uc05.",".$uc06.",".$uc07.",".$uc08.",".$uc09.",".$uc11.",".$uc12.",".$uc13.",".$uc14.",".$uc15.",".$uc16.",".$uc17.",".$uc18.",".$uc19.",".$uc21.",".$uc22.",".$uc23.",".$uc24.",".$uc25.",".$uc26.",".$uc27.",".$uc28.",".$uc29.",".$uc31.",".$uc32.",".$uc33.",".$uc34.",".$uc35.",".$uc36.",".$uc37.",".$uc38.",".$uc39.",".$uc41.",".$uc42.",".$uc43.",".$uc44.",".$uc45.",".$uc46.",".$uc47.",".$uc48.",".$uc49.",".$uc51.",".$uc52.",".$uc53.",".$uc54.",".$uc55.",".$uc56.",".$uc57.",".$uc58.",".$uc59.",".$uc61.",".$uc62.",".$uc63.",".$uc64.",".$uc65.",".$uc66.",".$uc67.",".$uc68.",".$uc69.",".$uc71.",".$uc72.",".$uc73.",".$uc74.",".$uc75.",".$uc76.",".$uc77.",".$uc78.",".$uc79.",".$uc81.",".$uc82.",".$uc83.",".$uc84.",".$uc85.",".$uc86.",".$uc87.",".$uc88.",".$uc89.") "."ON DUPLICATE KEY UPDATE uc01=VALUES(uc01), uc02=VALUES(uc02), uc03=VALUES(uc03), uc04=VALUES(uc04), uc05=VALUES(uc05), uc06=VALUES(uc06), uc07=VALUES(uc07), uc08=VALUES(uc08), uc09=VALUES(uc09), uc11=VALUES(uc11), uc12=VALUES(uc12), uc13=VALUES(uc13), uc14=VALUES(uc14), uc15=VALUES(uc15), uc16=VALUES(uc16), uc17=VALUES(uc17), uc18=VALUES(uc18), uc19=VALUES(uc19), uc21=VALUES(uc21), uc22=VALUES(uc22), uc23=VALUES(uc23), uc24=VALUES(uc24), uc25=VALUES(uc25), uc26=VALUES(uc26), uc27=VALUES(uc27), uc28=VALUES(uc28), uc29=VALUES(uc29), uc31=VALUES(uc31), uc32=VALUES(uc32), uc33=VALUES(uc33), uc34=VALUES(uc34), uc35=VALUES(uc35), uc36=VALUES(uc36), uc37=VALUES(uc37), uc38=VALUES(uc38), uc39=VALUES(uc39), uc41=VALUES(uc41), uc42=VALUES(uc42), uc43=VALUES(uc43), uc44=VALUES(uc44), uc45=VALUES(uc45), uc41=VALUES(uc46), uc41=VALUES(uc47), uc41=VALUES(uc48), uc41=VALUES(uc49), uc51=VALUES(uc51), uc52=VALUES(uc52), uc53=VALUES(uc53), uc54=VALUES(uc54), uc55=VALUES(uc55), uc56=VALUES(uc56), uc57=VALUES(uc57), uc58=VALUES(uc58), uc59=VALUES(uc59), uc61=VALUES(uc61), uc62=VALUES(uc62), uc63=VALUES(uc63), uc64=VALUES(uc64), uc65=VALUES(uc65), uc66=VALUES(uc66), uc67=VALUES(uc67), uc68=VALUES(uc68), uc69=VALUES(uc69), uc71=VALUES(uc71), uc72=VALUES(uc72), uc73=VALUES(uc73), uc74=VALUES(uc74), uc75=VALUES(uc75), uc76=VALUES(uc76), uc77=VALUES(uc77), uc78=VALUES(uc78), uc79=VALUES(uc79), uc81=VALUES(uc81), uc82=VALUES(uc82), uc83=VALUES(uc83), uc84=VALUES(uc84), uc85=VALUES(uc85), uc86=VALUES(uc86), uc87=VALUES(uc87), uc88=VALUES(uc88), uc89=VALUES(uc89);";
	//EXECUTE UPDATE QUERY (FOR CODEX)
	$mysqli -> query($updateQry);
	
	echo "writing=Ok";
	exit();
	$mysqli -> close();
?>