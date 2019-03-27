var cookie = "cart";

function addItemToCart(prodId){
  var c = this.getCookie(cookie);
  if(c != ""){
    var items = c;
    items+="," + prodId;
    this.setCookie(cookie, items, 1);
  } else {
    this.setCookie(cookie, prodId, 1);
  }

}

function getCart(){
  var c = this.getCookie(cookie);
  var items = [];

  if(c != ""){
    var it = c.split(',');
    for (var i = 0; i < it.length; i++) {
      items.push(it[i]);
    }
  }
  return items;
}

function emptyCart(){
  this.setCookie(cookie, "", -1);
  location.reload();
}

function setCookie(name, val, expDays){
  var d = new Date();
  d.setTime(d.getTime() + (expDays*24*60*60*1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + val + ";" + expires + ";path=/"
}

function getCookie(name) {
  var cookieName = name + "=";
  var decodeCookie = decodeURIComponent(document.cookie);
  var ca = decodeCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while(c.charAt(0) == ' '){
      c = c.substring(1);
    }
    if(c.indexOf(cookieName) == 0){
      return c.substring(cookieName.length, c.length)
    }
  }
  return "";
}
