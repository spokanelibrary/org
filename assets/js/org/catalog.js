// account.js

var org = {

	// added on script load
	config: {
						endpoint: { hzws: 'http://api.spokanelibrary.org/v2/hzws/'
											, novelist: 'http://novselect.ebscohost.com/Data/ContentByQuery' 
											, syndetics: 'http://beta.spokanelibrary.org/checkin/api/syndetics.php'
											}
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
		this.initRequestItem();

		this.initLoginModal();

		// toggle advanced search display
		if ( true == $('#spl-search-results').data('results') ) {
			if ( $('.visible-md').is(':visible') ) {
				$('#spl-catalog-search-advanced').addClass('in');
			} else {
				$('#spl-catalog-search-advanced-toggle').addClass('in');
			}
		}



		$('body').on('click', '.hzws-bib-trigger', function(e) {
      e.preventDefault();
      _self.loadBib( $(this).data('bib') );
    });

		$('body').on('click', '.spl-related-reading-trigger', function(e) {
      e.preventDefault();
      
      _self.loadSyndeticsData($(this).data('isbn'));
      _self.loadNoveListData($(this).data('isbn'));
      $(this).hide();
      $('#spl-related-reading-'+$(this).data('isbn')).fadeIn();
      //$('#spl-related-reading-'+$(this).data('isbn')).hide().html('Loading Summary&hellip;').fadeIn();
    });

		
		// search index toggle
		$('.spl-catalog-index-option').on('click', function(e) {
			e.preventDefault();

			var icon = '<small class="glyphicon glyphicon-search text-muted"></small>';
			$('.spl-catalog-index').val( $(this).data('value') );
			$('.spl-catalog-search').html( icon + ' ' + $(this).html() );
			//$('.spl-catalog-index-select li').removeClass('active');
			//$(this).closest('li').addClass('active');

		});

  } // initCatalog()

, initRequestBib: function() {
	
		var trigger = '.spl-request-bib';
		
		$('body').on('click', trigger, function(e) {
			e.preventDefault();
			if ( _self.user && _self.user.sessionToken ) {

				_self.btnRequest( $(this) );
				
			} else {
				$('#spl-login-modal').modal('show');
			}

		});
		
	} // initRequestBib()

, initRequestItem: function() {

		var trigger = '.spl-request-item';
		
		$('body').on('click', trigger, function(e) {
			e.preventDefault();
			if ( _self.user.sessionToken ) {

				_self.btnRequest( $(this) );
				
			} else {
				$('#spl-login-modal').modal('show');
			}

		});
		
	} // initRequestItem()

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

		console.log(params);

		// bummer, can't use data-text states for no
		// https://github.com/twbs/bootstrap/issues/10890

		//$btn.button('loading');
		$btn.addClass('disabled').text($btn.data('loading-text'));
	
		$.ajax({ 
	    url: _self.config.endpoint.hzws+'hold'
    , data: { params: params }
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

		$('#spl-login-modal').on('show.bs.modal', function () {
  		$('.spl-login-modal-response').addClass('hide');
		});

		$('body').on('submit', '#spl-login-modal form', function(e) {
			
			e.preventDefault();
			//console.log('logging in');
			$form = $(this);
			$.ajax({ 
        url: '/account'
        ,dataType: 'html'
        ,data: $form.serialize() 
      })
      .done(function() {
        //console.log('retrieving session data');
        // it would be better to authenticate against a json interface
        // so we don't have to do this double request
        $.ajax({ 
		      	url: '/session/' // json-only session data api todo: standardize this
		      	,dataType: 'jsonp'
		        ,data: { }
		      })
		      .done(function(obj) {

		        $('#spl-account-summary').data('account', obj);
		        _self.setUser();
		        //$('#spl-login-modal').modal('hide');
		        $('.spl-login-modal-response').addClass('hide');
		        if ( _self.user && _self.user.sessionToken ) {
		        	$('.spl-login-modal-success').removeClass('hide');
		        } else {
		        	$('.spl-login-modal-error').removeClass('hide');
		        }

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

		}); // submit

	}

, loadNoveListData: function(isbn) {
	if (isbn) {
		$.ajax( { 
        url: _self.config.endpoint.novelist
        ,crossDomain: true
        ,data: { profile: 's8427805.main.novsel'
                ,password: 'dGJyMOPY8UivprQA'
                ,version: '2.1'
                ,ISBN: isbn
                ,ClientIdentifier: isbn
                }
      } )
      .done(function(data) {
				_self.parseNovelistData(data, isbn);
      })
      .fail(function() {
        //parseNovelistData(null);
      })
      .always(function() {  
      });
  }
}

,	parseNovelistData: function(data, isbn) {
		console.log(data);

    $titles = $('#spl-related-titles-'+isbn);
    tmpl = Handlebars.compile( $("#related-titles-tmpl").html() );
    $titles.html( tmpl({novelist:data}) );

    $authors = $('#spl-related-authors-'+isbn);
    tmpl = Handlebars.compile( $("#related-authors-tmpl").html() );
    $authors.html( tmpl({novelist:data}) );
}

, loadSyndeticsData: function(isbn) {
		if ( isbn ) {
      $.ajax({ 
        url: _self.config.endpoint.syndetics
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
    $summary = $('#spl-related-summary-'+isbn);
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
