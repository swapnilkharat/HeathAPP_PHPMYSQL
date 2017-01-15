<html>
	<body>
		<form action="check.php" method="POST">
			Red<input type="checkbox" name="color[]" id="color" value="red">
			Green<input type="checkbox" name="color[]" id="color" value="green">
			Blue<input type="checkbox" name="color[]" id="color" value="blue">
			Cyan<input type="checkbox" name="color[]" id="color" value="cyan">
			Magenta<input type="checkbox" name="color[]" id="color" value="Magenta">
			Yellow<input type="checkbox" name="color[]" id="color" value="yellow">

			Black<input type="checkbox" name="color[]" id="color" value="black">
			<textarea name="othermedic" maxlength="250" rows="4" cols="50">
</textarea>
</form>

<?php	
/*	$dbhost="localhost";
	$username="root";
	$password="";
	$db="emr";
	
	$conect=mysql_connect($dbhost, $username, $password) or die("Connection Failed");
	mysql_select_db("$db")or die("Connection Failed");

$sql ="SELECT MedhistoryType FROM medhistory";
	$result = mysql_query($sql);
	//echo "<table>";
	while($row = mysql_fetch_array($result)) 
	{
		
	echo'<input type="checkbox" name="medic[]" value=";} ?> $row['MedhistoryType']'">';
		//echo $row['MedhistoryType'];
		//<?php echo htmlentities($email_value) 
		echo "<br>";
		
    }
?>

			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>
*/?>

<?php
	
	
	if(isset($_POST['submit']))
	{
		//	$nm = $_POST['color'];
		echo "Selected Colors ";
		//$clr=$_POST['color'];
		//echo $_POST['medic'];
		echo "<br>";
		
	//	print_r($_POST['medic']);
		foreach($_POST['medic'] as $selected) 
		{
		//	$sql1="select s_no from medhistory where MedhistoryType=$selected";
			echo "<p>".$selected ."</p>";
			//$sql='insert into temp(pid,s_no,sts)values($pid,$sql1,$selected)';
		}
		
		
	//	foreach($clr as $selected) 
	//	{
		//	$sql1="select s_no from medhistory where MedhistoryType=$selected";
	//		echo "<p>".$selected ."</p>";
			//$sql='insert into temp(pid,s_no,sts)values($pid,$sql1,$selected)';
	//	}
		
		//echo "Hello".$nm;
		//$all=implode(',',$clr);
		//echo "<br> using implode           :    ".$all."<br>";
		//echo"<br>using explode<br>";
		//print_r(explode(",",$all));
	}	
	
?>


