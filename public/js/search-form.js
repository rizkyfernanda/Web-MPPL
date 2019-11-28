function showOverlay(){
  $('.overlay').show();
  $('.edit-form').animate({top:'130px'}, 1000);
}

function hideOverlay(){
  $('.edit-form').animate({top:'650px'}, 1000, function () {
    $('.overlay').hide();
  });
}