<?php 

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
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
		<input type="email" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/> <br>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>