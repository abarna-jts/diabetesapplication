<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
   <style>
    h2{
        font-size:3em;
        color:rgb(15, 48, 141);
    }
    .score h3{
        display: inline;
        color:#409240;
        font-size: 2.5em;
    }
    a{
        font-size: large;
        color:#000;
    }
    a:hover{
        color:#16a085;
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
    .score a{
        color:rgb(15, 48, 141);
    }
    .score a:hover{
        color:#16a085;
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
            <section class="sec-container" style="width:90%;height:90%;">
                <section class="high_container" style=" background-color: #ccc;">
                    <div class="score">
                        <h2><br>Total Score: <span id="totalScoreDisplay" style="color:#409240;"></span> of 10</h2>
                        <h3 style="color:rgb(15, 48, 141)">(</h3><h3>LOW RISK</h3><h3 style="color:rgb(15, 48, 141)"> FOR PREDIABETES)</h3><br><br>
                        <!-- <h3>Low predictions for prediabetes</h3> -->
                        <a href="pointingpage.php?source=score">How Your Test is Scored</a><br><br>
                    </div>
                </section><br>
                    <div class="score">
                        <p style="font-size: 1.4em;">Based on your results, you’re at low risk for prediabetes. 
                            Keep up the  good work! These healthy habits will help keep your risk low:
                        </p>
                        <div class="centered_list" style="font-size:1em;">
                            <ul>
                                <li>Get at least 150 minutes of physical activity a week.</li>
                                <li>Keep your weight in a healthy range.</li>
                                <li> Eat healthy foods, including lots of fruits and veggies.</li>
                                <li>Drink more water and fewer sugary drinks.</li>
                                <li>Don’t smoke.</li>
                            </ul>
                        </div><br><br>
                        <div class="hover_link">
                            <a href="#" id="style-2" style="color:#000;" data-replace="About the risk test"><span>About the risk test</span></a><br><br>
                            <a href="form.php" id="style-2"  style="color:#000;" data-replace="Invite your friends and family to take the test"><span>Invite your friends and family to take the test</span></a><br><br>
                            </div>
                        <br>
                        <a href="index.php" style="color:#000; text-decoration: none; font-size: 1.5em;" class="close-button">Take again</a><br><br>
                    </div>
            </section>
        </form>
    </div>
    <script>
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
