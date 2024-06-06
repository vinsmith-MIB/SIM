$('#product-view a').on('click', function(){
    $('#product-view a.active').removeClass('active');
    
    $(this).addClass('active');
    
});


$(document).ready(function(){
    $('.navbar-xbootstrap').click(function(){
      $('.nav-xbootstrap').toggleClass('visible');
      $('body').toggleClass('cover-bg');
    });
  });