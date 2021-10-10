<html>

<head>
	<title>Registration</title>
</head>

<body>
   <form method="post" action="signupCheck.php">
	<table border="1" width="50%" align="center">
		<tr>
			<td>
				<img src="logo.png" alt="logo" >
                <div align="right" style="position: relative; bottom: 40px; right: 30px" >
                    <a href="home.html">Home</a> | <a href="login.php" style="margin:5px" >Login</a> | <a href="registration.php">Registration</a>
                    </div>
			</td>
		</tr>
		
		<tr style="height:400px">
			<td colspan="2" align="center">
				<form method="" action="">
                    <fieldset style="width:400px">
                        <legend>REGISTRATION</legend>
                        <table>
                            <tr>
                                <td>
                                    Name :
                                </td>
                                <td>
                                    <input type="text" name="name" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    Email :
                                </td>
                                <td>
                                    <input type="email" name="email" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    Username :
                                </td>
                                <td>
                                    <input type="text" name="username" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    Password :
                                </td>
                                <td>
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    Confirm Password :
                                </td>
                                <td>
                                    <input type="password" name="confirmPass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male">Male
                                        <input type="radio" name="gender" value="Female">Female
                                        <input type="radio" name="gender" value="Other">Other
                                    </fieldset>
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" value="Male">
                                    </fieldset>
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
            
                        </table>
                    </fieldset>
                </form>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>			
	</table>
</body>
</html>