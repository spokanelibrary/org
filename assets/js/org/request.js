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
		
		$('body').on('hide.bs.collapse', '#spl-form-request-panels', function() {
			$('#spl-form-panel-request').collapse('hide');
			$('#spl-form-request-panel-choose').collapse('show');
		});

		$('body').on('show.bs.collapse', '#spl-form-request-panels', function() {
		
			$('#spl-form-request-panel-choose').collapse('hide');
			
		});


		$('body').on('shown.bs.collapse', '.spl-form-request-material', function() {
			$('#spl-form-panel-request').collapse('show');
		});

  } // initRequestItem()



};
