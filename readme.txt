=== Responsive Opt-Out ===
Contributors: grapplerulrich
Donate link: http://ulrich.pogson.ch/
Tags: responsive, fixed-width, opt-out
Requires at least: 3.4
Tested up to: 3.5
Stable tag: 0.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.

== Description ==

This simple setup creates a body class called "responsive" and "fixed-width" both are added to the body class of your Theme. These two classes are used to define whether or not the visitor wants a "responsive" environment.

== Installation ==

You can either install it automatically from the WordPress admin, or do it manually:

1. Unzip the archive and put the `responsive-opt-out` folder into your plugins folder (/wp-content/plugins/).
1. Activate the plugin from the Plugins menu.

= Buttons =

So that you have the buttons to switch you will need this html code. They can be added anywhere.

`
<a href="#" onclick="return FixedWidth();" class="fixed-width-link">Fixed Width</a>
<a href="#" onclick="return Responsive()" class="responsive-link">Reponsive</a>
`

= CSS/Styling =

This plugin has no css. So that the buttons display in the correct view the following css need to be added to your theme's style.css file directly.

`
.responsive .fixed-width-link {
    display: block!important;
}
.responsive .responsive-link {
    display: none!important;
}
.fixed-width .fixed-width-link {
    display: none!important;
}
.fixed-width .responsive-link {
    display: block!important;
}
`

Add the class ".fixed-width" infront of any styles that you add for a fixed width design and ".responsive" for the responsive design.

<a href=\"http://themeid.com/responsive-opt-out-plugin/\">Blog post on intregration with Responsive theme</a>

== Changelog ==

= 0.3 =
Fix setting cookie

= 0.2 =
Fix cookie path

= 0.1 =
Initial Release

== Upgrade Notice ==

= 0.3 =
Fix setting cookie

= 0.2 =
Fix cookie path

= 0.1 =
Initial Release
