building org
===
my git-fu is not strong enough to track this upstream

* copy org to a tmp dir
* remove everything except .git
* npm install (grunt watch during dev)
* copy in up-to-date roots (exluding .git)
* add/replace top-level files
* add all /org directories
* manually add changes to individual files

the org chart
===
a list of files touched in org. attempt to group all changes under /org directory

* .gitignore
* BUILDME.md
* README.md
* screenshot.png
* style.css (project description)

* /assets
	* /less
		* /org
	* /bootstrap
		* variables.less ?
	* app.less



* /lib
	* /org - includable mods
	* custom.php (custom init.php, etc)


* /templates
	* /org
	* header-top-navbar.php

