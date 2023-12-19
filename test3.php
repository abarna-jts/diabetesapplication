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
                    <p class="mt-4">What race or ethnicity best describes you?</p>
                    <p class="small">People of certain racial and ethnic groups are more likely to develop type 2 
                        diabetes than others.</p><br>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="ethicity" value="indian">
                                <span style="width: 150px; display: inline-block;">Indian</span><br><br>
                                <input type="radio" name="ethicity" value="asian-american">
                                <span style="width: 150px; display: inline-block;">Asian American</span><br><br>
                                <input type="radio" name="ethicity" value="american-indian">
                                <span style="width: 150px; display: inline-block;">American Indian</span><br><br>
                                <input type="radio" name="ethicity" value="others">
                                <span style="width: 150px; display: inline-block;">Others</span><br><br>
                                <input type="radio" name="ethicity" value="dont-want-to-say">
                                <span style="width: 150px; display: inline-block;">Don't Want To Say</span><br><br>
                            </label>
                        </div><br><br>
                        <div id="validationMessage"></div>
                        <br><br>
                        <a href="test2.php">
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
                            <img src="images\global.png" class="img-fluid" style="margin-top:35%; width:80%;">
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
        var ethicityRadios = document.getElementsByName("ethicity");
        var messageDiv = document.getElementById("validationMessage");
            if (!(isChecked(ethicityRadios))) {
                messageDiv.innerHTML = "Please select a button";
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
        window.location.href = 'test4.php';
    }

    function calculateScore() {
        var ethnicityValue = document.querySelector('input[name="ethicity"]:checked').value;
        var score2 = parseInt(getParameterByName('score2')) || 0;
            if (ethnicityValue === 'indian') {
                score2 += 0;
            } else if (ethnicityValue === 'asian-american') {
                score2 += 0; // Higher risk for type 2 diabetes at lower weights
            } else if (ethnicityValue === 'american-indian') {
                score2 += 0;
            } else if (ethnicityValue === 'others') {
                score2 += 0;
            } else if (ethnicityValue === 'dont-want-to-say') {
                score2 += 0;
            }
        window.location.href = 'test4.php?score3=' + score2;
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
