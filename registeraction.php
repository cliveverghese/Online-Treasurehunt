<?php
	require_once("database.php");
	foreach($_GET as $f1)
	{
		if($f1==NULL)
			$flag = 1;
	}
	if($flag == 1)
	{
		$content = "Please fill in all the details in the <a href = \"register.php\">Registration Form</a>";
	}
	else
	{
		$name = filter_var($_GET["username"],513);
		$password = filter_var($_GET["password"],513);
		$phone = filter_var($_GET["phone"],519);
		$college = filter_var($_GET["college"],513);
		$email = filter_var($_GET["email"],274);
		$alias = filter_var($_GET["alias"],513);
		if(!$name)
		{
			$content = "Enter a valid username<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else if(!$alias)
		{
			$content = "Enter a valid alias<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else if(!$password) 
		{
			$content = "Enter a valid password<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else if(!$phone)
		{
			$content = "Enter a valid phone number<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else if(!$college)
		{
			$content = "Enter a valid college<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else if(!$email)
		{
			$content = "Enter a valid Email<br>Return to <a href = \"register.php\">Registration Form</a>";
		}
		else
		{
			$sql = "SELECT COUNT(*) FROM users WHERE name = '" . mysql_real_escape_string($name) . "'";
			$ref = mysql_query($sql);
			$result = mysql_result($ref,0);
			if($result == 0)
			{
				$sql = "SELECT COUNT(*) FROM users WHERE fname = '" . mysql_real_escape_string($alias) . "'";
				$ref = mysql_query($sql);
				$result = mysql_result($ref,0);
				if($result == 0)
				{
					$sql = "INSERT INTO users (name,password,level,passtime,mob, college, email,role,fname) VALUES ('" . mysql_real_escape_string($name) . "','" . sha1(mysql_real_escape_string($password)) . "','0','" . time() . "','". $phone . "','" . mysql_real_escape_string($college) .  "','" . mysql_real_escape_string($email) . "','1','" . mysql_real_escape_string($alias) . "')";
					$ref = mysql_query($sql);
				
				
					$content = "Registered Sucessfully, Take me to the <a href = \"loginform.php\">login page</a>";
				}
				else
					$content = "That alias is already taken. <a href \"register.php\">Try another alias</a>";
			}
			else 
				$content = "That username is already take. <a href = \"register.php\">Try another username</a>";
	
		}
	}
	require_once("theme/theme.php");
?>	
