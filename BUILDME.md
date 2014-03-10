building org
===
my git-fu is not strong enough to properly track this upstream.

* copy org to a tmp dir
* remove everything except .git
* copy over up-to-date roots (exluding .git)
* npm install (grunt watch during dev)
* add/replace top-level /org files
* add all /org subdirectories
* manually add changes to individual files
* nuke tmp sometime before the next manual merge/rebase

* ensure php_flag magic_quotes_gpc Off 

the org chart
===
a list of files touched in org. attempt to group all changes under /org directories.

* .gitignore
* Gruntfile.js (watch ,'assets/less/org/*.less' ,'assets/js/org/*.js')
* BUILDME.md (add)
* README.md
* screenshot.png
* style.css (project description)

* /assets
	* /img - everything, including .gitignore
	* /less
		* app.less
		* /org (add)
	* /bootstrap
		* variables.less - many changes, look for commented values
		* carousel.less (just kill gradients)
	* /css
		
	* /js
		* _main.js
		* /org (add)
		* /vendor
			* respond.min.js (add)
			* helper.js (add)
			* handlebars.js (add)
			* jquery.validate.js (add)
			* bootstrap-datepicker.js (add)

* /lib
	* /org (add)
	* config.php (sidebars, template overrides, etc)
	* custom.php (custom init.php, etc)
	* scripts.php ?

* /templates
	* /org (add)
	* footer.php
	* header-top-navbar.php

* template-*.php

todo
===
edit lib files