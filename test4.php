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
                        <p>Are you physically active?</p>
                        <p class="small">Being inactive can increase your risk for type 2 diabetes.</p>
                        <div class="radio-group">
                            <label class="yes">
                                <input type="radio" name="family-history" value="yes">
                                Yes<br><br>
                                <input type="radio" name="family-history" value="no">No<br><br>
                            </label>
                        </div>
                        <div id="validationMessage"></div><br><br>
                        <a href="test3.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">Next</button><br>
                    </section>
                </form>
            </div>
            <div class="form-container" style="margin-right:30%; margin-top: 2%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">

                    </section>
                </form>
            </div>
        </div>
            <script>
                function validateForm() {
                    console.log('Score from URL:', getParameterByName('score3'));
                    var familyHistoryRadios = document.getElementsByName("family-history");
                    var messageDiv = document.getElementById("validationMessage");
            
                    if (!(isChecked(familyHistoryRadios))) {
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
                    window.location.href = 'test5.php';
                }
                function calculateScore() {
                    var familyHistoryValue = document.querySelector('input[name="family-history"]:checked').value;
            var score3 = parseInt(getParameterByName('score3')) || 0; // Get score from test1.html

            // Assign scores for different answers
            if (familyHistoryValue === 'no') {
                score3 += 1;
            }
            // Pass data to test3.html
            window.location.href = 'test5.php?score4Value=' + score3;
        }


        // Function to get URL parameter by name
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