$('.game').on('click', function () {
	console.log(window.location.hostname + ":3000");
	window.location = window.location.hostname + ":3000";
});