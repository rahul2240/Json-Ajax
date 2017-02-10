<!DOCTYPE html>

<html>

<head>

	<style>
	
	#textbox {
	   width: 300px; padding: 10px; border: 1px solid #f4f4f4; border-radius: 3px;
	   margin-top: 10px;
	   margin-left: 30%;
	}
	#field {
	   width: 300px;
	   overflow: scroll;
	   margin-top: 0px;
	   margin-left: 30%;
	}

	body{
	   background: #F0F8FF;
	}
	#style_text {
	   background: #FDF5E6;
	   
	   margin-top:200px;
	   padding-bottom: 50px;
	}

	h1{
	   font-family: cursive;
	   margin-left: 30%;
	}
	#search{
	   margin-left: 10px;
	   font-family: tahoma;
	   
	   
	}
	</style>
	
	<script>
	
	//Function that will show suggestions
	
	function show_suggestion(value_of_text_field)
	{
	if (value_of_text_field.length == 0)
	   {
	   document.getElementById("field").innerHTML = "";
	   return;
	   }
	else {
	       var xmlhttp = new XMLHttpRequest();
	       xmlhttp.onreadystatechange = function() {
	       if(this.readyState == 4 && this.status == 200) {
	       document.getElementById("field").innerHTML=this.responseText;
	       
	           }
	                                           };
	                                           
	           xmlhttp.open("GET","data.php?name=" + value_of_text_field, true);
	           xmlhttp.send();
	   }
	}

	// Function to send selected value to Text box
	
	function check(){
	    document.getElementById("textbox").value= document.getElementById("field").value;
	}

	</script>
	
	<title>DYNAMIC SEARCH </title>
	
</head>

<body>

	<div id="style_text">
		<h1>Write Here..</h1>
		<form>
			<input id="textbox" list="field" onkeyup="show_suggestion(this.value)" placeholder="Type Here" type="text" value=""> <input id='search' type='submit' value='Search'>
		</form><datalist id="field" onchange="check()">
		</datalist>
	</div>
	
</body>

</html>
