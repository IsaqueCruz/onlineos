RegisterForm = $.klass({
	initialize : function(options) {
		this.element.validate({
			rules: {
				username: {
					required: true,
					minlength: 4,
					remote: '/test.php'
				},
				email : {
					required: true,
					email: true
				},
				password2 : {
					equalTo: "#password1"
				}
			},
			messages : {
				username : {
					required: 'Your username is required',
					minlength: 'The minimum number of characters is 4',
					remote: jQuery.format("{0} is already in use")
				},
				email : {
					required: 'You must enter your email',
					email: 'You must enter a valid email'
				},
				password2 : {
					equalTo: 'Your passwords must match'
				}
			}
		});
		$('#username').focus();
		if (options.motd) {
			$('.motd').text(options.motd);
		}
	},
	onsubmit : function() {
		$form = this.element;
		$('.register').val('Submitting');
		return false;
 	}
});


$(document).ready(function(){
	$('#lowpro-form').attach(RegisterForm, {motd: 'jQuery Rocks'});
});
