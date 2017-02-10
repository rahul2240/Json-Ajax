<?php

include 'config.php';

$branchid=$_REQUEST["branchid"];



$sub = mysql_query("SELECT * FROM dynaselect1 WHERE branch_id='$branchid'");
if($branchid != ""){
	echo "<select id='subjects' onChange='subject()'>";
	echo "<option>select</option>";
while($subject = mysql_fetch_array($sub))
{
	
	echo "<option value='$subject[sub_id]'>";
	echo $subject['subject'];
	echo "</option>";
	
	
}
echo "</select>";
}

$subid=$_REQUEST["subid"];


if($subid != ""){
	
	$q = mysql_query("SELECT * FROM dynaselect1 WHERE sub_id='$subid'");
	
	echo "<select>";
	echo "<option>select</option>";
  while ($qu = mysql_fetch_array($q))
  {echo "<option>";
   echo $qu['semester'];

  echo "</option>";}
echo "</select>";
}








?>