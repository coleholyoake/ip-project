document.getElementById("scroll-before").onmouseover = function() {
	document.getElementById("scroll-before").className = "hidden center-block";
	document.getElementById("scroll-after").className = "visible center-block";
}
document.getElementById("scroll-after").onmouseout = function() {
	document.getElementById("scroll-before").className = "visible center-block";
	document.getElementById("scroll-after").className = "hidden center-block";
}

document.getElementById("capture-before").onmouseover = function() {
	document.getElementById("capture-after").className = "visible2 arrowto";
}
document.getElementById("capture-before").onmouseout = function() {
	document.getElementById("capture-after").className = "hidden2 arrowto";
}

document.getElementById("delivery-before").onmouseover = function() {
	document.getElementById("delivery-after").className = "visible2 arrowto";
}
document.getElementById("delivery-before").onmouseout = function() {
	document.getElementById("delivery-after").className = "hidden2 arrowto";
}
