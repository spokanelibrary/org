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

    this.initSignup();
}

, initSignup: function() {
    var netSrc = $('#spl-network-source').data('source');
    //console.log(netSrc);

    this.initEventHandlers();

  } // initSignup()

, initEventHandlers: function() {
    $('button').attr('disabled', false);

    _self.checkAddressLocale();
    _self.checkAgeGuardian();
    _self.checkNetworkLocation();

    $('body').on('blur', '#spl-form-birthdate', function(e) {
      _self.normalizeBirthdate( $(this).attr('id'), $(this).val() );
    });

    $('body').on('blur', '.spl-signup-address', function(e) {
      _self.normalizeAddress('address');
    });

    $('body').on('blur', '.spl-signup-address-alt', function(e) {
      _self.normalizeAddress('alt');
    });    

    $('body').on('change', "[name='spl-form[card][type]']", function(e) {
      $(this).parents('form').submit();
    });

    $('body').on('click', '#spl-terms-modal-agree', function(e) {
      _self.modalAgree(this);
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

, modalAgree: function(btn) {
  //console.log(btn);
  $('#spl-signup-agree').prop('checked', true);
}

,checkNetworkLocation: function() {
  $netloc = $('#spl-signup-netloc');
  if ( $netloc.val() ) {
    $('#spl-form-location').val($netloc.val());
    //console.log( $netloc.val() );
  }
}

, checkAgeGuardian: function() {
    switch ( $('#spl-signup-selection').val() ) {
      case 'minor':
        $('#spl-form-guardian').collapse('show');
        break;
      default:
        break;
    }

  }

, checkAddressLocale: function() {
    switch ( $('#spl-signup-selection').val() ) {
      case 'nonres':
        $('#spl-form-local').val('other');
        break;
      case 'minor':
        $('#spl-form-local').val('unsure');
        break;
      default:
        break;
    }

  }

, setAddressLocale: function(locale) {
    switch ( locale ) {
      case 'city':
        $('#spl-form-locale').val('city');
        break;
      case 'county':
        $('#spl-form-locale').val('county');
        break;
      default:
        $('#spl-form-locale').val('other');
        break;
    }

  }

, normalizeAddress: function(fieldset) {
    if ( fieldset ) {
      switch ( fieldset ) {
        case 'address':
          $street_1 = $('#spl-form-street-1');
          $street_2 = $('#spl-form-street-2');
          $city = $('#spl-form-city');
          $state = $('#spl-form-state');
          $zip = $('#spl-form-zip');
          break;
        case 'alt':
          $street_1 = $('#spl-form-street-alt-1');
          $street_2 = $('#spl-form-street-alt-2');
          $city = $('#spl-form-city-alt');
          $state = $('#spl-form-state-alt');
          $zip = $('#spl-form-zip-alt');
          break;
      }

      var address = {};
      address.street = $street_1.val().trim();
      if ( $street_2.val().trim().length > 0 ) {
        address.street += "\n" + $street_2.val().trim();
      } 
      address.city = $city.val().trim();
      address.state = $state.val().trim();
      address.zip = $zip.val().trim();

      if ( address.street && address.city && address.state && address.zip ) {
        //console.log(address);
        $.ajax( { 
          url: _self.config.api.v2 + '/address/verify'
          ,crossDomain: true
          ,data: { params: {
                            address: address
                    }
                  }
        } )
        .done(function(data) {
          //console.log(data);
          if ( data ) {
            _self.setAddressLocale(data);
          }
        })
        .fail(function() {
        })
        .always(function() {  
        });
      }
    } 
}

, normalizeBirthdate: function(id, birthdate) {
    //console.log();
    if ( id && birthdate ) {
      $.ajax( { 
        url: _self.config.api.v2 + '/birthdate/normalize'
        ,crossDomain: true
        ,data: { params: {
                          birthdate: birthdate
                  }
                }
      } )
      .done(function(data) {
        //console.log(data);
        if ( data.error || data.empty ) {
          $('#'+id).blur();
          $('#'+id).val('');
        } else {
          $('#'+id).val(data);
        }
      })
      .fail(function() {
      })
      .always(function() {  
      });
    }
    
}

};
