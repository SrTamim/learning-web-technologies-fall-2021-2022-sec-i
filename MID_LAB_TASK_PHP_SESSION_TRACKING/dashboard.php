<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Dashboard</title>
</head>

<body>
	<table border="1" width="50%" align="center">
		<tr>
			<td colspan="1">
				<img src="logo.png" alt="logo">
                
			</td>
            <td>
                <div align="right" style="position: relative; right: 30px" >
                Loggedin as | <a href="login.php"> Logout</a>
                </div></td>
		</tr>
		
		<tr style="height:150px;" width="150px">
			<td>
				<h4>Account</h4><hr>
                <ul>
                    <li>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewprofile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="editProfile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="profilePic.html">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="changePass.html">Change Password</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
			</td>
            <td><h1>Welcome</h1></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>			
	</table>
</body>
</html>

<?php
	}else{
		header('location: login.php');
	}
?>