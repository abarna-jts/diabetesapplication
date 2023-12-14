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
                <form onsubmit="submitForm3()">
                    <section class="sec-container">
                        <p style="margin-top:20%;">What race or ethnicity best describes you?</p>
                        <p class="small1">People of certain racial and ethnic groups are more likely to develop type 2 
                            diabetes than others.</p>
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
                        </div>
                        <div id="validationMessage"></div>
                        <br><br>
                        <a href="test2.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                    </section>
                </form>
            </div>
            <div class="form-container" style="margin-right:30%; margin-top: 2%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">
                    <img src="images\global.png" style="width:40vh;height:60%;margin-top:35%;">
                    </section>
                </form>
            </div>
            <script>
                function validateForm() {
                    
                    var ethicityRadios = document.getElementsByName("ethicity");
                    var messageDiv = document.getElementById("validationMessage");
            
                    if (!(isChecked(ethicityRadios))) {
                        // Display the validation message in the message div
                        messageDiv.innerHTML = "Please select a button";
                        return false;
                    }
                    NextPage();
                    calculateScore();

                    // Clear the message if all validations pass
                    messageDiv.innerHTML = "";
            
                    // If all validations pass, proceed to the next page
                   
            
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
                    window.location.href = 'test4.php';
                }
                function calculateScore() {
                    // Get the selected ethnicity value
                    var ethnicityValue = document.querySelector('input[name="ethicity"]:checked').value;
                    var score2 = parseInt(getParameterByName('score2')) || 0;

                    // Assign scores based on ethnicity
                    if (ethnicityValue === 'indian') {
                        score2 += 0;
                    } else if (ethnicityValue === 'asian-american') {
                        score2 += 0; // Higher risk for type 2 diabetes at lower weights
                    } else if (ethnicityValue === 'american-indian') {
                        score2 += 0;
                    } else if (ethnicityValue === 'others') {
                        // Adjust the score as needed for the 'others' category
                        score2 += 0;
                    } else if (ethnicityValue === 'dont-want-to-say') {
                        // Adjust the score as needed for the 'don't want to say' category
                        score2 += 0;
                    }
                    // Pass data to the next page (adjust the URL and page name accordingly)
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