building org
===

* start with current roots theme
* npm install (grunt watch during dev)
* remove node_modules on update?
* update style.css, add a screenshot

---
http://stackoverflow.com/questions/14288511/how-to-maintain-a-github-fork-of-a-popular-project

You can configure remote repositories to use in git. In the project cloned from your fork, type the following comand: git remote add name url where name is a alias to a url that represents the master repo.

With that, to bring the new updates from the master repo, just type: git pull name master. To send the changes to your fork repo: git push origin master.
---

mod org
===

lib/org - includable mods

* init.php (nav menus)

templates/org

* header-top-navbar