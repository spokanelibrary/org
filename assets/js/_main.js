// Global configuration
var config = { 
      api: {// endpoint: 'http://api.spokanelibrary.org/v2/'
            //,novelistApi: 'http://novselect.ebscohost.com/Data/ContentByQuery'
           }
    , path: {
              absolute: 'http://beta.spokanelibrary.org'
    }
}

// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ORG = {
  setUser: function (user) {
    if ( user && user.sessionToken ) {
      this.user = user;
    } else{
      var $account = $('#spl-account-summary');
      if ( $account && $account.text().length > 0 ) {
        var user = JSON.parse($account.text());
      }
    }

    if ( null != typeof(user) && undefined != typeof(user) ) {
      this.user = user;
      //console.log( this.user );

      $profile = $('#spl-account-profile');
      tmpl = Handlebars.compile( $('#spl-account-profile-tmpl').html() );
      $profile.html( tmpl({user:this.user}) );


      if ( $('#spl-catalog-profile-widget').data('show') ) {
        console.log(this.user);
        
        $widget = $('#spl-catalog-profile-widget');
        
        tmplProfile = Handlebars.compile( $('#spl-catalog-profile-widget-tmpl').html() );
        
        
        $widget.html( tmplProfile({user:_self.user}) );
        
      }


    } else {
      this.user = null;
    }
  }
  // All pages
, common: {
    init: function() {
      MBP.hideUrlBarOnLoad();

      // trigger tabs from alternate links
      $('body').on('click', '[data-toggle="tab"]', function(e) {
        $('a[href='+$(this).attr('href')+']').tab('show');
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
, account: {
    init: function() {
      
      Modernizr.load([
        {
          load: [config.path.absolute+'/assets/js/org/account.js'
                ,config.path.absolute+'/assets/js/vendor/jquery.validate.js'
                ,config.path.absolute+'/assets/js/vendor/bootstrap-datepicker.js' ],
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
