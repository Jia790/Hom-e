document.getElementById('dropDownMenu').onmouseover = function() {DDTopOn()};
document.getElementById('dropDownMenu').onmouseout = function() {DDTopOff()};

function DDTopOn()
{
	document.getElementById('dropDownTop').className = "dropDownTopOn";
}

function DDTopOff()
{
	document.getElementById('dropDownTop').className = "";
}