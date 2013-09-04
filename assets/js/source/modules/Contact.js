SA.Contact = function () {
	this.$contactForm	= $('#contact_form');
	this.$name			= $('#contact_name');
	this.$email			= $('#contact_email');
	this.$subject		= $('#contact_subject');
	this.$message		= $('#contact_message');
	this.$submit		= $('.submit');

	return this;
};

SA.Contact.prototype.init = function () {
	this.bindSubmit();
};

SA.Contact.prototype.bindSubmit = function () {
	this.$submit.one('click', { contact: this }, this.sendMessage);
};

SA.Contact.prototype.sendMessage = function (event) {
	var Contact = event.data.contact;

	var email = {
		name: Contact.$name.val(),
		email: Contact.$email.val(),
		subject: Contact.$subject.val(),
		message: Contact.$message.val()
	};

	$.ajax({
		type: 'post',
		dataType: 'json',
		data: { email: email },
		context: Contact.$contactForm
	}).done(function (data) {
		$(this).addClass('success').removeClass('alert').text(data.message);
	}).fail(function (jqXHR) {
		var errors = jqXHR.responseJSON.errors;
		$('label').removeClass('error');
		for(var index in errors) {
			$('label[for="'+errors[index]+'"]').addClass('error');
		}
	}).always(function () {
		Contact.bindSubmit();
	});
};