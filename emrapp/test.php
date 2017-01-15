<?php
	session_start();
	$dbhost="localhost";
	$username="root";
	$password="";
	$db="emr";
	
	$conect=mysql_connect($dbhost, $username, $password) or die("Connection Failed");
	mysql_select_db("$db")or die("Connection Failed");
	
	$posted = false;
	
if (isset($_GET['Savebutton']))
{	
	
	$posted = true;
//	$pid = $_SESSION['Patient_ID'];
	$pid=1;
	

	$medhis1=$_GET['familyhis'];
	
	foreach($medhis1 as $selected)
	{
	
			$sql1="select `s_no` from `medhistory` where `MedhistoryType`='$selected'";
			$res=mysql_fetch_array(mysql_query($sql1));
						
			$index2=$res['s_no'];
			echo $index2."  is res\n";
			
			$rln=$_GET['relation'][$index2];
			
			echo " val of rln : ".$rln."";
		
			//echo $othr1." something";
			
			$sql2="insert into `parent_medhistory`(`Patient_ID`,`ParentMedHistory`,`Relationship`)values('$pid','$selected','$rln')";
	
			if(mysql_query($sql2)) 
			{
			//echo "Patient Info inserted";
			$result1 = "Job_Done";
			}
			else 
			{
				echo "Error: ".mysql_error();
			}
	}
	
	
}
?>

<center><br  /><br  />
<?php
	//$pid=$_SESSION['Patient_ID'];
     
	 if($posted)
	  {	
		if($result1)
		
		echo "<script type='text/javascript'>alert('Yeee result1 Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit result1')</script>";
	
	}
?>
</center>	

<form method="GET" action="">
<table border=1>
<tr><td bgcolor="#3498DB" align="right"></td>
<td bgcolor="#3498DB" align="right">
	<ul class="navbar">
      <li><a href="Login.php">Close</a></li>
	  <li class="active"><a href="Demographics.php">Demographics</a></li>
      <li><a href="MedicalHistory.php">Medical and Social History</a></li>
    </ul>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Med/Social History </td>
<td>
<button name="Savebutton" value="OK" type="Submit" style="float:right">Save</button>
</td>
</tr>




<tr> 
<td bgcolor="#3498DB" align="right">Family Medical History </td>
	<td>
		<?php
	
		$sql ="SELECT * FROM medhistory";
		$result = mysql_query($sql);
		
		//$temp2=0;
		while($row1 = mysql_fetch_array($result)) 
		{
					//$temp2++;
					
					echo"<input type='checkbox' name='familyhis[]' value='".$row1['MedhistoryType']."'>";
					echo $row1['MedhistoryType'];
						
					$index=$row1['s_no'];	
					
					echo"<br>Relationship to patient"; 
					$sql1 = "SELECT Relationtype FROM relationship";
					$result1 = mysql_query($sql1);
	
					echo"<select name='relation[".$index."]'>";
					echo"<option value='' selected>Select</option>";
					
					
					while ($row = mysql_fetch_array($result1))
					{
							echo $row['Relationtype'];
						echo"<option value='".$row['Relationtype']."'> ". $row['Relationtype']."</option><br>";
						
						
					}
					echo"</select>";
						

		
		
		echo"<br>";
		}			
	
					
					
		?>
	</td>
</tr>


</table>
</form>

