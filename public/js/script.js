document.getElementById("scroll-before").onmouseover = function() {
	document.getElementById("scroll-before").className = "hidden center-block";
	document.getElementById("scroll-after").className = "visible center-block";
}
document.getElementById("scroll-after").onmouseout = function() {
	document.getElementById("scroll-before").className = "visible center-block";
	document.getElementById("scroll-after").className = "hidden center-block";
}

document.getElementById("scrollup-before").onmouseover = function() {
	document.getElementById("scrollup-before").className = "hidden-up center-block";
	document.getElementById("scrollup-after").className = "visible-up center-block";
}
document.getElementById("scrollup-after").onmouseout = function() {
	document.getElementById("scrollup-before").className = "visible-up center-block";
	document.getElementById("scrollup-after").className = "hidden-up center-block";
}

// document.getElementById("capture-before").onmouseover = function() {
// 	document.getElementById("capture-after").className = "visible2 arrowto";
// }
// document.getElementById("capture-before").onmouseout = function() {
// 	document.getElementById("capture-after").className = "hidden2 arrowto";
// }

// document.getElementById("delivery-before").onmouseover = function() {
// 	document.getElementById("delivery-after").className = "visible2 arrowto";
// }
// document.getElementById("delivery-before").onmouseout = function() {
// 	document.getElementById("delivery-after").className = "hidden2 arrowto";
// }

// document.getElementById("projects-before").onmouseover = function() {
// 	document.getElementById("projects-after").className = "visible2 arrowto";
// }
// document.getElementById("projects-before").onmouseout = function() {
// 	document.getElementById("projects-after").className = "hidden2 arrowto";
// }

// document.getElementById("news-before").onmouseover = function() {
// 	document.getElementById("news-after").className = "visible2 arrowto";
// }
// document.getElementById("news-before").onmouseout = function() {
// 	document.getElementById("news-after").className = "hidden2 arrowto";
// }


