<html>

<head>
	<title>Login</title>
</head>

<body>
   <form method="post" action="loginCheck.php">
	<table border="1" width="50%" align="center">
		<tr>
			<td>
				<img src="logo.png" alt="logo" >
                <div align="right" style="position: relative; bottom: 40px; right: 30px" >
                    <a href="home.html">Home</a> | <a href="login.php" style="margin:5px" >Login</a> | <a href="registration.php">Registration</a>
                    </div>
			</td>
			
		</tr>
		
		<tr style="height:200px;">
			<td colspan="2" align="center">
				<form method="" action="">
                    <fieldset style="width:400px">
                        <legend>LOGIN</legend>
                        <table>
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
                                <td colspan="2">
                                    <input type="checkbox" name="checkbox" value="">
                                    Remember me
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="forgotPass.html">Forgot Password?</a>
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