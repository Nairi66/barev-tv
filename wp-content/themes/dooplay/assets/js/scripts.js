// Scrolling style
! function(l) {
    l(window).load(function() {
        l(".scrolling").mCustomScrollbar({
            theme: "minimal-dark",
            scrollButtons: {
                enable: !0
            },
            callbacks: {
                onTotalScroll: function() {
                    addContent(this)
                },
                onTotalScrollOffset: 100,
                alwaysTriggerOffsets: !1
            }
        })
    })
}
// Definir info del contenido		
(jQuery);
$(function() {
    for (var i = 0, t = $(".items .item"), e = 0; e <= t.length; e++) i > 3 ? ($(".items .item:nth-child(" + e + ") .dtinfo").addClass("right"), 5 > i ? i++ : (i--, i--, i--, i--)) : ($(".items .item:nth-child(" + e + ") .dtinfo").addClass("left"), i++)
});
// Menu principal
$('.nav-resp').click( function() {
    $("#arch-menu").toggleClass("sidblock");
	$(".nav-resp").toggleClass("active");
} );

// Menu Avanzado
$('.nav-advc').click( function() {
    $("#advc-menu").toggleClass("advcblock");
	$(".nav-advc").toggleClass("dactive");
} );

// Add link form
$('.addlink').click( function() {
    $("#link_form_dt").toggleClass("advcblock");
	$("#fondo_dt").toggleClass("advcblock");
	$(".addlink").toggleClass("dellink");
} );

$('.adduser').click( function() {
    $("#register_form").toggleClass("advcblock");
	$(".form_fondo").toggleClass("advcblock");
	$(".adduser").toggleClass("dellink");
} );


// Buscador responsive
$('.search-resp').click( function() {
    $("#form-search-resp").toggleClass("formblock");
	$(".search-resp").toggleClass("active");
} );
// Load Series
$('.content').ready(function () {
    $('#tvload').css('display', 'none');
});
$('.content').load(function () {
    $('#tvload').css('display', 'none');
});
// Load Movies
$('.content').ready(function () {
    $('#movload').css('display', 'none');
});

$('.content').load(function () {
    $('#movload').css('display', 'none');
});
// Load Episodes
$('.content').ready(function () {
    $('#epiload').css('display', 'none');
});
$('.content').load(function () {
    $('#epiload').css('display', 'none');
});
// Load Seasons
$('.content').ready(function () {
    $('#seaload').css('display', 'none');
});
$('.content').load(function () {
    $('#seaload').css('display', 'none');
});
// Load Slider all
$('.content').ready(function () {
    $('#slallload').css('display', 'none');
});
$('.content').load(function () {
    $('#slallload').css('display', 'none');
});
// Load Slider TVShows
$('.content').ready(function () {
    $('#sltvload').css('display', 'none');
});
$('.content').load(function () {
    $('#sltvload').css('display', 'none');
});
// Load Slider Movies
$('.content').ready(function () {
    $('#slmovload').css('display', 'none');
});
$('.content').load(function () {
    $('#slmovload').css('display', 'none');
});