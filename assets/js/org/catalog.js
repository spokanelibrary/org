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
		this.user = $('#spl-account-summary').data('account');
		//console.log(this.user);

		// init ui
		this.initCatalog();

	} // init()

, initCatalog: function() {

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

, initLoginModal: function() {
		$('body').on('form', '.spl-login-modal', function(e) {
			e.preventDefault();
			console.log('log in');
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
