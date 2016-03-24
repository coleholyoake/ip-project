document.getElementById("before").onmouseover = function() {
	document.getElementById("before").className = "hidden center-block";
	document.getElementById("after").className = "visible center-block";
}
document.getElementById("after").onmouseout = function() {
	document.getElementById("before").className = "visible center-block";
	document.getElementById("after").className = "hidden center-block";
}