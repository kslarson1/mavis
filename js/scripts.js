//add class on hover

$('.woocommerce-page ul.products li.product a img').hover(
       function(){ $(this).addClass('hover') },
       function(){ $(this).removeClass('hover') }
)