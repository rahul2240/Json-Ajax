<?php

include 'config.php';

$q = $_REQUEST["q"];
$q = strtolower($q);

$query= mysql_query("SELECT * FROM names WHERE name LIKE '$q%'");

while($row=mysql_fetch_array($query))
{
	$a[]=$row['name'];
	
}
 foreach($a as $r) {
  $hint .= " $r";
 }
 
 echo $hint;
?>