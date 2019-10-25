<?php
$errors[7] = ""; $errors[8] = "";$yes1="";$yes2="";$yes3="";$yes4="";
$errors[0] = ""; $errors[1] = ""; $errors[2] = ""; $errors[3] = ""; $errors[4] = ""; $errors[5] = ""; $errors[6] = ""; $errors[7] = ""; $errors[8] = ""; $errors[9] = ""; $errors[10] = ""; $errors[11] = ""; $errors[12] = ""; $errors[13] = ""; $errors[14] = ""; $errors[15] = "";
$errors[16] = ""; $errors[17] = ""; $errors[18] = ""; $errors[19] = ""; $errors[20] = ""; $errors[21] = ""; $errors[22] = ""; $errors[23] = ""; $errors[24] = ""; $errors[25] = ""; $errors[26] = ""; $errors[27] = ""; $errors[28] = ""; $errors[29] = ""; $errors[30] = ""; $errors[31] = ""; $errors[32] = ""; $errors[33] = "";
$errors[34] = "";
$db = mysqli_connect('localhost', 'root', '', 'survey');
if (isset($_POST['login_user'])) {
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$id = $_POST['ID'];
		if (empty($email)) { $errors[7] = "EmailID_Required" ; }
		else { if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) { $errors[7]  = "Invalid Email Format "; } }	
                if ($errors[7] == ""){
		if (empty($password)) { $errors[8] = "Password_Required"; }
		else { if (strlen($password) < 4)  { $errors[8] = "Atleast 5 characters needed in Password "; }  }
				}
	if ($errors[7] == ""){
		if (empty($id)) { $errors[29] = "Special_ID_Required" ; }}



	if (($errors[7] == "") && ($errors[8] == "") && ($errors[29]== "")) { $query3 = "SELECT * FROM users WHERE MailID ='$email'";
			$results3 = mysqli_query($db, $query3);

			if (!mysqli_num_rows($results3) == 1) 
				{ $errors[7] = "User Not Present"; }  }		

		if (($errors[7] == "") && ($errors[8] == "") && ($errors[29]== "")) {
			
			$query1 = "SELECT * FROM users WHERE MailID ='$email' AND Password ='$password'";
			$results1 = mysqli_query($db, $query1);

			if (mysqli_num_rows($results1) >= 1) 
				{
				$query2 = "SELECT * FROM users WHERE MailID ='$email' AND Password ='$password' AND ID = '$id'";
				$results2 = mysqli_query($db, $query2);
					if (mysqli_num_rows($results2) >= 1) 
							{
							$record = mysqli_fetch_array($results2);
							session_start(); $_SESSION['id'] = $id;
							header('location: survey.php');
							}
					else {

						$errors[29] = "Incorrect Special ID";
						}
							
				
				}
			else {
					$errors[8]= " Wrong username/password combination";
			     } 
                                  }
 



}


if (isset($_POST['reg_user'])) {
			
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$reputation = $_POST['reputation'];
		$phone = $_POST['phone'];
		$password1 = $_POST['password'];
		$password2 = $_POST['conf_password'];


		if (empty($firstname)) { $errors[0] = "FirstName_Is_Required" ;  }
		else { if (!preg_match("/^[a-zA-Z]*$/",$firstname)) { $errors[0] = "Only Letters and  White space Allowed";} }							      					       
		if (empty($lastname))  { $errors[1] = "LastName_Is_Required" ;  }
		else { if (!preg_match("/^[a-zA-Z]*$/",$lastname)) { $errors[1] = "Only Letters and  White space Allowed";} }
		if (empty($reputation))  { $errors[2] = "Reputation_Is_Required" ;  }
		if (empty($phone))  { $errors[3] = "Phone_Number_Is_Required" ;  }
	       	else { if(!is_numeric($phone)) { $errors[3] = "Invalid Format" ;  }}
		if (empty($email))  { $errors[4] = "MailID_Is_Required" ; }
		else { if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) { $errors[4]  = "Invalid Email Format "; } }

		if (empty($password1)) { $errors[5]= "Password_Is_Required"; }
		else { if (strlen($password1) < 4)  { $errors[5] = "Atleast 5 characters needed"; } }
		if (empty($password2)) { $errors[6] = "Confi_Password_Is_Required" ; }
	        else { if ($password1 != $password2) { $errors[6] = "Re_enter_the_Password Correctly" ; } }


	if (($errors[0]== "") && ($errors[1]== "") && ($errors[2]=="") && ($errors[3]=="") && ($errors[4]== "") && ($errors[5]== "") && ($errors[6]== "")) {
			$id= "rescue."."_".$firstname;
			$password = md5($password1);
			$query = "INSERT INTO users (ID, FirstName, LastName, Reputation, Phn, MailID, Password, confirmP) 
					  VALUES('$id','$firstname', '$lastname', '$reputation', '$phone' ,'$email' ,'$password1' ,'$password2')";
			mysqli_query($db, $query); }
}





