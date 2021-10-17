<?php 
	session_start();

	if(isset($_POST['submit'])){

		$id 	= $_POST['id'];
		$password 	= $_POST['password'];

		if($id != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$idd = explode('|', $data);	
					
					if($id == trim($idd[1]) && $password == trim($idd[2])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}

				echo "invalid id/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid id....";
		}
	}
?>