<DOCTYPE html>
<html>
    <title>Diabetes Test form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body{
                font-family:'Times New Roman', Times, serif;
            } 
            .custom-shadow {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Modify values as needed */
                /* Additional styles if necessary */
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
            .custom-rounded-border {
                border: 2px solid #339433;
                border-radius: 15px 50px;
                background:#dddddd;
                padding: 20px; 
                width: 200px;
                height: 150px; 
                
            }
            .custom-rounded-border:hover {
                background:#f3f3f3;
                
                
            }
            .card-body .card-text{
                color:#292727;
            }
            .custom-rounded-border .card-img-top {
                border: 2px solid #339433;
                border-radius: 10px;
            }
            .custom-rounded-border .card-img-top:hover{
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


        <div class="container">
            <div class="custom-shadow p-3 mt-5 rounded" style="background-color:#f5f5f5;">
                <h5 class="text-center  my-4 " style="color:rgb(10 76 153);font-size:1.3em;">Our Diet Plan Offers Result riented Diet Plans to Keep You Fit and Active always</h5>
                <h1 class="text-center my-4 font-weight-bold" style="color:#138b73;">Diet Plans</h1>
                <h5 class="text-center" style="color:#138b73;">1-Dietitian | 40+ Diet Plans for your needs</h5>
            </div>
        </div>

        <!-- CARD CONTAINER -->

        <div class="container my-5">
            <!-- FIRST CARD ROW -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/weight-img3-1.png" class="card-img-top" >
                        <div class="card-body" >
                            <p class="card-text">1 Month Weight <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/weight-img4-1.png" class="card-img-top" style="height:9.5em;">
                        <div class="card-body">
                            <p class="card-text">3 Month Weight <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/6mon-diet.jpg" class="card-img-top" style="height:10.5em;">
                        <div class="card-body">
                            <p class="card-text">6 Month Weight <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/12mon-diet.jpg" class="card-img-top" style="height:10.5em;">
                        <div class="card-body">
                            <p class="card-text">12 Month Weight <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECOND CARD ROW -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/1mon-diet.jpg" class="card-img-top" style="height:9em;">
                        <div class="card-body">
                            <p class="card-text">1 Month Disease <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/3mon-diet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">3 Month Disease <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/diet-img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">6 Month Disease <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border " style="width: 16rem;height:95%;">
                        <img src="images/diet-img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">8 Month Disease <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- THIRD CARD ROW  -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/12mondiet-1.png" class="card-img-top" >
                        <div class="card-body">
                            <p class="card-text">12 Month Disease <br> Management Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem; height:95%;">
                        <img src="images/ketodiet.png" class="card-img-top" alt="...">
                             <div class="card-body" style="width:80%;">
                            <p class="card-text">Indian Ketogenic Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/1mondiet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">1 Month Weight <br> Gain Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/allergydiet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Celiac Disease / Gluten <br> Allergy Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOURTH CARD ROW  -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/heart-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body" >
                            <p class="card-text">Heart Care Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/depression-img.jpg" class="card-img-top" >
                        <div class="card-body" >
                            <p class="card-text">Anti-depression Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/renaldiet.jpg" class="card-img-top" alt="...">
                        <div class="card-body" >
                            <p class="card-text">Renal Disorder Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/thy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Thyroid Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FIFTH CARD ROW  -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images\cancerdiet-img-1.png" class="card-img-top" >
                        <div class="card-body">
                            <p class="card-text">Cancer Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images\ayurvedic-img.jpeg" class="card-img-top" style="height:11em;">
                        <div class="card-body">
                            <p class="card-text">Panchkarma Therapies – <br> Ancient Ayurveda System</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/premarriagediet-1.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Pre-marriage Package</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/pregnancydiet-1.png" class="card-img-top" >
                        <div class="card-body">
                            <p class="card-text">Post-pregnancy Weight <br> Loss Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SIXTH CARD ROW -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/lactosediet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Lactose Intolerance Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/navratidiet.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Navratri Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/yoga-diet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Summer Body Challenge Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/muscle-gain-diet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Muscle Gain Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEVENTH CARD ROW  -->
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/pcod-img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">PCOD Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/aciditydiet.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Anti-Acidity Diet Plan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card custom-rounded-border" style="width: 16rem;height:95%;">
                        <img src="images/alopeciadiet-1.png" class="card-img-top" style="height:10em;">
                        <div class="card-body">
                            <p class="card-text">Alopecia Diet Plan</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


            <!-- <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">12 Month Weight Management Diet Plan</p>
                </div>
            </div>
        </div> -->



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
