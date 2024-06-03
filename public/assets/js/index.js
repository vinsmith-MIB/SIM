$('#product-view a').on('click', function(){
    $('#product-view a.active').removeClass('active');
    
    $(this).addClass('active');
    
})