function search() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


$('li').on('click', function() {
    if ($(this).next().hasClass('drop_menu')) {
        $(this).next().removeClass('drop_menu');
        
    }else{
        $(this).next().addClass('drop_menu');
        $(this).next().scrollIntoView
    }
})


document.onscroll = function (){
    if ($(document).scrollTop() >= 50) {
        $('#pos_nav').css({'position': 'fixed', 'top' : '0'})
        $('.scrollup').css('display', 'block')
        $('.scrollup').css('opacity', '1')


    }else if($(document).scrollTop() == 0) {
        $('#pos_nav').css({'position': 'absolute', 'top' : '100px'})
        $('.scrollup').css('opacity', '0')
    }
}

$('.scrolimg').on('click', function(){
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 500, 'swing');
    
})





