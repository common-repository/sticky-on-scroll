=== Sticky on Scroll ===
Contributors: latifpala
Tags: sticky, navigation, header, menu, sticky header, sticky menu
Requires at least: 5.0
Tested up to: 6.5.5
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

You can pick any element that you want to stick on top of the page when you scroll down. It can be used for navigation menus or any element that you want as sticky.

== Description ==
The Sticky on Scroll plugin for wordpress allows to make any element sticky as soon as the element hits the top of the page. It is commonly used to keep navigation menus at the top of page.

You might have to add little bit of HTML/CSS to work this plugin perfectly for other elements except navigation menu. Make sure you do not select too large elements as sticky. 

Always try to add a unique element class/ID for the element you want to set as sticky. For multiple elements you can use class for best results.

For multiple elements you can easily add element ID or classes separated by comma (For eg. #section1, #section2, .header). You can also use any HTML elements as sticky. However adding using ID/class is preferable.

== Installation ==
1. Upload `sticky-on-scroll` to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. Done!


== Frequently Asked Questions ==
= How can I set elements that I want to set sticky?
You can go to settings->Sticky on Scroll. You will see two options there. You can  add all elements comma separated in `Sticky Element` text box.

= What is `Minimum screen size to set elements sticky.` field used for?
It is used to disable elements to stick at top at certain screen size. It can be used in small devices as scroll is not required in small devices. But you can use it as per your need.

= Once the element becomes sticky, it is not positioned properly. 
There are some situations when this can happen, if your theme assigns absolute positioning on the element. You have to adjust your css accordingly if this happens.

= Is it possible to have multiple sticky elements? =
Yes, you can add multiple elements separated by comma in `settings->Sticky on Scroll` textbox.


== Screenshots ==
1. Sticky on scoll form
2. Twenty Sixteen sticky menu
3. Twenty Sixteen Settings

== Changelog ==
= 1.0.0  =
Initial release.

= 1.0.1 =
Alert bug fixed.

= 2.0.0 =
Translation Added
Tested upto new WP Version
Minor bugs fixed