// account.js

var org = {

	// added on script load
	config: {
						endpoint: { hzws: 'http://api.spokanelibrary.org/v2/hzws/' }
					 }

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

		this.initCko();

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

, initCko: function() {
		var $form = $('#spl-form-cko');

		var $selectAll = $('.spl-field-cko-select-all');
		var $selectItem = $('.spl-field-cko-select-item');

		$selectAll.on('change', function(e) {
			if ( $(this).is(':checked') ) {
				$selectAll.prop('checked', true);
				$selectItem.prop('checked', true);
			} else {
				$selectAll.prop('checked', false);
				$selectItem.prop('checked', false);
			}
		});

		$form.on('submit', function(e) {
			e.preventDefault();

			var barcodes = new Array;
			$('.spl-field-cko-select-item:checked').each(function() {
				barcodes.push( $(this).data('barcode') );
			});

			if ( barcodes.length > 0 ) {
				_self.ckoRenew(barcodes);
			} else {
				alert('Please select item(s) to renew.');
			}
			
		});

	} // initCko()

, ckoRenew: function(barcodes) {
		var $btn = $('.spl-submit-cko');

		$btn.button('loading');
		$.ajax({ 
	    url: this.config.endpoint.hzws+'renew'
    , data: { params: { token: this.user.sessionToken
    									,	barcodes: barcodes
    									}
    				}
	  })
	  .done(function(obj) {  
	  	console.log(obj);
	  	$btn.button('reset');
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });

	} // ckoRenew()

, initProfile: function() {
		this.initProfileEmail();
		this.initProfilePin();

	} // initProfile()

, initProfileEmail: function() {
		// it turns out hzws has no methods for updating email 
		// will need addres ord? or maybe just select on old address?
		var $form = $('#spl-form-profile-email');
		var $email = $('#spl-field-profile-email');
		var $submit = $('#spl-submit-profile-email');

		$form.validate();
		
		$form.on('submit', function(e) {
			e.preventDefault();
			if ( $form.valid() ) {
				/*
				console.log( _self.user.borrower );
				console.log( _self.user.sessionToken );
				console.log( $email.val() );
				$submit.button('loading');
				*/
			}
		});

	} // initProfileEmail()

, initProfilePin: function() {
	// note: we will need a new session token here (loginUserResetMyPin)
	var $form = $('#spl-form-profile-pin');

	var $submit = $('#spl-submit-profile-pin');

	$form.validate({
		rules: {
			pinConfirm: {
	      equalTo: "#spl-field-profile-pin-new"
	    }
  	}
	});
		
		$form.on('submit', function(e) {
			e.preventDefault();
			if ( $form.valid() ) {
				/*
				console.log( _self.user.borrower );
				console.log( _self.user.sessionToken );
				console.log( $email.val() );
				$submit.button('loading');
				*/
			}
		});

} // initProfilePin()

};
