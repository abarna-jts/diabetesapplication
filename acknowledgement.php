<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        body {
            background-color: #f1f1f1;
        }

        .acknowledgment-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom:13%;
        }

        .acknowledgment-heading {
            font-size: 36px;
            color: #333;
            text-align: center;
        }

        .acknowledgment-text {
            font-size: 18px;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }

        .back-button {
            text-align: center;
            margin-top: 30px;
        }

        .btn-back {
            background-color: #007BFF;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        /* Header */
<?php include("../header.php"); ?>
    </style>
</head>
<body>
    <div class="container mt-5 acknowledgment-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="acknowledgment-heading">Thank You!</h2>
                <p class="acknowledgment-text">Your information has been successfully shared.</p>
                <div class="back-button">
                  <button id="shareButton" onclick="return redirect();" class="btn btn-lg btn-back col-5 col-md-3 m-2">Go Back to Form</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include("../footer.php"); ?>
<script>

document.addEventListener('contextmenu', event => event.preventDefault());
    
    window.addEventListener("keydown", function (e) {
      if (e.keyCode == 123) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl key from opening developer tools (for Windows)
    window.addEventListener("keydown", function (e) {
      if (e.ctrlKey && (e.key === 'c' || e.key === 'u' || e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+I or Ctrl+Shift+J (for Windows) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if ((e.ctrlKey && e.shiftKey) && (e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+J (for Mac) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if (e.metaKey && e.altKey && e.key === 'j') {
        e.preventDefault();
      }
    });
  
    window.addEventListener("keydown", function (e) {     
      if (e.ctrlKey) {      
           e.preventDefault();     
          }   
      });


function redirect(){
        const urlParams = new URLSearchParams(window.location.search);
        const formName = urlParams.get('formName');

        if (formName === 'Anxious_Form') {
          window.location.href="../Anxious_Form/index.php";
        }
        else if (formName === 'Autism_Form'){
          window.location.href="../Autism_Form/index.php";  
        }
        else if (formName === 'ADHD_Form'){
          window.location.href="../ADHD_Form/index.php";  
        }
        else if (formName === 'depression_form'){
          window.location.href="../Depression_Test/index.php";  
        }
        else if (formName === 'Mental_Health_Tracker'){
          window.location.href="../Mental_Health_Tracker/index.php";  
        }
        else if (formName === 'OCD_Form'){
          window.location.href="../OCD_Form/index.php";  
        }
        else if (formName === 'Sleep_Form'){
          window.location.href="../Sleep_Form/index.php";  
        }
        else if (formName === 'feel-about-yourself'){
          window.location.href="../How_do_you_feel_about_yourself/index.php";  
        }
        else if (formName === 'Addiction_Form'){
          window.location.href="../Addiction_Form/index.php";  
        }
        else if (formName === 'Stress_Form'){
          window.location.href="../Stress_Management/index.php";  
        }
        else if (formName === 'Marriage_Solidarity_Scale'){
          window.location.href="../Marriage_Solidarity_Scale/index.php";  
        }
        else if (formName === 'Relationship_Form'){
          window.location.href="../Can_You_Rely_on_Your_Partner/index.php";  
        }
        else if (formName === 'Fitness_Form'){
          window.location.href="../Physical_Fitness_Measure/index.php";  
        }
        else if (formName === 'Parent_Form'){
          window.location.href="../Are_You_a_Protective_Parent/index.php";  
        }
        else if (formName === 'Job_Form'){
          window.location.href="../What_Is_Your_Job_Doing_to_You/index.php";  
        }
        // window.history.go(-3);
      }

      
      
    </script>
</html>

