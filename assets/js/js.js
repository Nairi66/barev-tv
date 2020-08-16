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








