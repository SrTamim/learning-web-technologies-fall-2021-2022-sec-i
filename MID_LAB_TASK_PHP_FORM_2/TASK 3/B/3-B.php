<?php 

	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['mydate'];
		if($date != ""){
			echo $date;
		}else{
			echo "Null value...";
		}
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
		<input type="date" name="mydate" value=""/> <br>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>