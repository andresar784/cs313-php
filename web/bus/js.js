$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function(){
  $('#selectFrom').on('change', function() {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
       if (valueSelected == 'Mvd')
       {
      $("#t1").hide();
    }
    
  });
});