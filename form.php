<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
         <!-- Link Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
   />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .btn{
            color:white;
            font-weight: 500;
        }

/* Header */

    </style>
</head>
<body>
    <div class="container " name="form-container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-10 my-4">
                <h2 class="text-center mb-4">User Information</h2>
                <form method="post" id="form" data-toggle="validator">

                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <select class="form-control" id="title" name="title" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')" >
                            <option value="" disabled selected>Select Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss">Miss</option>
                        </select>
                        <span id="titleError"></span>
                    </div>
                   
                    <div class="row">
                         <!-- First Name -->
                        <div class="form-group col-md-6 col-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')"/>
                            <span id="firstNameError"></span>
                        </div>
                        <!-- Last Name -->
                        <div class="form-group col-md-6 col-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')"/>
                            <span id="lastNameError"></span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Age -->
                        <div class="form-group col-md-6 col-6">
                            <label for="age">Age</label>
                            <input type="textbox" class="form-control" id="age" name="age" maxlength="3" required
                                        pattern="[0-9]{1,3}"
                                        oninvalid="validateAge(this)"
                                        oninput="this.setCustomValidity('')"/>
                            <span id="ageError"></span>
                        </div>
  
                        <!-- Mode of Sharing -->
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label>Mode of sharing</label>
                            <div class="row ml-0">
                                <div class="form-check  col-md-3  ">
                                    <input class="form-check-input" type="radio" name="sharingMode" id="emailOption" value="Email" required 
                                        oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                        oninput="this.setCustomValidity('')"/>
                                    <label class="form-check-label" for="Email">Email</label>
                                </div>
                                <div class="form-check col-md-3">
                                    <input class="form-check-input" type="radio" name="sharingMode" id="phoneOption" value="Phone number" required placeholder="Select option"
                                                        oninvalid="if(document.querySelectorAll('input[name=\'sharingMode\']:checked').length !== 1) document.getElementById('emailOption').setCustomValidity('Please select all questions and proceed')"
                                                        oninput="document.getElementById('emailOption').setCustomValidity('')"/>
                                    <label class="form-check-label text-nowrap" for="Phone number">Phone number</label>
                                </div>
                            </div>
                            <span id="sharingModeError"></span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required 
                                    oninvalid="validateEmail(this)"
                                    oninput="this.setCustomValidity('')"/>
                        <span id="emailError"></span>
                    </div>
                    <!--  Contact Number  -->
                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber"  maxlength="10"  required
                                    pattern="[0-9]{10}"
                                    oninvalid="validateContactNumber(this)"
                                    oninput="this.setCustomValidity('')"/>

                        <span id="numberError"></span>
                    </div>
                   
                    <!-- Hidden input for the score -->
                    <input type="hidden" name="score" value="<?php echo $score . '%'; ?>" >



                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="btn btn-primary text-center">
                                    <button class="btn btn-md md-1" type="submit" name="submit" id="submit" onclick="validate()"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
<script>
    
// PREVENT RIGHT CLICK AND SHORTCUTS
    document.addEventListener('contextmenu', event => event.preventDefault());
    
    window.addEventListener("keydown", function (e) {
      if (e.keyCode == 123) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl key from opening developer tools (for Windows)
    window.addEventListener("keydown", function (e) {
      if (e.ctrlKey && (e.key === 'c' || e.key === 'u' || e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+I or Ctrl+Shift+J (for Windows) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if ((e.ctrlKey && e.shiftKey) && (e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+J (for Mac) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if (e.metaKey && e.altKey && e.key === 'j') {
        e.preventDefault();
      }
    });
  
    window.addEventListener("keydown", function (e) {     
      if (e.ctrlKey) {      
           e.preventDefault();     
          }   
      });
      
    // Excel sheet
//         const scriptURL = 'https://script.google.com/macros/s/AKfycby_5ul96slVw-yku1MMTQdriN_VJreTvBBcNvnOjhxfCvrfMm19kBwd6Nv9-0T0SuB3/exec';
//         const form =document.querySelector('#form');
//         const submitButton = document.querySelector("#submit")

//         form.addEventListener('submit', e => {
//      submitButton.disabled = true
//      e.preventDefault()
//      let requestBody = new FormData(form)
//      fetch(scriptURL, { method: 'POST', body: requestBody})
//        .then(response => {
//         //   alert('Success!', response)
//           submitButton.disabled = false
//           window.location.href = 'acknowledgement.php';
//          })
//        .catch(error => {
//        alert('Error!', error.message)
//          submitButton.disabled = false

//        }
//        )
//    })


// Parse the query parameter from the URL
const urlParams = new URLSearchParams(window.location.search);
const normalizedScore = urlParams.get('normalizedScore');


// VALIDATION

function validateAge(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Age should only contain numeric characters');
        }
    }

function validateContactNumber(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Number should contain atleast 10 numeric characters');
        }
    }

function validateEmail(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.typeMismatch) {
            input.setCustomValidity('Enter a valid email address. Please include "@" and ".com"');
        }
    }





function validate() {
   const form = document.querySelector("#form")
   const submitButton = document.querySelector("#submit")
   const scriptURL = 'https://script.google.com/macros/s/AKfycbwF0SbHK4jkDFrqKlqnO-1pUDfNEKDay_CZX-e5VuVQ6hm1RhoKXcipnlcHj2ERnGqk/exec'

   form.addEventListener('submit', e => {
     submitButton.disabled = true
     e.preventDefault()
     let requestBody = new FormData(form)
     fetch(scriptURL, { method: 'POST', body: requestBody})
       .then(response => {
          alert('Success!', response)
          submitButton.disabled = false
         })
       .catch(error => {
       alert('Error!', error.message)
         submitButton.disabled = false

       }
       )
   })
}
document.querySelector('#form').addEventListener('submit', function (e) {
    e.preventDefault();
    validate();
});

</script>    


</body>
</html>

