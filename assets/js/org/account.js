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

		// init
		this.initMyAccount();
	} // init()

, initMyAccount: function() {
		
		this.initTabs();

		//console.log(this.user);

		/*
		// this is the input field
		$('body').on('click', '#spl-update-email', function(e) {
			e.preventDefault();

			console.log( $(this).val() );
		});
		*/

		
  } // initMyAccount()

, initTabs: function() {
		if ( window.location.hash ) {
			var hash = window.location.hash;
			$(hash).tab('show');
		}

		// apply hashchange on tab event
		//$('body').on('click', '[data-toggle="tab"]', function(e) {
		$('[data-toggle="tab"]').click(function(e) {
			window.location.hash = $(this).attr('href');
		});

	} // initTabs() 


};
