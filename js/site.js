var easterEggKeys = new Array('j','i','b','b','y');
var easterEggCurrent = 0;

$(window).keydown(function(e){
		var key = String.fromCharCode(e.keyCode).toLowerCase();
		if (easterEggKeys[easterEggCurrent].toLowerCase() == key) {
			easterEggCurrent++;
			if (easterEggCurrent >= easterEggKeys.length) {
				$('body').css('background', 'transparent url(' + HABARI_URL + '/system/admin/images/pasaka.png) no-repeat 80% 150px');
				easterEggCurrent = 0;
			}
		}
		else {
			easterEggCurrent = 0;
		}
});

var adminKeys = new Array('g','o','i','n');
var adminCurrent = 0;

$(window).keydown(function(e){
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


$(document).ready(function() {
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });
});
