var subject = {
	"select": ["nil"],
		"IT": ["MATH","PHY","CHEM"],
		"CS": ["BIO","C","MATHS-2","PHY-2"],
		"ME": ["THERMO","MECH"]
};

function selectsubject(val)
{ 
	optionret="";
	for(var x=0; x<subject[val].length; x++){
		optionret += "<option value=" + subject[val][x]+">" + subject[val][x] + "</option>";
	}
    document.getElementById("subjects").innerHTML = optionret;
}