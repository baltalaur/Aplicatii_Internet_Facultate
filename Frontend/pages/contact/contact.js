//VALIDATION LA nume cu litera mare la adresa  sa fie @ si la subiect sa nu fie gol
function validateForm() {
    var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    let fn = document.forms["myForm"]["first_name"].value;
    if (fn == "") {
      alert("Name must be filled out");
      return false;
    }
    let ln = document.forms["myForm"]["last_name"].value;
    if (ln == "") {
      alert("Name must be filled out");
      return false;
    }
    let sbj = document.forms["myForm"]["subject"].value;
    if (sbj == "") {
      alert("Subject must be filled out");
      return false;
    }
    let eml = document.forms["myForm"]["email"].value;
    if (eml == "" || !(e.match(mailformat))) {
      alert("Invalid email adrees!");
      return false;
    }
  }