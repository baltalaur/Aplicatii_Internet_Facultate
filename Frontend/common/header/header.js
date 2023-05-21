window.onload = function () {
  var isLoggedIn = sessionStorage.getItem("loggedin");
  checkUserState(isLoggedIn);
};

function checkUserState(loggedin) {
  var logInButton = document.getElementById("login");
  var logOutButton = document.getElementById("logout");
  if (loggedin == "true") {
    logInButton.style.display = "none";
    logOutButton.style.display = "block";
  } else {
    logInButton.style.display = "block";
    logOutButton.style.display = "none";
  }
}
