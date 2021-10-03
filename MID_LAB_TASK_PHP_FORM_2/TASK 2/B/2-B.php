<?php 

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		if($email != ""){
			echo $email;
		}else{
			echo "Null value...";
		}
	}

?>

<html>
<head>
	<title>Email</title>
</head>
<body>
<fieldset>
<legend>Email</legend>
	<form method="post" >
		<input type="email" name="myemail" value=""/> <br>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>