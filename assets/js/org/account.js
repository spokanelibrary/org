// account.js

var org = {

	// added on script load
	config: {}

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		// setup variables
		this.user = $('#spl-account-summary').data('account');
		//console.log(this.user);

		// init ui
		this.initMyAccount();

	} // init()

, initMyAccount: function() {
		
		this.initTabs();

		this.initProfile();

		
		
  } // initMyAccount()

, initTabs: function() {
		// apply hash onload
		if ( window.location.hash ) {
			$('a[href="'+window.location.hash+'"]').tab('show')
		}

		// apply hashchange on tab event
		//$('body').on('click', '[data-toggle="tab"]', function(e) {
		$('[data-toggle="tab"]').click(function(e) {
			window.location.hash = $(this).attr('href');
		});

	} // initTabs() 

, initProfile: function() {
		var $form = $('#spl-form-profile-email');
		var $email = $('#spl-profile-email');

		$form.validate();
		
		$form.on('submit', function(e) {
			e.preventDefault();
			if ( $form.valid() ) {
				console.log(_self.user.borrower);
				console.log($email.val());
			}
		});

	} // initProfile()


};
