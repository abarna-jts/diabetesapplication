<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            .sec-container #validationMessage{
                color:red;
                font-size: 1.6em;
                margin: 0 auto;
            }
            
        </style>
    </head>
    <body>
        <div class="form-container-wrapper">
            <div class="form-container" style="margin-left:20%;">
                <form action="#" method="post">
                    <section class="sec-container">
                        <p style="margin-top:20%;">How tall are you?</p>
                        <p class="small1">The combination of your weight and height lets us know your 
                            Body Mass Index or BMI. People with higher BMIs are at a higher risk.</p>
                            <ul class="no_bullet select">
                                <li>
                                    <label for="height" style="visibility:hidden;">Select an option</label><br>
                                    <select name="height" id="height" class="custom-select custom-select-lg">
                                        <option value="">Select an option</option>
                                        <option value="4'10">4'10" (147cm)</option>
                                        <option value="4'11">4'11" (150cm)</option>
                                        <option value="5'0">5'0" (152cm)</option>
                                        <option value="5'1">5'1" (155cm)</option>
                                        <option value="5'2">5'2" (157cm)</option>
                                        <option value="5'3">5'3" (160cm)</option>
                                        <option value="5'4">5'4" (163cm)</option>
                                        <option value="5'5">5'5" (165cm)</option>
                                        <option value="5'6">5'6" (168cm)</option>
                                        <option value="5'7">5'7" (170cm)</option>
                                        <option value="5'8">5'8" (173cm)</option>
                                        <option value="5'9">5'9" (175cm)</option>
                                        <option value="5'10">5'10" (178cm)</option>
                                        <option value="5'11">5'11" (180cm)</option>
                                        <option value="6'0">6'0" (183cm)</option>
                                        <option value="6'1">6'1" (185cm)</option>
                                        <option value="6'2">6'2" (188cm)</option>
                                        <option value="6'3">6'3" (191cm)</option>
                                        <option value="6'4">6'4" (193cm)</option>
                                        <!-- Add other height options -->
                                    </select>
                                </li>
                            </ul>
                            <p>Please select your weight.</p>
                            <ul class="no_bullet select weight-options" id="weightOptions">
                                    <li>
                                        <label for="weight" style="visibility:hidden;">Select an option</label><br>
                                    <label for="weight" style="visibility:hidden;">Select weight</label><br>
                                    <select name="weight" id="weight" class="custom-select custom-select-lg">
                                        <option value="null">Select an option</option>
                                    </select>
                                </li>
                            </ul>
                            <br>
                            <br>
                            <br>

                            <div id="validationMessage"></div><br><br>
                        <a href="test5.php">
                            <button type="button" class="close-button">Previous</button>
                        </a>
                            <button type="button" class="close-button" onclick="validateForm()">See Your Results</button><br>
                        
                    </section>
                </form>
            </div>
            <div class="form-container" style="margin-right:30%; margin-top: 2%;">
                <form>
                    <section class="sec-container" style="background-color: #79A7D3; width:40vh;">
                    <!-- <img src="images\h1.png" style="width:40vh;height:60%;margin-top:30%;"> -->
                    </section>
                </form>
            </div>
        </div>
            <script>
function validateForm() {
    var height = document.getElementById("height");
        var weight = document.getElementById("weight");

        var heightValue = height.value;
        var weightValue = weight.value;

        if (heightValue === "" || weightValue === "") {
            document.getElementById("validationMessage").innerText = "Please select both height and weight.";
            return;
        }
        calculateTotalScore()


    }

    function calculateTotalScore() {
    var heightSelect = $('#height');
    var weightSelect = $('#weight');

    var heightValue = heightSelect.val();
    var weightValue = weightSelect.val();
    var score5 = calculateScore(heightValue, weightValue);

    var score4 = parseInt(getParameterByName('score4')) || 0;

    var totalScore = score4 + score5;
    // Display total score
    console.log("Total Score:", totalScore);
   
    
    if (totalScore < 3) {
        window.location.href = 'scorepage.php?totalScore=' + totalScore;

    } else {
        // Redirect to highprediction.html
        window.location.href = 'highscorepage.php?totalScore=' + totalScore;
    }
    
}
    
