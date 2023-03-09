window.onload = function () {
  var isLoggedIn = false;
  var userEmail = localStorage.getItem("User Email");
  var userPassword = localStorage.getItem("User Password");
  console.log(userEmail);
  console.log(userPassword);

  if (userEmail && userPassword) {
    isLoggedIn = true;
  }
};
