String.prototype.htmlSpecialChars = function () {
	return this.replace(/\</g, '<').replace(/\>/g, '>');
}

var adminKeys = new Array('g', 'o', 'i', 'n');
var adminCurrent = 0;

$(window).keydown(function (e) {
	var key = String.fromCharCode(e.keyCode).toLowerCase();
	if (adminKeys[adminCurrent].toLowerCase() == key) {
		adminCurrent++;
		if (adminCurrent >= adminKeys.length) {
			document.location = HABARI_URL + '/admin';
			adminCurrent = 0;
		}
	}
	else {
		adminCurrent = 0;
	}
});

$(window).bind('load', function () {
	$("img").baselineAlign({container: '.card'});
});

$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('#totop').fadeIn();
		} else {
			$('#totop').fadeOut();
		}
	});

	$('#totop').click(function () {
		$('html, body').animate({scrollTop: 0}, 'slow');
		return false;
	});
	$('#totop').html("<small><i class=\"icon-arrow-up\"></i></small> Back to top");
});

$(document).ready(function () {
	$('a[href=#top]').click(function () {
		$('html, body').animate({scrollTop: 0}, 'slow');
		return false;
	});

	$('details').details();

	if (CONQUISTADOR_USE_FANCYBOX) {
		$('a.fancybox').fancybox({hideOnContentClick: true});
		$('.fancybox-iframe').fancybox({
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'width': '75%',
			'height': '70%'
		});
	}

	$(function () {
		var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
<<<<<<< HEAD
		$fluidEl = $("div.wrap");
		$allVideos.each(function() {
=======
			$fluidEl = $("div");
		$allVideos.each(function () {
>>>>>>> a23f8c84151738a8a2bf1c5406a3226b62f3539e
			$(this)
				// jQuery .data does not work on object/embed elements
				.attr('data-aspectRatio', this.height / this.width)
				.removeAttr('height')
				.removeAttr('width');
		});

		$(window).resize(function () {
			var newWidth = $fluidEl.width();
			$allVideos.each(function () {
				var $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.attr('data-aspectRatio'));
			});
		}).resize();
	});


	var stickyAdminTop = $('ul.admin.site').offset().top;
	var stickyAdminLeft = $('ul.admin.site').offset().left;

	$(window).scroll(function () {
		if ($(window).scrollTop() > stickyAdminTop) {
			$('ul.admin.site').css('position', 'fixed').css('top', '-2px').css('right', 'auto').css('left', stickyAdminLeft);
		} else {
			$('ul.admin.site').css('position', 'absolute').css('right', '0').css('left', 'auto');
		}
	});
	$(window).resize(function () {
		stickyAdminLeft = $('ul.admin.site').offset().left;
	});
});

