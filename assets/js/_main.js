// Global configuration
var config = { 
      api: { endpoint: 'http://api.spokanelibrary.org/v2/'
           }
}

// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ORG = {
  // All pages
  common: {
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

, account: {
    init: function() {
      
      Modernizr.load([
        {
          load: ['../assets/js/org/account.js', '../assets/js/vendor/jquery.validate.js'],
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
