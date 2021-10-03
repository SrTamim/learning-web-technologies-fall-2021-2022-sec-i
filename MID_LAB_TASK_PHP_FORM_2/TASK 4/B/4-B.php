<?php 

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['mygender'];
		if($gender != ""){
			echo $gender;
		}else{
			echo "Null value...";
		}
	}

?>

<html>
<head>
	<title>GENDER</title>
</head>
<body>
<fieldset>
<legend>GENDER</legend>
	<form method="post" >
		<input type="radio" id="male" name="mygender" value="MALE">
		<label for="male">Male</label>
		<input type="radio" id="female" name="mygender" value="FEMALE">
		<label for="female">Female</label>
		<input type="radio" id="other" name="mygender" value="OTHER">
		<label for="other">Other</label>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>