// this is a placeholder for now

var populate_dents = function(tag) {
    if (!tag)
        return false;

    $.ajax({
        url: "http://identi.ca/api/statusnet/tags/timeline/" + tag + ".json",
        dataType: 'json',
        success: function(data){
            if (data != null && data.length > 0) {
                $('.related').before('<h2 id="replies">Replies to This Post</h2>');
                $('#replies').after('<p>&#x272A; Reply to this post on <a href="http://identi.ca">' +
                                    'identi.ca</a> using the hash tag <strong>#' + tag +
                                    '</strong></p><ol class="dents"></ol>');
                $('.dents').css('font-size', '.9em');
                $('#replies').css('margin-top', '2em');
                var dent = [];
                for (i in data) {
                    dent = data[i];
                    var date = dent.created_at.replace(/\d\d:\d\d:\d\d \+0000/g, '');
                    $('.dents').append('<li>&#x231A; <time>' + date + '</time><br>' +
                                       '<a href="http://identi.ca/notice/' + dent.id + '">' +
                                       dent.user.name + "</a> " + dent.statusnet_html + '</li>');
                }
            }
            else {
                $('.related').before('<aside><p style="margin-top:2em;">&#x272A; Reply to this' +
                                     'post on <a href="http://identi.ca">' +
                                     'identi.ca</a> using the hash tag <strong>#' + tag +
                                     '</strong></p></aside>');
            }
        }
    });
};

var easterEggKeys = new Array('j','i','b','b','y');
var easterEggCurrent = 0;

$(window).keydown(function(e){
		var key = String.fromCharCode(e.keyCode).toLowerCase();
		if (easterEggKeys[easterEggCurrent].toLowerCase() == key) {
			easterEggCurrent++;
			if (easterEggCurrent >= easterEggKeys.length) {
				$('body').css('background', 'transparent url(/system/admin/images/pasaka.png) no-repeat 80% 150px');
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
                document.location = '/admin';
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
