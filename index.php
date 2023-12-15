<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>   
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.scss">
        <style>
                    @media (min-width: 576px) {
            /* Adjust the top position for larger screens (sm and up) */
            .custom-h2 {
            margin-bottom: 20%; /* Adjust the value as needed */
            }
        }
        
        </style>
    </head>
    <body>
        <header class="header">
            <div class="logo">
                <img src="images/jorimlogo.jfif">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./Hospital.php">Hospital</a></li>
                    <li><a href="./discharge.php">Discharge</a></li>
                    <li><a href="./Summary1.php">Summary</a></li>
                    <li><a href="./history.php">History of Diabetes</a></li>  
                </ul>
            </nav>    
        </header>
        <h1>Prediabetes is at high risk for type 2 Diabetes.</h1>
        <h1>How about You?</h1>
        <div class="container">
            <div class="heading-text">
                <h2 class="custom-h2">Could You Have Prediabetes?</h2>
                <!-- <div class="button" id="button-7">
                    <div id="dub-arrow"><img src="https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-arrow-48-240.png?raw=true" alt="" /></div>
                    <a href="test1.html">Take the Test</a>
                  </div> -->
                  <button type="button" class="slide" onclick="NextPage()">&nbsp;</button><br><br><br>
                <a target="_blank" onclick="printFile()">Print a copy the test to take later</a><br>
                <a href="about.php" style="color:#3372ad;">About the Prediabetes Risk Test</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    <script>
        function printFile() {
        // Create a hidden iframe
        var iframe = document.createElement('iframe');
        iframe.style.display = 'none';
        document.body.appendChild(iframe);

        fetch('risktest.php')
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
    
        function NextPage() {
                    // Change the URL to the desired page (test2.html)
                    window.location.href = 'test1.php';
                }
    </script>
    <script>
    // Use the History API to push a new state and prevent going back to the index.php page
    history.pushState(null, null, document.URL);
    
    // Event listener to handle the back button
    window.addEventListener('popstate', function () {
      history.pushState(null, null, document.URL);
    });
  </script>  
</html>