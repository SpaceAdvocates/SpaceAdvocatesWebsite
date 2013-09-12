/* jshint camelcase: false */

SA.Home = function () {
	return this;
};

SA.Home.prototype.init = function () {
	$('.card + .drawer h1').dotdotdot({
		watch: 'window'
	});

	$(document).foundation('orbit', {
		stack_on_small: true,
		timer_speed: 5500,
		bullets: false,
		navigation_arrows: false,
		slide_number: false
	});

    $('#orbit-nav').on('click', 'a', function (event) {
        event.preventDefault();
        var $this = $(this);
        $this.closest('ul').find('.active').removeClass('active');
        $this.addClass('active');
    });
};