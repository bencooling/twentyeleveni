/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#x21;',
			'icon-home-2' : '&#x22;',
			'icon-pictures' : '&#x23;',
			'icon-pencil' : '&#x25;',
			'icon-pencil-2' : '&#x26;',
			'icon-tag' : '&#x27;',
			'icon-user' : '&#x28;',
			'icon-user-2' : '&#x29;',
			'icon-comments' : '&#x2a;',
			'icon-printer' : '&#x2b;',
			'icon-calendar' : '&#x2c;',
			'icon-phone' : '&#x2d;',
			'icon-cart' : '&#x2e;',
			'icon-mail' : '&#x2f;',
			'icon-picture' : '&#x24;',
			'icon-cog' : '&#x30;',
			'icon-remove' : '&#x31;',
			'icon-cancel' : '&#x32;',
			'icon-star' : '&#x33;',
			'icon-star-2' : '&#x34;',
			'icon-star-3' : '&#x35;',
			'icon-heart' : '&#x39;',
			'icon-heart-2' : '&#x38;',
			'icon-checkmark' : '&#x3a;',
			'icon-plus' : '&#x36;',
			'icon-minus' : '&#x37;',
			'icon-comments-2' : '&#x3b;',
			'icon-location' : '&#x3c;',
			'icon-compass' : '&#x3d;',
			'icon-database' : '&#x3e;',
			'icon-locked' : '&#x3f;',
			'icon-unlocked' : '&#x40;',
			'icon-download' : '&#x41;',
			'icon-thumbs-down' : '&#x42;',
			'icon-thumbs-up' : '&#x43;',
			'icon-pie' : '&#x44;',
			'icon-new' : '&#x45;',
			'icon-folder' : '&#x46;',
			'icon-earth' : '&#x47;',
			'icon-gift' : '&#x48;',
			'icon-envelope' : '&#x49;',
			'icon-paperclip' : '&#x4a;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c) {
			addIcon(el, icons[c[0]]);
		}
	}
};