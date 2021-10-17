<?php 

	if(isset($_POST['submit'])){

		$idd 	= $_POST['idd'];
		$password 	= $_POST['password'];
		$name = $_POST['name'];

		if($idd != "")
		{
			if($password != "")
			{

					$myfile = fopen('user.txt', 'a');
					$myuser = $idd."|".$password."|".$name."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);
					header('location: login.html');
			}
				else{
					echo "invalid pass....";
				}
		}
		else{
			echo "invalid id....";
		}
	}
	
?>