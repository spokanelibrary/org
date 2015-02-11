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
    //console.log(netSrc);

    this.initEventHandlers();

  } // initSignup()

, initEventHandlers: function() {
    $('button').attr('disabled', false);

    $('body').on('blur', '#spl-form-birthdate', function(e) {
      _self.normalizeBirthdate( $(this).val() );
    });
    /*
    $('body').on('click', '.spl-card-type-select', function(e) {
      $('#spl-signup-card-type').collapse('hide');
      $('#spl-signup-adult').collapse('show');
      history.pushState(null, null, '/signup/');
      e.preventDefault();
    });
    */
  }

, normalizeBirthdate: function(date) {
    console.log(date);
  
    $.ajax( { 
      url: _self.config.api.v2 + '/date'
      ,crossDomain: true
      ,data: { params: {
                        date: date
                }
              }
    } )
    .done(function(data) {
      console.log(date);
    })
    .fail(function() {
      //parseNovelistData(null);
    })
    .always(function() {  
    });
    
}

};
