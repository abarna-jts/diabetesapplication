<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Diabetes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

body {
  animation: fadeIn 1.5s ease-in-out; /* Adjust the duration and easing as needed */
}
    </style>
</head>

<body> 
    <div class="about"><br><br>
    <h1>About the Prediabetes Risk Test</h1><br><br><br>
    <p>More than 84 million (1 in 3) American adults have prediabetes, a condition where blood sugar levels are higher than normal but not high enough yet to be diagnosed as type 2 diabetes. What’s more, nearly 90% percent of those people don’t know they have it. Having prediabetes greatly increases the chance of developing type 2 diabetes and other serious health conditions. It’s critical for Americans to learn their prediabetes risk, be screened regularly and take the steps necessary to delay or prevent type 2 diabetes.
    </p><br><br><br>
    <p>
    The American Diabetes Association (ADA) launched its first risk test in 1993. The risk test was adapted by a published study and validated using data from the Centers for Disease Control and Prevention (CDC). To simplify the test, only health traits that people would know about themselves were included, such as age, height, and weight, but not blood sugar or cholesterol levels.
    </p><br><br><br>
    <p>
    A person with a high score on the online risk test (five or higher) is at significant risk for having prediabetes. However, only a blood test can determine an official diagnosis.
    </p><br><br><br><br>
    <button type="button" class="close-button"  onclick="NextPage()" style="margin-left:45%;" >Back</button><br>
    </div>
    <script>
        function NextPage() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>