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
                font-size: 1.6em;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <!-- form content -->
        <div class="form-container-wrapper">
            <div class="form-container" style="margin-left:20%;">
                <form>
                    <section class="sec-container">
                        <p>Are you a man or a woman?</p>
                        <p class="small1">Men are more likely than women to have undiagnosed diabetes; 
                            one reason may be that they are less likely to see their doctor regularly.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="gender" value="man" onclick="toggleQuestions('man')">
                                Man<br><br>
                                <input type="radio" name="gender" value="woman" onclick="toggleQuestions('woman')">
                                Women<br><br>
                            </label>
                        </div>
                        <div id="second-questions" style="display: none; margin-top: -4%;">
                            <p>Have you ever been diagnosed with gestational diabetes?</p>
                            <p class="small1">Gestational diabetes is a type of diabetes that develops during pregnancy.
                                It goes away after pregnancy, but women who have gestational diabetes 
                                have an increased risk of developing type 2 diabetes.</p>
                            <div class="radio-group">
                                <label class="yes">
                                    <input type="radio" name="gestational-diabetes" value="yes">
                                    Yes<br><br>
                                    <input type="radio" name="gestational-diabetes" value="no">
                                    No<br><br>
                                </label>
                            </div>
                        </div>
                        <div id="validationMessage"></div><br><br>
                        <a href="test4.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                    </section>
                </form>
            </div>
            <!-- second form content -->
            <div class="form-container" style="margin-right:30%; margin-top: 2%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">
                    <img src="images\gender-img.png" style="width:50vh;height:40%;margin-top:80%;margin-left:-15%;">
                    </section>
                </form>
            </div>
        </div>
        <!-- form content end -->

        <!-- Script Function -->
            <script>

                // validation
                function validateForm() {
                    var genderRadios = document.getElementsByName("gender");
                    var gestationalDiabetesRadios = document.getElementsByName("gestational-diabetes");
                    var validationMessage = document.getElementById('validationMessage');
        
                    validationMessage.innerHTML = '';

                    if (!isChecked(genderRadios)) {
                        validationMessage.innerHTML = 'Please select your gender before proceeding.';
                        return false;
                    }
        
                    // If the user is a woman, perform additional validation for gestational diabetes question
                    if (getSelectedValue(genderRadios) === 'woman' && !isChecked(gestationalDiabetesRadios)) {
                        validationMessage.innerHTML = 'Please answer the diabetes question.';
                        return false;
                    }
                    
                    // If all validations pass, proceed to the next page
                    NextPage();
                    calculateScore()

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
        
                function getSelectedValue(radioButtons) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        if (radioButtons[i].checked) {
                            return radioButtons[i].value;
                        }
                    }
                    return null;
                }
            // move to nextpage
                function NextPage() {
                    // Change the URL to the desired page (test4.html)
                    window.location.href = 'test6.php';
                }
        // tottleQuestion function
                function toggleQuestions(gender) {
                    var secondQuestions = document.getElementById('second-questions');
                    if (gender === 'woman') {
                        secondQuestions.style.display = 'block';
                    } else {
                        secondQuestions.style.display = 'none';
                    }
                }

        // Score Calculation
                function calculateScore() {
                    var genderValue = document.querySelector('input[name="gender"]:checked').value;
                    var score4Value = parseInt(getParameterByName('score4Value')) || 0;

                    if (genderValue === 'man') {
                        score4Value += 1;
                    } else if (genderValue === 'woman') {
                        score4Value += 0;
                    }

                    // Get the selected response to the second question
                    var secondQuestionValue = getSecondQuestionValue();

                    // Adjust the score based on the second question
                    if (secondQuestionValue === 'yes') {
                        score4Value += 1;
                    }
                    console.log("Score from URL: " + score4Value);
                    window.location.href = 'test6.php?score4=' + score4Value;
                }
            // Second question selection
                function getSecondQuestionValue() {
                    // Implement the logic to get the value of the second question (gestational diabetes)
                    var gestationalDiabetesRadios = document.getElementsByName("gestational-diabetes");
                    for (var i = 0; i < gestationalDiabetesRadios.length; i++) {
                        if (gestationalDiabetesRadios[i].checked) {
                            return gestationalDiabetesRadios[i].value;
                        }
                    }
                    return null;
                }
            // getParameterByName
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