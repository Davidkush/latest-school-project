function view_login(){

  var x = document.getElementById("password_login");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}