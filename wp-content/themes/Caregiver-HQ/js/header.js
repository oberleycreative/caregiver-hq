$(function(){
    $('#header-container').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
        if($('#header-container').data('size') == 'big')
        {
            $('#header-container').data('size','small');
            $('#header-container').stop().animate({
                height:'40px'
            },600);
        }
    }
    else
    {
        if($('#header-container').data('size') == 'small')
        {
            $('#header-container').data('size','big');
            $('#header-container').stop().animate({
                height:'100px'
            },600);
        }  
    }
});