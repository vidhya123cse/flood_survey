<!DOCTYPE html>
<?php session_start(); $sum = 0;
?>
<html lang="en">
	<?php  function calculation()
{	
	$k= $_SESSION['houseno'];$unit1=0;$unit2=0;$unit3=0;$unit4=0;
	$db = mysqli_connect('localhost', 'root', '', 'survey');
	
	 $query = "SELECT roof_rate,wall_rate,water_rate,sanitary_rate FROM rate";
	 $results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$row=mysqli_fetch_assoc($results);
			$rate1=$row["roof_rate"];
			$rate2=$row["wall_rate"];
			$rate3=$row["water_rate"];
			$rate4=$row["sanitary_rate"];
	
	$sum=0;
	$unit1=$_POST['unit1'];
	$unit2=$_POST['unit2'];
	$unit3=$_POST['unit3'];
	$unit4=$_POST['unit4'];
	 
	if ((empty($unit1)) && (empty($unit2)) && (empty($unit3)) && (empty($unit4)))
	{
		$query1 = "UPDATE survey SET`Amount = $sum WHERE House_Number = $k";  
		mysqli_query($db, $query1); 
		return $sum;	
	}
			
	elseif ((empty($unit2)) && (empty($unit3)) && (empty($unit4)))
	{
		$sum=$unit1*$rate1;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum; 
	}
		
	
	
	elseif ((empty($unit3)) && (empty($unit4)))
	{
		if (empty($unit1)) {
							$sum=$unit2*$rate2;
							$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
							mysqli_query($db, $query1); 
							return $sum;
			
							}
		else {
		$sum=$unit1*$rate1+$unit2*$rate2;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;}
	}

	elseif (empty($unit4))
	{
		if ((empty($unit1)) && (empty($unit2)))
		{
			$sum = $unit3*$rate3;
			$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
			mysqli_query($db, $query1); 
			return $sum;
		}
		
		if (empty($unit1))
			{
				$sum = $unit2*$rate2+$unit3*$rate3;
				$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
				mysqli_query($db, $query1); 
				return $sum;
			}
		
		if (empty($unit2))
		{
				$sum = $unit1*$rate1+$unit3*$rate3;
				$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
				mysqli_query($db, $query1); 
				return $sum;
		}
		else {
		
		$sum = $unit1*$rate1+$unit2*$rate2+$unit3*$rate3;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;
		}
	}
			
	

 elseif ((empty($unit1)) && (empty($unit2)))
 	{
	 if(empty($unit3))
	 {
		$sum = $unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;	 
	 }
	 
	 else
	 {
	 	$sum = $unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;
	 }
	 
	 
 	}
	 elseif ((empty($unit2)) && (empty($unit3)))
	 {
		$sum = $unit1*$rate1+$unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;	 
		 
	 }
		
	elseif (empty($unit1))
	 {
		$sum = $unit2*$rate2+$unit3*$rate3+$unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;	 
		 
	 }	
			
	elseif (empty($unit2))
	 {
		$sum = $unit1*$rate1+$unit3*$rate3+$unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;	
	}
			
			
	elseif (empty($unit3))
	 {
		$sum = $unit1*$rate1+$unit2*$rate2+$unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;
	}
			
else
	{
		$sum = $unit1*$rate1+$unit2*$rate2+$unit3*$rate3+$unit4*$rate4;
		$query1 = "UPDATE survey SET Amount = $sum WHERE House_Number = $k"; 
		mysqli_query($db, $query1); 
		return $sum;
	}
			
	
			
			

				
	
	
		}
}
?>	
<head>
  <title>Bootstrap Example</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2> 
  <form>
	<div class="form-group">
      <label for="district">District</label>
      <input type="text" class="form-control" id="district" value = <?php echo $_SESSION['district']; ?>>
    </div>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" value = <?php  echo $_SESSION['name']; ?>>
    </div>
    <div class="form-group">
      <label for="hsno">House no</label>
      <input type="text" class="form-control" id="hsno" value = <?php  echo $_SESSION['houseno']; ?>>
    </div>
	<br></form>
	
	<form class="form-inline" method ="post" action="calc.php">
    <div class="form-group">
      <label for="damage">Reconstructing roof&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </div>
    <div class="form-group">
 
     <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit1">
    </div><br><br>
	<form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="damage">Reconstructing wall&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       
    </div>
    <div class="form-group">
     <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit2">
    </div>
	<br><br>
	<form class ="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="damage">repairing water supply&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>
      
    </div>
    <div class="form-group">
     <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit3">
    </div><br><br>
	<form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="damage">repairing sanitary fitting&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       
    </div>
    <div class="form-group">
      
     <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit4">
    </div><br><br>
	
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" class="btn btn-default" onClick="calculation()">Submit</button>
	<br><br>
	<div class="form-group">
      <label for="result">AMOUNT</label>&nbsp;&nbsp;
     <input type="text" class="form-control" id="unit" placeholder="amount" value="<?php echo calculation(); ?>">
		
    </div><br><br>
	
  



	
  </form>
  
</div>

</body>
</html>
