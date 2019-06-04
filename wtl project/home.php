<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function populate(s1,s2) {
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Comps") {
		var optionArray = ["|","UT I|Unit Test I","UT II|Unit Test II","Sem I|Semester I","Sem II|Semester II"];
	}
	for(var option in optionArray) {
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	
	}
}
</script>
</head>
<body>
<h2>Enter the required details for preparing the Seating arrangement</h2>
<hr />
Select Department:
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
	<option value=""></option>
	<option value="Comps">Computer</option>
	<option value="IT">Information Technology</option>
	<option value="Mech">Mechanical</option>
	<option value="Civil">Civil</option>
	<option value="Extc">Electronics and Telecommunications</option>
</select>
<hr />
Select Semester:
<select id="slct2" name="slct2"></select>
</body>
</html>