if (isset($_POST['survey'])) { 

		$name= $_POST['Name'];
		$wardno = $_POST['Wardno'];
		$houseno = $_POST['houseno'];
		$address= $_POST['address'];
		$panjayath= $_POST['panchayathname'];
		$officer =$_POST['officername'];
		$max_water= $_POST['maximum_water_level_reached'];
		$nearbyriver= $_POST['nearbyriver'];
		$details= $_POST['details'];
		
		

if (empty($name)) { $errors[9] = "Name_Is_Required";  }
	else { if (!preg_match("/^[a-zA-Z]*$/",$name)) { $errors[9] = "Only Letters and  White space Allowed";} }
if (empty($wardno))  { $errors[10] = "wardno required" ;  }	
	else { if(!is_numeric($wardno)) { $errors[10] = "Invalid Format" ;  }}
if (empty($houseno))  { $errors[11] = "Houseno required" ;  }	
	else { if(!is_numeric($houseno)) { $errors[11] = "Invalid Format" ;  }}
if (empty($address)) { $errors[12] = "cannot be blank" ;  }
if (empty($panjayath)) { $errors[13] = "cannot be blank" ;  }
if (isset($_POST['district']))  { $district = $_POST['district']; } else { $errors[14] = "cannot be blank" ;  }
if (empty($officer)) { $errors[15] = "cannot be blank" ;  }
	else { if (!preg_match("/^[a-zA-Z]*$/",$officer)) { $errors[15] = "Only Letters and  White space Allowed";} }	
if (empty($max_water)) { $errors[16] = "cannot be blank" ;  }
	else { if(!is_numeric($max_water)) { $errors[16] = "Invalid Format" ;  }}
	
if (isset($_POST['yearofhome']))  { $yearofhome = $_POST['yearofhome']; } else { $errors[17] = "cannot be blank" ;  }
if (empty($nearbyriver)) { $errors[18] = "cannot be blank" ;  }
	else { if (!preg_match("/^[a-zA-Z]*$/",$nearbyriver)) { $errors[18] = "Only Letters and  White space Allowed";} }
if (isset($_POST['watersupply'])) { $watersupply = $_POST['watersupply']; }
	else { $errors[19] = "Tick on the correct option"; } 

if (isset($_POST['doyouhaveafloodinsurancecoverage'])) { $floodinsurance = $_POST['doyouhaveafloodinsurancecoverage']; }
	else { $errors[20] = "Tick on the correct option"; } 

if (isset($_POST['powersupply'])) { $powersupply = $_POST['powersupply'];}
	else { $errors[21] = "Tick on the correct option"; }

if (isset($_POST['wellwater'])) { $wellwater = $_POST['wellwater'];}
	else { $errors[22] = "Tick on the correct option"; }

if (isset($_POST['sanitary'])) { $sanitary = $_POST['sanitary'];}
	else { $errors[23] = "Tick on the correct option"; }


if (isset($_POST['yesno'])) { $yesno = $_POST['yesno'];  if ($yesno == "Yes" ) {  if (isset($_POST['yes1']) || isset($_POST['yes2']) || isset($_POST['yes3']) || isset($_POST['yes4'])) { $yes1 =$_POST['yes1'];  $yes2 =$_POST['yes2'];  $yes3 =$_POST['yes3'];  $yes4 =$_POST['yes4'];  } 
 	else { $errors[25] = "Tick on the correct option"; 
                        } } } else {  $errors[24] = "Tick on the correct option"; }








if (isset($_POST['previousclaim'])) { $previousclaim = $_POST['previousclaim'];}
	else { $errors[26] = "Tick on the correct option"; }




if (empty($details)) { $errors[27] = "cannot be blank" ;  }

if (isset($_POST['residing']))  {  $residing = $_POST['residing']; }
	else { $errors[28] = "Tick on the correct option"; }




			
	if (($errors[9]== "") && ($errors[10]== "") && ($errors[11]=="") && ($errors[12]=="") && ($errors[13]== "") && ($errors[14]== "") && ($errors[15]== "")  && ($errors[16]== "")  && ($errors[17]== "")  && ($errors[18]== "")  && ($errors[19]== "")  && ($errors[20]== "")  && ($errors[21]== "")  && ($errors[22]== "")  && ($errors[23] == "") && ($errors[24]== "")  && ($errors[25]== "") && ($errors[26] == "") && ($errors[27] == "") && ($errors[28] == "")) {

	session_start(); $id1 = $_SESSION['id'];
	$quer = "INSERT INTO survey (S_ID, Name, Ward_Number, House_Number, Address, Panchayath_Name, District, Officer_Name, Maximum_water_level_Reached, Year_of_home, Near_by_any_river, Any_damage_to_water_supply, Do_you_have_a_flood_insurance_coverage, Is_there_any_damage_to_powersupply, Is_well_water_contaminated, Is_there_any_damage_to_sanitary_fittings, Have_you_ever_suffered_any_loss_due_to_flood, Are_you_previously_field_any_claims, Details, Survey_Offers_RE)VALUES ('$id1', '$name', '$wardno', '$houseno', '$address', '$panjayath', '$district', '$officer', '$max_water', '$yearofhome', '$nearbyriver', '$watersupply','$floodinsurance','$powersupply', '$wellwater', '$sanitary', '$yesno', '$previousclaim','$details','$residing')";
	mysqli_query($db, $quer);
	if ($yesno == "Yes") { $qu = "INSERT INTO suffered ( Wall_Collapsed, Roof_Damage, Diagonal_Crack, Others)VALUES('$yes1', '$yes2', '$yes3', '$yes4')";  mysqli_query($db, $qu);}
		session_start();
				$_SESSION['district'] = $district;
				$_SESSION['name'] = $name;
				$_SESSION['houseno'] = $houseno;
	header('location: calc.php');
}
}

