<?php 

	$email = $_GET['mydate'];

?>

<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
<fieldset>
<legend>DATE OF BIRTH</legend>
	<form method="get" >
		<input type="date" name="mydate" value=""/> <br>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>