function calculateScore(heightValue, weightValue) {
    // Define scoring conditions based on height and weight values
    var scoringInfo = {
        "4'10": { "<119": 0, "119-142": 1, "143-190": 2, "191%2b": 3 },
        "4'11": { "<124": 0, "124-147": 1, "148-197": 2, "198%2b": 3 },
        "5'0": { "<128": 0, "128-152": 1, "153-203": 2, "204%2b": 3 },
        "5'1": { "<132": 0, "132-157": 1, "158-210": 2, "211%2b": 3 },
        "5'2": { "<136": 0, "136-163": 1, "164-217": 2, "218%2b": 3 },
        "5'3": { "<141": 0, "141-168": 1, "169-224": 2, "225%2b": 3 },
        "5'4": { "<145": 0, "145-173": 1, "174-231": 2, "232%2b": 3 },
        "5'5": { "<150": 0, "150-179": 1, "180-239": 2, "240%2b": 3 },
        "5'6": { "<155": 0, "155-185": 1, "186-246": 2, "247%2b": 3 },
        "5'7": { "<159": 0, "159-190": 1, "191-254": 2, "255%2b": 3 },
        "5'8": { "<164": 0, "164-196": 1, "197-261": 2, "262%2b": 3 },
        "5'9": { "<169": 0, "169-202": 1, "203-269": 2, "270%2b": 3 },
        "5'10": { "<174": 0, "174-208": 1, "209-277": 2, "278%2b": 3 },
        "5'11": { "<179": 0, "179-214": 1, "215-285": 2, "286%2b": 3 },
        "6'0": { "<184": 0, "184-220": 1, "221-293": 2, "294%2b": 3 },
        "6'1": { "<189": 0, "189-226": 1, "227-301": 2, "302%2b": 3 },
        "6'2": { "<194": 0, "194-232": 1, "233-310": 2, "311%2b": 3 },
        "6'3": { "<200": 0, "200-239": 1, "240-318": 2, "319%2b": 3 },
        "6'4": { "<205": 0, "205-245": 1, "246-327": 2, "328%2b": 3 },
        
    };

    // Retrieve the scoring information based on the selected height and weight
    var heightScoring = scoringInfo[heightValue];
    if (heightScoring) {
        return heightScoring[weightValue] || 0;
    }

    // Default score if height or weight is not found
    return 0;
}
            $(document).ready(function () {
            $('#height').change(updateWeightOptions);
            updateWeightOptions();
        });

        function updateWeightOptions() {
            var heightValue = $('#height').val();
            var weightSelect = $('#weight');
            var weightOptions = $('#weightOptions');

            // Clear existing weight options
            weightSelect.empty().append('<option value="null">Select an option</option>');

            // Add weight options based on the selected height
            if (heightValue === "4'10") {
                weightSelect.append('<option value="<119">&lt; 119 lbs. (54 kg)</option>');
                weightSelect.append('<option value="119-142">119-142 lbs. (54-64 kg)</option>');
                weightSelect.append('<option value="143-190">143-190 lbs. (65-85 kg)</option>');
                weightSelect.append('<option value="191%2b">191+ lbs. (86 kg)</option>');
            } else if (heightValue === "4'11") {
                weightSelect.append('<option value="<124">&lt; 124 lbs. (56 kg)</option>');
                weightSelect.append('<option value="124-147">124-147 lbs. (56-66 kg)</option>');
                weightSelect.append('<option value="148-197">148-197 lbs. (67-89 kg)</option>');
                weightSelect.append('<option value="198%2b">198+ lbs. (90 kg)</option>');
            }
            else if (heightValue === "5'0") {
                weightSelect.append('<option value="<128">&lt; 128 lbs. (58 kg)</option>');
                weightSelect.append('<option value="128-152">128-152 lbs. (58-68 kg)</option>');
                weightSelect.append('<option value="153-203">153-203 lbs. (69-91 kg)</option>');
                weightSelect.append('<option value="204%2b">204+ lbs. (92 kg)</option>');
            }
            else if (heightValue === "5'1") {
                weightSelect.append('<option value="<132">&lt; 132 lbs. (60 kg)</option>');
                weightSelect.append('<option value="132-157">132-157 lbs. (60-71 kg)</option>');
                weightSelect.append('<option value="158-210">158-210 lbs. (72-95 kg)</option>');
                weightSelect.append('<option value="211%2b">211+ lbs. (96 kg)</option>');
            }
            else if (heightValue === "5'2") {
                weightSelect.append('<option value="<136">&lt;  136 lbs. (62 kg)</option>');
                weightSelect.append('<option value="136-163">136-163 lbs. (62-73 kg)</option>');
                weightSelect.append('<option value="164-217">164-217 lbs. (74-98 kg)</option>');
                weightSelect.append('<option value="218%2b">218+ lbs. (99 kg)</option>');
            }
            else if (heightValue === "5'3") {
                weightSelect.append('<option value="<141">&lt; 141 lbs. (64 kg)</option>');
                weightSelect.append('<option value="141-168">141-168 lbs. (64-78 kg)</option>');
                weightSelect.append('<option value="169-224">169-224 lbs. (77-101 kg)</option>');
                weightSelect.append('<option value="225%2b">225+ lbs. (102 kg)</option>');
            }
            else if (heightValue === "5'4") {
                weightSelect.append('<option value="<145">&lt; 145 lbs. (66 kg)</option>');
                weightSelect.append('<option value="145-173">145-173 lbs. (66-78 kg)</option>');
                weightSelect.append('<option value="174-231">174-231 lbs. (79-104 kg)</option>');
                weightSelect.append('<option value="232%2b">232+ lbs. (105 kg)</option>');
            }
            else if (heightValue === "5'5") {
                weightSelect.append('<option value="<150">&lt; 150 lbs. (68 kg)</option>');
                weightSelect.append('<option value="150-179">150-179 lbs. (68-81 kg)</option>');
                weightSelect.append('<option value="180-239">180-239 lbs. (82-108 kg)</option>');
                weightSelect.append('<option value="240%2b">240+ lbs. (109 kg)</option>');
            }
            else if (heightValue === "5'6") {
                weightSelect.append('<option value="<155">&lt;155 lbs. (70 kg)</option>');
                weightSelect.append('<option value="155-185">155-185 lbs. (70-83 kg)</option>');
                weightSelect.append('<option value="186-246">186-246 lbs. (84-111 kg)</option>');
                weightSelect.append('<option value="247%2b">247+ lbs. (112 kg)</option>');
            }
            else if (heightValue === "5'7") {
                weightSelect.append('<option value="<159">&lt;159 lbs. (72 kg)</option>');
                weightSelect.append('<option value="159-190">159-190 lbs. (72-86 kg)</option>');
                weightSelect.append('<option value="191-254">191-254 lbs. (87-115 kg)</option>');
                weightSelect.append('<option value="255%2b">255+ lbs. (116 kg)</option>');
            }
            else if (heightValue === "5'8") {
                weightSelect.append('<option value="<155">&lt;164 lbs. (74 kg)</option>');
                weightSelect.append('<option value="164-196">164-196 lbs. (74-88 kg)</option>');
                weightSelect.append('<option value="197-261">197-261 lbs. (89-118 kg)</option>');
                weightSelect.append('<option value="262%2b">262+ lbs. (119 kg)</option>');
            }
            else if (heightValue === "5'9") {
                weightSelect.append('<option value="<169">&lt;169 lbs. (77 kg)</option>');
                weightSelect.append('<option value="169-202">169-202 lbs. (77-91 kg)</option>');
                weightSelect.append('<option value="203-269">203-269 lbs. (92-121 kg)</option>');
                weightSelect.append('<option value="270%2b">270+ lbs. (122 kg)</option>');
            }
            else if (heightValue === "5'10") {
                weightSelect.append('<option value="<174">&lt;174 lbs. (79 kg)</option>');
                weightSelect.append('<option value="174-208">174-208 lbs. (79-94 kg)</option>');
                weightSelect.append('<option value="209-277">209-277 lbs. (95-125 kg)</option>');
                weightSelect.append('<option value="278%2b">278+ lbs. (126 kg)</option>');
            }
            else if (heightValue === "5'11") {
                weightSelect.append('<option value="<179">&lt;179 lbs. (81 kg)</option>');
                weightSelect.append('<option value="179-214">179-214 lbs. (81-97 kg)</option>');
                weightSelect.append('<option value="215-285">215-285 lbs. (98-129 kg)</option>');
                weightSelect.append('<option value="286%2b">286+ lbs. (130 kg)</option>');
            }
            else if (heightValue === "6'0") {
                weightSelect.append('<option value="<184">&lt;184 lbs. (83 kg)</option>');
                weightSelect.append('<option value="184-220">184-220 lbs. (83-99 kg)</option>');
                weightSelect.append('<option value="221-293">221-293 lbs. (100-132 kg)</option>');
                weightSelect.append('<option value="294%2b">294+ lbs. (133 kg)</option>');
            }
            else if (heightValue === "6'1") {
                weightSelect.append('<option value="<189">&lt;189 lbs. (86 kg)</option>');
                weightSelect.append('<option value="189-226">189-226 lbs. (86-102 kg)</option>');
                weightSelect.append('<option value="227-301">227-301 lbs. (103-136 kg)</option>');
                weightSelect.append('<option value="302%2b">302+ lbs. (137 kg)</option>');
            }
            else if (heightValue === "6'2") {
                weightSelect.append('<option value="<194">&lt;194 lbs. (88 kg)</option>');
                weightSelect.append('<option value="194-232">194-232 lbs. (88-105 kg)</option>');
                weightSelect.append('<option value="233-310">233-310 lbs. (106-140 kg)</option>');
                weightSelect.append('<option value="311%2b">311+ lbs. (141 kg)</option>');
            }
            else if (heightValue === "6'3") {
                weightSelect.append('<option value="<200">&lt;200 lbs. (91 kg)</option>');
                weightSelect.append('<option value="200-239">200-239 lbs. (91-108 kg)</option>');
                weightSelect.append('<option value="240-318">240-318 lbs. (109-144 kg)</option>');
                weightSelect.append('<option value="319%2b">319+ lbs. (145 kg)</option>');
            }
            else if (heightValue === "6'4") {
                weightSelect.append('<option value="<200">&lt;205 lbs. (93 kg)</option>');
                weightSelect.append('<option value="205-245">205-245 lbs. (93-111 kg)</option>');
                weightSelect.append('<option value="246-327">246-327 lbs. (112-148 kg)</option>');
                weightSelect.append('<option value="328%2b">328+ lbs. (149 kg)</option>');
            }
        
            weightOptions.show();
        }
        function getParameterByName(name) {
                var url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }
            </script>
    </body>
</html>
