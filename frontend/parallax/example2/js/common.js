$(window).scroll(function() {
  var heighBlock=document.getElementById('header');
  var heightFirst=document.getElementById('first_block');
  if ($(this).scrollTop() > heighBlock.offsetHeight ) {
    $('#header').addClass("head_none");
  }
  else {
    $('#header').removeClass("head_none");
  };
  if ($(this).scrollTop() > heightFirst.offsetHeight ) {
    $('#header').addClass("header_return");
    $('#title_one').css("display","none");
  }
  else {
    $('#header').removeClass("header_return");
    $('#title_one').css("display","block");
  }

});