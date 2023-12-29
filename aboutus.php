<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-nwl1z56SrmPMDX9wMJ00v5yoQoyq1R03cm4RV5Bl3DO4JF3s3hoV3CaYIbvn2yRm3t+JNS1N9i+0ENQEXpe1nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            body{
                font-family:'Times New Roman', Times, serif;
                background-color:#f1f1f1;
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
            width: 70%;
            height: 5vh;
            background-color: #16a085;
            color: #fff;
            border: 1px solid #6bcdda;
            border-radius: 20px;
            position: relative;
            
        }

        .sliding:after {
            margin-top: 15%;
            content: "Learn Symptoms";
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
        .u_list li{
            color:#16a085;
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

        <div class="container-fluid my-auto" style="background-color:#fff;">
            <div class="row ">
                <div class="col-md-2"></div>
                <div class="col-md-4 align-items-center mx-auto my-auto">
                    <h4 style="color:#287546;">About Diabetes</h4>
                    <h1>The Path to Understanding<br> Diabetes Starts Here</h1>
                    <p>No matter where you are in your journey, here's where you need to be.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/img1-diabetics.jpg" alt="Your Image" class="rounded" style="width:60%;height:auto;">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="col-md-6-fluid">
                <h2>Help is Here</h2>
                <h5>Whether you're newly diagnosed, have had type 1 or type 2 diabetes for a while, or you're helping a loved one, you’ve come to the right place. This is the way to start learning how you can live a healthier life—with the tools, health tips, and food ideas you need. Wherever you are with diabetes, you can still live your best life—and we have the steps you can take to get there. All you have to do is take action and stick with it.</h5>
            </div>
        </div>
        <div class="container-fluid mt-5 " style="background-color:#fff;">
            <div class="row">
                <div class="col-md-2 "></div>
                    <div class="col-md-4 mt-5 border w-25" style="background-color:#ccc;" >
                        <div class="col-sm-8 mt-5">
                            <h5 style="color:#287546;">ABOUT DIABETES</h5>
                            <h1>Warning Signs</h1>
                            <p>Learn to recognize the warning signs of diabetes and how to find out if you have it.</p>
                            <button class="sliding" onclick="NextPage()" style="color:#fff;">&nbsp;</button><br><br><br>
                        </div>
                    </div>
                 
                    <div class="col-md-6">
                        <img src="images/img2.jpg" alt="Your Image" class="rounded mt-5" style="width:60%;height:auto;">
                    </div>      
            </div>
        </div>

        <div class="container-fluid mt-5 " style="background-color:#fff;">
            <div class="row">
                <div class="col-md-2 "></div>
                    <div class="col-md-6">
                        <img src="images/img2.jpg" alt="Your Image" class="rounded mt-5" style="width:60%;height:auto;">
                    </div>  

                    <div class="col-md-4 mt-5 border w-25" style="background-color:#ccc;" >
                        <div class="col-sm-8 mt-5">
                            <h5 style="color:#287546;">ABOUT DIABETES</h5>
                            <h1>Understanding Diabetes</h1>
                            <p>From symptoms and treatment, to management and medication—arm yourself with the knowledge to live well with diabetes.</p>
                            <div class="u_list">
                                <ul>
                                    <li>Type 1 Diabetes</li>
                                    <li>Type 2 Diabetes</li>
                                    <li>Prediabetes</li>
                                    <li>Gestational Diabetes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 
                       
            </div>
        </div>
</body>
</html>