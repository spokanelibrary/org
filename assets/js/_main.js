// Global configuration
var config = { 
      api: {// endpoint: 'http://api.spokanelibrary.org/v2/'
            //,novelistApi: 'http://novselect.ebscohost.com/Data/ContentByQuery'
            oclc: 'http://api.spokanelibrary.org/oclc/'
          , isbn: 'http://api.spokanelibrary.org/isbn/'
          , novelist: 'http://novselect.ebscohost.com/Data/ContentByQuery' 
          //, syndetics: 'http://beta.spokanelibrary.org/checkin/api/syndetics.php'
          , syndetics: 'http://api.spokanelibrary.org/v2/syndetics/lookup'
          , overdrive: 'http://api.spokanelibrary.org/v2/overdrive/lookup'
           }
    , path: {
              absolute: {} // ToDo: this should go

    }
}

// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ORG = {
  config: config

, setUser: function (user) {
    if ( user && user.sessionToken ) {
      this.user = user;
    } else{
      var $account = $('#spl-account-summary');
      if ( $account && $account.text().length > 0 ) {
        var user = JSON.parse($account.text());
      }
    }

    if ( null == typeof(user) || 'undefined' == typeof(user) ) {
      this.user = null;

      // if login autocallback is configured,
      // show the login form
      if ( $('.spl-login').data('callback-method') ) {
        $('.spl-login').collapse('show');
      }
    } else {
      this.user = user;
      //console.log( this.user );
      $profile = $('#spl-account-profile');
      tmpl = Handlebars.compile( $('#spl-account-profile-tmpl').html() );
      $profile.html( tmpl({user:this.user}) );

      if ( $('#spl-catalog-profile-widget').data('show') ) {
        //console.log(this.user);
        $widget = $('#spl-catalog-profile-widget');
        tmpl = Handlebars.compile( $('#spl-catalog-profile-widget-tmpl').html() );
        $widget.html( tmpl({user:this.user}) );
        
      }

      // autorun callback on user login
      if ( $('.spl-login').data('callback-method') ) {
        var callbackMethod = $('.spl-login').data('callback-method');
        this[callbackMethod](user);
      }

    }
  }

, loadUserFormFields: function(user) {
    $('.spl-login').hide();
    //console.log(user);  
    if ( user && $('.spl-form') ) {
      
      var name = '';
      if ( user.name ) {
        name = user.name;
      }
      if ( user.firstName ) {
        name = user.firstName + ' - ' + name;
      }
      $('#spl-form-name').val(name);
      
      if ( user.borrowerBarcode ) {
        $('#spl-form-barcode').val(user.borrowerBarcode);
      }

      if ( user.phone ) {
        $('#spl-form-phone').val(user.phone);
      }

      if ( user.address ) {
        if ( user.address.email ) {
          $('#spl-form-email').val(user.address.email);
        }

        var street = '';
        if ( null != typeof(user.address.line1) 
            && 'undefined' != typeof(user.address.line1) ) {
          street = user.address.line1;
        }
        if ( null != typeof(user.address.line2) 
            && 'undefined' != typeof(user.address.line2) ) {
          street += "\n";
          street += user.address.line2;
        }
        $('#spl-form-street').val(street);
      
        if ( user.address.cityState ) {
          $('#spl-form-city-st').val(user.address.cityState);
        }

        if ( user.address.postalCode ) {
          $('#spl-form-zip').val(user.address.postalCode);
        }

        if ( user.locationID ) {
          $('#spl-form-pickup').val(user.locationID);
        }

      }

       
    }

}  
  // All pages
, common: {
    init: function() {
      MBP.hideUrlBarOnLoad();

      config.path.absolute = 'http://'+location.hostname;

      // trigger tabs from alternate links
      $('body').on('click', '[data-toggle="tab"]', function(e) {
        $('a[href='+$(this).attr('href')+']').tab('show');
      });
      
      $('body').on('click', 'a.prevent-default', function(e) {
        e.preventDefault();
      });

      $('.spl-form').validate({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
      });

      // Ajax defaults[
      $.ajaxSetup({
         type: 'POST'
        ,dataType: 'json'
        ,dataType: 'jsonp'
        ,jsonp: 'callback'
        /*
        ,complete: function(obj) {
          console.log( $.parseJSON(obj.responseText) );
        }
        */
      });

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/org/catalog.js' ],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);
      


    },
    finalize: function() {
      $('body').tooltip({
        selector: 'a[rel=tooltip]'
      });
    }
  }
, home: {
    init: function() {
      //console.log(config);
    }
  }
, search : {
    /*
    init: function() {

      Modernizr.load([
        {
          load: ['../assets/js/org/catalog.js' ],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);

    }
    */

}
/*
, contact : {
    
    init: function() {

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/vendor/jquery.validate.js'],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);

    }
}
*/
, book : {
    
    init: function() {

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/vendor/bootstrap-datepicker.js'],
          complete: function () {
            $('.bootstrap-datepicker').datepicker({
                startDate: "+1d",
                endDate: "+1y",
                daysOfWeekDisabled: "0",
                autoclose: true
            });
            /*
            if ( org ) { 
              org.init();
            }
            */ 
          }
        }
      ]);

    }
}
, vhs : {
    init: function() {

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/vendor/jquery.dynatable.js'],
          complete: function () {
            $('#vhs-holdings').dynatable({
              features: {
                pushState: false
              },
              dataset: {
                perPageDefault: 100
              },
              inputs: {
                paginationClass: 'dynatable-pagination pagination',
                paginationActiveClass: 'active',
                paginationDisabledClass: 'disabled',
                paginationLinkPlacement: 'before',
                recordCountPlacement: 'after',
                searchPlacement: 'before',
                perPagePlacement: 'after',
              }
            });
            /*
            if ( org ) { 
              org.init();
            }
            */ 
          }
        }
      ]);

    }
}
, obituaries : {
    init: function() {

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/vendor/jquery.dynatable.js'],
          complete: function () {
            $('#spl-obit').dynatable({
              features: {
                pushState: false,
                search: false
              },
              dataset: {
                perPageDefault: 100
              },
              inputs: {
                paginationClass: 'dynatable-pagination pagination',
                paginationActiveClass: 'active',
                paginationDisabledClass: 'disabled',
                paginationLinkPlacement: 'before',
                recordCountPlacement: 'after',
                searchPlacement: 'before',
                perPagePlacement: 'after',
              }
            });
            /*
            if ( org ) { 
              org.init();
            }
            */ 
          }
        }
      ]);

    }
}
, request : {
    
    init: function() {

      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/org/request.js'],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);

    }
}
, account: {
    init: function() {
      
      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/org/account.js'
                //,config.path.absolute+'/assets/js/vendor/jquery.validate.js'
                ,config.path.absolute+'/assets/js/vendor/bootstrap-datepicker.js' 
                ],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);

    }
  }
};







var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ORG;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

// https://github.com/h5bp/html5-boilerplate/blob/master/js/plugins.js
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(document).ready(UTIL.loadEvents);
