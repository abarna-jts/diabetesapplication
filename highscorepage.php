<?php
$totalScore = $_GET['totalScore'] ?? 0; 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
    .score h3{
        display: inline;
        color:#c95c5c;
        font-size: 2.5em;
    }
    .hover_link a{
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
        color:rgb(15, 48, 141);
        font-size:2.8em;
    }
    .score{
        font-size: 1.4em;
    }
    .score a{
        color:rgb(15, 48, 141);
        font-size: 1.4em;
    }
    .score a:hover{
        color:#16a085;
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
    .zoom-effect:hover {
        transform: scale(1.2); /* Adjust the scale factor as needed */
    }      
   </style>
</head>
<body>
    <div class="form-container" style="margin:0 auto; margin-left: 27%;">
        <form>
            <section class="sec-container" style="width:90%;">
                <!-- Your form content for scorepage.html -->
                <section class="high_container"  style=" background-color: #ccc;">
                    <div class="score">
                        <h2><br>Total Score: <span id="totalScoreDisplay" style="color:#c95c5c;"></span> of 10</h2>   
                        <h3 style="color:rgb(15, 48, 141)">(</h3><h3>HIGH RISK</h3><h3 style="color:rgb(15, 48, 141);"> FOR PREDIABETES)</h3><br><br>
                        <a href="pointingpage.php?source=highscore">How Your Test is Scored</a>
                    </div>
                </section>
                    <br>
                    <br>
                    <div class="score">
                        <p style="font-size: 1.5em;">Based on your score, you’re likely to have prediabetes, but only your 
                            doctor can diagnose it for sure. Share your results with your doctor 
                            and ask for a simple blood test to confirm them.
                        </p>
                        <br>
                        <button type="button" class="custom-btn btn-4" onclick="printFile()">Print Your Result</button>
                        <button type="button" class="custom-btn btn-5" onclick="NextPage()">Email Your result</button>
                    <br>
                    <br>
                    <div class="hover_link">
                    <a href="about.php" id="style-2" data-replace="About the risk test"><span>About the risk test</span></a><br><br>
                    <a href="form.php?totalScore=<?php echo $totalScore; ?>" id="style-2" data-replace="Invite your friends and family to take the test"><span>Invite your friends and family to take the test</span></a><br><br>
                    </div>
                    <!-- <a href="about.html" class="link"  style="font-size: 1.4em;">About the risk test</a><br><br> -->
                    <!-- <a href="email.html" class="link"  style="font-size: 1.4em;">Invite you friends and family to take the test</a> -->
                    <br>
                    
                    <a href="index.php" style="color:#000; text-decoration: none; font-size: 1.5em;" class="close-button">Take again</a>
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
        // function printScore() {
        //     window.print();
        // }
        function NextPage() {
                    // Change the URL to the desired page (test2.html)
                    window.location.href = 'form.php';
        }
        function printFile() {
        // Create a hidden iframe
        var iframe = document.createElement('iframe');
        iframe.style.display = 'none';
        document.body.appendChild(iframe);

        fetch('hsprint.php')
            .then(response => response.text())
            .then(html => {
                // Load the HTML content into the iframe
                iframe.contentDocument.write(html);
                iframe.contentDocument.close();

                // Print the content
                iframe.contentWindow.print();
            })
            .catch(error => {
                console.error('Error fetching risktest.php:', error);
            });
        }        
    </script>

</body>
</html>
