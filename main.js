var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator;
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:

  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x,
    y,
    i,
    valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].type == "text") {
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If a Total is empty...
    if (y[i].name == "total") {
      if (y[i].value == "" || y[i].value < "100000") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        // alert("Please Select a Donation Amount!");
      }
    }

    // if proper Pan card
    if (y[i].name == "pan") {
      var panRx = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
      var panCheck = panRx.test(y[i].value);
      if (panCheck == false) {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;

        alert("Please Enter a valid Pan Number");
      }
    }

    // if proper Aadhar card
    if (y[i].name == "aadhar") {
      // var aadharRx = /^[2-9]{1}[0-9]{11}$/;
      var aadharRx = /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/;
      var aadharCheck = aadharRx.test(y[i].value);
      if (aadharCheck == false) {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;

        alert("Please Enter a valid Aadhar Number");
      }
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

myID = document.getElementById("myID");

var myScrollFunc = function () {
  var y = window.scrollY;
  if (y >= 400) {
    myID.className = "bottomMenu show";
  } else {
    myID.className = "bottomMenu hide";
  }
};

window.addEventListener("scroll", myScrollFunc);
