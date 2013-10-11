building org
===
my git-fu is not strong enough to properly track this upstream.

* copy org to a tmp dir
* remove everything except .git
* npm install (grunt watch during dev)
* copy over up-to-date roots (exluding .git)
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
	* /less
		* /org (add)
	* /bootstrap
		* variables.less
		* carousel.less (just kill gradients)
	* /css
		* app.less
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

todo
===
