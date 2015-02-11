// signup.js

var org = {
	
	// added on authentication
  user: {}

	// called on script load
,	init: function() {

		_self = this;
		
		this.config = ORG.config;

		//this.setUser();

		// init ui
		this.initSignup();

	} // init()

, setUser: function(user) {
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    //this.initSignup();
}

, initSignup: function() {
    var netSrc = $('#spl-network-source').data('source');
    
    console.log(netSrc);

  } // initSignup()


};
