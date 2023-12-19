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
                color:rgb(49, 83, 151);
            }
            label{
                color:rgb(49, 83, 151);
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
                    <p class="mt-4">Do you have a mother, father, sister, or brother with diabetes?</p>
                    <p class="small" >A family history of diabetes could contribute to your risk for type 2 diabetes.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="family-history" value="yes" required> Yes<br><br>
                                <input type="radio" name="family-history" value="no" required> No<br><br><br><br>
                            </label>
                        </div>
                        <p>Have you ever been diagnosed with high blood pressure?</p>
                        <p class="small">Having high blood pressure contributes to your overall risk for type 2 diabetes.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="high-blood-pressure" value="yes" required> Yes<br><br>
                                <input type="radio" name="high-blood-pressure" value="no" required> No
                            </label>
                        </div><br><br>
                        <div id="validationMessage"></div>
                        <br>
                        <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                </section>
            </div>

            <!-- Right side form -->
            <div class="second col-md-5" style="margin-left:-1.3%;">
                <div class="form-container" style="background-color: #53c4ba; width:40vh;height:70vh;">
                    <form>
                        <section class="sec-container">
                            <img src="images\famil-img2.png" class="img-fluid mt-5">
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
        var familyHistoryRadios = document.getElementsByName("family-history");
        var highBloodPressureRadios = document.getElementsByName("high-blood-pressure");
        var messageDiv = document.getElementById("validationMessage");
            
            if (!(isChecked(familyHistoryRadios) && isChecked(highBloodPressureRadios))) {
                messageDiv.innerHTML = "Please answer all questions before proceeding.";
                return false;
            }
            messageDiv.innerHTML = "";

            NextPage();
            calculateScore();

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
        window.location.href = 'test2.php';
    }

    function calculateScore() {
        var familyHistoryValue = document.querySelector('input[name="family-history"]:checked').value;
        var highBloodPressureValue = document.querySelector('input[name="high-blood-pressure"]:checked').value;
        var score=0;
            if (familyHistoryValue === 'yes') {
                score += 1;
            }

            if (highBloodPressureValue === 'yes') {
                score += 1;
            }
            console.log("score=" +score);
            window.location.href = 'test2.php?score1=' + score;  
    }
                
</script>      
</body>
</html>
