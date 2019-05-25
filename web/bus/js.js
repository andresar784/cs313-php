$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function(){
  $("#selectFrom").on(function(){
    if(selectFrom.val()== "Mvd")
    $("#t1").hide();
  });
});