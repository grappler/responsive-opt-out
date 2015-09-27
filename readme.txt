=== Responsive Opt-Out ===
Contributors: grapplerulrich
Donate link: http://ulrich.pogson.ch/
Tags: responsive, fixed-width, opt-out, switch
Requires at least: 3.4
Tested up to: 3.8
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.

== Description ==

This simple setup creates a body class called "responsive" and "fixed-width" both are added to the body class of your Theme. These two classes are used to define whether or not the visitor wants a "responsive" environment.

== Installation ==

= Installing from the WordPress dashboard =

1. Navigate to the 'Add New' plugins dashboard
2. Search for 'Flowplayer5 for WordPress'
3. Click 'Install Now'
4. Activate the plugin on the WordPress Plugin dashboard

= Uploading in the WordPress dashboard =

1. Navigate to the 'Add New' plugins dashboard
2. Navigate to the 'Upload' area
3. Select `flowplayer5.zip` from your computer
4. Upload
5. Activate the plugin on the WordPress Plugin dashboard

= Using FTP =

1. Download `flowplayer5.zip`
2. Extract the `flowplayer5` directory to your computer
3. Upload the `flowplayer5` directory to your `wp-content/plugins` directory
4. Activate the plugin on the WordPress Plugins dashboard

= Buttons =

So that you have the buttons to switch you will need this html code. They can be added anywhere.

`
<a href="#" onclick="return FixedWidth();" class="fixed-width-link">Fixed Width</a>
<a href="#" onclick="return Responsive()" class="responsive-link">Reponsive</a>
`

= CSS/Styling =

This plugin has no CSS. So that the buttons display in the correct view the following CSS need to be added to your theme's style.css file directly.

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

Add the class ".fixed-width" in front of any styles that you add for a fixed width design and ".responsive" for the responsive design.

<a href="http://ulrich.pogson.ch/responsive-opt-out-plugin">Blog post on integration with Responsive theme</a>

== Changelog ==

= 0.5.0 - 21 September 2015 =


= 0.4.0 - 21 September 2014 =
Improve code

= 0.3.0 - 28 April 2013 =
Fix setting cookie

= 0.2.0 - 22 April 2013 =
Fix cookie path

= 0.1.0 - 13 January 2013 =
Initial release

== Upgrade Notice ==

= 0.5.0 =
Improve code

= 0.4.0 =
Improve code

= 0.3.0 =
Fix setting cookie

= 0.2.0 =
Fix cookie path

= 0.1.0 =
Initial release
