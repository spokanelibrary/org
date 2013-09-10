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


the org chart
===
a list of files touched in org. attempt to group all changes under /org directories.

* .gitignore
* Gruntfile.js (watch ,'assets/less/org/*.less')
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
		* /vendor
			* respond.min.js (add)
			* helper.js (add)
			* handlebars.js (add)

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

* custom button (inverse)
* get serious about app icons