SA.Home = function () {
	return this;
};

SA.Home.prototype.init = function () {
	$('.card + .drawer h1').dotdotdot({
		watch: 'window'
	});
};