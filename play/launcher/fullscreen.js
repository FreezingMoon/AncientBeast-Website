function requestFullScreen() {

	var el = document.getElementById("game");

	// Supports most browsers and their versions
	var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen 
	|| el.mozRequestFullScreen || el.msRequestFullScreen;

	if (requestMethod) {
	// Native full screen
		requestMethod.call(el);
	}
}
