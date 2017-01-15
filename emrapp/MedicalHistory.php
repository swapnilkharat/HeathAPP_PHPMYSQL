<?php
	session_start();
	$dbhost="localhost";
	$username="root";
	$password="";
	$db="emr";
	
	$conect=mysql_connect($dbhost, $username, $password) or die("Connection Failed");
	mysql_select_db("$db")or die("Connection Failed");
	
	$posted = false;
	
if (isset($_POST['Savebutton1']) || isset($_POST['Savebutton2']))
{	
	
	$posted = true;
	$pid = $_SESSION['Patient_ID'];
	
	$othr=$_POST['othermedic'];
	$yearsurgery=$_POST['Year'];
	$surgeryname=$_POST['Surgery'];
	$surgerylocation=$_POST['Location'];
	$allergyname=$_POST['Allergy'];
	$precord=$_POST['Pharmacy_Record'];
	$med=$_POST['Medication'];
	$mstrength=$_POST['Strength'];
	$mdos=$_POST['Dosform'];
	
	
	$maritalstatus=$_POST['Mstatus'];
	$live=$_POST['lwith'];
	$occupationstatus=$_POST['ostatus'];
	$petanimal=$_POST['petsanimal'];
	
	
	
	$sdetector=$_POST['smoke'];
	$sstatus=$_POST['SmokeStatus'];
	$scomment=$_POST['scomments'];
	$ssdate=$_POST['startdate'];
	$sqdate=$_POST['Quitdate'];
	$sexpose=$_POST['exposed'];
	$cdetector=$_POST['codetector'];
	$farm=$_POST['Firearm'];
	$fsecure=$_POST['Firearmsecure'];
		
	
	$daycaretype=$_POST['daycare'];
	$daycareperweek=$_POST['daycareweek'];
	$schoollevel=$_POST['school_level'];
	$averagegrade=$_POST['grade'];
	$activity=$_POST['activities1'];
	$bikehelmet=$_POST['helmet'];
	$seatbelt=$_POST['seat_belt'];
	$carseat=$_POST['car_seat'];
	$diet=$_POST['averagediet'];
	$milk=$_POST['Milkusage'];
	$numberoz=$_POST['ozbf'];
	$water=$_POST['waterusage'];
	$sleepinglocation=$_POST['SleepLocation'];
	$sleepingfreq=$_POST['SleepingF'];
	
	$medhis=$_POST['medic'];
	
	
	foreach($medhis as $selected)
	{
			$sql1="select `s_no` from `medhistory` where `MedhistoryType`='$selected'";
			$res=mysql_query($sql1);
			
			$data = mysql_fetch_assoc($res);
			$num = $data['s_no'];
			//$echo $othr."  this is textarea";			
			$sql2="insert into `patient_medhistory`(`Patient_ID`,`s_no_medhistory`,`MedHistory`)values('$pid','$num','$selected')";
	
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
	
	
	$medhis1=$_POST['familyhis'];
	
	foreach($medhis1 as $selected)
	{
	
			$sql1="select `s_no` from `medhistory` where `MedhistoryType`='$selected'";
			$res=mysql_fetch_array(mysql_query($sql1));
						
			$index2=$res['s_no'];
			//echo $index2."  is res\n";
			
			$rln=$_POST['relation'][$index2];
			
			//echo " val of rln : ".$rln."";
		
			
			$sql2="insert into `parent_medhistory`(`Patient_ID`,`ParentMedHistory`,`Relationship`)values('$pid','$selected','$rln')";
	
			if(mysql_query($sql2)) 
			{
			//echo "Patient Info inserted";
			$result2 = "Job_Done";
			}
			else 
			{
				echo "Error: ".mysql_error();
			}
	}
	
	$patient_otherhistory_query="insert into `patient_otherhistory` (`Patient_ID`,`OtherMedCondition`,`Yearofsurgery`,`Surgery_Name`,`Location_surgery`,`Allergies`,`Pharmacy`,`Medication_Name`,`Medication_Strength`,`Medication_doseform`) values ('$pid','$othr','$yearsurgery','$surgeryname','$surgerylocation','$allergyname','$precord','$med','$mstrength','$mdos')";
	if(mysql_query($patient_otherhistory_query)) 
	{
		//echo "Patient Info inserted";
		$result3 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	

	$patientinfo_social_query="insert into `patientinfo_social` (`Patient_ID`,`Parents_MaritalStatus`,`Livewith`,`Occupation`,`Pets`) values ('$pid','$maritalstatus','$live','$occupationstatus','$petanimal')";
	if(mysql_query($patientinfo_social_query)) 
	{
		//echo "Patient Info inserted";
		$result4 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$smoke_query="insert into `smoke` (`Patient_ID`,`Smoke_Detector`,`Smoking_Status`,`Comments`,`Start_Date`,`Quite_Date`,`Smoke_Exposure`,`CO_detector`,`Firearm_Present`,`Firearm_Secured`) values ('$pid','$sdetector','$sstatus','$scomment','$ssdate','$sqdate','$sexpose','$cdetector','$farm','$fsecure')";
	if(mysql_query($smoke_query)) 
	{
		//echo "Patient Info inserted";
		$result5 = "Job_Done";
	}
	else 
	{
		echo "Error: ".mysql_error();
	}
	
	$infobehaviour_query="insert into `patientinfo_behaviour` (`Patient_ID`,`Type_Daycare`,`Daycare_PerWeek`,`Current_SchoolLevel`,`Average_Grade`,`Activities`,`Bike_Helmet`,`Seat_Belts`,`Car_Seats`,`Average_Diet`,`Milk_Use`,`Number_bf`,`Water_Use`,`Sleeping_Location`,`Sleeping_Frequency`) values ('$pid','$daycaretype','$daycareperweek','$schoollevel','$averagegrade','$activity','$bikehelmet','$seatbelt','$carseat','$diet','$milk','$numberoz','$water','$sleepinglocation','$sleepingfreq')";
	if(mysql_query($infobehaviour_query)) 
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

<center><br  /><br  />
<?php
	$pid=$_SESSION['Patient_ID'];
      if($posted)
	  {	
		if($result1 && $result2 && $result3 && $result4 && $result5 && $result6)
		
		echo "<script type='text/javascript'>alert('MedicalHistory submited Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit all input')</script>";
	/*
		if( $result2 ) 
        echo "<script type='text/javascript'>alert('Yeee result2 Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit result2')</script>";
	
		if( $result4 ) 
        echo "<script type='text/javascript'>alert('Yeee result4 Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit result4')</script>";
	
		if( $result5 ) 
        echo "<script type='text/javascript'>alert('Yeee result5 Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit result5')</script>";
	
		if( $result6 ) 
        echo "<script type='text/javascript'>alert('Yeee result6 Successfully!')</script>";
		else
		echo "<script type='text/javascript'>alert(' Failed ! :( Please Submit result6')</script>";
		
	*/
	}
?>
</center>	

<form method="POST" action="">
<table border=1>
<tr><td bgcolor="#3498DB" align="right"></td>
<td bgcolor="#3498DB" align="right">
	<ul class="navbar">
      <li><a href="Login.php">Close</a></li>
	  <li><a href="Demographics.php">Demographics</a></li>
      <li class="active"><a href="MedicalHistory.php">Medical and Social History</a></li>
    </ul>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Med/Social History </td>
<td>
<button name="Savebutton1" value="OK" type="Submit" style="float:right">Save</button>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Medical History </td>
<td>

<?php
	
	
	$sql ="SELECT MedhistoryType FROM medhistory";
	$result = mysql_query($sql);
	//echo "<table>";
	$tmp=0;
	while($row = mysql_fetch_array($result)) 
	{
		$tmp++;
		echo "<input type='checkbox' name='medic[]' value='".$row['MedhistoryType']."'>";
		echo $row['MedhistoryType'];
		echo htmlspecialchars("                			                 ");
		//echo "&emsp";
		//echo "<span class='white-text' style='margin-right: 5em;'>";
		//str_repeat('&nbsp;', 5);
		if($tmp%2==0)
			echo "<br>";
		
    }
	
//	$diseases= implode(",",medhistory);
	
							
?>
</td>
</tr>

<tr> 
<td bgcolor="#3498DB" align="right">Other Medical Conditions </td>
<td>
<textarea name="othermedic" maxlength="250" rows="4" cols="50">
</textarea>
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

		
		
		echo"<br>";
		}			
	
					
					
		?>
	</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Surgical History </td>
<td>
		<!button name="Addbutton1" value="OK" type="button" style="float:right"><!/button>
		<table border=1>
		<tr>
		<td style="width:172px">
			Year of Surgery
		</td>
		<td>Sugery</td>
		<td>Location of Surgery</td>
		</tr>
		<tr>
		<td style="width:150px"><input type="date" name="Year"></input></td>
		<td style="width:150px"><input type="text" name="Surgery"></input></td>
		<td style="width:150px"><input type="text" name="Location"></input></td>
		</tr>
		</table>	
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Allergies </td>
<td>
		<!button name="Addbutton2" value="OK" type="button" style="float:right"><!/button>
		<table border=1>
		<tr>
		<td>Allergy</td>
		</tr>
		
		<tr>
		<td style="width:530px"><input type="text" name="Allergy" style="widht:600px"></input></td>
		</tr>
		</table>	
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Pharmacy</td>

<td style="width:400px" border=1>
	
	<!button name="Add/changebutton" value="OK" type="button" style="float:right"><!/button>
	<table border=1>
		<tr>
		<td>Pharmacy_Record</td>
		</tr>
		
		<tr>
		<td style="width:530px"><input type="text" name="Pharmacy Record" style="widht:600px"></input></td>
		</tr>
		</table>
	
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Medication</td>
<td>
		<!button name="Addbutton3" value="OK" type="button" style="float:right"><!/button>
		<table border=1>
		<tr>
		<td style="width:170px">Medication</td>
		<td>Strength</td>
		<td>Dos form</td>
		</tr>
		<tr>
		<td style="width:150px"><input type="text" name="Medication"></input></td>
		<td style="width:150px"><input type="text" name="Strength"></input></td>
		<td style="width:150px"><input type="text" name="Dosform"></input></td>
		</tr>
		</table>	
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Parent marital status</td>
<td>
	<select name="Mstatus" style="width: 173">
	<option value="MaritalStatus" Selected>Select</option>
	<option value="Single">Single</option>
	<option value="Married">Married</option>
	<option value="Divorced">Divorced</option>
	
	
	</select>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Live with</td>
<td>
	<select name="lwith" style="width: 173">
	<option value="Relation" Selected>Select</option>
	<option value="Alone">Alone</option>
	<option value="Family">Family</option>
	<option value="Friend">Friend</option>
	<option value="Other">Other</option>
	</select>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Occupation</td>
<td>
	<input type="text" name="ostatus">
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Pets</td>
<td>
	<select name="petsanimal" style="width: 173">
	<option value="Pets" Selected>Select</option>
	<option value="Dog">Dog</option>
	<option value="Cat">Cat</option>
	<option value="Other">Other</option>
	<option value="No Pets">No Pets</option>
	</select>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Smoke Detector</td>
<td>Is a smoke detector present in the home?<br>
	<input type="radio" name="smoke" value="Yes">Yes
	<input type="radio" name="smoke" value="No">No
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Smoking</td>
<td>
	Smoking Status<br>
	<Select name="SmokeStatus" style="width: 173">
	<option value="Select" selected>Select</option>
	<option value="Smoke Daily">Smoke Daily</option>
	<option value="Occasional Smoker">Occasional Smoker</option>
	<option value="Ex-Smoker">Ex-Smoker</option>
	<option value="Never Smoked">Never Smoked</option>
	</select><br>
	Comments<br>
	<textarea name="scomments" rows="3" cols="74"></textarea><br>
	Started Smoking date<br>
	<input type="date" name="startdate"><br>
	Quit Smoking date<br>
	<input type="date" name="Quitdate"><br>
	
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Smoke Exposer</td>
<td>Is the patient routinely expopsed to smoke?<br>
	<input type="radio" name="exposed" value="Yes">Yess
	<input type="radio" name="exposed" value="No">No
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">CO Detector</td>
<td>Is a Caebon Monoxide detector present in the home?<br>
	<input type="radio" name="codetector" value="Yes">Yess
	<input type="radio" name="codetector" value="No">No
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Firearm</td>
<td>
	Are Firearm present in the home?<br>
	<input type="radio" name="Firearm" value="Yes">Yes
	<input type="radio" name="Firearm" value="No">No <br>
	If yes, is the firearm secured<br>
	<input type="radio" name="Firearmsecure" value="Yes">Yes
	<input type="radio" name="Firearmsecure" value="No">No

	</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Day Care </td>
<td>
	Type of the day care  <Select name="daycare" style="widht: 173px">
						<option value="daycare" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						</select> <br>
	Day care days per week  <Select name="daycareweek" style="widht: 173px">
						<option value="daycareperweek" selected>Select</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select> <br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">School </td>
<td>
	Current school level  <Select name="school_level" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="Post Graduate">Post Graduate</option>
						<option value="Graduate">Graduate</option>
						<option value="Higher Secondary">Higher Secondary</option>
						<option value="Secondary">Secondary</option>
						<option value="Primary">Primary</oprion>
						</select> <br>
	Average grade  <Select name="grade" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="A+">A+</oprion>
						<option value="A">A</oprion>
						<option value="B">B</oprion>
						<option value="C">C</oprion>
						<option value="D">D</oprion>
						</select> <br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Activities</td>
<td>
<textarea name="activities1" rows="3" cols="74"></textarea>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Bike Helmet </td>
<td>
	Bike helmet usage	<Select name="helmet" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="Regular">Regular</option>
						<option value="Irregular">Irregular</option>
						<option value="Never">Never</option>
						</select><br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Seat Belt </td>
<td>
	Seat belt usage		<Select name="seat_belt"tyle="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="Regular">Regular</option>
						<option value="Irregular">Irregular</option>
						<option value="Never">Never</option>
						</select><br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Car seat </td>
<td>
	Car seat usage		<Select name="car_seat" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						</select><br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Eating drinking habbit </td>
<td>
	Average diet  <Select name="averagediet" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						</select><br>
						
	Milk usage  <Select name="Milkusage" style="widht: 173px">
					<option value="Select" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
					
					</select><br>
				
	Number of oz/day or # of bf	  <Select name="ozbf" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select><br>
						
	Water usage  <Select name="waterusage" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						</select><br>
</td>
</tr>

<tr>
<td bgcolor="#3498DB" align="right">Sleeping habbit </td>
<td>
	Sleeping Location 	<Select name="SleepLocation" style="widht: 173px">
						<option value="Select" selected>Select</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						</select><br>
						
	Sleeping Frequiency		<Select name="SleepingF" style="widht: 173px">
							<option value="Select" selected>Select</option>
							<option value="4-5 hrs">4-5 hrs</option>
							<option value="6-7 hrs">6-7 hrs</option>
							<option value="8-9 hrs">8-9 hrs</option>
							<option value="10-11 hrs">10-11 hrs</option>
							</select><br>
				
	
</td>
</tr>

<tr>
	<td bgcolor="#3498DB" align="right"></td>
	<td>
	<button name="Savebutton2" value="OK" type="Submit" style="float:right">Save</button>
	</td>

</tr>


</table>
</form>
