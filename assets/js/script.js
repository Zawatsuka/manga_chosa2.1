
function mp() {
    var x = document.getElementById("pass");
    
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    } 
  }
  function rmp(){
    var y = document.getElementById("rePass")
    if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
  }