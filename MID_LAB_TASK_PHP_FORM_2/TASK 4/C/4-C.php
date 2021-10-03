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
		<input type="radio" name="mygender[]" value="Male" <?php if(isset($_POST['mygender']) && in_array("Male",$_POST['mygender'])) echo 'checked="checked"';?>/> Male
		<input type="radio" name="mygender[]" value="Female" <?php if(isset($_POST['mygender']) && in_array("Female",$_POST['mygender'])) echo 'checked="checked"';?>/> Female
		<input type="radio" name="mygender[]" value="Other" <?php if(isset($_POST['mygender']) && in_array("Other",$_POST['mygender'])) echo 'checked="checked"';?>/> Other
		
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>