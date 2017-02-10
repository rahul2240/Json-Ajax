<?php
include 'config.php';
?>
<html>
<head>
<script>

function branch(){

var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","data.php?branchid=" + document.getElementById("branch").value, false);
	xmlhttp.send(null);
	
	document.getElementById("subject").innerHTML=xmlhttp.responseText;

}

function subject(){

var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","data.php?subid=" + document.getElementById("subjects").value, false);
	xmlhttp.send(null);
	
	document.getElementById("sem").innerHTML=xmlhttp.responseText;

}

</script>
</head>
<body>
<p><b>BRANCH</b></p>
<select id="branch" onChange="branch()">
<option>select</option>
<?php

$a = mysql_query("SELECT * FROM dynaselect");
while ($row = mysql_fetch_array($a))
{
	
?>

<option  value = "<?php echo $row['id']; ?>" ><?php echo $row['branch']; ?></option>
<?php
}

?>

</select>




<p><b>SUBJECT</b></p>
<div id="subject">
<select>


<option>select</option>




</select>

</div>





<p><b>SEMESTER</b></p>
<div id="sem">
<select>


<option>select</option>




</select>

</div>










</body>
</html>