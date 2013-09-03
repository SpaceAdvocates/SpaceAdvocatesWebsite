SA.Join = function () {
	return this;
};

SA.Join.prototype.init = function () {
	this.bindSubmit();
};

SA.Join.prototype.bindSubmit = function () {
	$('.submit').on('click', this.subscribe);
};

SA.Join.prototype.subscribe = function () {
	var Join = this;

	$.ajax({
		type: 'post',
		dataType: 'json',
		data: { email: $('#email').val() },
		context: $('#contact_form .label')
	}).done(function (data) {
		$(this).addClass('success').removeClass('alert').text(data.message);
	}).fail(function (jqXHR) {
		console.log(jqXHR);
		$(this).removeClass('success').addClass('alert').text(jqXHR.responseJSON.message);
	}).always(function () {
		Join.bindSubmit();
	});
};