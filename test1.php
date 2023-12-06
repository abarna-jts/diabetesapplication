<!DOCTYPE html>
<html lang="zxx">
   

<title>Diabetes Test Form</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <style>
            .sec-container #validationMessage{
                color:red;
                font-size: 2em;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <!-- left side form -->
        <div class="form-container-wrapper">
            <div class="form-container" style="margin-left:20%;">
                <form>
                    <section class="sec-container">
                        <p>Do you have a mother, father, sister, or brother with diabetes?</p>
                        <p class="small">A family history of diabetes could contribute to your risk for type 2 diabetes.</p>
                        <div class="radio-group">
                            <label class="yes">
                                  <input type="radio" name="family-history" value="yes" required>
                                Yes<br><br>
                                <input type="radio" name="family-history" value="no" required>No
                            </label>
                        </div>
                        <p>Have you ever been diagnosed with high blood pressure?</p>
                        <p class="small">Having high blood pressure contributes to your overall risk for type 2 diabetes.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="high-blood-pressure" value="yes" required>
                                Yes<br><br>
                                <input type="radio" name="high-blood-pressure" value="no" required>No
                            </label>
                        </div><br>
                        <br><br>
                        <div id="validationMessage"></div>
                        <br>
                        <button type="button" class="close-button"  onclick="validateForm()">Next</button><br>
                    </section>
                </form>
            </div>
            <!-- right side form -->
            <div class="form-container" style="margin-right:10%; margin-top: 1.30%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">
                        <!-- <img src="images\family.jpg" style="width:40vh;height:60%;border-radius: 50%;"> -->
                    </section>
                </form>
            </div>
        </div>
            <script>
                function validateForm() {
                    var familyHistoryRadios = document.getElementsByName("family-history");
                    var highBloodPressureRadios = document.getElementsByName("high-blood-pressure");
                    var messageDiv = document.getElementById("validationMessage");
            
                    if (!(isChecked(familyHistoryRadios) && isChecked(highBloodPressureRadios))) {
                        // Display the validation message in the message div
                        messageDiv.innerHTML = "Please answer all questions before proceeding.";
                        return false;
                    }
            
                    // Clear the message if all validations pass
                    messageDiv.innerHTML = "";
            
                    // If all validations pass, proceed to the next page
                    NextPage();
                    calculateScore();
            
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
                    window.location.href = 'test2.html';
                }
                function calculateScore() {
                    var familyHistoryValue = document.querySelector('input[name="family-history"]:checked').value;
                    var highBloodPressureValue = document.querySelector('input[name="high-blood-pressure"]:checked').value;
                    var score=0;
                    // Initialize separate variables for family history and high blood pressure scores

                    // Assign scores for family history
                    if (familyHistoryValue === 'yes') {
                        score += 1;
                    }

                    // Assign scores for high blood pressure
                    if (highBloodPressureValue === 'yes') {
                        score += 1;
                    }
                    // Calculate the total score by adding individual scores
                    // Pass data to test2.html
                    console.log("score=" +score);
                    window.location.href = 'test2.php?score1=' + score;
                    
                }
                


    </script>
            
    </body>
</html>