<?php 

	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['mydate'];
	}

?>

<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
<fieldset>
<legend>DATE OF BIRTH</legend>
	<form method="post" >
		<input type="date" name="mydate" value="<?php if(isset($date)){ echo $date; }?>"/> <br>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>