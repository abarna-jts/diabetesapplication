<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
   <style>
    h2{
font-size:xx-large;
    }
    .score h3{
        display: inline;
        color:rgb(15, 48, 141);
        font-size: 2.5em;
    }
    a{
        font-size: large;
        color:#000;
    }
    a:hover{
        color:rgb(29, 66, 168);
    }
    .sec-container .score p{
        font-size: medium;
        white-space: pre-line;
    }
    li{
        text-align: left;
        font-size:1.4em;
    }
    li::before {
    content: "\2713"; /* Unicode character for checkmark */
    margin-right: 5px; /* Adjust spacing between checkmark and text */
    color: green; /* Set color of the checkmark */
  }
  .score{
    font-size: 1.4em;
  }
  ul {
    list-style-type: none;
    display: inline-block;
  }
  .link{
    font-size: 1.1em;
  }
  .centered-list {
    text-align: center;
    margin-left: 20%;
  }
  .high_container{
    width:90%;
    margin:0 auto;
    height:30%;
    background-color: rgb(153, 199, 212);
  }
   </style>
</head>
<body>
    <div class="form-container" style="margin:0 auto; margin-left: 27%;">
        <form>
            <section class="sec-container">
                <section class="high_container" style=" background-color: #79A7D3;">
                    <div class="score">
                        <h2><br>Total Score: <span id="totalScoreDisplay"></span>of 10</h2>
                        <h3>(LOW RISK</h3><h3 style="color:#e2e2e2"> FOR PREDIABETES)</h3><br><br><br>
                        <!-- <h3>Low predictions for prediabetes</h3> -->
                        <a href="pointingpage.php">How Your Test is Scored</a><br><br>
                    </div>
                </section>
                        <br>
                        <br>
                        <div class="score">
                            <p style="font-size: 1.5em;">Based on your results, you’re at low risk for prediabetes. 
                                Keep up the  good work! These healthy habits will help keep your risk low:
                            </p>
                            <div class="centered_list">
                                <ul>
                                    <li>Get at least 150 minutes of physical activity a week.</li>
                                    <li>Keep your weight in a healthy range.</li>
                                    <li> Eat healthy foods, including lots of fruits and veggies.</li>
                                    <li>Drink more water and fewer sugary drinks.</li>
                                    <li>Don’t smoke.</li>
                                </ul>
                            </div>
                            <br>
                            <br>
                            <div class="hover_link">
                                <a href="#" id="style-2" data-replace="About the risk test"><span>About the risk test</span></a><br><br>
                                <a href="form.php" id="style-2" data-replace="Invite your friends and family to take the test"><span>Invite your friends and family to take the test</span></a><br><br>
                                </div>
                            <br>
                            <br>
                            <a href="index.php" style="color:rgb(250, 250, 250); text-decoration: none; font-size: 1.5em;" class="close-button">Take again</a>
                        </div>
              
            </section>
        </form>
    </div>
    <script>
            

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
        // function categorizeTotalScore(totalScore) {
        //     if (totalScore >= 0 && totalScore < 3) {
        //         return 'Low Prediction';
        //     } else if (totalScore >= 4 && totalScore < 6) {
        //         return 'Medium Prediction';
        //     } else {
        //         return 'High Prediction';
        //     }
        // }
        var totalScore = getParameterByName('totalScore');

        // Display totalScore in the designated element
        document.getElementById('totalScoreDisplay').innerText = totalScore;
    </script>

</body>
</html>
