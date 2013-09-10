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
* BUILDME.md
* README.md
* screenshot.png
* style.css (project description)

* /assets
	* /less
		* /org
	* /bootstrap
		* variables.less
		* carousel.less
	* app.less
	* /js
		* /vendor
			* respond.min.js

* /lib
	* /org - includable mods
	* custom.php (custom init.php, etc)

* /templates
	* /org
	* footer.php
	* header-top-navbar.php

todo
===

custom button (inverse)
