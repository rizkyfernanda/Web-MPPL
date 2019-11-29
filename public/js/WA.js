function WA() {
  window.open("https://wa.me/6288213683638?text=Hai%20kak%20nab!%20Saya%20ingin%20endorse%20produk%20nih!%20Produk%20saya%20adalah%20....", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}

function saveMaid(maidId) {
  $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/save-maid/' + maidId,
    success: function (data) {
        console.log(data);
    },
    error: function(data) { 
         console.log(data);
    }
  });
  $('.bookmark').attr("src", "../icon/bookmark(1).svg");
}

function orderMaid(maidId) {
  $.ajax({
    type: 'GET', //THIS NEEDS TO BE GET
    url: '/order-maid/' + maidId,
    success: function (data) {
        console.log(data);
    },
    error: function(data) { 
         console.log(data);
    }
  });
  $('#hire').attr("disabled", true);
  window.open("https://wa.me/6288213683638?text=Hai%20kak%20nab!%20Saya%20ingin%20endorse%20produk%20nih!%20Produk%20saya%20adalah%20....", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
  
}