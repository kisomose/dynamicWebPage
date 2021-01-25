<?php
$host = "localhost";
$username 	="root";
$password	= "";
$dbname	= "jobs";

/*create connection */
$conn	= new mysqli ($host,$username,$password,$dbname);
/*checking connection*/
if($conn->connect_error){
   echo ("COnnetion failed: ".$conn->connect_error);
   
   echo "DB error ".$conn->error.$conn->connect_error;
}
else{
   echo "Connection successful";}

?>
<!DOCTYPE html >
<html>
<br>
<br>
<head><div id="navbar">
   <a href="PROFILE.php" tabindex="1" target="_self">PROFILE</a>
   <a href="Contact.php" tabindex="3" target="_self">CONTACT</a>
  </div>
  
 <link rel="stylesheet" href="stylesheet.css">
<title>publication and Projects</title>
</head>

<body>  
	<h1 style="color: red">ADMINS USE </h1>
    <form  action = "database.php" method = "POST">
	   First name 
	   <input style = "background-color: gray" type="text" name="jobID" />
      <br>
	  <br>
	  Last name
     <input style = "background-color: gray" type="text" name="NAME" />
    <br>
	<br>
	Password 
      <input style = "background-color: gray" type="text" name="COMPANY" />
      <br>
	  <br>
	<input style="background-color: red" type="submit" name="save" value="REGISTER!"/> 
	 <input style="background-color: red" type="submit" name="save1" value="SIGNUP!"/> 
	</form>
 
<?php
if (isset($_post['save']))
{
	$jid = $_POST['jobID'];
    $jname = $_POST['NAME'];
	 $comp = $_POST['COMPANY'];

	 $sql = "insert into job (jobID,NAME,COMPANY) values ($jid,$jname,$comp)";
	 if($conn->query($sql))
	 {
        echo "USER INSERTED SUCCESSFULLY!!!!";
    }
    else{
        echo "Error is here: ".$conn->error;
    }
}
if(isset($_POST['show']))
{ 
    $sql = "select * from job";

    $myquery = $conn->query($sql);

while($result = $myquery->fetch_assoc())
{
        echo "<br>";
        echo $result['jobID']." ".$result['NAME']." ".$result['COMPANY'];
		echo "<br>";
}
}
?>
		
 <h2 style="color: red">Guest Use </h2>
</body>
</html>

<?php 
/*JOB TABLE*/
 /*fecthing data and storing it in the assoicative array */
	$sql	= "SELECT jobID,NAME,COMPANY,SALARY,LOCATION FROM job";
	$phpsql = $conn ->query($sql);
 /*INSERTING DATA INTO THE DIFFERENT TABLES */
	
 echo "<table><tr><th>jobID</th>
	<th>Name</th>
	<th>COMPANY</th>
	<th>SALARY</th>
	<th>LOCATION</th>
	</tr>";
	//output data of each row
	while ($row = $phpsql->fetch_assoc())
	{
	echo "<tr><td>". $row["jobID"]. "</td> 
	<td>". $row["NAME"]. "</td> 
	<td>". $row["COMPANY"]. "</td> 
	<td>". $row["SALARY"]. "</td> 
	<td>". $row["LOCATION"]. "</td> 
	</tr>";
	}
	echo "</table>"; 
	
 	/*employee TABLE*/
 /*fecthing data and storing it in the assoicative array */
	$sql	= "SELECT EID,NAME,DUTY FROM employee";
	$phpsql = $conn ->query($sql);
 echo "<table><tr><th>EID</th>
 <th>Name</th>
 <th>DUTY</th>
 </tr>";
 //output data of each row
 while ($row = $phpsql->fetch_assoc())
 {
 echo "<tr><td>". $row["EID"]. "</td> 
 <td>". $row["NAME"]. "</td> 
 <td>". $row["DUTY"]. "</td> 
 </tr>";
 }
 echo "</table>"; 
 
 	/*DEPARTMENT TABLE*/
 /*fecthing data and storing it in the assoicative array */
	$sql	= "SELECT DID,NAMES,EID,COMPANY FROM department";
	$phpsql = $conn ->query($sql);
 echo "<table><tr><th>departmentID</th>
 <th>depatment_Name</th>
 <th>EmployeeID</th>
 <th>Company</th>
 </tr>";
 //output data of each row
 while ($row = $phpsql->fetch_assoc())
 {
 echo "<tr><td>". $row["DID"]. "</td> 
 <td>". $row["NAMES"]. "</td> 
 <td>". $row["EID"]. "</td> 
 <td>". $row["COMPANY"]. "</td> 
 </tr>";
 }
 echo "</table>"; 
?>

