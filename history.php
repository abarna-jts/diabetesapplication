<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History of Diabetes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.scss">
</head>
<!-- HEADER  -->
<body>
	<header class="header">
        <div class="logo">
            <img src="images/jorimlogo.jfif">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./aboutus.php">About</a></li>
                <li><a href="./Hospital.php">Hospital</a></li>
                <li><a href="./discharge.php">Discharge</a></li>
                <li><a href="./Summary1.php">Summary</a></li>
				<li><a href="./history.php">History of Diabetes</a></li> 
            </ul>
        </nav>    
    </header>
<!-- HEADER END -->

<!-- HISTORY PAGE START -->
    <h1 style=" color: rgb(148, 116, 11);"> History of Diabetes</h1>

    <div class="body1" >
        <div class="line11a" >
            <div class="gaplrtb20 bggray">
                <div class="gapb10"><a class="btnreadmore3" href="history.php">Know the History </a></div>
                <div class="gapb10"><a class="btnreadmore3" href="#" onclick="showDiabetes()">What is Diabetes</a></div>
                <div class="gapb10"><a class="btnreadmore3" href="#" onclick="showSymptoms()">Diabetes Symptoms</a></div>

                <div class="gapb10"><a class="btnreadmore3" href="#"  onclick="showrisk()">Diabetes Risk Factory</a></div>
                <div class="gapb10"><a class="btnreadmore3" href="#" onclick="showtreatment()">How to treat</a></div>
                
                
            </div>
    
            <div class="image-container">
                    <img src="images\diabetes-leader.png" alt="Image description">
            </div>
        </div>  
        <div class="history_box" id="historyContainer">
            <div class="history_content">
                <h1 style="color: rgb(148, 116, 11);">Know the History</h1>
                <div class="heading_heading">
                    <strong style="color:#1f57a0;font-size: 2em;">Etymology:</strong>
                    <p>The word diabetes comes from Latin diabētēs, which literally means "excessive discharge of urine". The word mellitus comes from the classical Latin word mellītus, meaning "mellite" (i.e. sweetened with honey; honey-sweet).</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:#1f57a0;font-size: 2em;">History:</strong><br><br>
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1552 BCE</strong>
                    <p>Egyptian physician Hesy-Ra of the 3rd Dynasty makes the first known mention of diabetes – found on the Ebers Papyrus – and lists remedies to combat the ‘passing of too much urine.'</p>
                </div>
                <div class="heading_heading">
                <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">120 CE</strong>
                    <p>Greek physician Aretaeus of Cappodocia gives the first complete medical description of diabetes, which he likens to ‘the melting down of flesh and limbs into urine.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1674</strong>
                    <p>In his treatise Pharmaceutice rationalis, Professor Thomas Willis of Oxford University describes the ‘wonderfully sweet’ flavour of urine in diabetes mellitus.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1869</strong>
                    <p>German medical student Paul Langerhans discovers the islet cells of the pancreas but is unable to explain their function. The find is dubbed the ‘islets of Langerhans.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">November 17, 1921</strong>
                    <p>Banting and Best discover that extract from cattle foetal pancreas lowers blood sugar levels of depancreatized dogs, leading them toward plentiful, cheap sources for insulin. Experiments begin to test the long-term effectiveness of insulin treatment.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">January 1922</strong>
                    <p>Leonard Thompson, 14, a ‘charity patient’ at the Toronto General Hospital, becomes the first person to receive and injection of insulin to treat diabetes. Thompson lives another 13 years before dying of pneumonia at age 27.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">August 16, 1922</strong>
                    <p>Elizabeth Evans Hughes, 13, daughter of U.S. Secretary of State Charles Evans Hughes, arrives in Toronto to be treated by Banting for her diabetes. Weighing only 45 pounds and barely able to walk, Elizabeth responds immediately to the insulin treatment, and goes on to live a productive life. She dies in 1981 at age 73.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">October 25, 1923</strong>
                    <p>Banting and Macleod are awarded the Nobel Prize in Physiology or Medicine. Banting shares his award with Best, while Macleod shares his with Collip.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1936</strong>
                    <p>Hans Christian Hagedorn, founder of Novo Nordisk, discovers that adding protamine to insulin prolongs the duration of action of the medication.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1944</strong>
                    <p>EThe standard insulin syringe is introduced so to make diabetes management more uniform.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1966</strong>
                    <p>First pancreas transplant performed at the University of Minnesota Hospital.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">September 14, 1971</strong>
                    <p>Anton Hubert Clemens receives the first patent for a portable blood glucose meter called the Ames Reflectance Meter. Dr. Richard K. Bernstein, an insulin dependent physician with diabetes, uses the meter to monitor his blood glucose at home, and subsequently publishes a report on his experiences.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1978</strong>
                    <p>David Goeddel from pharmaceutical firm Genentech indicated that the first rDNA human insulin was created. Later that year, Genentech and pharmaceutical firm Eli Lilly signed an agreement to commercialize biosynthetic human insulin.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1993</strong>
                    <p>After 10 years of clinical study, the Diabetes Control and Complications Trial (DCCT) report is published and clearly demonstrates that intensive therapy delays the onset and progression of long-term complications in individuals with type 1 diabetes.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">1998</strong>
                    <p>The United Kingdom Prospective Diabetes Study (UKPDS) scientifically inks the control of glucose levels and blood pressure control to the delay and possible prevention of type 2 diabetes.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">March 1999</strong>
                    <p>Scientists conduct the first successful islet transplant at the University of Alberta Hospital. The surgical procedure becomes known as The Edmonton Protocol.</p>
                </div>
                <div class="heading_heading">
                    <strong style="color:rgb(56, 161, 175);font-size: 1.7em;">December 20, 2006</strong>
                    <p>The United Nations recognizes diabetes as a global threat and designates World Diabetes Day, November 14 – in honour of Frederick Banting’s birthday – as a UN Day to be observed every year starting in 2007.</p>
                </div>
            </div>
        </div>
        <div id="diabetesContainer" class="diabetes" style="display: none;">
            <div class="diabetes_content">
            <h1 style="color: rgb(148, 116, 11);">What is Diabetes?</h1>
                <div class="diabetes_heading">
                    <strong class="h12">What is Diabetes?</strong>
                    <p>Diabetes Mellitus is a common non communicable disease characterized by high blood sugar (Glucose) levels. This is resulted from defects of insulin production from pancreas, or its action, or both. This disease is commonly referred to as “Diabetes”.</p>
                    <p>Diabetes is a chronic medical condition, meaning that although it can be controlled, it lasts a lifetime. If left untreated, it can lead to many disabling and life threatening complications such as heart disease, kidney failure, blindness and nerve damage.</p>
                    <p>There are several types of Diabetes.</p>
                        
                            <li ><strong> Type 2 Diabetes</strong></li>
                            <p>The commonest type of Diabetes worldwide. It is a condition in which cells fail to respond to insulin properly. This form was previously referred to as "non-insulin-dependent diabetes mellitus" (NIDDM) or "adult-onset diabetes". Excessive body weight, lack of exercise and familial tendency predispose to this type.  </p>
                            <li> <strong>Type 1 Diabetes</strong></li>
                            <p>This results from the failure of pancreas to produce enough insulin. This form was previously referred to as "insulin-dependent diabetes mellitus" (IDDM) or "juvenile diabetes". The cause is unknown.</p>
                            <li><strong>  Gestational Diabetes</strong></li>
                            <p>This is the third main form and it occurs in pregnancy. </p>
                            <li><strong>  Prediabetes</strong></li>
                            <p>This refers to blood sugar levels higher than normal, but not high enough to diagnose Diabetes. Some long term complications of Diabetes such as heart disease may begin during this stage</p>
                        
                </div>
            </div>
        </div>

        <div id="SymptomsContainer" class="symptoms" style="display: none;">
            <div class="symptoms_content">
                <h1 style="color: rgb(148, 116, 11);">Diabetes Symptoms</h1>
                <div class="symptoms_heading">               
                    <p>If you have any of the following diabetes symptoms, see your doctor about getting your <a>blood sugar tested:</a></p>
                    <ul class="h20">
                        <li>Urinate (pee) a lot, often at night</li>
                        <li>Are very thirsty</li>
                        <li>Lose weight without trying</li>
                        <li>Are very hungry</li>
                        <li>Have blurry vision</li>
                        <li>Have numb or tingling hands or feet</li>
                        <li>Feel very tired</li>
                        <li>Have very dry skin</li>
                        <li>Have sores that heal slowly</li>
                        <li>Have more infections than usual</li>
                    </ul>
                    <strong style="font-size:1.9em;">Symptoms of Type 1 Diabetes</strong>
                    <p>People who have type 1 diabetes may also have nausea, vomiting, or stomach pains. Type 1 diabetes can be diagnosed at any age, and symptoms can develop in just a few weeks or months and can be severe.</p>
                    <strong style="font-size:1.9em;">Symptoms of Type 2 Diabetes</strong>
                    <p>Type 2 diabetes symptoms often take several years to develop. Some people don’t notice any symptoms at all. Type 2 diabetes usually starts when you’re an adult, though more and more children and teens are developing it. Because symptoms are hard to spot, it’s important to know the risk factors for type 2 diabetes. Make sure to visit your doctor if you have any of them.</p>
                    <strong style="font-size:1.9em;">Symptoms of Gestational Diabetes</strong>
                    <p>Gestational diabetes (diabetes during pregnancy) usually doesn’t have any symptoms. If you’re pregnant, your doctor should test you for gestational diabetes between 24 and 28 weeks of pregnancy. If needed, you can make changes to protect your health and your baby’s health.</p>
                    <button class="slide" onclick="NextPage()" style="color:#fff;">&nbsp;</button><br><br><br>
                </div>
            </div>
        </div>

        <div id="treatmentContainer" class="treatment" style="display: none;">
            <div class="treatment_content">
            <h1 style="color: rgb(148, 116, 11);">How to Treat?</h1>
                <div class="treatment_heading">               
                    <p>Diabetes is treated with insulin injections, tablets or combination of those. Background lifestyle modifications, in the terms of healthy diet and more regular exercise is the foundation for better diabetic control. Health education, good compliance and regular monitoring are the keys to success. Incorporation of the diabetic care plan to the routine life style leads to better happy long life.</p>
                    <strong style="color:rgb(49, 83, 151);">Treatment plan</strong><br><br>
                            <li ><strong> Life style Modifications:</strong></li>
                            <p>Healthy eating –
                            Acquire a healthy eating plan for you and your family. Diet low in fat and calories, while rich in nutrients and fibers is the best.</p>
                            <p>Physical Activity - Everyone needs regular aerobic exercise, and people who have diabetes are no exception. Aim for at least 30 minutes or more of aerobic exercise most days of the week.</p>
                            <li> <strong> Insulin:</strong></li>
                            <p>All type 1 Diabetic patients, Type 2 patients at some stage of their disease, majority of pregnant patients need insulin for sugar control. It is given as an injection according to various regimens modified for individual needs. Risk of hypoglycemia and weight gain are potential problems, which can be prevented.</p>
                            <li><strong> Regular monitoring:</strong></li>
                            <p>Self-monitoring of blood sugar at home with a glucometer is the ideal. In addition, fasting blood sugars, HbA1C at regular intervals can guide your treatment plan. Know your individual glycemic targets from your doctor.</p>
                </div>
            </div>
        </div>
        <div id="riskContainer" class="risk" style="display: none;">
            <div class="risk_content">
            <h1 style="color: rgb(148, 116, 11);">Diabetes Risk Factory</h1>
                <div class="risk_heading">
                    <p>Many people with Diabetes do not display any symptoms. It is important for you to know your risk for Diabetes. Being Asians, we are at high risk for Diabetes despite our age, sex, body build. If you are at risk, get checked with no delay.</p>
                       <strong style="font-size:2em;">Type 1 Diabetes</strong>
                            <p>Type 1 diabetes is thought to be caused by an immune reaction (the body attacks itself by mistake). Risk factors for type 1 diabetes are not as clear as for prediabetes and type 2 diabetes. Known risk factors include:</p>
                                <ul class="h20">
                                    <li><strong style="font-size:1.1em;color:#000;">Family history:</strong> Having a parent, brother, or sister with type 1 diabetes</li>
                                    <li><strong style="font-size:1.1em;color:#000;">Age: </strong>You can get type 1 diabetes at any age, but it usually develops in children, teens, or young adults.</li>
                                </ul>
                            <p>In the United States, White people are more likely to develop type 1 diabetes than African American and Hispanic or Latino people.</p>
                            <p>Currently, no one knows how to prevent type 1 diabetes.</p>

                            <strong style="font-size:2em;">Type 2 Diabetes</strong>
                            <p>You’re at risk for type 2 diabetes if you:</p>
                                <ul class="h20">
                                    <li>Have prediabetes.</li>
                                    <li>Are overweight.</li>
                                    <li>Are 45 years or older.</li>
                                    <li>Have a parent, brother, or sister with type 2 diabetes.</li>
                                    <li>Are physically active less than 3 times a week.</li>
                                    <li>Have ever had gestational diabetes (diabetes during pregnancy) or given birth to a baby who weighed over 9 pounds.</li>
                                    <li>Are an African American, Hispanic or Latino, American Indian, or Alaska Native person. Some Pacific Islanders and Asian American people are also at higher risk.</li>
                                </ul>
                            <p>In the United States, White people are more likely to develop type 1 diabetes than African American and Hispanic or Latino people.</p>
                            <p>You can prevent or delay type 2 diabetes with proven lifestyle changes. These include losing weight if you’re overweight, eating a healthy diet, and getting regular physical activity.</p>

                            <strong style="font-size:2em;">Prediabetes</strong>
                            <p>You’re at risk for prediabetes if you:</p>
                                <ul class="h20">
                                    <li>Are overweight.</li>
                                    <li>Are 45 years or older.</li>
                                    <li>Have a parent, brother, or sister with type 2 diabetes.</li>
                                    <li>Are physically active less than 3 times a week.</li>
                                    <li>Have ever had gestational diabetes (diabetes during pregnancy) or given birth to a baby who weighed over 9 pounds.</li>
                                    <li>Are an African American, Hispanic or Latino, American Indian, or Alaska Native person. Some Pacific Islanders and Asian American people are also at higher risk.</li>
                                </ul> 
                            <p>You can prevent or reverse prediabetes with proven lifestyle changes. These include losing weight if you’re overweight, eating a healthy diet, and getting regular physical activity.</p>

                           <strong style="font-size:2em;">Gestational Diabetes</strong>
                            <p>You’re at risk for gestational diabetes (diabetes while pregnant) if you:</p>
                                <ul class="h20">
                                    <li>Had gestational diabetes during a previous pregnancy.</li>
                                    <li>Have given birth to a baby who weighed over 9 pounds.</li>
                                    <li>Are overweight.</li>
                                    <li>Are more than 25 years old.</li>
                                    <li>Have a family history of type 2 diabetes.</li>
                                    <li>Have a hormone disorder called polycystic ovary syndrome (PCOS).</li>
                                    <li>Are an African American, Hispanic or Latino, American Indian, Alaska Native, Native Hawaiian, or Pacific Islander person.</li>
                                </ul>
                            <p>Gestational diabetes usually goes away after you give birth, but increases your risk for type 2 diabetes. Your baby is more likely to have obesity as a child or teen, and to develop type 2 diabetes later in life.</p>
                            <p>Before you get pregnant, you may be able to prevent gestational diabetes with lifestyle changes. These include losing weight if you’re overweight, eating a healthy diet, and getting regular physical activity.</p>

                            <p style="text-align:center;font-size:1.6em;color:rgb(148, 116, 11);">Do you want to Test you Diabetes?</p>
                            <button class="risk_slide" onclick="nextpage()" style="color:#fff;">&nbsp;</button><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- HISTORY PAGE END -->

     <!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <br><p style="color:#fff; font-size:2em; text-align:center;">Eat smart, live well</p>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <br><p style="color:#fff; font-size:2em; text-align:center;">Exercise daily, conquer diabetes gracefully</p>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <br><p style="color:#fff; font-size:2em; text-align:center;">Eat wisely, live healthy, beat diabetes</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->


    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if there's a hash in the URL
        let hash = window.location.hash.substr(1);
        if (hash === "diabetesContainer") {
            showDiabetes();
        }

        // Add click event listeners to your links
        document.getElementById('historyLink').addEventListener('click', function () {
            showHistory();
        });

        document.getElementById('diabetesLink').addEventListener('click', function () {
            // Reload the page with the hash set to 'diabetesContainer'
            window.location.href = window.location.pathname + '#diabetesContainer';
        });

        document.getElementById('treatmentLink').addEventListener('click', function () {
            showTreatment();
        });
    });

    function showHistory() {
        document.getElementById('historyContainer').style.display = 'block';
        document.getElementById('diabetesContainer').style.display = 'none';
        document.getElementById('SymptomsContainer').style.display = 'none';
        document.getElementById('treatmentContainer').style.display = 'none';
        document.getElementById('riskContainer').style.display = 'none';
    }

    function showDiabetes() {
        document.getElementById('historyContainer').style.display = 'none';
        document.getElementById('diabetesContainer').style.display = 'block';
        document.getElementById('SymptomsContainer').style.display = 'none';
        document.getElementById('treatmentContainer').style.display = 'none';
        document.getElementById('riskContainer').style.display = 'none';

        document.querySelector('.image-container img').src = 'images/diabetics-img.jpg';
    }

    function showSymptoms() {
        document.getElementById('historyContainer').style.display = 'none';
        document.getElementById('diabetesContainer').style.display = 'none';
        document.getElementById('SymptomsContainer').style.display = 'block';
        document.getElementById('treatmentContainer').style.display = 'none';
        document.getElementById('riskContainer').style.display = 'none';
        
        document.querySelector('.image-container img').src = 'images/risk-img1.jpg';
    }

    function showtreatment() {
        document.getElementById('historyContainer').style.display = 'none';   
        document.getElementById('diabetesContainer').style.display = 'none';
        document.getElementById('SymptomsContainer').style.display = 'none';
        document.getElementById('treatmentContainer').style.display = 'block';
        document.getElementById('riskContainer').style.display = 'none';

        document.querySelector('.image-container img').src = 'images/treatment.jpg';
    }
    function showrisk() {
        document.getElementById('historyContainer').style.display = 'none';
        document.getElementById('diabetesContainer').style.display = 'none';
        document.getElementById('SymptomsContainer').style.display = 'none';
        document.getElementById('treatmentContainer').style.display = 'none';
        document.getElementById('riskContainer').style.display = 'block';

        document.querySelector('.image-container img').src = 'images/risk-img1.jpg';
    }
    function NextPage(){
        document.getElementById('historyContainer').style.display = 'none';
        document.getElementById('diabetesContainer').style.display = 'none';
        document.getElementById('SymptomsContainer').style.display = 'none';
        document.getElementById('treatmentContainer').style.display = 'none';
        document.getElementById('riskContainer').style.display = 'block';
    }
    function nextpage(){
        window.location.href = 'test1.php';
    }
</script>