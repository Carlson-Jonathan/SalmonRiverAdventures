function wayfinder(page) {
    var x = page;
    document.getElementById(x).style.backgroundColor="brown";
    document.getElementById(x).style.color="cornsilk";
}

function guides() {
    $(function(){
        $('.dropdownmenu > li').click(function(){
            $('.dropdownmenu > li').not(this).children("ul").slideUp(200);
        }),
        $('.dropdownmenu > li').click(function(){
            $(this).children("ul").slideToggle(200);
        })
    })
}
