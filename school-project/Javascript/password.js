function view_login() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function confirm_password() {
    var y = document.getElementById("password");
    var z = document.getElementById("confirm");
    if (y.type === "password" && z.type === "password") {
      y.type = "text";
      z.type = "text"
    } else {
      y.type = "password";
      z.type = "password"
    }
  }