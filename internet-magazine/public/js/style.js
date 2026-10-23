$(document).ready(function(){
    $('.carousel').carousel({

        interval:4000
    });


});
//Scroll

var scrollButton=$("#scroll-top");
$(window).on('scroll', function()
{
    if($(this).scrollTop()>=700)
    {
        scrollButton.show();
    }
    else
    {
        scrollButton.hide();
    }


});
scrollButton.click(function()
{
    $("html,body").animate({scrollTop:0},1000);
});


$(document).ready(function(){
    $("#submit").click(function(){
        var term = "";
        var n = "0";


    });
});
$('#qty, #price , #p , #m ').on('click',function() {
    var qty = parseInt($('#qty').val());
    var price = parseFloat($('#price').val());
    $('#total').val((qty * price ).toFixed(2));

});
$('.zoom_01').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
});

