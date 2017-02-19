var content = {
	"select": ["nil"] ,
		"num": ["1","2","3"],
			"A": ["A","B","C","D"]
};

function selectedvalue(val)
{ 
var demos = document.getElementById("demo");

demos.innerHTML = content[val];
}