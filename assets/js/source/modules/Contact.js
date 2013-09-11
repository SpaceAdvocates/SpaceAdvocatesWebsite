SA.Contact = function () {
	this.$contactForm	= $('#contact_form');
	this.$name			= $('#contact_name');
	this.$email			= $('#contact_email');
	this.$subject		= $('#contact_subject');
	this.$message		= $('#contact_message');
	this.$updates		= $('#contact_updates');
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

	var data = {
		name: Contact.$name.val(),
		email: Contact.$email.val(),
		subject: Contact.$subject.val(),
		message: Contact.$message.val(),
		subscribe: Contact.$updates.is(':checked')
	};

	// Send the email
	$.ajax({
		type: 'post',
		dataType: 'jsonp',
		data: { email: data },
		context: Contact.$contactForm,
		statusCode: {
			200: function (data) {
				$('label').removeClass('error');
				$(this).addClass('success').removeClass('alert').text(data.message);
			},
			500: function (jqXHR) {
				var json = JSON.parse(jqXHR.responseText);
				var errors = json.errors;
				$('label').removeClass('error');
				for(var index in errors) {
					$('label[for="'+errors[index]+'"]').addClass('error');
				}
			}
		}
	}).always(function () {
		Contact.bindSubmit();
	});
};