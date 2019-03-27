<br>

<script type="text/javascript">
  function showAlert(){
    $('.alertContainer').attr("id", "fadeOut");
  }

  function addtoCart(id){
    showAlert();
    addItemToCart(id);
    setTimeout(function(){
      $('.alertContainer').attr("id", "");
    },3050);
  }
</script>

<div class="container alertContainer" id="">
  <div class="alert alert-success" role="alert" style="text-align: center;">
    <h3>Item added to cart!</h3>
  </div>
</div>
