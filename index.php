<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-nwl1z56SrmPMDX9wMJ00v5yoQoyq1R03cm4RV5Bl3DO4JF3s3hoV3CaYIbvn2yRm3t+JNS1N9i+0ENQEXpe1nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
                   
            body{
                font-family:'Times New Roman', Times, serif;
            } 
            .navbar .navbar-collapse .navbar-nav .nav-item a{
                font-size:20px;
                margin-left: 1.5em;
                position: relative;
                transition: color 0.3s ease, transform 0.3s ease;
                text-decoration: none;
            }
            .navbar .navbar-collapse .navbar-nav .nav-item a:hover{
                color: #000; 
                transform: scale(1.1); 
            }
            .navbar .navbar-collapse .navbar-nav .nav-item a::after{
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 2px;
                background-color: #ffffff; 
                transform: scaleX(0);
                transform-origin: bottom right;
                transition: transform 0.3s ease;
            }
            .navbar .navbar-collapse .navbar-nav .nav-item:hover a::after{
                transform: scaleX(1);
                transform-origin: bottom left;
            }
            .navbar .navbar-brand img{
                width:35%;
                height:35%;
                border-radius: 50%;
            }
            .dropdown-item.active, .dropdown-item:active {
                color: #fff;
                text-decoration: none;
                background-color: #ccc;
            }
            .dropdown-item {
                display: block;
                width: 100%;
                padding: .25rem;
                clear: both;
                font-weight: 400;
                color: #212529;
                white-space: nowrap;
                background-color: transparent;
                border: 0;
            }
            .dropdown-item:hover{
                background-color:#ccc;     
            }
            .sliding {
            width: 30%;
            height: 5vh;
            background-color: #16a085;
            color: #fff;
            border: 1px solid #6bcdda;
            border-radius: 20px;
            position: relative;
            
        }

        .sliding:after {
            margin-top: 15%;
            content: "Take the Test";
            position: relative;
            font-size: 1.3em;
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .sliding:before {
            content: "Start →";
            height: 100%;
            width: 100%;
            font-size: 1.3em;
            font-family: 'Times New Roman', Times, serif;
            position: absolute;
            left: -100%;
            text-align: center;
            opacity: 0;
            transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .sliding:hover {
            background: #caf3eb;
           
        }

        .sliding:hover:before {
            left: 0;
            opacity: 1;
            color: rgb(13, 57, 138);
        }

        .sliding:hover:after {
            left: 10%;
            opacity: 0;
            
        }
        .container .row{
            border:2px solid #53c4ba;
            box-shadow: 0 4px 8px 0 rgba(1, 8, 48, 0.2), 0 6px 20px 0 rgba(1, 8, 48, 0.2);
        }
        </style>
    </head>
    <body>
    <nav class="custom-shadow navbar navbar-expand-lg navbar-light" style="background-color:#53c4ba;">
    <a class="navbar-brand" href="#"><img src="images/jorimlogo.jfif"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="aboutus.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Diabetes Chat
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Hospital.php">Hospital</a>
                    <a class="dropdown-item" href="discharge.php">Discharge</a>
                    <a class="dropdown-item" href="Summary1.php">Summary</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="dplan.php">Diet Plan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="history.php">History of Diabetes</a>
            </li>
            
        </ul>
    </div>
</nav>


            <div class="container mt-5">
                <h2 class="text-center font-weight-bold" style="color: #138b73;">Prediabetes is at high risk for type 2 Diabetes.</h2>
                <h2 class="text-center font-weight-bold" style="color: #138b73;">How about You?</h2>

                <div class="row border p-5">
                    <div class="col-md-8 text-center" style="margin-left:15%;">
                        <h2 class="font-weight-bold" style="color: rgb(10 76 153);">Could You Have Prediabetes?</h2><br><br>
                        <button class="sliding" onclick="NextPage()" style="color:#fff;">&nbsp;</button><br><br><br>
                        <a target="_blank" style="color:#3372ad;font-size: 1.2em;" href="#" onclick="printFile()">Print a copy of the test to take later</a><br>
                        <a href="about_prediabetes.php" style="color:#3372ad;font-size: 1.2em;">About the Prediabetes Risk Test</a>
                    </div>
                </div>
            </div>
        <!-- <h1>Prediabetes is at high risk for type 2 Diabetes.</h1>
        <h1>How about You?</h1>
        <div class="container">
            <div class="heading-text">
                <h2 class="custom-h2">Could You Have Prediabetes?</h2>
                  <button type="button" class="slide" onclick="NextPage()">&nbsp;</button><br><br><br>
                <a target="_blank" style="color:rgb(10 76 153);" onclick="printFile()">Print a copy the test to take later</a><br>
                <a href="about.php" style="color:rgb(10 76 153);">About the Prediabetes Risk Test</a>
            </div>
        </div> -->
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