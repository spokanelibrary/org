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
		
		$('body').on('show.bs.collapse', '#spl-form-request-panels', function() {
			$('#spl-form-request-panel-choose').collapse('hide');
			
			var materialType = $('input[name = "spl-form[material]"]:checked' , '#spl-form-request-panel-choose').val()

			console.log(materialType);

		});

		

  } // initMyAccount()



};
