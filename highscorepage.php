<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <style>
    
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
    p{
        font-size:2.2em;
    }
    .sec-container .score p{
        font-size: medium;
        white-space: pre-line;
    }
    li{
        text-align: left;
        font-size:medium;
    }
    li::before {
    content: "\2713"; /* Unicode character for checkmark */
    margin-right: 5px; /* Adjust spacing between checkmark and text */
    color: green; /* Set color of the checkmark */
  }
  .score h2{
   
        font-size:2.4em;
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
  .zoom-effect {
            transition: transform 0.3s ease-in-out;
        }

        /* Apply the initial scale */
        .zoom-effect:hover {
            transform: scale(1.2); /* Adjust the scale factor as needed */
        }
      
   </style>
</head>
<body>
    <div class="form-container" style="margin:0 auto; margin-left: 27%;">
        <form>
            <section class="sec-container">
                <!-- Your form content for scorepage.html -->
                <section class="high_container"  style=" background-color: #79A7D3;">
                    <div class="score">
                        <h2><br>Total Score: <span id="totalScoreDisplay"></span> of 10</h2>   
                        <h3>(HIGH RISK</h3><h3 style="color:#e2e2e2"> FOR PREDIABETES)</h3><br><br><br>
                        <a href="pointingpage.php">How Your Test is Scored</a>
                    </div>
                </section>
                    <br>
                    <br>
                    <div class="score">
                        <p style="font-size: 1.5em;">Based on your score, you’re likely to have prediabetes, but only your 
                            doctor can diagnose it for sure. Share your results with your doctor 
                            and ask for a simple blood test to confirm them.
                        </p>
                        <br><br>
                        <button class="custom-btn btn-4" onclick="printScore()">Print Your Result</button>
                        <button class="custom-btn btn-5" onclick="">Email Your result</button>

                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="hover_link">
                    <a href="#" id="style-2" data-replace="About the risk test"><span>About the risk test</span></a><br><br>
                    <a href="form.php" id="style-2" data-replace="Invite your friends and family to take the test"><span>Invite your friends and family to take the test</span></a><br><br>
                    </div>
                    <!-- <a href="about.html" class="link"  style="font-size: 1.4em;">About the risk test</a><br><br> -->
                    <!-- <a href="email.html" class="link"  style="font-size: 1.4em;">Invite you friends and family to take the test</a> -->
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
        var totalScore = getParameterByName('totalScore');

        // Display totalScore in the designated element
        document.getElementById('totalScoreDisplay').innerText = totalScore;
      

        // Function to print the score, total score, and prediction
        function printScore() {
            window.print();
        }

            // // Open the print dialog
            
    </script>

</body>
</html>
