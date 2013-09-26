// account.js

var org = {

	// added on script load
	config: {}

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		this.initMyAccount();
	} // init()

, initMyAccount: function() {
		this.user = $('#spl-account-summary').data('account');
		//console.log(this.user);

		$('body').on('click', 'spl-update-email', function(e) {
			e.preventDefault();
			
			console.log( $(this).val() );
		});

		
  } // initMyAccount();


};
