<?php
$db = mysqli_connect( "localhost", "root", "", "survey");
		$SQL = "CREATE TABLE users (ID VARCHAR(20) NOT NULL PRIMARY KEY, FirstName VARCHAR(20), LastName VARCHAR(20),Reputation VARCHAR(50),Phn BIGINT, MailID VARCHAR(50), Password VARCHAR(20),confirmP VARCHAR(20))"; 
 
		mysqli_query($db, $SQL);



	      
		$SQ = "CREATE TABLE survey (SI_No INT PRIMARY KEY AUTO_INCREMENT, S_ID VARCHAR(20), Name VARCHAR(30), 
		Ward_Number INT, House_Number INT, Address VARCHAR(60), Panchayath_Name VARCHAR(40), District VARCHAR(20), 
		Officer_Name VARCHAR(30), Maximum_water_level_Reached VARCHAR(30), Year_of_home INT, Near_by_any_river VARCHAR(30), Any_damage_to_water_supply VARCHAR (20), 
		Do_you_have_a_flood_insurance_coverage VARCHAR(20), Is_there_any_damage_to_powersupply VARCHAR(20), Is_well_water_contaminated VARCHAR(20), Is_there_any_damage_to_sanitary_fittings VARCHAR(20), Have_you_ever_suffered_any_loss_due_to_flood VARCHAR(20), 
		Are_you_previously_field_any_claims VARCHAR(20), Details VARCHAR(100), Survey_Offers_RE VARCHAR(20), Amount BIGINT)";  

		mysqli_query($db, $SQ);




		$S= "CREATE TABLE suffered ( SSI_No INT references survey(SI_No), Wall_Collapsed VARCHAR(20), Roof_Damage VARCHAR(20), Diagonal_Crack VARCHAR(20), Others VARCHAR(20))";

		mysqli_query($db, $S); 






		$SQLIG = "CREATE TABLE rate (Num INT PRIMARY KEY AUTO_INCREMENT, roof_rate INT, wall_rate INT, water_rate INT, sanitary_rate INT)";
		mysqli_query($db, $SQLIG); 
		
		
		
		




mysqli_close($db);
?>



