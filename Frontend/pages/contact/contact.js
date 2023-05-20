//VALIDATION LA nume cu litera mare la adresa  sa fie @ si la subiect sa nu fie gol
function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }