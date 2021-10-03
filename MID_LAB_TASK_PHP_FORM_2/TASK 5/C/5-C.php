<?php 

	if(isset($_REQUEST['submit'])){
		$degree = $_REQUEST['mydegree'];
	}

?>

<html>
<head>
	<title>DEGREE</title>
</head>
<body>
<fieldset>
<legend>DEGREE</legend>
	<form method="post" >
		<input type="checkbox" name="mydegree[]" value="SSC" <?php if(isset($_POST['mydegree']) && in_array("SSC",$_POST['mydegree'])) echo 'checked="checked"';?>/> SSC
		<input type="checkbox" name="mydegree[]" value="HSC" <?php if(isset($_POST['mydegree']) && in_array("HSC",$_POST['mydegree'])) echo 'checked="checked"';?>/> HSC
		<input type="checkbox" name="mydegree[]" value="BSc" <?php if(isset($_POST['mydegree']) && in_array("BSc",$_POST['mydegree'])) echo 'checked="checked"';?>/> BSc
		<input type="checkbox" name="mydegree[]" value="MSc" <?php if(isset($_POST['mydegree']) && in_array("MSc",$_POST['mydegree'])) echo 'checked="checked"';?>/> MSc

        <hr> 
		<input type="submit" name="submit" value="Submit"/>
	</form>
    </fieldset>
</body>
</html>