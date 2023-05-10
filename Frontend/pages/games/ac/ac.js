window.onload = function () {
  var isLoggedIn = sessionStorage.getItem("loggedin");
  if (isLoggedIn !== "true") {
    window.location.href = "../../login-page/login.html";
  }
};
