function getChangedProducts(){
  var toggles = $(".switch");
  var toUpdate = [];

  for (var i = 0; i < toggles.length; i++) {
    //toggle switch checkbox
    var sw = toggles[i].childNodes[1];

    //the initial value as stored in the id tag
    //ex: toggle 1 for product 1 has an id of 1_0
    //1 is the id and 0 is the is viewable state
    var init = sw.id.split('_')[1];

    var checked = sw.checked;
    if (checked == 0) {
      checked = 0;
    } else {
      checked = 1;
    }

    if (checked != init) {
      console.log(sw.id + " has been changed. Was " + init + " is now " + checked);
      toUpdate.push(sw.id.split('_')[0] + "," + checked);
    }
  }

  return toUpdate;
}

$(document).ready(function(){
  $("#saveBtn").click(function(){
    var updateArr = getChangedProducts();
    console.log(updateArr);

    console.log("Save Clicked");
    $.get('../backend/updateProduct.php', {"ids[]": updateArr}).done(function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
      //console.log(data);
      location.reload();
    });
  });

  $("#addItemBtn").click(function(){
    console.log("Add clicked");
  });

  $(".removeItemBtn").click(function(){
    var yesNo = confirm("Are you sure you wish to remove this item?")
    if(yesNo == true){
      var rmItem = this.parentElement.parentElement.childNodes[1].innerHTML;
      $.get('../backend/removeProduct.php', {"id": rmItem}).done(function(data, status){
        //console.log(data);
        location.reload();
      });
    }  
  });
});
