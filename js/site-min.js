(function(D){var N,V,S,O,d,o,L,C,Q,B,E=0,J={},l=[],e=0,I={},A=[],f=null,q=new Image(),k=/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i,m=/[^\.]\.(swf)\s*$/i,r,P=1,h=0,v="",b,c,R=false,u=D.extend(D("<div/>")[0],{prop:0}),U=D.browser.msie&&D.browser.version<7&&!window.XMLHttpRequest,t=function(){V.hide();q.onerror=q.onload=null;if(f){f.abort()}N.empty()},z=function(){if(false===J.onError(l,E,J)){V.hide();R=false;return}J.titleShow=false;J.width="auto";J.height="auto";N.html('<p id="fancybox-error">The requested content cannot be loaded.<br />Please try again later.</p>');p()},y=function(){var ab=l[E],Y,aa,ad,ac,X,Z;t();J=D.extend({},D.fn.fancybox.defaults,(typeof D(ab).data("fancybox")=="undefined"?J:D(ab).data("fancybox")));Z=J.onStart(l,E,J);if(Z===false){R=false;return}else{if(typeof Z=="object"){J=D.extend(J,Z)}}ad=J.title||(ab.nodeName?D(ab).attr("title"):ab.title)||"";if(ab.nodeName&&!J.orig){J.orig=D(ab).children("img:first").length?D(ab).children("img:first"):D(ab)}if(ad===""&&J.orig&&J.titleFromAlt){ad=J.orig.attr("alt")}Y=J.href||(ab.nodeName?D(ab).attr("href"):ab.href)||null;if((/^(?:javascript)/i).test(Y)||Y=="#"){Y=null}if(J.type){aa=J.type;if(!Y){Y=J.content}}else{if(J.content){aa="html"}else{if(Y){if(Y.match(k)){aa="image"}else{if(Y.match(m)){aa="swf"}else{if(D(ab).hasClass("iframe")){aa="iframe"}else{if(Y.indexOf("#")===0){aa="inline"}else{aa="ajax"}}}}}}}if(!aa){z();return}if(aa=="inline"){ab=Y.substr(Y.indexOf("#"));aa=D(ab).length>0?"inline":"ajax"}J.type=aa;J.href=Y;J.title=ad;if(J.autoDimensions){if(J.type=="html"||J.type=="inline"||J.type=="ajax"){J.width="auto";J.height="auto"}else{J.autoDimensions=false}}if(J.modal){J.overlayShow=true;J.hideOnOverlayClick=false;J.hideOnContentClick=false;J.enableEscapeButton=false;J.showCloseButton=false}J.padding=parseInt(J.padding,10);J.margin=parseInt(J.margin,10);N.css("padding",(J.padding+J.margin));D(".fancybox-inline-tmp").unbind("fancybox-cancel").bind("fancybox-change",function(){D(this).replaceWith(o.children())});switch(aa){case"html":N.html(J.content);p();break;case"inline":if(D(ab).parent().is("#fancybox-content")===true){R=false;return}D('<div class="fancybox-inline-tmp" />').hide().insertBefore(D(ab)).bind("fancybox-cleanup",function(){D(this).replaceWith(o.children())}).bind("fancybox-cancel",function(){D(this).replaceWith(N.children())});D(ab).appendTo(N);p();break;case"image":R=false;D.fancybox.showActivity();q=new Image();q.onerror=function(){z()};q.onload=function(){R=true;q.onerror=q.onload=null;H()};q.src=Y;break;case"swf":J.scrolling="no";ac='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+J.width+'" height="'+J.height+'"><param name="movie" value="'+Y+'"></param>';X="";D.each(J.swf,function(ae,af){ac+='<param name="'+ae+'" value="'+af+'"></param>';X+=" "+ae+'="'+af+'"'});ac+='<embed src="'+Y+'" type="application/x-shockwave-flash" width="'+J.width+'" height="'+J.height+'"'+X+"></embed></object>";N.html(ac);p();break;case"ajax":R=false;D.fancybox.showActivity();J.ajax.win=J.ajax.success;f=D.ajax(D.extend({},J.ajax,{url:Y,data:J.ajax.data||{},error:function(ae,ag,af){if(ae.status>0){z()}},success:function(af,ah,ae){var ag=typeof ae=="object"?ae:f;if(ag.status==200){if(typeof J.ajax.win=="function"){Z=J.ajax.win(Y,af,ah,ae);if(Z===false){V.hide();return}else{if(typeof Z=="string"||typeof Z=="object"){af=Z}}}N.html(af);p()}}}));break;case"iframe":G();break}},p=function(){var X=J.width,Y=J.height;if(X.toString().indexOf("%")>-1){X=parseInt((D(window).width()-(J.margin*2))*parseFloat(X)/100,10)+"px"}else{X=X=="auto"?"auto":X+"px"}if(Y.toString().indexOf("%")>-1){Y=parseInt((D(window).height()-(J.margin*2))*parseFloat(Y)/100,10)+"px"}else{Y=Y=="auto"?"auto":Y+"px"}N.wrapInner('<div style="width:'+X+";height:"+Y+";overflow: "+(J.scrolling=="auto"?"auto":(J.scrolling=="yes"?"scroll":"hidden"))+';position:relative;"></div>');J.width=N.width();J.height=N.height();G()},H=function(){J.width=q.width;J.height=q.height;D("<img />").attr({id:"fancybox-img",src:q.src,alt:J.title}).appendTo(N);G()},G=function(){var Y,X;V.hide();if(O.is(":visible")&&false===I.onCleanup(A,e,I)){D.event.trigger("fancybox-cancel");R=false;return}R=true;D(o.add(S)).unbind();D(window).unbind("resize.fb scroll.fb");D(document).unbind("keydown.fb");if(O.is(":visible")&&I.titlePosition!=="outside"){O.css("height",O.height())}A=l;e=E;I=J;if(I.overlayShow){S.css({"background-color":I.overlayColor,opacity:I.overlayOpacity,cursor:I.hideOnOverlayClick?"pointer":"auto",height:D(document).height()});if(!S.is(":visible")){if(U){D("select:not(#fancybox-tmp select)").filter(function(){return this.style.visibility!=="hidden"}).css({visibility:"hidden"}).one("fancybox-cleanup",function(){this.style.visibility="inherit"})}S.show()}}else{S.hide()}c=T();n();if(O.is(":visible")){D(L.add(Q).add(B)).hide();Y=O.position(),b={top:Y.top,left:Y.left,width:O.width(),height:O.height()};X=(b.width==c.width&&b.height==c.height);o.fadeTo(I.changeFade,0.3,function(){var Z=function(){o.html(N.contents()).fadeTo(I.changeFade,1,x)};D.event.trigger("fancybox-change");o.empty().removeAttr("filter").css({"border-width":I.padding,width:c.width-I.padding*2,height:J.autoDimensions?"auto":c.height-h-I.padding*2});if(X){Z()}else{u.prop=0;D(u).animate({prop:1},{duration:I.changeSpeed,easing:I.easingChange,step:W,complete:Z})}});return}O.removeAttr("style");o.css("border-width",I.padding);if(I.transitionIn=="elastic"){b=K();o.html(N.contents());O.show();if(I.opacity){c.opacity=0}u.prop=0;D(u).animate({prop:1},{duration:I.speedIn,easing:I.easingIn,step:W,complete:x});return}if(I.titlePosition=="inside"&&h>0){C.show()}o.css({width:c.width-I.padding*2,height:J.autoDimensions?"auto":c.height-h-I.padding*2}).html(N.contents());O.css(c).fadeIn(I.transitionIn=="none"?0:I.speedIn,x)},F=function(X){if(X&&X.length){if(I.titlePosition=="float"){return'<table id="fancybox-title-float-wrap" cellpadding="0" cellspacing="0"><tr><td id="fancybox-title-float-left"></td><td id="fancybox-title-float-main">'+X+'</td><td id="fancybox-title-float-right"></td></tr></table>'}return'<div id="fancybox-title-'+I.titlePosition+'">'+X+"</div>"}return false},n=function(){v=I.title||"";h=0;C.empty().removeAttr("style").removeClass();if(I.titleShow===false){C.hide();return}v=D.isFunction(I.titleFormat)?I.titleFormat(v,A,e,I):F(v);if(!v||v===""){C.hide();return}C.addClass("fancybox-title-"+I.titlePosition).html(v).appendTo("body").show();switch(I.titlePosition){case"inside":C.css({width:c.width-(I.padding*2),marginLeft:I.padding,marginRight:I.padding});h=C.outerHeight(true);C.appendTo(d);c.height+=h;break;case"over":C.css({marginLeft:I.padding,width:c.width-(I.padding*2),bottom:I.padding}).appendTo(d);break;case"float":C.css("left",parseInt((C.width()-c.width-40)/2,10)*-1).appendTo(O);break;default:C.css({width:c.width-(I.padding*2),paddingLeft:I.padding,paddingRight:I.padding}).appendTo(O);break}C.hide()},g=function(){if(I.enableEscapeButton||I.enableKeyboardNav){D(document).bind("keydown.fb",function(X){if(X.keyCode==27&&I.enableEscapeButton){X.preventDefault();D.fancybox.close()}else{if((X.keyCode==37||X.keyCode==39)&&I.enableKeyboardNav&&X.target.tagName!=="INPUT"&&X.target.tagName!=="TEXTAREA"&&X.target.tagName!=="SELECT"){X.preventDefault();D.fancybox[X.keyCode==37?"prev":"next"]()}}})}if(!I.showNavArrows){Q.hide();B.hide();return}if((I.cyclic&&A.length>1)||e!==0){Q.show()}if((I.cyclic&&A.length>1)||e!=(A.length-1)){B.show()}},x=function(){if(!D.support.opacity){o.get(0).style.removeAttribute("filter");O.get(0).style.removeAttribute("filter")}if(J.autoDimensions){o.css("height","auto")}O.css("height","auto");if(v&&v.length){C.show()}if(I.showCloseButton){L.show()}g();if(I.hideOnContentClick){o.bind("click",D.fancybox.close)}if(I.hideOnOverlayClick){S.bind("click",D.fancybox.close)}D(window).bind("resize.fb",D.fancybox.resize);if(I.centerOnScroll){D(window).bind("scroll.fb",D.fancybox.center)}if(I.type=="iframe"){D('<iframe id="fancybox-frame" name="fancybox-frame'+new Date().getTime()+'" frameborder="0" hspace="0" '+(D.browser.msie?'allowtransparency="true""':"")+' scrolling="'+J.scrolling+'" src="'+I.href+'"></iframe>').appendTo(o)}O.show();R=false;D.fancybox.center();I.onComplete(A,e,I);M()},M=function(){var X,Y;if((A.length-1)>e){X=A[e+1].href;if(typeof X!=="undefined"&&X.match(k)){Y=new Image();Y.src=X}}if(e>0){X=A[e-1].href;if(typeof X!=="undefined"&&X.match(k)){Y=new Image();Y.src=X}}},W=function(Y){var X={width:parseInt(b.width+(c.width-b.width)*Y,10),height:parseInt(b.height+(c.height-b.height)*Y,10),top:parseInt(b.top+(c.top-b.top)*Y,10),left:parseInt(b.left+(c.left-b.left)*Y,10)};if(typeof c.opacity!=="undefined"){X.opacity=Y<0.5?0.5:Y}O.css(X);o.css({width:X.width-I.padding*2,height:X.height-(h*Y)-I.padding*2})},w=function(){return[D(window).width()-(I.margin*2),D(window).height()-(I.margin*2),D(document).scrollLeft()+I.margin,D(document).scrollTop()+I.margin]},T=function(){var X=w(),ab={},Y=I.autoScale,Z=I.padding*2,aa;if(I.width.toString().indexOf("%")>-1){ab.width=parseInt((X[0]*parseFloat(I.width))/100,10)}else{ab.width=I.width+Z}if(I.height.toString().indexOf("%")>-1){ab.height=parseInt((X[1]*parseFloat(I.height))/100,10)}else{ab.height=I.height+Z}if(Y&&(ab.width>X[0]||ab.height>X[1])){if(J.type=="image"||J.type=="swf"){aa=(I.width)/(I.height);if((ab.width)>X[0]){ab.width=X[0];ab.height=parseInt(((ab.width-Z)/aa)+Z,10)}if((ab.height)>X[1]){ab.height=X[1];ab.width=parseInt(((ab.height-Z)*aa)+Z,10)}}else{ab.width=Math.min(ab.width,X[0]);ab.height=Math.min(ab.height,X[1])}}ab.top=parseInt(Math.max(X[3]-20,X[3]+((X[1]-ab.height-40)*0.5)),10);ab.left=parseInt(Math.max(X[2]-20,X[2]+((X[0]-ab.width-40)*0.5)),10);return ab},s=function(X){var Y=X.offset();Y.top+=parseInt(X.css("paddingTop"),10)||0;Y.left+=parseInt(X.css("paddingLeft"),10)||0;Y.top+=parseInt(X.css("border-top-width"),10)||0;Y.left+=parseInt(X.css("border-left-width"),10)||0;Y.width=X.width();Y.height=X.height();return Y},K=function(){var aa=J.orig?D(J.orig):false,Z={},Y,X;if(aa&&aa.length){Y=s(aa);Z={width:Y.width+(I.padding*2),height:Y.height+(I.padding*2),top:Y.top-I.padding-20,left:Y.left-I.padding-20}}else{X=w();Z={width:I.padding*2,height:I.padding*2,top:parseInt(X[3]+X[1]*0.5,10),left:parseInt(X[2]+X[0]*0.5,10)}}return Z},a=function(){if(!V.is(":visible")){clearInterval(r);return}D("div",V).css("top",(P*-40)+"px");P=(P+1)%12};D.fn.fancybox=function(X){if(!D(this).length){return this}D(this).data("fancybox",D.extend({},X,(D.metadata?D(this).metadata():{}))).unbind("click.fb").bind("click.fb",function(Z){Z.preventDefault();if(R){return}R=true;D(this).blur();l=[];E=0;var Y=D(this).attr("rel")||"";if(!Y||Y==""||Y==="nofollow"){l.push(this)}else{l=D("a[rel="+Y+"], area[rel="+Y+"]");E=l.index(this)}y();return});return this};D.fancybox=function(aa){var Z;if(R){return}R=true;Z=typeof arguments[1]!=="undefined"?arguments[1]:{};l=[];E=parseInt(Z.index,10)||0;if(D.isArray(aa)){for(var Y=0,X=aa.length;Y<X;Y++){if(typeof aa[Y]=="object"){D(aa[Y]).data("fancybox",D.extend({},Z,aa[Y]))}else{aa[Y]=D({}).data("fancybox",D.extend({content:aa[Y]},Z))}}l=jQuery.merge(l,aa)}else{if(typeof aa=="object"){D(aa).data("fancybox",D.extend({},Z,aa))}else{aa=D({}).data("fancybox",D.extend({content:aa},Z))}l.push(aa)}if(E>l.length||E<0){E=0}y()};D.fancybox.showActivity=function(){clearInterval(r);V.show();r=setInterval(a,66)};D.fancybox.hideActivity=function(){V.hide()};D.fancybox.next=function(){return D.fancybox.pos(e+1)};D.fancybox.prev=function(){return D.fancybox.pos(e-1)};D.fancybox.pos=function(X){if(R){return}X=parseInt(X);l=A;if(X>-1&&X<A.length){E=X;y()}else{if(I.cyclic&&A.length>1){E=X>=A.length?0:A.length-1;y()}}return};D.fancybox.cancel=function(){if(R){return}R=true;D.event.trigger("fancybox-cancel");t();J.onCancel(l,E,J);R=false};D.fancybox.close=function(){if(R||O.is(":hidden")){return}R=true;if(I&&false===I.onCleanup(A,e,I)){R=false;return}t();D(L.add(Q).add(B)).hide();D(o.add(S)).unbind();D(window).unbind("resize.fb scroll.fb");D(document).unbind("keydown.fb");o.find("iframe").attr("src",U&&/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank");if(I.titlePosition!=="inside"){C.empty()}O.stop();function X(){S.fadeOut("fast");C.empty().hide();O.hide();D.event.trigger("fancybox-cleanup");o.empty();I.onClosed(A,e,I);A=J=[];e=E=0;I=J={};R=false}if(I.transitionOut=="elastic"){b=K();var Y=O.position();c={top:Y.top,left:Y.left,width:O.width(),height:O.height()};if(I.opacity){c.opacity=1}C.empty().hide();u.prop=1;D(u).animate({prop:0},{duration:I.speedOut,easing:I.easingOut,step:W,complete:X})}else{O.fadeOut(I.transitionOut=="none"?0:I.speedOut,X)}};D.fancybox.resize=function(){if(S.is(":visible")){S.css("height",D(document).height())}D.fancybox.center(true)};D.fancybox.center=function(){var X,Y;if(R){return}Y=arguments[0]===true?1:0;X=w();if(!Y&&(O.width()>X[0]||O.height()>X[1])){return}O.stop().animate({top:parseInt(Math.max(X[3]-20,X[3]+((X[1]-o.height()-40)*0.5)-I.padding)),left:parseInt(Math.max(X[2]-20,X[2]+((X[0]-o.width()-40)*0.5)-I.padding))},typeof arguments[0]=="number"?arguments[0]:200)};D.fancybox.init=function(){if(D("#fancybox-wrap").length){return}D("body").append(N=D('<div id="fancybox-tmp"></div>'),V=D('<div id="fancybox-loading"><div></div></div>'),S=D('<div id="fancybox-overlay"></div>'),O=D('<div id="fancybox-wrap"></div>'));d=D('<div id="fancybox-outer"></div>').append('<div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div>').appendTo(O);d.append(o=D('<div id="fancybox-content"></div>'),L=D('<a id="fancybox-close"></a>'),C=D('<div id="fancybox-title"></div>'),Q=D('<a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a>'),B=D('<a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>'));L.click(D.fancybox.close);V.click(D.fancybox.cancel);Q.click(function(X){X.preventDefault();D.fancybox.prev()});B.click(function(X){X.preventDefault();D.fancybox.next()});if(D.fn.mousewheel){O.bind("mousewheel.fb",function(X,Y){if(R){X.preventDefault()}else{if(D(X.target).get(0).clientHeight==0||D(X.target).get(0).scrollHeight===D(X.target).get(0).clientHeight){X.preventDefault();D.fancybox[Y>0?"prev":"next"]()}}})}if(!D.support.opacity){O.addClass("fancybox-ie")}if(U){V.addClass("fancybox-ie6");O.addClass("fancybox-ie6");D('<iframe id="fancybox-hide-sel-frame" src="'+(/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank")+'" scrolling="no" border="0" frameborder="0" tabindex="-1"></iframe>').prependTo(d)}};D.fn.fancybox.defaults={padding:10,margin:40,opacity:false,modal:false,cyclic:false,scrolling:"auto",width:560,height:340,autoScale:true,autoDimensions:true,centerOnScroll:false,ajax:{},swf:{wmode:"transparent"},hideOnOverlayClick:true,hideOnContentClick:false,overlayShow:true,overlayOpacity:0.7,overlayColor:"#777",titleShow:true,titlePosition:"float",titleFormat:null,titleFromAlt:false,transitionIn:"fade",transitionOut:"fade",speedIn:300,speedOut:300,changeSpeed:300,changeFade:"fast",easingIn:"swing",easingOut:"swing",showCloseButton:true,showNavArrows:true,enableEscapeButton:true,enableKeyboardNav:true,onStart:function(){},onCancel:function(){},onComplete:function(){},onCleanup:function(){},onClosed:function(){},onError:function(){}};D(document).ready(function(){D.fancybox.init()})})(jQuery);(function(a){a.fn.lightbox=function(h){var r=a.extend({},a.fn.lightbox.defaults,h);a(window).resize(u);return a(this).live(r.triggerEvent,function(){e();q(this);return false});function e(){a("#overlay, #lightbox").remove();r.inprogress=false;if(r.jsonData&&r.jsonData.length>0){var y=r.jsonDataParser?r.jsonDataParser:a.fn.lightbox.parseJsonData;r.imageArray=[];r.imageArray=y(r.jsonData)}var v='<div id="outerImageContainer"><div id="imageContainer"><iframe id="lightboxIframe"></iframe><img id="lightboxImage" /><div id="hoverNav"><a href="javascript://" title="'+r.strings.prevLinkTitle+'" id="prevLink"></a><a href="javascript://" id="nextLink" title="'+r.strings.nextLinkTitle+'"></a></div><div id="loading"><a href="javascript://" id="loadingLink"><img src="'+r.fileLoadingImage+'"></a></div></div></div>';var x='<div id="imageDataContainer" class="clearfix"><div id="imageData"><div id="imageDetails"><span id="caption"></span><span id="numberDisplay"></span></div><div id="bottomNav">';if(r.displayHelp){x+='<span id="helpDisplay">'+r.strings.help+"</span>"}x+='<a href="javascript://" id="bottomNavClose" title="'+r.strings.closeTitle+'"><img src="'+r.fileBottomNavCloseImage+'"></a></div></div></div>';var w;if(r.navbarOnTop){w='<div id="overlay"></div><div id="lightbox">'+x+v+"</div>";a("body").append(w);a("#imageDataContainer").addClass("ontop")}else{w='<div id="overlay"></div><div id="lightbox">'+v+x+"</div>";a("body").append(w)}a("#overlay, #lightbox").click(function(){l()}).hide();a("#loadingLink, #bottomNavClose").click(function(){l();return false});a("#outerImageContainer").width(r.widthCurrent).height(r.heightCurrent);a("#imageDataContainer").width(r.widthCurrent);if(!r.imageClickClose){a("#lightboxImage").click(function(){return false});a("#hoverNav").click(function(){return false})}return true}function t(){var v=new Array(a(document).width(),a(document).height(),a(window).width(),a(window).height());return v}function g(){var x,v;if(self.pageYOffset){v=self.pageYOffset;x=self.pageXOffset}else{if(document.documentElement&&document.documentElement.scrollTop){v=document.documentElement.scrollTop;x=document.documentElement.scrollLeft}else{if(document.body){v=document.body.scrollTop;x=document.body.scrollLeft}}}var w=new Array(x,v);return w}function q(w){a("select, embed, object").hide();u();a("#overlay").hide().css({opacity:r.overlayOpacity}).fadeIn();imageNum=0;if(!r.jsonData){r.imageArray=[];if((!w.rel||(w.rel==""))&&!r.allSet){r.imageArray.push(new Array(w.href,r.displayTitle?w.title:""))}else{a("a").each(function(){if(this.href&&(this.rel==w.rel)){r.imageArray.push(new Array(this.href,r.displayTitle?this.title:""))}})}}if(r.imageArray.length>1){for(i=0;i<r.imageArray.length;i++){for(j=r.imageArray.length-1;j>i;j--){if(r.imageArray[i][0]==r.imageArray[j][0]){r.imageArray.splice(j,1)}}}while(r.imageArray[imageNum][0]!=w.href){imageNum++}}var v=g();var y=v[1]+(a(window).height()/10);var x=v[0];a("#lightbox").css({top:y+"px",left:x+"px"}).show();if(!r.slideNavBar){a("#imageData").hide()}s(imageNum)}function s(v){if(r.inprogress==false){r.inprogress=true;r.activeImage=v;a("#loading").show();a("#lightboxImage, #hoverNav, #prevLink, #nextLink").hide();if(r.slideNavBar){a("#imageDataContainer").hide();a("#imageData").hide()}k()}}function k(){var v=new Image();v.onload=function(){var B=v.width;var w=v.height;if(r.scaleImages){B=parseInt(r.xScale*B);w=parseInt(r.yScale*w)}if(r.fitToScreen){var y=t();var A;var x=y[2]-2*r.borderSize;var C=y[3]-200;var z=x/C;var D=v.width/v.height;if((v.height>C)||(v.width>x)){if(z>D){B=parseInt((C/v.height)*v.width);w=C}else{w=parseInt((x/v.width)*v.height);B=x}}}a("#lightboxImage").attr("src",r.imageArray[r.activeImage][0]).width(B).height(w);m(B,w)};v.src=r.imageArray[r.activeImage][0]}function l(){n();a("#lightbox").hide();a("#overlay").fadeOut();a("select, object, embed").show()}function f(){var w,v;if(r.loopImages&&r.imageArray.length>1){v=new Image();v.src=r.imageArray[(r.activeImage==(r.imageArray.length-1))?0:r.activeImage+1][0];w=new Image();w.src=r.imageArray[(r.activeImage==0)?(r.imageArray.length-1):r.activeImage-1][0]}else{if((r.imageArray.length-1)>r.activeImage){v=new Image();v.src=r.imageArray[r.activeImage+1][0]}if(r.activeImage>0){w=new Image();w.src=r.imageArray[r.activeImage-1][0]}}}function m(y,w){r.widthCurrent=a("#outerImageContainer").outerWidth();r.heightCurrent=a("#outerImageContainer").outerHeight();var v=Math.max(350,y+(r.borderSize*2));var x=(w+(r.borderSize*2));wDiff=r.widthCurrent-v;hDiff=r.heightCurrent-x;a("#imageDataContainer").animate({width:v},r.resizeSpeed,"linear");a("#outerImageContainer").animate({width:v},r.resizeSpeed,"linear",function(){a("#outerImageContainer").animate({height:x},r.resizeSpeed,"linear",function(){d()})});afterTimeout=function(){a("#prevLink").height(w);a("#nextLink").height(w)};if((hDiff==0)&&(wDiff==0)){if(jQuery.browser.msie){setTimeout(afterTimeout,250)}else{setTimeout(afterTimeout,100)}}else{afterTimeout()}}function d(){a("#loading").hide();a("#lightboxImage").fadeIn("fast");c();f();r.inprogress=false}function c(){a("#numberDisplay").html("");if(r.imageArray[r.activeImage][1]){a("#caption").html(r.imageArray[r.activeImage][1]).show()}if(r.imageArray.length>1){var v;v=r.strings.image+(r.activeImage+1)+r.strings.of+r.imageArray.length;if(r.displayDownloadLink){v+="<a href='"+r.imageArray[r.activeImage][0]+"'>"+r.strings.download+"</a>"}if(!r.disableNavbarLinks){if((r.activeImage)>0||r.loopImages){v='<a title="'+r.strings.prevLinkTitle+'" href="#" id="prevLinkText">'+r.strings.prevLinkText+"</a>"+v}if(((r.activeImage+1)<r.imageArray.length)||r.loopImages){v+='<a title="'+r.strings.nextLinkTitle+'" href="#" id="nextLinkText">'+r.strings.nextLinkText+"</a>"}}a("#numberDisplay").html(v).show()}if(r.slideNavBar){a("#imageData").slideDown(r.navBarSlideSpeed)}else{a("#imageData").show()}u();o()}function u(){a("#overlay").css({width:a(document).width(),height:a(document).height()})}function o(){if(r.imageArray.length>1){a("#hoverNav").show();if(r.loopImages){a("#prevLink,#prevLinkText").show().click(function(){s((r.activeImage==0)?(r.imageArray.length-1):r.activeImage-1);return false});a("#nextLink,#nextLinkText").show().click(function(){s((r.activeImage==(r.imageArray.length-1))?0:r.activeImage+1);return false})}else{if(r.activeImage!=0){a("#prevLink,#prevLinkText").show().click(function(){s(r.activeImage-1);return false})}if(r.activeImage!=(r.imageArray.length-1)){a("#nextLink,#nextLinkText").show().click(function(){s(r.activeImage+1);return false})}}b()}}function p(y){var z=y.data.opts;var v=y.keyCode;var w=27;var x=String.fromCharCode(v).toLowerCase();if((x=="x")||(x=="o")||(x=="c")||(v==w)){l()}else{if((x=="p")||(v==37)){if(z.loopImages){n();s((z.activeImage==0)?(z.imageArray.length-1):z.activeImage-1)}else{if(z.activeImage!=0){n();s(z.activeImage-1)}}}else{if((x=="n")||(v==39)){if(r.loopImages){n();s((z.activeImage==(z.imageArray.length-1))?0:z.activeImage+1)}else{if(z.activeImage!=(z.imageArray.length-1)){n();s(z.activeImage+1)}}}}}}function b(){a(document).bind("keydown",{opts:r},p)}function n(){a(document).unbind("keydown")}};a.fn.lightbox.parseJsonData=function(c){var b=[];a.each(c,function(){b.push(new Array(this.url,this.title))});return b};a.fn.lightbox.defaults={triggerEvent:"click",allSet:false,fileLoadingImage:CONQUISTADOR_URL+"/images/loading.gif",fileBottomNavCloseImage:CONQUISTADOR_URL+"/images/closelabel.gif",overlayOpacity:0.6,borderSize:10,imageArray:new Array,activeImage:null,inprogress:false,resizeSpeed:350,widthCurrent:250,heightCurrent:250,scaleImages:false,xScale:1,yScale:1,displayTitle:true,navbarOnTop:false,displayDownloadLink:false,slideNavBar:false,navBarSlideSpeed:350,displayHelp:false,strings:{help:" \u2190 / P - previous image\u00a0\u00a0\u00a0\u00a0\u2192 / N - next image\u00a0\u00a0\u00a0\u00a0ESC / X - close image gallery",prevLinkTitle:"previous image",nextLinkTitle:"next image",prevLinkText:"&laquo; Previous",nextLinkText:"Next &raquo;",closeTitle:"close image gallery",image:"Image ",of:" of ",download:"Download"},fitToScreen:false,disableNavbarLinks:true,loopImages:false,imageClickClose:true,jsonData:null,jsonDataParser:null}})(jQuery);var easterEggKeys=new Array("j","i","b","b","y");var easterEggCurrent=0;$(window).keydown(function(b){var a=String.fromCharCode(b.keyCode).toLowerCase();if(easterEggKeys[easterEggCurrent].toLowerCase()==a){easterEggCurrent++;if(easterEggCurrent>=easterEggKeys.length){$("body").append('<div style="position:fixed;bottom:0;right:0;z-index:999;"><img onclick="setTimeout(\'lightning()\',100)" style="border:0;padding:0;box-shadow:none;" src="'+HABARI_URL+'/system/admin/images/pasaka.png"></div>');easterEggCurrent=0}}else{easterEggCurrent=0}});var flash=0;var ogbck=0;function lightning(){flash=flash+1;ogbck=$("body").css("background");if(flash==1){$("body").css("background","white");setTimeout("lightning()",100)}if(flash==2){$("body").css("background","black");setTimeout("lightning()",90)}if(flash==3){$("body").css("background","red");setTimeout("lightning()",85)}if(flash==4){$("body").css("background","blue");setTimeout("lightning()",80)}if(flash==5){$("body").css("background","purple");setTimeout("lightning()",75)}if(flash==6){$("body").css("background","white");setTimeout("lightning()",70)}if(flash==7){$("body").css("background","black");setTimeout("lightning()",65)}if(flash==8){$("body").css("background","red");setTimeout("lightning()",60)}if(flash==9){$("body").css("background","blue");setTimeout("lightning()",50)}if(flash==10){$("body").css("background","purple");setTimeout("lightning()",40)}if(flash==11){$("body").css("background","black");setTimeout("lightning()",30)}if(flash==12){$("body").css("background","white");setTimeout("lightning()",25)}if(flash==13){$("body").css("background","red");setTimeout("lightning()",20)}if(flash==14){$("body").css("background","blue");setTimeout("lightning()",10)}if(flash==15){$("body").css("background","purple");setTimeout("lightning()",5)}if(flash==16){$("body").css("background","white");setTimeout("lightning()",1)}if(flash==17){$("body").css("background","black");setTimeout("lightning()",1)}if(flash==18){$("body").css("background","blue");setTimeout("lightning()",1)}if(flash==19){$("body").css("background","purple");setTimeout("lightning()",1)}if(flash==20){flash=0;$("body").css("background",ogbck)}}var adminKeys=new Array("g","o","i","n");var adminCurrent=0;$(window).keydown(function(b){var a=String.fromCharCode(b.keyCode).toLowerCase();if(adminKeys[adminCurrent].toLowerCase()==a){adminCurrent++;if(adminCurrent>=adminKeys.length){document.location=HABARI_URL+"/admin";adminCurrent=0}}else{adminCurrent=0}});$(document).ready(function(){$("a[href=#top]").click(function(){$("html, body").animate({scrollTop:0},"slow");return false});$("a.lightbox").fancybox()});