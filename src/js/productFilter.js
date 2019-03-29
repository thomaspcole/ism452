$(document).ready(function(){
  var x = $('.dropdown');

  for (var i = 0; i < x.length; i++) {
    var dropdownItem = x[i].childNodes[3].childNodes[1].text;
    console.log(x[i], dropdownItem);
    var id= x[i].childNodes[1].id
    $("#"+id).text(dropdownItem);
  }
});

$('.dropdown-menu > a').click(function(e){
    var x = this.innerHTML;
    var id = this.parentElement.parentElement.childNodes[1].id;
    //console.log(id, x);
    $("#"+id).text(x);
});


function reloadWithFilter(filter){
  window.location.href = "/products.php?" + filter
}
