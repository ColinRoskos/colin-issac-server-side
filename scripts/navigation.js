



function navStart(){
  $('li.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
}




$(document).ready(navStart);
