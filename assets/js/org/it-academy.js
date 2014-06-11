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
		//this.initITAcademy();

	} // init()

, setUser: function(user) {
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    // Reparse links on login
    this.initITAcademy();
}

, initITAcademy: function() {
		//ORG.splLoadITAcademyLinks();
    var netSrc = $('#spl-network-source').data('source');
    console.log('Network Source ' + netSrc);

    if ( this.user ) {
    }

    var location = netSrc;

    $.ajax( { 
        url: 'http://api.spokanelibrary.org/v2/microsoft/it-academy'
        ,crossDomain: true
        ,data: { params: {
                          location: location
                  }
                }
      } )
      .done(function(data) {
        console.log(data);

        /*
        var $html = $('#spl-it-academy-link');
        var $script = $('#spl-it-academy-link-tmpl').html();
        
        var $tmpl = Handlebars.compile( $script );
        $html.html( $tmpl( { codes: data } ) ); 
        */


      })
      .fail(function() {
        //parseNovelistData(null);
      })
      .always(function() {  
      });



    $tmpl = $('#spl-it-academy-links');
    tmpl = Handlebars.compile( $('#spl-it-academy-link-tmpl').html() );
    $tmpl.html( tmpl({my:'var'}) );


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
