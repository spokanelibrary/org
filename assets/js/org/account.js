// account.js

var org = {

	// added on script load
	config: {}

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		$('.nav-tabs a').click(function (e) {
    	// No e.preventDefault() here
    	//$(this).tab('show');

    	window.location.hash = $(this).attr('href');

    	//console.log( $(this).attr('href') );

		});

		this.initMyAccount();
	} // init()

, initMyAccount: function() {
		this.user = $('#spl-account-summary').data('account');
		//console.log(this.user);

		/*
		// this is the input field
		$('body').on('click', '#spl-update-email', function(e) {
			e.preventDefault();

			console.log( $(this).val() );
		});
		*/

		
  } // initMyAccount();


};
