// account.js

var org = {

	// added on script load
	/*
	config: {
						api: { hzws: 'http://api.spokanelibrary.org/v2/request/'
									,oclc: 'http://api.spokanelibrary.org/oclc/'
								 }
					 }
	*/
	// added on authentication
	//user: {}

	// called on script load
	init: function() {
		_self = this;
		
		this.config = ORG.config;

		this.setUser();

		// init ui
		this.initRequestItem();

	} // init()

, setUser: function(user) {
		if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;
}

, initRequestItem: function() {
		//console.log(this.user);
		if ( this.user ) {
			ORG.loadUserFormFields(this.user);
			this.initRequestItemEvents();
			this.initRequestItemPanels();
			this.initOCLC();
		}
  } // initRequestItem()

, initRequestItemEvents: function() {

	$('body').on('click', '#spl-ill-policy-accept', function(e) {
		$('#spl-form-ill-confirm').prop('checked', true);
	});

	$('body').on('click', '#spl-ill-policy-reject', function(e) {
		$('#spl-form-ill-confirm').prop('checked', false);
	});

} // initRequestItemEvents()
, initRequestItemPanels: function() {
		/*
		$('body').on('change', 'input:radio[name = "spl-form[material]"]', function() {
			var materialTypeDescription = $(this).parent().text();
			console.log(materialTypeDescription);
		});
		*/

		// put common forms in templates to avoid duplicate fields
		var generic = Handlebars.compile( $('#spl-form-panel-request-generic-tmpl').html() );
		var specific = Handlebars.compile( $('#spl-form-panel-request-specific-tmpl').html() );
			

		// hide material type selectors on panel select
		$('body').on('show.bs.collapse', '#spl-form-request-panels', function(e) {
			$('#spl-form-request-panel-choose').collapse('hide');		
		});

		// show dynamic request panel
		$('body').on('show.bs.collapse', '.spl-form-request', function(e) {
			_self.showRequestPanel($(this).attr('id'));
		});

		/*

		// show dynamic submit panel
		$('body').on('show.bs.collapse', '.spl-form-request', function(e) {
			_self.showRequestSubmit($(this).attr('id'));
		});

		// show generic request form when requested
		$('body').on('show.bs.collapse', '.spl-form-request-generic', function(e) {
			if ( $('#spl-form-panel-request-specific').hasClass('in') ) {	
				$('#spl-form-panel-request-specific').collapse('hide');
			}
			// put common forms in templates to avoid duplicate fields
			$('#spl-form-panel-request-generic').html(generic({})).collapse('show');
		});
		
		// hide generic request form when not requested
		$('body').on('show.bs.collapse', '.spl-form-request-specific', function(e) {
			if ( $('#spl-form-panel-request-generic').hasClass('in') ) {	
				$('#spl-form-panel-request-generic').collapse('hide');
			}
			$('#spl-form-panel-request-specific').html(specific({})).collapse('show');
		});

		*/

} // initRequestItemPanels

, showRequestPanel: function(id) {
		var view = {id: id
							, user: {}
								};
		var tmpl = Handlebars.compile( $('#spl-form-panel-request-tmpl').html() );

		switch( this.user.borrowerType ) {
			case 'sr':
      case 'c':
      case 'in':
      case 'ol':
        view.user.ill = false;
        break;
      default:
        view.user.ill = true;
        break;
		}

		switch ( view.id ) {
		  case 'spl-form-panel-request-ebook':
		  case 'spl-form-panel-request-dl-audio-book':
		    view.download      = true;
		  case 'spl-form-panel-request-book':
		  case 'spl-form-panel-request-cd-audio-book':
		  case 'spl-form-panel-request-cd':
		  case 'spl-form-panel-request-dvd':
		  case 'spl-form-panel-request-other':
		    view.content       = true;
		    break;
		  case 'spl-form-panel-request-genealogy':
		    view.genealogy     = true;
		    view.ill           = true;
		    break;
		  case 'spl-form-panel-request-page-copy':
		    view.newspaper      = true;
		    view.ill            = true;
		    break;
		  case 'spl-form-panel-request-periodical':
		    view.periodical    = true;
		    view.ill           = true;
		    break;
		}
		//console.log(view);
		$('#spl-form-panel-request').html(tmpl( view ));
} // showRequestPanel()

, showRequestSubmit: function(panel) {
		var view = {};
		view.user = {};
		view.id = panel;

		switch( this.user.borrowerType ) {
			case 'sr':
      case 'c':
      case 'in':
      case 'ol':
        view.user.ill = false;
        break;
      default:
        view.user.ill = true;
        break;
		}

		switch ( view.id ) {
		  case 'spl-form-panel-request-ebook':
		  case 'spl-form-panel-request-dl-audio-book':
		    view.download      = true;
		  case 'spl-form-panel-request-book':
		  case 'spl-form-panel-request-cd-audio-book':
		  case 'spl-form-panel-request-cd':
		  case 'spl-form-panel-request-dvd':
		  case 'spl-form-panel-request-other':
		    view.content       = true;
		    break;
		  case 'spl-form-panel-request-genealogy':
		    view.genealogy     = true;
		    view.ill           = true;
		    break;
		  case 'spl-form-panel-request-page-copy':
		    view.newspaper      = true;
		    view.ill            = true;
		    break;
		  case 'spl-form-panel-request-periodical':
		    view.periodical    = true;
		    view.ill           = true;
		    break;
		}
		//console.log(view);

		var tmpl = Handlebars.compile( $('#spl-form-request-submit-tmpl').html() );
		$('#spl-form-request-submit').html(tmpl( view ));
} // showRequestSubmit

, initOCLC: function() {

		// search
		$('body').on('click', '#spl-form-oclc-search', function(e) {
      e.preventDefault();
      _self.oclcSearchKeyword();
    });
    $('body').on('keypress', '#spl-form-search', function(e) {
      // 13 == enter
      if (e.keyCode == 13) {
        e.preventDefault();
        _self.oclcSearchKeyword();
      }
    });

    // pagination
    $('body').on('click', '.paginate-index', function(e) {
      e.preventDefault();
      var start = $(this).data('start-index');
      if ( !$(this).parent('li').hasClass('active') && !$(this).parent('li').hasClass('disabled') ) {
        _self.oclcSearchKeyword(start);
      }
    });

    // select search result
    $('body').on('click', '.oclc-select', function(e) {
      e.preventDefault();

      var bib = {ocn: $(this).data('ocn')
                ,canonical: $(this).data('canonical')
                ,title: $(this).data('title')
                ,author: $(this).data('author')
                ,publisher: $(this).data('publisher')
                ,pubdate: $(this).data('pubdate')
                };
      _self.oclcSelectBib(bib);
    });

} // initOCLC()

, oclcSearchKeyword: function(start) {
		if ( !start ) {
      start = 1;
    }
		
		var tmpl;
		var query = $('#spl-form-search').val();
		var $modal = $('#spl-form-oclc-result');

    if ( query ) {
    	tmpl = Handlebars.compile( $('#oclc-search-tmpl').html() );
      $modal.html(tmpl({ term: query })).modal('show');

    	$.ajax({ 
        url: this.config.api.oclc
        ,data: { sru: query // q: $('#spl-form-title').val()
                //,mt: $('#spl-form-material').val()
                ,mt: $('input:radio[name="spl-form[material]"]').val()
                ,index: $('#spl-form-search-index').val()
                ,sort: $('#spl-form-search-sort').val()
                ,start: start
                ,count: 20
                }
      })
      .done(function(results) {
        //console.log(results);
        tmpl = Handlebars.compile( $('#oclc-results-tmpl').html() );
	      $modal.html(tmpl(results));
	    })
      .fail(function() {
      })
      .always(function() {
      });
    }

}

, oclcSelectBib: function(bib) {
		//console.log(bib);
		$('#spl-form-title').val(bib.title);
    $('#spl-form-author').val(bib.author);
    $('#spl-form-publisher').val(bib.publisher);
    $('#spl-form-pubdate').val(bib.pubdate);
    $('#spl-form-oclc').val(bib.ocn);
    $('#spl-form-isbn').val(bib.canonical);
    if ( bib.canonical ) {
      this.checkISBNHolding( bib.canonical );
    }
	} // oclcSelectBib()

, checkISBNHolding: function(isbn) {
    // check the SPL catalog for holdings using an isbn search and parsing the resulting xml. ugh.
    //console.log(isbn);
    $holding = $('#spl-form-request-holding');
    $holding.html('');
    $.ajax({ 
        url: this.config.api.isbn
        ,data: { isbn: isbn }
      })
      .done(function(obj) {
        if ( 1 == obj.holding ) {
          //console.log(obj);
          $holding = $('#spl-form-request-holding');
          var tmpl = Handlebars.compile( $('#spl-form-request-holding-tmpl').html() );
          $holding.html(tmpl( {isbn:isbn} ));
        }
      })
      .fail(function() {
      })
      .always(function() {
      });
  } //checkISBNHolding()

};
