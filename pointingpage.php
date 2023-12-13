<!DOCTYPE html>
<html>
    <title></title>
    <head>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="form-container" >
            <form class="myform" id="scorePage">
                <section class="sec-container">
                    <div class="testpoint">
                    <a href="<?php echo $link; ?>">&#8592;Back To Score page</a>
                        <h1>How Your Test is Scored?</h1>
                        <p>Points for each risk factor below were added up to calculate your score. 
                            For example, if you answered yes to the question “Do you have a mother, father, sister, or brother with diabetes?” you scored 1 point for Family History. If you answered no to the question “Have you ever been diagnosed with high blood pressure?” you scored 0 points for High Blood Pressure, and so on for all the risk factors. A total of 5 points or higher is considered high risk for having prediabetes.
                        </p>
                        <br>
                        <p class="tittle">Family</p>
                        <p>Yes: 1 point
                            No: 0 points
                            
                            There’s a link between family history and type 2 diabetes, but not only because family members are related. Sometimes they share certain habits that can increase their risk.</p>
                        <br>
                        <p class="tittle">High Blood Pressure</p>
                        <p>Yes: 1 point
                            No: 0 points
                            
                            High blood pressure raises your risk for type 2 diabetes. It can also increase your risk for heart disease, eye problems, and kidney disease or make them worse.</p>
                        <br>
                        <p class="tittle">Age</p>
                        <p>Less than 40 years: 0 points
                            40–49 years: 1 point
                            50–59 years: 2 points
                            60 years or older: 3 points
                                
                            The older you are, the higher your risk for type 2 diabetes. Risk starts to increase at around age 45 and increases sharply after age 65.</p>
                        <br>
                        <p class="tittle">Ethnicity</p>
                        <p>African Americans, Hispanic/Latino Americans, American Indians, Asian Americans, and Pacific Islanders are at higher risk for type 2 diabetes. Asian Americans are at higher risk for type 2 diabetes at lower weights than other ethnicities.</p>
                        <br>
                        <p class="tittle">Physical Activity</p>
                        <p>Yes: 0 points
                            No: 1 point                            
                            
                            Being inactive is a known risk factor for type 2 diabetes. One reason is that your body can’t use insulin as well when you don’t get regular physical activity. Insulin helps keep blood sugar levels from getting too high.</p>
                        <br>
                        <p class="tittle">Gender</p>
                        <p>Man: 1 point
                            Woman: 0 points                                
                            Woman who has had gestational diabetes: 1 point                                
                                
                            More men than women have undiagnosed diabetes, possibly because men are less likely to see their doctor regularly. Gestational diabetes (diabetes while pregnant) goes away after the baby is born, but increases a woman’s risk of developing type 2 diabetes later in life.</p>                                
                        <br>
                        <p class="tittle">BMI</p>
                        <p>< 25 (< 23 if Asian): 0 points
                            25–29 (23–29 if Asian): 1 point 
                            30–39: 2 points
                            40+: 3 points
                                    
                            Body mass index or BMI is a measure of height compared to weight. For example, a person who is 5’3” and weighs 120 pounds has a BMI of 21 and is in the normal range:
                            <table border="2px solid" style="margin-left: 5%;">
                                <thead>
                                    <tr>
                                        <th>Weight status</th>
                                        <th>BMI</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Normal</td>
                                        <td>18.5-24.9</td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        <td>Overweight</td>
                                        <td>25-29.9</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Obese</td>
                                        <td>30 or greater</td>
                                    </tr>
                                </tbody>
                                </table>
                                </p>
                                <p>
                                People with higher BMIs have a higher risk for type 2 diabetes.
                            </p>
                            <a href="scorepage.html">&#8592; Back To Score page</a>
                        </div>
                </section>
            </form>
        </div>
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const source = urlParams.get('source');

        // Check the source and redirect accordingly
        if (source === 'highscore') {
            // Redirect to highscorepage.html
            document.querySelector('a').href = 'highscorepage.php';
        } else {
            // Default to scorepage.html
            document.querySelector('a').href = 'scorepage.php';
        }
    });
</script>
    </body>
</html>