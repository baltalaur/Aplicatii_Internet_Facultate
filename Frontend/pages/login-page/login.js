class User {
  email;
  password;
}

function login() {
  var email1 = document.getElementById("email").value;
  var password1 = document.getElementById("password").value;
  var user = new User();
  user.email = email1;
  user.password = password1;
  localStorage.setItem("User Email", user.email);
  localStorage.setItem("User Password", user.password);
  document.getElementById("loginForm").reset();
  window.location.href = "../home/index.html";
}

function resetFields() {
  document.getElementById("loginForm").reset();
}
