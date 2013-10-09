// account.js

var org = {

	// added on script load
	config: {
						endpoint: { hzws: 'http://api.spokanelibrary.org/v2/hzws/' }
					 }

	// added on authentication
	,user: {}

	// called on script load
	,init: function() {
		_self = this;

		// setup variables
		this.setUser();
		//console.log(this.user);

		// init ui
		this.initCatalog();

	} // init()

, setUser: function () {
		// ToDo: might need to change this to a class
		// if it will be instantiaed multiple times
		var user = $('#spl-account-summary').data('account');
		if ( null != typeof(user) ) {
			this.user = user;
		} else {
			this.user = null;
		}
}

, initCatalog: function() {

		this.initRequestBib();

		this.initLoginModal();

		$('body').on('click', '.hzws-bib-trigger', function(e) {
      e.preventDefault();
      _self.loadBib( $(this).data('bib') );
    });

		$('body').on('click', '.syndetics-summary-trigger', function(e) {
      e.preventDefault();
      //console.log( $(this).data('isbn') );
      _self.loadSyndeticsData($(this).data('isbn'));
      $(this).hide();
      $('#syndetics-summary-'+$(this).data('isbn')).hide().html('Loading Summary&hellip;').fadeIn();
    });

    /*
    var isbn =  '0375857184';
    $.ajax( { 
        url: config.api.novelistApi
        ,crossDomain: true
        ,data: { profile: 's8427805.main.novsel'
                ,password: 'dGJyMOPY8UivprQA'
                ,version: '2.1'
                ,ISBN: isbn
                ,ClientIdentifier: isbn
                }
      } )
      .done(function(novelist) {
        // store data locally
        //item.novelist = novelist;
        //parseNovelistData(item.novelist);
        //console.log(novelist);
      })
      .fail(function() {
        //parseNovelistData(null);
      })
      .always(function() {  
      });
    */
		
  } // initCatalog()

, initRequestBib: function() {
		

		var trigger = '.spl-request-bib';
		var $trigger = $(trigger);
		
		$('body').on('click', trigger, function(e) {
			e.preventDefault();
			if ( _self.user.sessionToken ) {

				_self.btnRequest( $(this) );
				
			} else {
				$('#spl-login-modal').modal('show');
			}

		});
		
	} // initRequestBib()

, btnRequest: function($btn) {

		var bib = $btn.data('bib');
		var item = $btn.data('item');

		var params = { sessionToken: _self.user.sessionToken
									, pickupLocation: _self.user.locationID
									}

		if ( bib ) {
			params.titleKey = bib;
		} 

		if ( item ) {
			params.itemKey = item;
		}

		// bummer, can't use data-text states for no
		// https://github.com/twbs/bootstrap/issues/10890

		//$btn.button('loading');
		$btn.addClass('disabled').text($btn.data('loading-text'));
	
		$.ajax({ 
	    url: _self.config.endpoint.hzws+'hold'
    , data: params
	  })
	  .done(function(obj) {  
	  	console.log(obj);
	  	if ( !obj.empty ) {
	  		//$btn.button('complete');
				$btn.text($btn.data('complete-text'));
	  	} else {
	  		//$btn.button('error');
	  		$btn.addClass('btn-danger').text($btn.data('error-text'));
	  	}
	  	
	  	// pass results through
			//$hidden.val(JSON.stringify(obj));
			//$form.data('process', 'http').submit();
	  })
	  .fail(function() {
	  })
	  .always(function() {
	  });
}

, initLoginModal: function() {
		$('body').on('submit', '#spl-login-modal form', function(e) {
			
			//console.log($.ajax.dataType);

			e.preventDefault();
			console.log('logging in');
			$form = $(this);
			$.ajax({ 
        url: '/account'
        ,dataType: 'html'
        ,data: $form.serialize() 
      })
      .done(function() {

        console.log('retrieving session data');
        $.ajax({ 
		      	url: '/session'
		      	,dataType: 'jsonp'
		        ,data: { }
		      })
		      .done(function(obj) {
		      	//var user = $.parseJSON(obj.responseText); // need to do this right on the server
		        //$('#spl-account-summary').data('account', obj);
		        //_self.setUser();
		        //$('#spl-login-modal').modal('hide');
		        console.log(obj);  
		      })
		      .fail(function() { 
		      })
		      .always(function() {  
		      });

      })
      .fail(function() { 
      })
      .always(function() {  
      });

			/*
			$.post( "/account", $(this).serialize() ).done(function() {
				//console.log(obj);
				console.log('test');
				$('#spl-login-modal').modal('hide');
			});
			*/


		});

	}

, loadSyndeticsData: function(isbn) {
		if ( isbn ) {
      $.ajax({ 
        url: 'http://beta.spokanelibrary.org/checkin/api/syndetics.php'
        ,data: { isbn: isbn }
      })
      .done(function(data) {
        _self.parseSyndeticsData(data, isbn);
      })
      .fail(function() { 
      })
      .always(function() {  
      });
    } 
	}

, parseSyndeticsData: function(data, isbn) {
		console.log(data);
    //$('#syndetics-summary-'+isbn).html('We have a summary');
    $summary = $('#syndetics-summary-'+isbn);
    tmpl = Handlebars.compile( $("#syndetics-summary-tmpl").html() );
    $summary.html( tmpl({syndetics:data}) );

    /*
    $summary = $('#syndetics-summary');
    tmpl = Handlebars.compile( $("#summary-tmpl").html() );
    $summary.html( tmpl(data) );
    
    $review = $('#syndetics-review');
    tmpl = Handlebars.compile( $("#review-tmpl").html() );
    $review.html( tmpl(data) );  
    
    $author = $('#syndetics-author');
    tmpl = Handlebars.compile( $("#author-tmpl").html() );
    $author.html( tmpl(data) );  
    */

	}

  // this doesn't really load anything we don't already have
, loadBib: function(bib) {

		$.ajax({ 
        url: _self.config.endpoint.hzws + 'lookup'
        ,data: { 
        				params: { bib: bib }
        			}
      })
      .done(function(obj) {
        console.log(obj);
      })
      .fail(function() { 
      })
      .always(function() {  
      });
	} // loadBib()

};
