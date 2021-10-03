<?php 

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['mygender'];
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
		<input type="radio" id="male" name="mygender" value="<?php if(isset($gender)){ echo $gender; }?>">
		<label for="male">Male</label>
		<input type="radio" id="female" name="mygender" value="<?php if(isset($gender)){ echo $gender; }?>">
		<label for="female">Female</label>
		<input type="radio" id="other" name="mygender" value="<?php if(isset($gender)){ echo $gender; }?>">
		<label for="other">Other</label>

        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>