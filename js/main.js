$('.game').on('click', function () {
	console.log(window.location.hostname + ":3000");
	window.location = "http://" + window.location.hostname + ":3000";
});