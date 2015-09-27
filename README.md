## Responsive Opt-Out Plugin

* [Ulrich Pogson](http://ulrich.pogson.ch)
* *License.* GPLv2

## Summary

Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.

This simple setup creates a body class called "responsive" and "fixed-width" both are added to the body class of your Theme. These two classes are used to define whether or not the visitor wants a "responsive" environment.

This is the html for the buttons. They can be added anywhere.

```
<a href="#" onclick="return FixedWidth();" class="fixed-width-link">Fixed Width</a>
<a href="#" onclick="return Responsive()" class="responsive-link">Reponsive</a>
```

This CSS will make sure the correct button is displayed is the different views.

```
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
```

<a href="http://ulrich.pogson.ch/responsive-opt-out-plugin">Blog post on integration with Responsive theme</a>

## Checkout

You can always checkout the latest version at [this URL](http://wordpress.org/plugins/responsive-opt-out/).

## Install

If you're interested in downloading and installing this plugin:

1. Download the the latest [release](http://wordpress.org/plugins/responsive-opt-out/)
2. Install using the [WordPress install process](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation)

## Changelog

_0.5.0 - 21 September 2015 _


_0.4.0 - 21 September 2014 _
Improve code

_0.3.0 - 28 April 2013_
Fix setting cookie

_0.2.0 - 22 April 2013_
Fix cookie path

_0.1.0 - 13 January 2013_
Initial release
