=== Child Page Templates ===
Contributors: Joe Anzalone
Donate link: http://joeanzalone.com/plugins/child-page-templates/
Tags: template hierarchy, themes
Requires at least: 3.3
Tested up to: 3.4.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows theme authors to add page templates to their themes that will be automatically used based on the page's parent.

== Description ==

Allows theme authors to include templates that will be automatically used based on the page's parent.

For example, adding the file "page-123.php" to the "child-page-templates" folder in your theme directory will define the template for all pages that are children of the page with ID #123. You can also do the same thing with the post's slug.

This template file will be used for all pages that are children of the page with ID #123:
/wp-content/themes/your-awesome-theme/child-page-templates/page-123.php

This template file will be used for all pages that are children of the page with the "team" slug:
/wp-content/themes/your-awesome-theme/child-page-templates/page-team.php

== Installation ==

1. Extract the zip file and drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the plugin from the "Plugins" page.
2. Create a folder in your theme (or child theme, if you use one) called "child-page-templates"
3. Add a PHP file named after the slug or ID of the parent page you want to use a custom template for.
	* For example: If you want every child page of your "Portfolio" page to use a particular template file, name that template file "page-portfolio.php"

== Frequently asked questions ==

= Will the child-page-templates folder in my theme directory get overwritten when a new version of my theme is released? =

Yes! If you didn't create your theme yourself, you should definitely be using a [child theme](http://codex.wordpress.org/Child_Themes).
Your child-page-templates folder will be safe so long as you add it to a theme (or child theme) you created. Even when the parent theme upgrades, your child theme will be untouched.


== Changelog ==

= 1.0.2 =
* First public release