<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body{
            font-family:'Times New Roman', Times, serif;
        }
        @media print {
    .page-break {
      page-break-after: always;
    }
  }
    </style>

</head>
<body>
    <div class="container p-3 my-5 border border-primary">
        <div class="content p-5 my-5  border border-primary mx-auto"style=";background-color: #79A7D3; width:80%;height:50%;">
            <h1 class=" text-center ">Total Score:<span class="text-light" id="totalScoreDisplay"></span> of 10</h2>
            <h1 class=" text-center text-light">(HIGH RISK FOR PREDIABETES)</h2>
        </div>
    
        <div class="container ">
            <p class="text-center mx-auto" style="font-size: 1.5em; width:80%;">Based on your score, you’re likely to have prediabetes, but only your 
                doctor can diagnose it for sure. Share your results with your doctor 
                and ask for a simple blood test to confirm them.
            </p>
            <br>
            <br>
            <h4 class="text-center font-weight-bold" style="color:rgb(15, 48, 141);font-size:2em;">How Your Test was Scored</h4>
            <p class="text-center text-info" style="font-size:1.5em;" >Points for each risk factor were added up to calculate your score.</p>
            <p class="mx-auto text-center" style="width:60%; font-size:1.5em;">For example, if you answered no to the question “Have you ever been diagnosed with high blood
                pressure?” you scored 0 points for High Blood Pressure. </p>
            <br>
            <h5 class="text-center text-info"  style="font-size:1.5em;">A score of 5 points or higher is considered high risk for having prediabetes</h5>
            <p class="text-center text-success font-weight-bold" style="font-size:1.5em;">(See next page for detailed breakdown) </p>
        </div>
    </div>


    <div class="page-break"></div>
    

    <div class="content mt-3">
        <h4 class="text-success font-weight-bold">Family History</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">Yes: 1 point</li>
            <li class="list-inline-item">No: 0 points</li>
        </ul>
        <p style="font-size:1.3em;">There’s a link between family history and type 2 diabetes, but not only because family members are related. Sometimes they share
            certain habits that can increase their risk.
        </p>

        <h4 class="text-success font-weight-bold">High Blood Pressure</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">Yes: 1 point</li>
            <li class="list-inline-item">No: 0 points</li>
        </ul>
        <p style="font-size:1.3em;">High blood pressure raises your risk for type 2 diabetes. It can also increase your risk for heart disease, eye problems, and kidney
            disease or make them worse.
        </p>

        <h4 class="text-success font-weight-bold">Age</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">Less than 40 years: 0 points</li>
            <li class="list-inline-item">40–49 years: 1 point</li><br>
            <li class="list-inline-item">50–59 years: 2 points</li>
            <li class="list-inline-item">60 years or older: 3 points</li>
        </ul>
        <p style="font-size:1.3em;">The older you are, the higher your risk for type 2 diabetes. Risk starts to increase at around age 45 and increases sharply after age 65.
        </p>

        <h4 class="text-success font-weight-bold">Ethnicity</h4>
        <p style="font-size:1.3em;">African Americans, Hispanic/Latino Americans, American Indians, Asian Americans, and Pacific Islanders are at higher risk for type 2
            diabetes. However, this test factored in ethnicity only in calculating Asian American BMI. Asian Americans are at higher risk for type 2
            diabetes at lower weights than other ethnicities.
        </p>

        <h4 class="text-success font-weight-bold">Physical Activity</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">Yes: 0 point</li>
            <li class="list-inline-item">No: 1 points</li>
        </ul>
        <p style="font-size:1.3em;">Being inactive is a known risk factor for type 2 diabetes. One reason is that your body can’t use insulin as well when you don’t get
            regular physical activity. Insulin helps keep blood sugar levels from getting too high.
        </p>
            
        <h4 class="text-success font-weight-bold">Gender</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">Man: 1 point</li>
            <li class="list-inline-item">Woman: 0 points</li><br>
            <li class="list-inline-item">Woman who has had gestational diabetes: 1 point</li>
        </ul>
        <p style="font-size:1.3em;">More men than women have undiagnosed diabetes, possibly because men are less likely to see their doctor regularly. Gestational
            diabetes (diabetes while pregnant) goes away after the baby is born, but increases a woman’s risk of developing type 2 diabetes later
            in life. 
        </p>

        <h4 class="text-success font-weight-bold">BMI</h4>
        <ul class="list-inline font-weight-bold" style="color:rgb(15, 48, 141);font-size:1.3em;">
            <li class="list-inline-item">< 25 (< 23 if Asian): 0 points</li>
            <li class="list-inline-item">25–29 (23–29 if Asian): 1 point</li><br>
            <li class="list-inline-item">30–39: 2 points</li>
            <li class="list-inline-item">40+: 3 points</li>
        </ul>
        <p style="font-size:1.3em;">Body mass index or BMI is a measure of height compared to weight. For example, a person who is 5’3” and weighs 120 pounds has a
            BMI of 21 and is in the normal range:
        </p>

        <table class="table table-bordered border-primary " style="width:40%;">
            <thead class="table-success">
                <tr>
                <th scope="col">WEIGHT STATUS</th>
                <th scope="col">BMI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Normal</th>
                    <td>18.5–24.9</td>
                </tr>
                <tr>
                    <th scope="row">Overweight</th>
                    <td>25–29.9</td>
                </tr>
                <tr>
                    <th scope="row">Obese</th>
                    <td colspan="2">30 or greater</td>
                </tr>
            </tbody>
        </table>
        <p style="font-size:1.3em;">People with higher BMIs have a higher risk for type 2 diabetes
        </p>
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
        var totalScore = getParameterByName('totalScore');
        document.getElementById('totalScoreDisplay').innerText = totalScore;
    </script>

</body>
</html>
