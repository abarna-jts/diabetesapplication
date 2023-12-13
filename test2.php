<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            .sec-container #validationMessage{
                color:red;
                font-size: 1.6em;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="form-container-wrapper">
            <div class="form-container" style="margin-left:20%;">
                <form>
                    <section class="sec-container">
                        <p>How old are you?</p>
                        <p class="small">You are at a higher risk for type 2 diabetes the older you are.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="ageRadios" value="age1"  required>
                                Younger than 40<br><br>
                                <input type="radio" name="ageRadios" value="age2" required>40-49 Years<br><br>
                                <input type="radio" name="ageRadios" value="age3" required>50-59 Years<br><br>
                                <input type="radio" name="ageRadios" value="age4" required>60+ Years<br><br>
                            </label>
                        </div>
                        <div id="validationMessage"></div>
                        <br>
                        <br>
                        <a href="test1.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                        <span id="validationMessage" class="validation-message"></span>
                    </section>
                </form>
            </div>
             <!-- right side form -->
             <div class="form-container" style="margin-right:30%; margin-top: 2%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">
                    <img src="images\age-img.png" style="width:40vh;height:60%;margin-top:60%;">
                    </section>
                </form>
            </div>
        </div>
            <script>
                function validateForm() {
                    // Get all radio buttons for age
                    var ageRadios = document.querySelectorAll('input[name^="age"]:checked');
                    var messageDiv = document.getElementById("validationMessage");

                    // Check if at least one radio button is selected
                    if (ageRadios.length === 0) {
                        // Display the validation message in the message div
                        messageDiv.innerHTML = "Please select an age group";
                        return false;
                    }

                    // If at least one radio button is selected, proceed to the next page
                    NextPage();
                    calculateScore();

                    // Clear the message if all validations pass
                    messageDiv.innerHTML = "";

                    // Prevent form submission
                    return false;
                }

            
                function isChecked(radioButtons) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        if (radioButtons[i].checked) {
                            return true;
                        }
                    }
                    return false;
                }
            
                function NextPage() {
                    // Change the URL to the desired page (test2.html)
                    window.location.href = 'test3.php';
                }
                function calculateScore() {
                    var ageRadios = document.getElementsByName("ageRadios");
                    var score1 = parseInt(getParameterByName('score1')) || 0; // Get score from test1.html

                    // Find the selected age group
                    var selectedAgeGroup = Array.from(ageRadios).find(radio => radio.checked);

                    if (selectedAgeGroup) {
                        // Adjust the scores based on the selected value
                        switch (selectedAgeGroup.value) {
                            case "age1":
                                score1 += 0; // Adjust the score for age group 1
                                break;
                            case "age2":
                                score1 += 1; // Adjust the score for age group 2
                                break;
                            case "age3":
                                score1 += 2; // Adjust the score for age group 3
                                break;
                            case "age4":
                                score1 += 3; // Adjust the score for age group 4
                                break;
                            // Add more cases if needed
                        }
                    }
                    console.log("score1=" +score1);

                    // Pass data to test3.html
                    window.location.href = 'test3.php?score2=' + score1;
                }

function getParameterByName(name) {
    var url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}



            </script>
            
    </body>
</html>