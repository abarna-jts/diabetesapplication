<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type 2 Diabetes Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Type 2 Diabetes Test</h1>
    <form id="diabetesForm">

        <!-- Medical History -->
        <label>Do you have a mother, father, sister, or brother with diabetes?</label>
        <input type="radio" name="familyHistory" value="yes" required> Yes
        <input type="radio" name="familyHistory" value="no" required> No

        <label>Have you ever been diagnosed with high blood pressure?</label>
        <input type="radio" name="previousDiagnosis" value="yes" required> Yes
        <input type="radio" name="previousDiagnosis" value="no" required> No

        <!-- Lifestyle and Habits -->
        <label>How old are you?:</label>
        <select id="activityLevel" required>
            <option value="Younger than 40">Younger than 40</option>
            <option value="40Years">40-49 Years</option>
            <option value="50Years">50-59 Years</option>
            <option value="60+Years">60+ Years</option>
        </select>
        <label>What race or ethnicity best describes you?</label>
        <select id="ethnicity" required>
            <option value="Indian">Indian</option>
            <option value="Asian">Asian American</option>
            <option value="American">American Indian</option>
            <option value="Others">Others</option>
            <option value="Don't Want To Say">Don't Want To Say</option>
        </select>
        <label>Are you physically active?</label>
        <input type="radio" name="physical" value="yes" required> Yes
        <input type="radio" name="physical" value="no" required> No
        <!-- ... (additional form fields) -->

        <!-- Submit Button -->
        <button type="button" onclick="calculateScore()">Next</button>
    </form>

    <script>
       
        function calculateScore() {
            // Collect user responses
            const familyHistory = document.querySelector('input[name="familyHistory"]:checked').value;
            const previousDiagnosis = document.querySelector('input[name="previousDiagnosis"]:checked').value;
            const activityLevel = document.getElementById('activityLevel').value;
            const ethnicity = document.getElementById('ethnicity').value;
            const physical = document.querySelector('input[name="physical"]:checked').value;

            // Simple scoring logic (example only)
            let score = 0;

            // Age scoring

            // Family history scoring
            if (familyHistory === 'yes') {
                score += 1;
            }

            // Previous diagnosis scoring
            if (previousDiagnosis === 'yes') {
                score += 1;
            }

            // Activity level scoring
            if (activityLevel === 'Younger than 40') {
                score += 0;
            } else if (activityLevel === '40Years') {
                score += 1;
            } else if (activityLevel === '50Years') {
                score += 2;
            } else if (activityLevel === '60+Years') {
                score += 3;
            }
            if (ethnicity === 'Indian') {
                score += 1;
            } else if (ethnicity === 'Asian') {
                score += 2;
            } else if (ethnicity === 'American') {
                score += 1;
            } else if (ethnicity === 'Others') {
                score += 1;
            }
            else if (ethnicity === 'Dont Want To Say') {
                score += 0;
            }
            if (physical === 'yes') {
                score += 1;
            }
            
            alert('Total Score:'+ score);
            NextPage();
        }
        function NextPage() {
                    // Change the URL to the desired page (test2.html)
                    window.location.href = 'sample1.html';
                }
    </script>
</body>
</html>
