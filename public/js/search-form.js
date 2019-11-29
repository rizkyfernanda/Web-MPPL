function showOverlay(){
  $('.overlay').show();
  $('.popup').show();
  $('.edit-form').animate({top:'130px'}, 1000);
}

function hideOverlay(){
  $('.edit-form').animate({top:'650px'}, 1000, function () {
    $('.popup').hide()
    $('.overlay').hide();
  });
}