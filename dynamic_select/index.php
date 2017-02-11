<?php
include 'config.php';
?>
<html>
<head>
<link rel="stylesheet" href="style.css">

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
<div id="zero">
<h1>DYNAMIC SELECT</h1>
</div>
<div id="first">
<h2>BRANCH</h2>
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

</div>

<div id="second">
<h2>SUBJECT</h2>
<div id="subject">
<select>


<option>select</option>




</select>

</div>


</div>

<div id="third">
<h2>SEMESTER</h2>
<div id="sem">
<select>


<option>select</option>




</select>

</div>



</div>






</body>
</html>