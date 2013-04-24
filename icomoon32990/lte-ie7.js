/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-pencil' : '&#xe000;',
			'icon-bubble' : '&#xe001;',
			'icon-twitter' : '&#xe002;',
			'icon-feed' : '&#xe003;',
			'icon-vimeo' : '&#xe004;',
			'icon-flickr' : '&#xe005;',
			'icon-picassa' : '&#xe006;',
			'icon-dribbble' : '&#xe007;',
			'icon-tux' : '&#xe008;',
			'icon-apple' : '&#xe009;',
			'icon-pinterest' : '&#xe00a;',
			'icon-stumbleupon' : '&#xe00b;',
			'icon-lastfm' : '&#xe00c;',
			'icon-chrome' : '&#xe00d;',
			'icon-github' : '&#xe00e;',
			'icon-skype' : '&#xe00f;',
			'icon-reddit' : '&#xe010;',
			'icon-wordpress' : '&#xe011;',
			'icon-google-plus' : '&#xe012;',
			'icon-facebook' : '&#xe013;',
			'icon-file' : '&#xe014;',
			'icon-mail' : '&#xe015;',
			'icon-xing' : '&#xe016;',
			'icon-star' : '&#xe017;',
			'icon-star-2' : '&#xe019;',
			'icon-star-3' : '&#xe01a;',
			'icon-remove' : '&#xe01b;',
			'icon-cog' : '&#xe01c;',
			'icon-spam' : '&#xe01d;',
			'icon-arrow-up' : '&#xe01e;',
			'icon-console' : '&#xe018;',
			'icon-link' : '&#xe01f;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};