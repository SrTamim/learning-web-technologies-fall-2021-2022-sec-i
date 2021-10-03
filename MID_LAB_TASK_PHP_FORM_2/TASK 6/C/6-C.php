<?php 

	if(isset($_REQUEST['submit'])){
		$group = $_REQUEST['bloodgroup'];
	}

?>

<html>
<head>
	<title>BLOOD GROUP</title>
</head>
<body>
<fieldset>
<legend>BLOOD GROUP</legend>
	<form method="post" >
	<select name="bloodgroup[]" >
                    <option disabled selected value> Select An Option </option>
                    <option name="bloodgroup[]" value="A Positive" <?php if(isset($_POST['bloodgroup']) && in_array("A Positive",$_POST['bloodgroup'])) echo 'selected="selected"';?> >A+</option>
                    <option name="bloodgroup[]" value="A Negative" <?php if(isset($_POST['bloodgroup']) && in_array("A Negative",$_POST['bloodgroup'])) echo 'selected="selected"';?> >A-</option>
                    <option name="bloodgroup[]" value="B Positive" <?php if(isset($_POST['bloodgroup']) && in_array("B Positive",$_POST['bloodgroup'])) echo 'selected="selected"';?> >B+</option>
                    <option name="bloodgroup[]" value="B Negative" <?php if(isset($_POST['bloodgroup']) && in_array("B Negative",$_POST['bloodgroup'])) echo 'selected="selected"';?> >B-</option>
                    <option name="bloodgroup[]" value="AB Positive" <?php if(isset($_POST['bloodgroup']) && in_array("AB Positive",$_POST['bloodgroup'])) echo 'selected="selected"';?> >AB+</option>

        </select>

        <hr> 
		<input type="submit" name="submit" value="Submit">
	</form>
    </fieldset>
</body>
</html>