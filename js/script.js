function getLetter() {
  var params = {};
  var param_array = window.location.href.split('?')[1].split('&');
  for(var i in param_array){
      x = param_array[i].split('=');
      params[x[0]] = x[1];
  }
  return params;
}

var tab_letters = ["a" , "b" , "c" , "d" , "e" , "f" , "g" , "h" , "i" , "j" , "k", "l" , "m" , "n" , "o" , "p" , "q" , "r" , "s" , "t" , "u" , "v" , "w" , "x" , "y" , "z"];
var key;      

for(key in tab_letters){
  document.getElementById(tab_letters[key]).className = "list-group-item";
}

var letter = getLetter().letter;
document.getElementById(letter).className = "list-group-item active";
      