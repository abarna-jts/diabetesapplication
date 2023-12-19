<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
             body{
                font-family:'Times New Roman', Times, serif;
            } 
            p{
                color:rgb(4, 47, 128);
                font-size:1.4em;
            }
            .small{
                font-size:1.16em; 
                white-space: pre-line;
                color:rgb(49, 83, 151);
            }
            label{
                color:rgb(49, 83, 151);
                font-size:1.19em;
            }
            .first{
                
                border:2px solid #53c4ba!important;
                box-shadow: 0 4px 8px 0 rgba(1, 8, 48, 0.2), 0 6px 20px 0 rgba(1, 8, 48, 0.2);
            }
            .sec-container #validationMessage{
                color:red;
                font-size: 1.3em;
                margin: 0 auto;
            }
            .close-button {
                outline: 0;
                grid-gap: 8px;
                align-items: center;
                background-color: #ccc;
                color: #1b1b1b;
                border: 1px solid #000;
                border-radius: 4px;
                cursor: pointer;
                display: inline-flex;
                flex-shrink: 0;
                font-size: 16px;
                gap: 8px;
                justify-content: center;
                line-height: 1.5;
                overflow: hidden;
                padding: 8px 22px;
                text-decoration: none;
                text-overflow: ellipsis;
                transition: all .14s ease-out;
                white-space: nowrap;
            }
            .close-button:hover {
                box-shadow: 4px 4px 0 #000;
                transform: translate(-4px,-4px);
            }
            
        </style>
    <body>
    <div class="container mt-5 text-center" >
        <div class="row " style="margin-top:10%;width:130%;height:70vh;">
            <!-- Left side form -->
            <div class="first col-md-6 border p-3" >
                <section class="sec-container">
                    <p class="mt-4">Are you a man or a woman?</p>
                    <p class="small">Men are more likely than women to have undiagnosed diabetes; 
                            one reason may be that they are less likely to see their doctor regularly.</p><br>
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
                            <p class="small">Gestational diabetes is a type of diabetes that develops during pregnancy.
                                    It goes away after pregnancy, but women who have gestational diabetes 
                                    have an increased risk of developing type 2 diabetes.</p>
                                <div class="radio-group">
                                    <label class="yes">
                                        <input type="radio" name="gestational-diabetes" value="yes">
                                        Yes<br>
                                        <input type="radio" name="gestational-diabetes" value="no">
                                        No<br>
                                    </label>
                                </div><br>
                        </div>

                        <div id="validationMessage"></div><br>
                        <a href="test4.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                </section>
            </div>

            <!-- Right side form -->
            <div class="second col-md-5" style="margin-left:-1.3%;">
                <div class="form-container" style="background-color: #53c4ba; width:40vh;height:70vh;">
                    <form>
                        <section class="sec-container">
                            <img src="images\dnagender.webp" class="img-fluid" style="margin-top:35%; width:80%;">
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Optional: Add the Bootstrap JavaScript and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<script>
    function validateForm() {
        var genderRadios = document.getElementsByName("gender");
        var gestationalDiabetesRadios = document.getElementsByName("gestational-diabetes");
        var validationMessage = document.getElementById('validationMessage');

        validationMessage.innerHTML = '';

        if (!isChecked(genderRadios)) {
            validationMessage.innerHTML = 'Please select your gender before proceeding.';
            return false;
        }

        if (getSelectedValue(genderRadios) === 'woman' && !isChecked(gestationalDiabetesRadios)) {
            validationMessage.innerHTML = 'Please answer the diabetes question.';
            return false;
        }
                    
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

    function NextPage() {
        window.location.href = 'test6.php';
    }

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
        var secondQuestionValue = getSecondQuestionValue();
            if (secondQuestionValue === 'yes') {
                score4Value += 1;
            }
                console.log("Score from URL: " + score4Value);
                window.location.href = 'test6.php?score4=' + score4Value;
    }
    
    // Second question selection
    function getSecondQuestionValue() {
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
