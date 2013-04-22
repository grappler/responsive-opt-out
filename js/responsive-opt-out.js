// Copyright (c) 2013 Ulrich Pogson, https://github.com/grapplerulrich/responsive-opt-out.js

// check if the there is a cookie with the value 'fixed width'
if (cookie( 'responsive_opt_out' ) == 'fixed width' ) {

	// replace body class responsive with fixed-width
	function FixedWidth() {
		(function(body, classToAdd) {
			body.className = (body.className).replace("responsive", classToAdd);
		})(document.body, "fixed-width");

		// change meta viewport
		viewport = document.querySelector("meta[name=viewport]");
		viewport.setAttribute('content', 'width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0');
	}

	// Load function
	window.onload = FixedWidth;
}

// load function onClick
function FixedWidth() {
	(function(body, classToAdd) {
		body.className = (body.className).replace("responsive", classToAdd);
	})(document.body, "fixed-width");

	// change meta viewport
	viewport = document.querySelector("meta[name=viewport]");
	viewport.setAttribute('content', 'width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0');

	// if cookies are enabled then set a cookie with a value 'fixed width'
	if (cookie.enabled()) {
		cookie.set( 'responsive_opt_out', 'fixed width', {
			path: '/',
		} );
	} else {
		// Cookies are turned off you can not use cookies
	}
}

// load function onClick
function Responsive() {
	(function(body, classToAdd) {
		body.className = (body.className).replace("fixed-width", classToAdd);
	})(document.body, "responsive");

	// change meta viewport
	viewport = document.querySelector("meta[name=viewport]");
	viewport.setAttribute('content', 'width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0');

	// if cookies are enabled then set a cookie with a value 'responsive'
	if (cookie.enabled()) {
		cookie.set( 'responsive_opt_out', 'responsive', {
			path: '/',
		} );
	} else {
		// Cookies are turned off you can not use cookies
	}
}