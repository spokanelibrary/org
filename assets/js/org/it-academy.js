// account.js

var org = {

	// added on script load
	
	config: {
						api: { msit: 'http://api.spokanelibrary.org/v2/microsoft/it-academy'
								 }
					 }
	
	// added on authentication
, user: {}

	// called on script load
,	init: function() {

		_self = this;
		
		this.config = ORG.config;

		this.setUser();

		// init ui
		this.initITAcademy();

	} // init()

, setUser: function(user) {
    console.log('this is a callback function');
		if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;
}

, initITAcademy: function() {
		//ORG.splLoadITAcademyLinks();
    //console.log('handle it academy');
    //console.log(this.user);
		if ( this.user ) {

      
		}
    $('.it-academy-links').html('only a test');

  } // initITAcademy()

};
