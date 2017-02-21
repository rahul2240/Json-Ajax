var subject = {
	"Select": ["Select"],
		"IT": ["Select","MATH","PHY","CHEM"],
		"CS": ["Select","BIO","C","PHY-2"],
		"ME": ["Select","THERMO","MECH"]
};

var semester = {
	
	"Select":["Select"],
	"MATH":["1","2","3"],
	"PHY":["2"],
	"CHEM":["3"],
	"BIO":["2"],
	"C":["1"],
	"PHY-2":["3"],
	"THERMO":["4"],
	"MECH":["3"]
		
	
};

function selectsubject(val)
{ 
	optionret="";
	for(var x=0; x<subject[val].length; x++){
		optionret += "<option value=" + subject[val][x]+">" + subject[val][x] + "</option>";
	}
    document.getElementById("subjects").innerHTML = optionret;
}

function selectsemester(valu)
{
	optionretu="";
	for(var y=0; y<semester[valu].length; y++){
		optionretu += "<option value=" + semester[valu][y]+">" + semester[valu][y] + "</option>";
	}
    document.getElementById("semester").innerHTML = optionretu;
	
	
}