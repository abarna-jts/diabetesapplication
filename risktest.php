<DOCTYPE html>
<html>
    <title>Diabetes Test form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       
        
        <style>
         /* @media (max-width: 767px) {
            .flex-lg-column-reverse {
                flex-direction: column-reverse !important;
            }
        }

        @media print {
            .table-responsive {
                overflow: visible !important;
            }
        }
        .table-responsive{
            overflow:visible !important;
        } */
    </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="header mt-5 mb-4">
                    <h1 class="display-4" style="color: rgb(49, 83, 151);">Prediabetes Risk Test</h1>
                </div>
                <div class="content">
                    <!-- <h5 class="mb-3" style="margin-left:50%;margin-top:10%;">Give Your Answer Here</h5> -->
                    <h5 class="mb-3">1. How old are You?</h5>
                    <ul>
                        <li>Younger than 40 years (0 points)</li>
                        <li>40–49 years (1 point)</li>
                        <li>50–59 years (2 points)</li>
                        <li>60 years or older (3 points)</li>
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>
                    <h5 class="mb-3">2. Are you a man or a woman?</h5>
                    <ul>
                        <li>Man (1 point) </li>
                        <li>Woman (0 points)</li>
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>
                    <h5 class="mb-3">3. If you are a woman, have you ever been diagnosed with gestational diabetes?</h5>
                    <ul>
                        <li>Yes (1 point)  </li>
                        <li>No (0 points)</li>
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>

                    <h5 class="mb-3">4. Do you have a mother, father,sister, or brother with diabetes?</h5>
                    <ul>
                        <li>Yes (1 point)  </li>
                        <li>No (0 points)</li>
                    
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>

                    <h5 class="mb-3">5. Have you ever been diagnosed with high blood pressure?</h5>
                    <ul>
                        <li>Yes (1 point)  </li>
                        <li>No (0 points)</li>
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>

                    <h5 class="mb-3">6. Are you physically active?</h5>
                    <ul>
                        <li>Yes (0 point)  </li>
                        <li>No (1 points)</li>
                    </ul> 
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>

                    <h5 class="mb-3">7. What is your weight category?</h5>
                    <ul>
                        <li>(See chart at right)</li>
                    </ul>
                    <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;margin-top:-10%;"></div>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="128" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 32 8" style="margin-left:80%;margin-top:-10%;">
                        <path fill-rule="evenodd" d="M1 4a.5.5 0 0 1 .5-.5h22.293l-6.147-6.146a.5.5 0 0 1 .708-.708l8 8a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708L23.293 4.5H1.5A.5.5 0 0 1 1 4"/>
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="32" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 32 8" style="margin-left: 80%; margin-top: -10%; transform: scaleX(-1);">
                    <path fill-rule="evenodd" d="M1 4a.5.5 0 0 1 .5-.5h22.293l-6.147-6.146a.5.5 0 0 1 .708-.708l8 8a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708L23.293 4.5H1.5A.5.5 0 0 1 1 4"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="64" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16" style="margin-left:58%;">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
                </svg>
                <div class="border p-3 mb-3 border-primary " style="width: 20px;margin-left:60%;"></div>



        
            <!-- Text after the arrow -->
            
                </div>
            </div>
            <div class="col-6 mt-5">
                <div class="table-responsive mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Height</th>
                                <th>Weight (lbs.)</th>
                                <th>Weight (lbs.)</th>
                                <th>Weight (lbs.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4'10"</td>
                                <td>119-142</td>
                                <td>143-190</td>
                                <td> 191+</td>
                            </tr>
                            <tr>
                                <td>4'11"</td>
                                <td>124-147</td>
                                <td>148-197</td>
                                <td>198+</td>
                            </tr>
                            <tr>
                                <td>5'0"</td>
                                <td>128-152</td>
                                <td>153-203 </td>
                                <td> 204+ </td>
                            </tr>
                            <tr>
                                <td>5'1"</td>
                                <td> 132-157 </td>
                                <td>158-210</td> 
                                <td>211+</td>
                            </tr>
                            <tr>
                                <td>5'2"</td>
                                <td> 136-163</td>
                                <td>164-217</td> 
                                <td> 218+</td>
                            </tr>
                            <tr>
                                <td>5'3"</td>
                                <td> 141-168 </td>
                                <td>169-224</td> 
                                <td>225+</td>
                            </tr>
                            <tr>
                                <td>5'4"</td>
                                <td> 145-173 </td>
                                <td>174-231</td> 
                                <td> 232+ </td>
                            </tr>
                            <tr>
                                <td>5'5"</td>
                                <td> 150-179  </td>
                                <td>180-239</td> 
                                <td> 240+</td>
                            </tr>
                            <tr>
                                <td>5'6"</td>
                                <td> 155-185 </td>
                                <td>186-246</td> 
                                <td> 247+ </td>
                            </tr>
                            <tr>
                                <td>5'7"</td>
                                <td> 159-190  </td>
                                <td>191-254</td> 
                                <td> 255+ </td>
                            </tr>
                            <tr>
                                <td>5'8"</td>
                                <td> 164-196  </td>
                                <td>197-261</td> 
                                <td> 262+ </td>
                            </tr>
                            <tr>
                                <td>5'9"</td>
                                <td> 169-202 </td>
                                <td> 203-269</td> 
                                <td> 270+ </td>
                            </tr>
                            <tr>
                                <td>5'10" </td>
                                <td>174-208 </td>
                                <td> 209-277</td> 
                                <td>278+ </td>
                            </tr>
                            <tr>
                                <td>5'11"</td>
                                <td> 179-214 </td>
                                <td>215-285</td> 
                                <td> 286+ </td>
                            </tr>
                            <tr>
                                <td>6'0"</td>
                                <td>184-220 </td>
                                <td> 221-293</td> 
                                <td> 294+</td>
                            </tr>
                            <tr>
                                <td>6'1"</td>
                                <td> 189-226  </td>
                                <td>227-301</td> 
                                <td>302+</td>
                            </tr>
                            <tr>
                                <td>6'2"</td>
                                <td> 194-232 </td>
                                <td>233-310</td> 
                                <td> 311+</td>
                            </tr>
                            <tr>
                                <td>6'3</td>
                                <td> 200-239 </td>
                                <td> 240-318</td> 
                                <td> 319+</td>
                            </tr>
                            <tr>
                                <td>6'4"</td>
                                <td> 205-245 </td>
                                <td>246-327</td> 
                                <td> 328+</td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center font-weight-bold" style="color: #000;">You weigh less than the 1 Point column (0 points)</th>  
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-4">
                <h4 class="font-weight-bold" style="color: rgb(49, 83, 151);">If you Scored 5 or higher</h4>
                <hr class="my-4">
                <p class="font-size-14" style="width: 85%;">You are at increased risk for having prediabetes and are at high risk for type 2 diabetes. However, only your doctor can tell for sure if you
                    have type 2 diabetes or prediabetes, a condition in which blood sugar levels are higher than normal but not high enough yet to be diagnosed
                    as type 2 diabetes. Talk to your doctor to see if additional testing is needed.
                    If you are African American, Hispanic/Latino American, American Indian/Alaska Native, Asian American, or Pacific Islander, you are at higher
                    risk for prediabetes and type 2 diabetes. Also, if you are Asian American, you are at increased risk for type 2 diabetes at a lower weight (about
                    15 pounds lower than weights in the 1 Point column). Talk to your doctor to see if you should have your blood sugar tested.
                </p>
            </div>
        </div>
    </div>
    
    </body>
    </html>

