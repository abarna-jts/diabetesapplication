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
                    <p class="mt-4">How old are you?</p>
                    <p class="small" >You are at a higher risk for type 2 diabetes the older you are.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="ageRadios" value="age1"  required>
                                Younger than 40<br><br>
                                <input type="radio" name="ageRadios" value="age2" required>40-49 Years<br><br>
                                <input type="radio" name="ageRadios" value="age3" required>50-59 Years<br><br>
                                <input type="radio" name="ageRadios" value="age4" required>60+ Years<br><br>
                            </label>
                        </div><br><br>
                        <div id="validationMessage"></div>
                        <br>
                        <a href="test1.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                        <span id="validationMessage" class="validation-message"></span>
                </section>
            </div>

            <!-- Right side form -->
            <div class="second col-md-5" style="margin-left:-1.3%;">
                <div class="form-container" style="background-color: #53c4ba; width:40vh;height:70vh;">
                    <form>
                        <section class="sec-container">
                            <img src="images\age-img.png" class="img-fluid mt-5">
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
        var ageRadios = document.querySelectorAll('input[name^="age"]:checked');
        var messageDiv = document.getElementById("validationMessage");
            if (ageRadios.length === 0) {
                messageDiv.innerHTML = "Please select an age group";
                return false;
            }

            NextPage();
            calculateScore();

            messageDiv.innerHTML = "";

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
        window.location.href = 'test3.php';
    
    }
    function calculateScore() {
        var ageRadios = document.getElementsByName("ageRadios");
        var score1 = parseInt(getParameterByName('score1')) || 0; 
        var selectedAgeGroup = Array.from(ageRadios).find(radio => radio.checked);
            if (selectedAgeGroup) {
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
                }
            }
        console.log("score1=" +score1);
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
