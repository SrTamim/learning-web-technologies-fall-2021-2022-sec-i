<?php 

	if(isset($_REQUEST['submit'])){
		$degree = $_REQUEST['mydegree'];
		if($degree != ""){
			echo $degree;
		}else{
			echo "Null value...";
		}
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
		<input type="checkbox" id="SSC" name="mydegree" value="SSC">
		<label for="SSC">SSC</label>
		<input type="checkbox" id="HSC" name="mydegree" value="HSC">
		<label for="HSC">HSC</label>
		<input type="checkbox" id="BSc" name="mydegree" value="BSc">
		<label for="BSc">BSc</label>
		<input type="checkbox" id="MSc" name="mydegree" value="MSc">
		<label for="MSc">MSc</label>
        <hr>
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>