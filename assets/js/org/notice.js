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
		this.initNotice();

	} // init()

, setUser: function(user) {
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    this.initSignup();
}

, initNotice: function() {
    var netSrc = $('#spl-network-source').data('source');
    //console.log(netSrc);

    this.initEventHandlers();

  } // initSignup()

, initEventHandlers: function() {
    $('body').on('submit', '#spl-form-notice', function(e){
      e.preventDefault();

      consol.log('form notice');

    }); 

    
  }



};
