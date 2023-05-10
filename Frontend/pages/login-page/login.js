class User {
  email;
  password;
}
window.onload = function () {
  var isLoggedIn = sessionStorage.getItem("loggedin");
  if (isLoggedIn == "true") {
    window.location.href = "../home/index.html";
  }
};

function login() {
  var user = new User();
  var correctUser = "laur@gmail.com";
  var correctPass = "123";
  user.email = document.getElementById("email").value;
  user.password = document.getElementById("password").value;
  document.getElementById("loginForm").reset();
  if (user.email == correctUser && user.password == correctPass) {
    sessionStorage.setItem("user_email", user.email);
    sessionStorage.setItem("user_password", user.password);
    sessionStorage.setItem("loggedin", true);
    window.location.href = "../home/index.html";
    window.location.reload();
  } else {
    window.alert("Userul nu exista! Incearca sa te conectezi din nou!");
  }
}

function resetFields() {
  document.getElementById("loginForm").reset();
}
