// account.js

var org = {

	// added on script load
	config: {
						endpoint: { hzws: 'http://api.spokanelibrary.org/v2/request/' }
					 }

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		this.setUser();

		// init ui
		this.initRequestItem();

	} // init()

, setUser: function(user) {
		if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;
}

, initRequestItem: function() {

		/*
		$('body').on('change', 'input:radio[name = "spl-form[material]"]', function() {
			var materialTypeDescription = $(this).parent().text();
			console.log(materialTypeDescription);
		});
		*/

		// hide material type selectors and generic request form on select
		$('body').on('show.bs.collapse', '#spl-form-request-panels', function() {
			$('#spl-form-request-panel-choose').collapse('hide');		
		});

		
		// show generic request form when requested
		$('body').on('show.bs.collapse', '.spl-form-request-generic', function() {
			
			if ( $(this).hasClass('spl-form-request-download') ) {
				$('#spl-form-request-submit-item').hide();
				$('#spl-form-request-submit-download').show();
			} else {
				$('#spl-form-request-submit-item').show();
				$('#spl-form-request-submit-download').hide();
			}

			$('#spl-form-panel-request').collapse('show');

		});
		
		// hide generic request form when not requested
		$('body').on('shown.bs.collapse', '.spl-form-request-specific', function() {
			$('#spl-form-panel-request').collapse('hide');
		});


  } // initRequestItem()



};
