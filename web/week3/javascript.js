<script>
  $(document).ready(function(){
    $("button").click(function(){
      $.post("add_cart.php",
      {
        item. $(this).val()
      },
      );
      alert("You added " + $(this).val() + " to shopping cart");
    });
  });
  </script>