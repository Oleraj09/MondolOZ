$(document).on('click','.button-group li',function(){
  $(this).addClass('active').siblings().removeClass('active')
});
$(document).ready(function(){
$('.list').click(function(){
    const value = $(this).attr('data-filter');
    if(value=='all'){
      $('.items').show('1000');
    }
    else{
      $('.items').not('.'+value).hide('1000');
      $('.items').filter('.'+value).show('1000');
    }
});
});