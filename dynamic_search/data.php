<?php
	
	include 'config.php';
	
	error_reporting(0);
	
	// Got value inside textbox via url 
	
	$name_of_input=$_GET['name'];   // Take that value from url 
	
	$sql = "SELECT * FROM suggestname WHERE name LIKE '$name_of_input%'"; // Suggestname is table name 
	
	
	$query = mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_array($query)){
	
	echo "<option id='$row[id]'>"; echo $row[name]; echo "</option> ";
    }
	// Each option is returning to index.php file 
  
?>