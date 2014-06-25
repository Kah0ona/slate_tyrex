$("header #menu-item-20 a").prepend('<div></div><svg class="icon icon-banden" viewBox="0 0 31 32"><use xlink:href="#icon-banden"></use></svg>');
$("header #menu-item-21 a").prepend('<div></div><svg class="icon icon-carwash" viewBox="0 0 31 32"><use xlink:href="#icon-carwash"></use></svg>');
$("header #menu-item-22 a").prepend('<div></div><svg class="icon icon-service" viewBox="0 0 31 32"><use xlink:href="#icon-service"></use></svg>');
$("header #menu-item-23 a").prepend('<div></div><svg class="icon icon-velgen2" viewBox="0 0 31 32"><use xlink:href="#icon-velgen2"></use></svg>');

$("header #menu-item-116 a").prepend('<svg class="icon icon-home" viewBox="0 0 31 32"><use xlink:href="#icon-home"></use></svg>');
$("header #menu-item-76 a").prepend('<svg class="icon icon-member" viewBox="0 0 31 32"><use xlink:href="#icon-member"></use></svg>');
$("header #menu-item-77 a").prepend('<svg class="icon icon-bandenwissel" viewBox="0 0 31 32"><use xlink:href="#icon-bandenwissel"></use></svg>');
$("header #menu-item-78 a").prepend('<svg class="icon icon-afsrpraak" viewBox="0 0 31 32"><use xlink:href="#icon-afsrpraak"></use></svg>');
$("header #menu-item-79 a").prepend('<svg class="icon icon-acties" viewBox="0 0 31 32"><use xlink:href="#icon-acties"></use></svg>');
$("header #menu-item-80 a").prepend('<svg class="icon icon-bandenhotel" viewBox="0 0 31 32"><use xlink:href="#icon-bandenhotel"></use></svg>');
$("header #menu-item-115 a").prepend('<svg class="icon icon-mail" viewBox="0 0 31 32"><use xlink:href="#icon-mail"></use></svg>');

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         console.log(target);

           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 750);
            return false;


        }
    }
});


$('#logo-menu-container .menu-item').mouseenter(function(){
    $(this).animate({ opacity: "0.7" }, 200);
    $(this).animate({ top: "10px" }, 200);
    $("#logo-menu-container .menu-item icon").animate({ fill: "black"}, 200);
});
 
$('#logo-menu-container .menu-item').mouseleave(function(){
    $(this).animate({ opacity: "1.0" }, 200);
    $(this).animate({ top: "0px" }, 200);
});

$('.icon-twitter, .icon-facebook').mouseenter(function(){
    $(this).animate({ opacity: "0.7" }, 200);
});

$('.icon-twitter, .icon-facebook').mouseleave(function(){
    $(this).animate({ opacity: "1.0" }, 200);
});