$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function(){
  $("#selectFrom").on('change', function(){
       if(value == "Mvd"){
    $("#t1").hide();
       }
    alert("You entered p1!");
  });
});