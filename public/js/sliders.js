


$('.hoverColor').mouseover(function (){
    $(this).css("border-color","#1dd2af");
    $(this).children('.fas').css("color", "#1dd2af")
})

$('.hoverColor').mouseleave(function (){
    $(this).css('border-color', '#fff');
    $(this).children('.fas').css("color", "#fff")
})


$('.fa-bars').click(function (){
    $('.mobile-dropdown').toggle();
})

