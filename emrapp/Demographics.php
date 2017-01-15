<?php
	
	
	session_start();
	
	$dbhost="localhost";
	$username="root";
	$password="";
	$db="emr";
	
	mysql_connect("$dbhost", "$username", "$password") or die("Connection Failed");
	mysql_select_db("$db")or die("Connection Failed");
	
	$posted = false;
	
if (isset($_POST['savebutton1']) || isset($_POST['savebutton2'])) 
{	
	
	$posted = true;
	
	$pid = $_SESSION['Patient_ID'];
	
	
	$gender=$_POST['Gender'];
	$race=$_POST['Race'];
	$ethnicity=$_POST['Ethnicity'];
	$language=$_POST['Language'];
	$hphone =$_POST['hphone'];
	$cphone=$_POST['cphone'];
	$wphone=$_POST['wphone'];
	$email=$_POST['eaddrs'];
	$daddrs=$_POST['draddrs'];
	
	$insurance=$_POST['Insu'];
	$hear=$_POST['Hear'];
	$refname=$_POST['Refrname'];
	$empname=$_POST['Emp_Name'];
	$empaddrs1=$_POST['Emp_Address1'];
	$empaddrs2=$_POST['Emp_Address2'];
	$empcity=$_POST['Emp_City'];
	$empstate=$_POST['Emp_state'];
	$empzip=$_POST['Emp_ZipCode'];
	
	$paddrs1=$_POST['P_Address1'];
	$paddrs2=$_POST['P_Address2'];
	$pcity=$_POST['P_City'];
	$pstate=$_POST['P_State'];
	$pzip=$_POST['P_ZipCode'];
	$adtype1="Physical";
	
	$baddrs1=$_POST['B_Address1'];
	$baddrs2=$_POST['B_Address2'];
	$bcity=$_POST['B_City'];
	$bstate=$_POST['B_State'];
	$bzip=$_POST['B_ZipCode'];
	$adtype2="Billing";

	$emr1name=$_POST['Emr1_Name'];
	$emr1addrs1=$_POST['Emr1_Address1'];
	$emr1addrs2=$_POST['Emr1_Address2'];
	$emr1city=$_POST['Emr1_City'];
	$emr1state=$_POST['Emr1_State'];
	$emr1zip=$_POST['Emr1_ZipCode'];
	$emr1hphone =$_POST['Emr1_hphone'];
	$emr1cphone=$_POST['Emr1_cphone'];
	$emr1wphone=$_POST['Emr1_wphone'];
	$emr1relation=$_POST['Emr1_relation'];
	$emrtype1="Emergency Contact1";
	
	$emr2name=$_POST['Emr2_Name'];
	$emr2addrs1=$_POST['Emr2_Address1'];
	$emr2addrs2=$_POST['Emr2_Address2'];
	$emr2city=$_POST['Emr2_City'];
	$emr2state=$_POST['Emr2_State'];
	$emr2zip=$_POST['Emr2_ZipCode'];
	$emr2hphone =$_POST['Emr2_hphone'];
	$emr2cphone=$_POST['Emr2_cphone'];
	$emr2wphone=$_POST['Emr2_wphone'];
	$emr2relation=$_POST['Emr2_relation'];
	$emrtype2="Emergency Contact2";
	
	$emr3name=$_POST['Emr3_Name'];
	$emr3addrs1=$_POST['Emr3_Address1'];
	$emr3addrs2=$_POST['Emr3_Address2'];
	$emr3city=$_POST['Emr3_City'];
	$emr3state=$_POST['Emr3_State'];
	$emr3zip=$_POST['Emr3_ZipCode'];
	$emr3hphone =$_POST['Emr3_hphone'];
	$emr3cphone=$_POST['Emr3_cphone'];
	$emr3wphone=$_POST['Emr3_wphone'];
	$emr3relation=$_POST['Emr3_relation'];
	$emrtype3="Emergency Contact3";
	
	$patientinfo_query= "insert into `patientinfo` (`Patient_ID`,`Gender`,`Race`,`Ethinicity`,`Pref_Language`,`Home_Phone`,`Cell_Phone`,`Work_Phone`,`Email_Addrs`,`Direct_Addrs`) values ('$pid','$gender','$race','$ethnicity','$language','$hphone','$cphone','$wphone','$email','$daddrs')";
	
	if(mysql_query($patientinfo_query)) 
	{
		//echo "Patient Info inserted";
		$result = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$physical_query= "insert into `physicalandbilling_addrs` (`Patient_ID`,`Addrs_type`,`Address1`,`Address2`,`City`,`State`,`Zip_code`) values ('$pid','$adtype1','$paddrs1','$paddrs2','$pcity','$pstate','$pzip')";
	
	if(mysql_query($physical_query)) 
	{
		//echo "Patient Info inserted";
		$result1 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$billing_query= "insert into `physicalandbilling_addrs` (`Patient_ID`,`Addrs_type`,`Address1`,`Address2`,`City`,`State`,`Zip_code`) values ('$pid','$adtype2','$baddrs1','$baddrs2','$bcity','$bstate','$bzip')";
	
	if(mysql_query($billing_query)) 
	{
		//echo "Patient Info inserted";
		$result2 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$patientinfo_personal_query= "insert into `patientinfo_personal` (`Patient_ID`,`Insurance`,`Hearaboutus`,`Reference`,`Emp_name`,`Emp_addrs1`,`Emp_addrs2`,`Emp_city`,`Emp_state`,`Emp_Zipcode`) values ('$pid','$insurance','$hear','$refname','$empname','$empaddrs1','$empaddrs2','$empcity','$empstate','$empzip')";
	
	if(mysql_query($patientinfo_personal_query)) 
	{
		//echo "Patient Info inserted";
		$result3 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}

	$emr1_query= "insert into `emergency_contact` (`Patient_ID`,`Emergency_contact_type`,`Emergency_name`,`Emergency_Addrs1`,`Emergency_Addrs2`,`Emergency_city`,`Emergency_state`,`Emergency_Zipcode`,`Emergency_hphone`,`Emergency_cphone`,`Emergency_wphone`,`Emergency_relation`) values ('$pid','$emrtype1','$emr1name','$emr1addrs1','$emr1addrs2','$emr1city','$emr1state','$emr1zip','$emr1hphone','$emr1cphone','$emr1wphone','$emr1relation')";
	
	if(mysql_query($emr1_query)) 
	{
		//echo "Patient Info inserted";
		$result4 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$emr2_query= "insert into `emergency_contact` (`Patient_ID`,`Emergency_contact_type`,`Emergency_name`,`Emergency_Addrs1`,`Emergency_Addrs2`,`Emergency_city`,`Emergency_state`,`Emergency_Zipcode`,`Emergency_hphone`,`Emergency_cphone`,`Emergency_wphone`,`Emergency_relation`) values ('$pid','$emrtype2','$emr2name','$emr2addrs1','$emr2addrs2','$emr2city','$emr2state','$emr2zip','$emr2hphone','$emr2cphone','$emr2wphone','$emr2relation')";
	
	if(mysql_query($emr2_query)) 
	{
		//echo "Patient Info inserted";
		$result5 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();	}

	$emr3_query= "insert into `emergency_contact` (`Patient_ID`,`Emergency_contact_type`,`Emergency_name`,`Emergency_Addrs1`,`Emergency_Addrs2`,`Emergency_city`,`Emergency_state`,`Emergency_Zipcode`,`Emergency_hphone`,`Emergency_cphone`,`Emergency_wphone`,`Emergency_relation`) values ('$pid','$emrtype3','$emr3name','$emr3addrs1','$emr3addrs2','$emr3city','$emr3state','$emr3zip','$emr3hphone','$emr3cphone','$emr3wphone','$emr3relation')";
	
	if(mysql_query($emr3_query)) 
	{
		//echo "Patient Info inserted";
		$result6 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
}
?>

<center>
<?php
	$pid=$_SESSION['Patient_ID'];

    if( $posted ) 
	{
		if( $result && $result1 && $result2 && $result3 && $result4 && $result5 && $result6)
		{
        echo "<script type='text/javascript'>alert('Yeee Demographic Info Submitted Successfully!')</script>";
		echo"<script type='text/javascript'>window.open('MedicalHistory.php','_self')</script>";
		}
		else
		{echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Patient Info and Try Again ')</script>";
		}
	/*
		if( $result1 ) 
        echo "<script type='text/javascript'>alert('Physical Addrs Info Submitted Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Physical Addrs Info and Try Again ')</script>";
	  
		if( $result2 ) 
        echo "<script type='text/javascript'>alert('Yeee Billing Addrs Info Submitted Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Billing Addrs Info Try Again ')</script>";
	  
	  	if( $result3 ) 
        echo "<script type='text/javascript'>alert('Yeee Employer Info Submitted Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Employer Info Try Again ')</script>";
	
		if( $result4 ) 
        echo "<script type='text/javascript'>alert('Yeee Emergency1 Info Submitted Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Emergency1 Info Try Again ')</script>";
	
		if( $result5 ) 
        echo "<script type='text/javascript'>alert('Yeee Emergency2 Info Submitted Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Emergency2 Info Try Again ')</script>";

		if( $result6 ) 
		{
        echo "<script type='text/javascript'>alert('Yeee Emergency3 Info Submitted Successfully!')</script>";
		echo"<script type='text/javascript'>window.open('MedicalHistory.php','_self')</script>";		
		}
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit Emergency3 Info Try Again ') </script>";
	  */
	}
?>
</center>

<script type="text/javascript">
function validateform()
{
	var number = /^[0-9]+$/;
	var letter = /^[a-zA-Z]+$/;
	var alphanumeric = /^[0-9a-zA-Z]+$/;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	var genderdropdown = document.demo.Gender;
	var racedropdown = document.demo.Race;
	var ethnicitydropdown = document.demo.Ethnicity;
	var languagedropdown = document.demo.Language;
	
	var hphn = document.demo.hphone;
	var cphn = document.demo.cphone;
	var wphn = document.demo.wphone;
	var email = document.demo.eaddrs;
	var directaddrs = document.demo.draddrs;
	
	var paddrs1 = document.demo.P_Address1;
	var paddrs2 = document.demo.P_Address2;
	var pcity = document.demo.P_City;
	var pstate = document.demo.P_State;
	var pzip = document.demo.P_ZipCode;
	
	var baddrs1 = document.demo.B_Address1;
	var baddrs2 = document.demo.B_Address2;
	var bcity = document.demo.B_City;
	var bstate = document.demo.B_State;
	var bzip = document.demo.B_ZipCode;
	
	
	
	if(genderdropdown.value=="Select" )
	{
		alert("Please select your Gender");
		genderdropdown.focus();
		return false; 
	}
		
	if(racedropdown.value=="Select" )
	{
		alert("Please select your Race");
		racedropdown.focus();
		return false; 
	}
	
	if(ethnicitydropdown.value=="Select" )
	{
		alert("Please select your Ethnicity");
		ethnicitydropdown.focus();
		return false; 
	}
	
	if(languagedropdown.value=="Select" )
	{
		alert("Please select your Language");
		languagedropdown.focus();
		return false; 
	}
	
	
	if(hphn.value.match(letter))  
	{  
	alert('Home Phone must have numeric value only');  
	hphn.focus();  
	return false;
	}
	
	if(cphn.value.match(letter))  
	{  
	alert('Cell Phone must have numeric value only');  
	cphn.focus();  
	return false;
	}
	
	if(wphn.value.match(letter))  
	{  
	alert('Work Phone must have numeric value only');  
	wphn.focus();  
	return false;
	}

	if(directaddrs.value.match(number))  
	{  
	alert('Please enter correct input');  
	directaddrs.focus();  
	return false;
	}
	
	if(paddrs1.value==null || paddrs1.value=="")
	{
	alert('Please enter physical address');	
	paddrs1.focus();
	return false;
	}
	else if(paddrs1.value.match(number))
	{
	alert('Please enter correct input');
	paddrs1.focus();	
	return false;	
	}	
	
	if(pcity.value==null || pcity.value=="")
	{
	alert('Please enter your City');	
	pcity.focus();
	return false;		
	}
	else if(pcity.value.match(number))
	{
	alert('Please enter correct value for pcity');
	pcity.focus();	
	return false;	
	}
	
	if(pstate.value=="Select" )
	{
		alert("Please select your State");
		pstate.focus();
		return false; 
	}
	
	if(pzip.value==null || pzip.value=="")
	{
	alert('Please enter your Zipcode');	
	pzip.focus();
	return false;
	}
	else if(pzip.value.match(letter))
	{
	alert('Please enter numeric value');
	pzip.focus();
	return false;
	}
	
	if(baddrs1.value==null || baddrs1.value=="")
	{
	alert('Please enter your Billing Address');	
	baddrs1.focus();
	return false;
		
	}
	
	if(bcity.value==null || bcity.value=="")
	{
	alert('Please enter your billing address City');	
	bcity.focus();
	return false;
	}
	
	else if(bcity.value.match(number))
	{
	alert('Please enter correct value for bcity');	
	bcity.focus();
	return false;
	}
	
	if(bstate.value=="Select" )
	{
		alert("Please select your billing address State");
		bstate.focus();
		return false; 
	}
	
	if(bzip.value==null || bzip.value=="")
	{
	alert('Please enter your billing address Zipcode');	
	bzip.focus();
	return false;
	}
	else if(bzip.value.match(letter))
	{
	alert('Please enter numeric value');
	bzip.focus();
	return false;
	}
	
}	

</script>

<script>
function copyphysical(c)
{
	
if(c.copyaddrs.checked == true)
	{
		c.B_Address1.value=c.P_Address1.value;
		c.B_Address2.value=c.P_Address2.value;
		c.B_City.value=c.P_City.value;
		c.B_State.value=c.P_State.value;
		c.B_ZipCode.value=c.P_ZipCode.value;
	}
if(c.copyaddrs1.checked == true)
	{
		c.Emr1_Address1.value=c.P_Address1.value;
		c.Emr1_Address2.value=c.P_Address2.value;
		c.Emr1_City.value=c.P_City.value;
		c.Emr1_State.value=c.P_State.value;
		c.Emr1_ZipCode.value=c.P_ZipCode.value;
	}	
	
if(c.copyaddrs2.checked == true)
	{
		c.Emr2_Address1.value=c.P_Address1.value;
		c.Emr2_Address2.value=c.P_Address2.value;
		c.Emr2_City.value=c.P_City.value;
		c.Emr2_State.value=c.P_State.value;
		c.Emr2_ZipCode.value=c.P_ZipCode.value;
	}		
	
if(c.copyaddrs3.checked == true)
	{
		c.Emr3_Address1.value=c.P_Address1.value;
		c.Emr3_Address2.value=c.P_Address2.value;
		c.Emr3_City.value=c.P_City.value;
		c.Emr3_State.value=c.P_State.value;
		c.Emr3_ZipCode.value=c.P_ZipCode.value;
	}		
}


</script>


<form name="demo" method="POST" action="" onsubmit="return validateform()">

<table border=1>
<tr>
<td bgcolor="#3498DB">
</td>

<td bgcolor="#3498DB" align="right">

    <ul class="navbar">
      <li><a href="Login.php">Close</a></li>
	  <li class="active"><a href="Demographics.php">Demographics</a></li>
      <li><a href="MedicalHistory.php">Medical and Social History</a></li>
    </ul>
</td>
</tr>




<tr> 
<td bgcolor="#3498DB" align="right"> Demographics </td>
<td>
<button name="savebutton1" value="OK" type="submit" style="float:right">Save</button>

</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Gender </td>
<td>
<select name="Gender">
<option value="Select" selected>Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Race <br> (per federal mandate)</td>
<td>
	
	<?php
	
	$sql = "SELECT Categories FROM race";
	$result = mysql_query($sql);
	
	echo"<select name='Race'>";
	echo"<option value='Select' selected>Select</option>";
	while ($row = mysql_fetch_array($result))
	{
		
		echo"<option value='".$row['Categories']."'> ". $row['Categories']."</option>";
		
	}
	echo"</select>";
	?>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Ethnicity </td>
<td>
	<select name="Ethnicity">
	
	<option value='Select' selected>Select</option>
	<option value="American">American</option>
	<option value="Indian">Indian</option>
	</select>
	
</tr>


<tr> 
<td bgcolor="#3498DB" align="right">Prefered Language </td>
<td>
	<?php
	
	$sql = "SELECT Type FROM language";
	$result = mysql_query($sql);
	
	echo"<select name='Language'>";
	echo"<option value='Select' selected>Select</option>";
	while ($row = mysql_fetch_array($result))
	{
		
		echo"<option value='".$row['Type']."'> ". $row['Type']."</option>";
		
	}
	echo"</select>";
	?>
</tr>






<tr> 
<td bgcolor="#3498DB" align="right">Home Phone </td>
<td><input type="text" name="hphone"/>(Numbers only)
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Cell Phone </td>
<td><input type="text" name="cphone"/>(Numbers only)
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Work Phone </td>
<td><input type="text" name="wphone"/>(Numbers only)
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Email Address </td>
<td><input type="email" name="eaddrs"/></td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Direct Address </td>
<td><input type="text" name="draddrs"/>
</td>
</tr>


<tr>
	<td bgcolor="#3498DB" align="right">Physical Address </td>
	<td>
		<table>
		<tr>
			<td>Address 1</td> 
			<td><input type="text" require name="P_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="P_Address2" /></td>		
			</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="P_City" /></td>
		</tr>

		<tr>
			<td>State</td> 
			<td>
					<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='P_State'>";
					echo"<option value='Select' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="P_ZipCode" /></td>
		</tr>
		</table>
	</td>
</tr>


<tr>
	<td bgcolor="#3498DB" align="right">Billing Address </td>
	<td>
		<table>
		<tr><input type="checkbox" name="copyaddrs" value="on" onclick="copyphysical(this.form)"> Copy Physical Address</tr>
		<tr>
			<td>Address 1</td> 
			<td><input type="text" name="B_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="B_Address2" /></td>		
			</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="B_City" /></td>
		</tr>

		<tr>
			<td>State</td> 
			<td>
			
			<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='B_State'>";
					echo"<option value='Select' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="B_ZipCode" /></td>
		</tr>
		</table>
	</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Insurance</td>
<td>
	<textarea rows="1" name="Insu" cols="50">
	</textarea></td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">How didi you hear about us?</td>
<td><select name="Hear" style="width:250px">
		<option value="hear" selected >Select</option>
		<option value="Socail Media">Socail Media</option>
		<option value="Newspaper">Newspaper</option>
		<option value="TV Adds">TV Adds</option>
		<option value="Friend">Friend</option>
		<option value="Other">Other</option>
		</select>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Referring Provider </td>
<td>Name<br>
		<select name="Refrname" style="width:250px">
		<option value="Select" selected>Select</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		</select>
</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right">Employer </td>
	<td>
		<table>
		
		<tr>
			<td>Name</td> 
			<td><input type="text" name="Emp_Name" /></td>
		</tr>
		
		<tr>
			<td>Address 1</td> 
			<td><input type="text" name="Emp_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="Emp_Address2" /></td>		
			</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="Emp_City" /></td>
		</tr>

		<tr>
			<td>State</td> 
			<td>
			
			<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='Emp_state'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="Emp_ZipCode" /></td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right">Emergency Contact #1 </td>
	<td>
		<table>
		<tr>
		<input type="checkbox" name="copyaddrs1" value="on" onclick="copyphysical(this.form)"> Copy Physical Address
		</tr>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="Emr1_Name" style="width: 250px"/></td>	
		</tr>
		
		<tr>
			<td>Address 1</td> 
			<td><input type="text" name="Emr1_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="Emr1_Address2" /></td>		
		</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="Emr1_City" /></td>
		</tr>

		<tr>
			<td>State</td> 
			<td>
			
			<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='Emr1_State'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="Emr1_ZipCode" /></td>
		</tr>
		
		<tr>
			<td>Home Phone</td>
			<td><input type="text" name="Emr1_hphone"/> (Numbers only)</td>
		
		<tr>	
			<td>Cell Phone</td> 
			<td><input type="text" name="Emr1_cphone"/> (Numbers only)</td>
		</tr>	
		
		<tr>
			<td>Work Phone</td> 
			<td><input type="text" name="Emr1_wphone"/> (Numbers only)</td>
			
		<tr>
			<td>Relationship to Patient</td> 
			<td>
			
			<?php
	
					$sql = "SELECT Relationtype FROM relationship";
					$result = mysql_query($sql);
	
					echo"<select name='Emr1_relation'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['Relationtype']."'> ". $row['Relationtype']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right">Emergency Contact #2 </td>
	<td>
		<table>
		<tr>
		<input type="checkbox" name="copyaddrs2" value="on" onclick="copyphysical(this.form)"> Copy Physical Address
		</tr>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="Emr2_Name" style="width: 250px"/></td>	
		</tr>
		
		<tr>
			<td>Address 1</td> 
			<td><input type="text" name="Emr2_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="Emr2_Address2" /></td>		
		</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="Emr2_City" /></td>
		</tr>

		<tr>
			<td>State</td> 
			<td>
			
			<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='Emr2_State'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="Emr2_ZipCode" /></td>
		</tr>
		
		<tr>
			<td>Home Phone</td>
			<td><input type="text" name="Emr2_hphone"/> (Numbers only)</td>
		
		<tr>	
			<td>Cell Phone</td> 
			<td><input type="text" name="Emr2_cphone"/> (Numbers only)</td>
		</tr>	
		
		<tr>
			<td>Work Phone</td> 
			<td><input type="text" name="Emr2_wphone"/> (Numbers only)</td>
			
		<tr>
			<td>Relationship to Patient</td> 
			<td>
			
			<?php
	
					$sql = "SELECT Relationtype FROM relationship";
					$result = mysql_query($sql);
	
					echo"<select name='Emr2_relation'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['Relationtype']."'> ". $row['Relationtype']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right">Emergency Contact #3 </td>
	<td>
		<table>
		<tr>
		<input type="checkbox" name="copyaddrs3" value="on" onclick="copyphysical(this.form)"> Copy Physical Address
		</tr>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="Emr3_Name" style="width: 250px"/></td>	
		</tr>
		
		<tr>
			<td>Address 1</td> 
			<td><input type="text" name="Emr3_Address1" /></td>
		</tr>

		<tr>
			<td>Address 2</td> 
			<td><input type="text" name="Emr3_Address2" /></td>		
		</tr>

		<tr>
			<td>City</td>
			<td><input type="text" name="Emr3_City" /></td>
		</tr>

		<tr>
			<td>State</td>
			<td>
			
			<?php
	
					$sql = "SELECT State FROM states";
					$result = mysql_query($sql);
	
					echo"<select name='Emr3_State'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['State']."'> ". $row['State']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		
		<tr>
			<td>ZipCode</td>	
			<td><input type="text" name="Emr3_ZipCode" /></td>
		</tr>
		
		<tr>
			<td>Home Phone</td>
			<td><input type="text" name="Emr3_hphone"/> (Numbers only)</td>
		
		<tr>	
			<td>Cell Phone</td> 
			<td><input type="text" name="Emr3_cphone"/> (Numbers only)</td>
		</tr>	
		
		<tr>
			<td>Work Phone</td> 
			<td><input type="text" name="Emr3_wphone"/> (Numbers only)</td>
			
		<tr>
			<td>Relationship to Patient</td> 
			<td>
			
			<?php
	
					$sql = "SELECT Relationtype FROM relationship";
					$result = mysql_query($sql);
	
					echo"<select name='Emr3_relation'>";
					echo"<option value='' selected>Select</option>";
					while ($row = mysql_fetch_array($result))
					{
						
						echo"<option value='".$row['Relationtype']."'> ". $row['Relationtype']."</option>";
						
					}
					echo"</select>";
					?>
			
			</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right"></td>
	<td>
	<button name="savebutton2" value="OK" type="Submit" style="float:right">Save</button>
	</td>

</tr>

</table>

</form>


