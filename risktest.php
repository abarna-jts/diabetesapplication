<!DOCTYPE html>
<html>
    <title>Diabetes Test Form</title>
    <head>   
    <link rel="stylesheet" href="style1.css">
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            position: absolute;
            top: 7%;
            right: 10%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: right;
        }

        th {
            background-color: rgb(49, 83, 151);
            color:#fff;
        }
        .points {
            font-weight: bold;
        }
        .height-cell {
        border: 1px solid #fff;
        background-color:#aaccec;
    }
     
    </style>
    </head>
    <body>
        <div class="header">
            <h1>Prediabetes Risk Test</h1> 
        </div>
        <!-- <img src="images/jorimlogo.jfif">   -->
        <div class="content">
            <h3>1.How old are You?</h3>  
            <ul>
                <li>Younger than 40 years (0 points)</li>
                <li>40–49 years (1 point)</li>
                <li>50–59 years (2 points)</li>
                <li>60 years or older (3 points)</li>
                <span class="boxed-text"></span><hr class="line_style"  style="width:17%; margin-left:23%">
            </ul>
            
            <h3>2. Are you a man or a woman?</h3>  
            <ul>
                <li>Man (1 point) </li>
                <li>Woman (0 points)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>
            <h3>3. If you are a woman, have you ever been diagnosed with gestational diabetes?</h3>  
            <ul>
                <li>Yes (1 point)  </li>
                <li>No (0 points)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>
            <h3>4. Do you have a mother, father,sister, or brother with diabetes?</h3>  
            <ul>
                <li>Yes (1 point)  </li>
                <li>No (0 points)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>
            <h3>5. Have you ever been diagnosed with high blood pressure?</h3>  
            <ul>
                <li>Yes (1 point)  </li>
                <li>No (0 points)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>
            <h3>6. Are you physically active?</h3>  
            <ul>
                <li>Yes (1 point)  </li>
                <li>No (0 points)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>         
            <h3>7. What is your weight category?</h3>
            <ul>
                <li>(See chart at right)</li>
                <span class="boxed-text"></span><hr class="line_style">
            </ul>
            
            <table>
                <tr>               
                    <th>Height</th>
                    <th colspan="3" style="text-align:center;">Weight (lbs.)</th>  
                </tr>

                <tr>
                    <td class="height-cell">4'10"</td>
                    <td>119-142</td>
                    <td>143-190</td>
                    <td> 191+</td>
                </tr>

                <tr>
                    <td class="height-cell">4'11"</td>
                    <td>124-147 </td>
                    <td>148-197 </td>
                    <td>198+</td>
                </tr>
                    
                <tr>
                    <td class="height-cell">5'0"</td>
                    <td>128-152</td>
                    <td>153-203 </td>
                    <td> 204+ </td>
                </tr>

                <tr>
                    <td class="height-cell">5'1"</td>
                    <td> 132-157 </td>
                    <td>158-210</td> 
                    <td>211+</td>
                </tr>
                <tr>
                    <td class="height-cell">5'2"</td>
                    <td> 136-163</td>
                    <td>164-217</td> 
                    <td> 218+</td>
                </tr>
                <tr>
                    <td class="height-cell">5'3"</td>
                    <td> 141-168 </td>
                    <td>169-224</td> 
                    <td>225+</td>
                </tr>
                <tr>
                    <td class="height-cell">5'4"</td>
                    <td> 145-173 </td>
                    <td>174-231</td> 
                    <td> 232+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'5"</td>
                    <td> 150-179  </td>
                    <td>180-239</td> 
                    <td> 240+</td>
                </tr>
                <tr>
                    <td class="height-cell">5'6"</td>
                    <td> 155-185 </td>
                    <td>186-246</td> 
                    <td> 247+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'7"</td>
                    <td> 159-190  </td>
                    <td>191-254</td> 
                    <td> 255+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'8"</td>
                    <td> 164-196  </td>
                    <td>197-261</td> 
                    <td> 262+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'9"</td>
                    <td> 169-202 </td>
                    <td> 203-269</td> 
                    <td> 270+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'10" </td>
                    <td>174-208 </td>
                    <td> 209-277</td> 
                    <td>278+ </td>
                </tr>
                <tr>
                    <td class="height-cell">5'11"</td>
                    <td> 179-214 </td>
                    <td>215-285</td> 
                    <td> 286+ </td>
                </tr>
                <tr>
                    <td class="height-cell">6'0"</td>
                    <td>184-220 </td>
                    <td> 221-293</td> 
                    <td> 294+</td>
                </tr>
                <tr>
                    <td class="height-cell">6'1"</td>
                    <td> 189-226  </td>
                    <td>227-301</td> 
                    <td>302+</td>
                </tr>
                <tr>
                    <td class="height-cell">6'2"</td>
                    <td> 194-232 </td>
                    <td>233-310</td> 
                    <td> 311+</td>
                </tr>
                <tr>
                    <td class="height-cell">6'3</td>
                    <td> 200-239 </td>
                    <td> 240-318</td> 
                    <td> 319+</td>
                </tr>
                <tr>
                    <td class="height-cell">6'4"</td>
                    <td> 205-245 </td>
                    <td>246-327</td> 
                    <td> 328+</td>
                </tr>
                <tr>
                    <td class="height-cell"></td>
                    <td class="height-cell"> 1 Point </td>
                    <td class="height-cell">2 Points</td> 
                    <td class="height-cell"> 3 Points</td>
                </tr>
                <tr>
                    <th colspan="4" style="text-align:center;color:#000;" class="height-cell">You weigh less than the 1 Point column(0 points)</th>  
                </tr>
            </table>
            <h4 style="font-size:1.4em;margin-left:3%;font-weight: 550; color:rgb(49, 83, 151);">If you scored 5 or higher</h4>
            <hr class="line_styles">
            <p style="width:85%;margin-left:4%; font-size:1.1em;">You are at increased risk for having prediabetes and are at high risk for type 2 diabetes. However, only your doctor can tell for sure if you
have type 2 diabetes or prediabetes, a condition in which blood sugar levels are higher than normal but not high enough yet to be diagnosed
as type 2 diabetes. Talk to your doctor to see if additional testing is needed.
If you are African American, Hispanic/Latino American, American Indian/Alaska Native, Asian American, or Pacific Islander, you are at higher
risk for prediabetes and type 2 diabetes. Also, if you are Asian American, you are at increased risk for type 2 diabetes at a lower weight (about
15 pounds lower than weights in the 1 Point column). Talk to your doctor to see if you should have your blood sugar tested.</p>
        </div>
    </body>
</html>
