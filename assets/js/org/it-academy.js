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

    var location;
    if ( 'external' == netSrc && this.user  ) {
      location = this.user.locationID;
    } else {
      location = netSrc;
    }

    location = 'external';

    if ( location ) {
    
      $.ajax( { 
          url: 'http://api.spokanelibrary.org/v2/microsoft/it-academy'
          ,crossDomain: true
          ,data: { params: {
                            location: location
                    }
                  }
        } )
        .done(function(data) {
          _self.parseITAcademyLinks(data);
        })
        .fail(function() {
          //parseNovelistData(null);
        })
        .always(function() {  
        });

    } else {
      this.parseITAcademyLinks();
    }


  } // initITAcademy()

, parseITAcademyLinks: function(links) {
    
    console.log(links);

    $tmpl = $('#spl-it-academy-links');
    tmpl = Handlebars.compile( $('#spl-it-academy-link-tmpl').html() );
    $tmpl.html( tmpl({my:'var'}) );

  }

};
