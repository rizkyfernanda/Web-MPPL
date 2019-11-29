function WA() {
  window.open("https://wa.me/6288213683638?text=Hai%20kak%20nab!%20Saya%20ingin%20endorse%20produk%20nih!%20Produk%20saya%20adalah%20....", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}

function saveMaid(maidId) {
  console.log(maidId);
  // $.ajax({
  //   headers: {
  //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   },
  //   url: '/save-maid/' + maidId,
  //   dataType : 'json',
  //   type: 'GET',
  //   data: {},
  //   contentType: false,
  //   processData: false,
  //   success:function(response) {
  //        console.log(response);
  //   }
  // });
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
  // $.post("/save-maid",
  // {
  //   maid_id: maidId,
  // },
  // function(data, status){
  //   alert("Data: " + data + "\nStatus: " + status);
  // });
  $('.bookmark').attr("src", "../icon/bookmark(1).svg");
}