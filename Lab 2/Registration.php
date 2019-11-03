<?php
	if(isset($_POST['submit']))
{		
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$gender =$_POST['gender'];
		$dob =$_POST['dob'];
		
		
		if(empty($name)==true || empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true ||empty($dob) == true  || empty($gender)==true)
		{
			echo "Fill all!";
		}
		elseif ($pass!=$cpass) {
		echo "password doesn't match";	
		}
		
		else{
			$user = fopen('data.txt', 'a+');
			$data=fwrite($user, "$name"."|"."$uname"."|"."$email"."|"."$pass"."|"."$cpass"."|"."$gender"."|"."$dob"."|"."\n");
			
	fclose($user);
		header('location: Login.php');
	}
			}
		
?>



<html>
	<head>
			<title> Project </title>
	</head>
	<body>
	
	<center>
		<table border="1" >
			<tbody>	
					<tr height="100">
						
						<td width="400" style="border: none"; > 
							<h1>X Company</h1>
						</td>
						
						<td style="border: none"; > 
							<a href="Homee.php">Home |</a>
						</td>
						
						<td style="border: none"; > 
							<a href="Login.php">Login |</a>
						</td>
						
						<td style="border: none";> 
							<a href="Registration.php">Registration </a>
						</td>
						
						
						
					</tr>
					
					<tr style="border: none"; height="200">
					<td colspan='4'>
					
		<form method="POST" action="">			
		<fieldset>
			<legend><h3>Registration</h3></legend>
			<table border="0" align= "center">
				<tr>
					<td width="100">Name</td>
					<td>:<input type="text" name="name"  /></td>
				
				</tr>
				<tr height="10"></tr>
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				
				
				
				<tr>
					<td>Email</td>
					<td>:<input type="Email" name="email" /></td>
				</tr>
				<tr height="10"></tr>
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				
				<tr height="10"></tr>
				<tr>
					<td width="100">User Name</td>
					<td>:<input type="text" name="uname" /></td>
				
				</tr>
				
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				<tr height="10"></tr>
				
				<tr>
					<td width="150">Password</td>
					<td>:<input type="password" name="pass"   /></td>
				
				</tr>
				<tr height="10"></tr>
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				<tr height="10"></tr>
				<tr>
					<td width="100">Confirm Password</td>
					<td>:<input type="password" name="cpass"   /></td>
				
				</tr>
				<tr height="10"></tr>
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				<tr height="10"></tr>
				
				<tr>
				<td colspan="3">
				<fieldset>
			    	
				<legend>Gender</legend>
				<table>
				<tbody>
			
				<tr>
					<td>
						<input type="radio" name="gender" value="male"/> Male
						<input type="radio" name="gender" value="female"/> Female 
						<input type="radio" name="gender" value="other"/> Other 
					</td>
					
				</tr>
				</tbody>
				</table>
				</fieldset>
				</td>
				</tr>
				
				<tr height="10"></tr>
				
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				<tr height="10"></tr>
				
				
				
				<tr>
				<td colspan="3">
				<fieldset>
			    	
				<legend>Date of Birth</legend>
				<table>
				<tbody>
			
				<tr>
					<td>DOB:</td>
					<td>:<input type="date" name="dob" /></td>
					<td>(dd/mm/yyyy)</td>
				</tr>
				</tbody>
				</table>
				</fieldset>
				</td>
				</tr>
				
				<tr height="10"></tr>
				
				<tr>
					<td colspan="3" style="border-top:1px solid #888;">
					</td>
				</tr>
				
				
				<tr height="10"></tr>
				<tr>
					
					<td>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Reset">
						
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
					
						
					</td>
					</tr>
					
					<tr style="border: none";>
					<td align= "center" colspan='4'>Copyright 1047
					</td>
					</tr>
					
					
					
					
					
		</table>
	</center>
	
	</body>
	
</html>



<?php		
	
?>