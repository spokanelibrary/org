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
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    if ( this.user ) {
      console.log('this is a callback function');
      this.initITAcademy();
    } else {
      console.log('not a callback function!');
    }
}

, initITAcademy: function() {
		//ORG.splLoadITAcademyLinks();
    var netSrc = $('#spl-network-source').data('source');
    console.log(netSrc);
    
    console.log('handle it academy');
    //console.log(this.user);
		if ( this.user ) {

      
		}
    $('.it-academy-links').html('only a test');

  } // initITAcademy()

, loadITAcademyLinks: function(user) {
    //console.log(user);
    /*
    $.ajax( { 
        url: 'http://api.spokanelibrary.org/v2/microsoft/it-academy'
        ,crossDomain: true
        ,data: { params: {
                          location: location
                  }
                }
      } )
      .done(function(data) {
        //console.log(data);

        var $html = $('#spl-it-academy-link');
        var $script = $('#spl-it-academy-link-tmpl').html();
        
        var $tmpl = Handlebars.compile( $script );
        $html.html( $tmpl( { codes: data } ) ); 


      })
      .fail(function() {
        //parseNovelistData(null);
      })
      .always(function() {  
      });
    */

  }

};
