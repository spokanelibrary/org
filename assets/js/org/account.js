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
		//console.log('initMyAccount()');
		this.user = $('#spl-account-summary').data('account');

		console.log(this.user);

  } // initMyAccount();


};
