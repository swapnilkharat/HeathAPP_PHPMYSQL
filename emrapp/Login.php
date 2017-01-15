<?php
	session_start();
	$dbhost="localhost";
	$username="root";
	$password="";
	$db="emr";
	
	$conect=mysql_connect($dbhost, $username, $password) or die("Connection Failed");
	mysql_select_db("$db")or die("Connection Failed");
	
	
	if(isset($_POST['Patient_ID']))
	{
	$Patient_ID = $_POST['Patient_ID'];
	$Password = $_POST['Password'];
	$_SESSION['Patient_ID']=$Patient_ID;
	
	$sql="SELECT * FROM users WHERE Patient_ID='".$Patient_ID."' AND Password='".$Password."' LIMIT 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1)
		{
			echo"Succesfull";
			echo"<Script>window.open('Demographics.php','_self')</script>";
			exit();
			
		}
	else
		{
			echo"Unsuccesfull";
			exit();
			
		}
	}
?>
<center><br  /><br  /><br  /><br  />
<Table border=3>
<tr><td bgcolor="#3498DB">
<form method="Post" action="Login.php">
Please enter your login information<br /><br />
Patient_ID:<input type="Text" name="Patient_ID"><br /><br />
Password:<input type="Text" name="Password"><br /><br />
<input type="submit" name="login" value="Log In">
</form>
</td>
</tr>
</Table>
</center>