if (isset($_POST['search'])) {
	
	
		$name= $_POST['Name'];
		$wardno = $_POST['Wardno'];
		$houseno = $_POST['houseno'];
		$panjayath= $_POST['panchayathname'];
	
	if (empty($name)) { $errors[30] = "Name_Is_Required";  }
	else { if (!preg_match("/^[a-zA-Z]*$/",$name)) { $errors[30] = "Only Letters and  White space Allowed";} }
	
	if (empty($wardno))  { $errors[31] = "wardno required" ;  }	
	else { if(!is_numeric($wardno)) { $errors[31] = "Invalid Format" ;  }}
	
	if (empty($houseno))  { $errors[32] = "Houseno required" ;  }	
	else { if(!is_numeric($houseno)) { $errors[32] = "Invalid Format" ;  }}
	
	if (empty($panjayath)) { $errors[33] = "cannot be blank" ;  }
	
	if (isset($_POST['district']))  { $district = $_POST['district']; } else { $errors[34] = "cannot be blank" ;  }
	
	if (($errors[30]== "") && ($errors[31]== "") && ($errors[32]=="") && ($errors[33]=="") && ($errors[34]== ""))
	{
		$query4 = "SELECT * FROM survey WHERE Name ='$name' AND Ward_Number ='$wardno' AND House_Number = '$houseno' AND Panchayath_Name = '$panjayath' AND District = '$district'";
		$results4 = mysqli_query($db, $query4);	
		header('location: index.php');
	}
	
}
	


				




?>