function validateCid(){
  var cid1 = document.getElementById("cid").value;
  if (cid1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Chart ID";
    return false;
  } else if (cid1.length > 4) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Chart Id value that is 4 characters or less";
    return false;
  } else if (!/^[^0]/.test(cid1)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Chart Id value that doesn't start with 0";
    return false;
  }
}

function validateCdate(){
  var cdate1 = document.getElementById("cdate").value;
  if (cdate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Chart Date";
    return false;
  } else {
    var cdateInput = document.getElementById("cdate");
    var currentDate = new Date().toISOString().substr(0, 10); // get current date in YYYY-MM-DD format
    if (cdate1 > currentDate) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Diet Chart Date";
      return false;
    }
  }
}


function validateHeight(){
  var height1 = document.getElementById("height").value;
  if (height1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Height";
    return false;
  } else if (height1 < 100 || height1 > 250) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Height Value Between 100 and 250 cm";
    return false;
  }
}

function validateGender(){
  var gender1 = document.getElementById("gender").value;
  if (gender1 == "") {
    document.getElementById("msg").innerHTML = "Please Select Gender";
    return false;
  }
}

function validateAdate(){
  var adate1 = document.getElementById("adate").value;
  if (adate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Admission Date";
    return false;
  } else {
    var admissionDate = new Date(adate1);
    if (admissionDate > new Date()) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Admission Date";
      return false;
    }
  }
}

function validatePname(){
  var pname = document.getElementById("pname").value;
  if (pname == "") {
    document.getElementById("msg").innerHTML = "Please Enter Patient Name";
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(pname)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Patient Name with only Letters and Dots";
    return false;
  }else if (pname.length < 3 ||pname.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Patient Name value between 3 and 30 characters";
    return false;
  }
}

function validateWeight(){
  var weight1 = document.getElementById("weight").value;
  if (weight1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Weight";
    return false;
  } else if (weight1 < 3 || weight1 > 150) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Weight Value Between 3 and 150";
    return false;
  }
}

function validateDietician(){
  var dietician = document.getElementById("dietician").value;
  if (dietician == "") {
    document.getElementById("msg").innerHTML = "Please Enter Dietician Name"; 
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(dietician)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Dietician Name with only letters and dots";
    return false;
  }else if (dietician.length < 3 ||dietician.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietician Name value between 3 and 30 characters";
    return false;
  }
}

function validateDadv(){
  var dadv1 = document.getElementById("dadvised").value;
  if (dadv1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Advised";
    return false;
  }else if(dadv1 < 200 || dadv1 > 4000){
        document.getElementById("msg").innerHTML=("Please Enter Diet Advised value Between 200 and 4000");
        return false;
    }
}

function validateDname(){
  var dname = document.getElementById("dname").value;
  if (dname == "") {
    document.getElementById("msg").innerHTML = "Please Enter Doctor Name";
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(dname)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Doctor Name with only Letters and Dots";
    return false;
  }else if (dname.length < 3 ||dname.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Doctor Name value between 3 and 30 characters";
    return false;
  }
}

function validateAge(){
  var age1 = document.getElementById("age").value;
  if (age1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Age";
    return false;
  } else if (age1 < 3 || age1 > 120) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Age Value Between 3 and 120";
    return false;
  }
}

function validateExpires(){
  var expires1 = document.getElementById("expires").value;
  if (expires1 == "") {
    document.getElementById("msg").innerHTML = "";
    return false;
  } else {
    var expiryDate = new Date(expires1);
    if (expiryDate < admissionDate || expiryDate > new Date("2050-12-31")) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Expiry Date";
      return false;
    }
  }
}

function validateDdate(){
  var ddate1 = document.getElementById("ddate").value;
  if (ddate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Discharge Date";
    return false;
  }var dischargeDate = new Date(ddate1);
    var admissionDate = new Date(adate1);
    var diffInDays = (dischargeDate - admissionDate) / (1000 * 60 * 60 * 24);

    if (diffInDays < 0 || diffInDays > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Discharge Date from the Admission Date";
    return false;
    }
}
 
function validateNvdate(){
  var nvdate1 = document.getElementById("nextvis").value;
  if (nvdate1 == "") {
    document.getElementById("msg").innerHTML ="Please Enter Next Visit Date";
    return false;
  } var nextVisitDate = new Date(nvdate1);
      var currentDate = new Date();
      var minDate = new Date(currentDate.getTime() + 15 * 24 * 60 * 60 * 1000); // 15 days from today
      var maxDate = new Date(currentDate.getTime() + 3 * 30 * 24 * 60 * 60 * 1000); // 3 months from today

      if(nextVisitDate < minDate || nextVisitDate > maxDate) {
          document.getElementById("msg").innerHTML=("Next visit date must be within 15 days to 3 months from Admission Date");
      return false;
    }
}
 
function validateDietplan(){
  var dietplan1 = document.getElementById("dietplan1").value;
  if(dietplan1.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan1)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan1.length < 3 ||dietplan1.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan2 = document.getElementById("dietplan2").value;
  if(dietplan2.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan2)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan2.length < 3 ||dietplan2.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan3 = document.getElementById("dietplan3").value;
  if(dietplan3.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan3)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan3.length < 3 ||dietplan3.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan4 = document.getElementById("dietplan4").value;
  if(dietplan4.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan4)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan4.length < 3 ||dietplan4.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan5 = document.getElementById("dietplan5").value;
  if(dietplan5.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan5)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan5.length < 3 ||dietplan5.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan6 = document.getElementById("dietplan6").value;
  if(dietplan6.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan6)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan6.length < 3 ||dietplan6.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan7 = document.getElementById("dietplan7").value;
  if(dietplan7.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan7)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan7.length < 3 ||dietplan7.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  var dietplan8 = document.getElementById("dietplan8").value;
  if(dietplan8.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }else if (!/^[a-zA-Z .,()/]+$/.test(dietplan8)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan8.length < 3 ||dietplan8.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
}

function validateCalories(){
  var totalcal = document.getElementById("total").value;
  // Check if calories field is empty
  var calories1 = document.getElementById("calories1").value;
  if (calories1.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories1 < 0 || calories1 > 250) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 250";
  return false;
  }else if (calories1.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories2 = document.getElementById("calories2").value;
  if (calories2.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories2 < 0 || calories2 > 550) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 550";
  return false;
  }else if (calories2.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories3 = document.getElementById("calories3").value;
  if (calories3.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories3 < 0 || calories3 > 400) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 400";
  return false;
  }else if (calories3.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories4 = document.getElementById("calories4").value;
  if (calories4.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories4 < 0 || calories4 > 500) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 500";
  return false;
  }else if (calories4.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories5 = document.getElementById("calories5").value;
  if (calories5.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories5 < 0 || calories5 > 800) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 800";
  return false;
  }else if (calories5.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories6 = document.getElementById("calories6").value;
  if (calories6.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories6 < 0 || calories6 > 400) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 400";
  return false;
  }else if (calories6.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories7 = document.getElementById("calories7").value;
  if (calories7.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories7 < 0 || calories7 > 900) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 900";
  return false;
  }else if (calories7.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  var calories8 = document.getElementById("calories8").value;
  if (calories8.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories8 < 0 || calories8 > 200) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 200";
  return false;
  }else if (calories8.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  else if(dadv1 != totalcal){
        document.getElementById("msg").innerHTML=("Diet Advised Value and Total Calories Value must be Same");
        return false;
    }
}

function validateRestricteddiet(){
  var restricteddiet1 = document.getElementById("restricteddiet1").value;

    if (restricteddiet1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet1.length < 3 || restricteddiet1.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet2 = document.getElementById("restricteddiet2").value;

    if (restricteddiet2 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet2.length < 3 || restricteddiet2.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet2)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet3 = document.getElementById("restricteddiet3").value;

    if (restricteddiet3 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet3.length < 3 || restricteddiet3.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet3)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet4 = document.getElementById("restricteddiet4").value;

    if (restricteddiet4 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet4.length < 3 || restricteddiet4.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet4)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet5 = document.getElementById("restricteddiet5").value;

    if (restricteddiet5 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet5.length < 3 || restricteddiet5.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet5)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet6 = document.getElementById("restricteddiet6").value;

    if (restricteddiet6 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet6.length < 3 || restricteddiet6.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet6)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet7 = document.getElementById("restricteddiet7").value;

    if (restricteddiet7 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet7.length < 3 || restricteddiet7.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet7)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet8 = document.getElementById("restricteddiet8").value;

    if (restricteddiet8 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet8.length < 3 || restricteddiet8.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet8)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }
}

function validateRemarks(){
  var remarks1 = document.getElementById("remarks1").value;

    if (remarks1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks1.length < 3 || remarks1.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks2 = document.getElementById("remarks2").value;

    if (remarks2 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks2.length < 3 ||remarks2.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks2)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks3 = document.getElementById("remarks3").value;

    if (remarks3 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks3.length < 3 ||remarks3.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks3)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks4 = document.getElementById("remarks4").value;

    if (remarks4 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks4.length < 3 ||remarks4.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks4)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks5 = document.getElementById("remarks5").value;

    if (remarks5 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks5.length < 3 ||remarks5.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks5)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks6 = document.getElementById("remarks6").value;

    if (remarks6 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks6.length < 3 ||remarks6.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks6)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks7 = document.getElementById("remarks7").value;

    if (remarks7 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks7.length < 3 ||remarks7.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks7)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks8 = document.getElementById("remarks8").value;

    if (remarks8 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks8.length < 3 ||remarks8.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks8)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }
}

function validateNote(){
  var note1 = document.getElementById("note").value;

    if (note1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (note1.length < 8 || note1.length > 35) {
        document.getElementById("msg").innerHTML = "Please Enter an Note value between 8 and 35 characters";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(note1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Notes with only Characters not Numeric";
        return false;
    }
}

function myFun() {
  var cid1 = document.getElementById("cid").value;
  var cdate1 = document.getElementById("cdate").value;
  var height1 = document.getElementById("height").value;
  var gender1 = document.getElementById("gender").value;
  var adate1 = document.getElementById("adate").value;
  var pname = document.getElementById("pname").value;
  var weight1 = document.getElementById("weight").value;
  var dietician = document.getElementById("dietician").value;
  var dadv1 = document.getElementById("dadvised").value;
  var dname = document.getElementById("dname").value;
  var age1 = document.getElementById("age").value;
  var expires1 = document.getElementById("expires").value;
  var ddate1 = document.getElementById("ddate").value;
  var nvdate1 = document.getElementById("nextvis").value;
  var totalcal = document.getElementById("total").value;

  var dietplan1 = document.getElementById("dietplan1").value;
  var dietplan2 = document.getElementById("dietplan2").value;
  var dietplan3 = document.getElementById("dietplan3").value;
  var dietplan4 = document.getElementById("dietplan4").value;
  var dietplan5 = document.getElementById("dietplan5").value;
  var dietplan6 = document.getElementById("dietplan6").value;
  var dietplan7 = document.getElementById("dietplan7").value;
  var dietplan8 = document.getElementById("dietplan8").value;

  var calories1 = document.getElementById("calories1").value;
  var calories2 = document.getElementById("calories2").value;
  var calories3 = document.getElementById("calories3").value;
  var calories4 = document.getElementById("calories4").value;
  var calories5 = document.getElementById("calories5").value;
  var calories6 = document.getElementById("calories6").value;
  var calories7 = document.getElementById("calories7").value;
  var calories8 = document.getElementById("calories8").value;

  
  if (cid1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Chart ID";
    return false;
  } else if (cid1.length > 4) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Chart Id value that is 4 characters or less";
    return false;
  } else if (!/^[^0]/.test(cid1)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Chart Id value that doesn't start with 0";
    return false;
  }

  if (cdate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Chart Date";
    return false;
  } else {
    var cdateInput = document.getElementById("cdate");
    var currentDate = new Date().toISOString().substr(0, 10); // get current date in YYYY-MM-DD format
    if (cdate1 > currentDate) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Diet Chart Date";
      return false;
    }
  }

  if (height1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Height";
    return false;
  } else if (height1 < 100 || height1 > 260) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Height Value Between 100 and 260 cm";
    return false;
  }

  if (gender1 == "") {
    document.getElementById("msg").innerHTML = "Please Select Gender";
    return false;
  }

  if (adate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Admission Date";
    return false;
  } else {
    var admissionDate = new Date(adate1);
    if (admissionDate > new Date()) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Admission Date";
      return false;
    }
  }

  if (pname == "") {
    document.getElementById("msg").innerHTML = "Please Enter Patient Name";
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(pname)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Patient Name with only Letters and Dots";
    return false;
  }else if (pname.length < 3 ||pname.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Patient Name value between 3 and 30 characters";
    return false;
  }

  if (weight1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Weight";
    return false;
  } else if (weight1 < 3 || weight1 > 170) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Weight Value Between 3 and 170";
    return false;
  }

  if (dietician == "") {
    document.getElementById("msg").innerHTML = "Please Enter Dietician Name"; 
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(dietician)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Dietician Name with only letters and dots";
    return false;
  }else if (dietician.length < 3 ||dietician.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietician Name value between 3 and 30 characters";
    return false;
  }

  if (dadv1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Diet Advised";
    return false;
  }else if(dadv1 < 200 || dadv1 > 4000){
        document.getElementById("msg").innerHTML=("Please Enter Diet Advised value Between 200 and 4000");
        return false;
    }

  if (dname == "") {
    document.getElementById("msg").innerHTML = "Please Enter Doctor Name";
    return false;
  } else if (!/^[a-zA-Z .]+$/.test(dname)) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Valid Doctor Name with only Letters and Dots";
    return false;
  }else if (dname.length < 3 ||dname.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Doctor Name value between 3 and 30 characters";
    return false;
  }

  if (age1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Age";
    return false;
  } else if (age1 < 3 || age1 > 120) {
    document.getElementById("msg").innerHTML =
      "Please Enter a Age Value Between 3 and 120";
    return false;
  }

  if (expires1 == "") {
    document.getElementById("msg").innerHTML = "";
    return false;
  } else {
    var expiryDate = new Date(expires1);
    if (expiryDate < admissionDate || expiryDate > new Date("2050-12-31")) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Expiry Date";
      return false;
    }
  }

  if (ddate1 == "") {
    document.getElementById("msg").innerHTML = "Please Enter Discharge Date";
    return false;
  }var dischargeDate = new Date(ddate1);
    var admissionDate = new Date(adate1);
    var diffInDays = (dischargeDate - admissionDate) / (1000 * 60 * 60 * 24);

    if (diffInDays < 0 || diffInDays > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Discharge Date from the Admission Date";
    return false;
    }

  /*else {
    var ddateInput = document.getElementById("ddate");
    if (ddate1 < admissionDate || ddate1 > new Date()) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Discharge Date";
      return false;
    }
  }*/

  if (nvdate1 == "") {
    document.getElementById("msg").innerHTML ="Please Enter Next Visit Date";
    return false;
  } var nextVisitDate = new Date(nvdate1);
      var currentDate = new Date();
      var minDate = new Date(currentDate.getTime() + 15 * 24 * 60 * 60 * 1000); // 15 days from today
      var maxDate = new Date(currentDate.getTime() + 3 * 30 * 24 * 60 * 60 * 1000); // 3 months from today

      if(nextVisitDate < minDate || nextVisitDate > maxDate) {
          document.getElementById("msg").innerHTML=("Next visit date must be within 15 days to 3 months from Admission Date");
      return false;
    }

  /*else {
    var nextVisitDate = new Date(nvdate1);
    if (nextVisitDate < new Date() || nextVisitDate > new Date("2050-12-31")) {
      document.getElementById("msg").innerHTML =
        "Please Enter a Valid Next Visit Date";
      return false;
    }
  }*/

  if(dietplan1.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan1)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan1.length < 3 ||dietplan1.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan2.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan2)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan2.length < 3 ||dietplan2.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan3.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan3)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan3.length < 3 ||dietplan3.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan4.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan4)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan4.length < 3 ||dietplan4.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan5.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan5)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan5.length < 3 ||dietplan5.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan6.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan6)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan6.length < 3 ||dietplan6.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan7.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan7)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan7.length < 3 ||dietplan7.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }
  if(dietplan8.trim() == ""){
    document.getElementById("msg").innerHTML = "Please Enter Dietplan";
    return false;
  }if (!/^[a-zA-Z .,()/]+$/.test(dietplan8)) {
    document.getElementById("msg").innerHTML = "Please Enter a valid Dietplan with only Characters not Numeric";
    return false;
  }else if (dietplan8.length < 3 ||dietplan8.length > 30) {
    document.getElementById("msg").innerHTML = "Please Enter a Dietplan value between 3 and 30 characters";
    return false;
  }

  // Check if calories field is empty
  if (calories1.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories1 < 0 || calories1 > 250) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 250";
  return false;
  }else if (calories1.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories2.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories2 < 0 || calories2 > 550) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 550";
  return false;
  }else if (calories2.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories3.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories3 < 0 || calories3 > 400) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 400";
  return false;
  }else if (calories3.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories4.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories4 < 0 || calories4 > 500) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 500";
  return false;
  }else if (calories4.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories5.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories5 < 0 || calories5 > 800) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 800";
  return false;
  }else if (calories5.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories6.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories6 < 0 || calories6 > 400) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 400";
  return false;
  }else if (calories6.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories7.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories7 < 0 || calories7 > 900) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 900";
  return false;
  }else if (calories7.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  if (calories8.trim() == "") {
    document.getElementById("msg").innerHTML = "Please Enter Calories";
    return false;
  }else if (calories8 < 0 || calories8 > 200) {
  document.getElementById("msg").innerHTML = "Please Enter a Calories value between 0 and 200";
  return false;
  }else if (calories8.length > 4) {
    document.getElementById("msg").innerHTML = "Please Enter a Calories value that is 4 characters or less";
    return false;
  }
  else if(dadv1 != totalcal){
        document.getElementById("msg").innerHTML=("Diet Advised Value and Total Calories Value must be Same");
        return false;
    }

  var restricteddiet1 = document.getElementById("restricteddiet1").value;

    if (restricteddiet1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet1.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet2 = document.getElementById("restricteddiet2").value;

    if (restricteddiet2 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet2.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet2)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet3 = document.getElementById("restricteddiet3").value;

    if (restricteddiet3 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet3.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet3)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet4 = document.getElementById("restricteddiet4").value;

    if (restricteddiet4 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet4.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet4)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet5 = document.getElementById("restricteddiet5").value;

    if (restricteddiet5 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet5.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet5)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet6 = document.getElementById("restricteddiet6").value;

    if (restricteddiet6 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet6.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet6)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet7 = document.getElementById("restricteddiet7").value;

    if (restricteddiet7 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet7.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet7)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var restricteddiet8 = document.getElementById("restricteddiet8").value;

    if (restricteddiet8 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (restricteddiet8.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Restricted Diet value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(restricteddiet8)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Restricted Diet with only Characters not Numeric";
        return false;
    }

  var remarks1 = document.getElementById("remarks1").value;

    if (remarks1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks1.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks2 = document.getElementById("remarks2").value;

    if (remarks2 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks2.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks2)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks3 = document.getElementById("remarks3").value;

    if (remarks3 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks3.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks3)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks4 = document.getElementById("remarks4").value;

    if (remarks4 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks4.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks4)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks5 = document.getElementById("remarks5").value;

    if (remarks5 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks5.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks5)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks6 = document.getElementById("remarks6").value;

    if (remarks6 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks6.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks6)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks7 = document.getElementById("remarks7").value;

    if (remarks7 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks7.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks7)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var remarks8 = document.getElementById("remarks8").value;

    if (remarks8 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (remarks8.length > 15) {
        document.getElementById("msg").innerHTML = "Please Enter an Remarks value that is 15 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(remarks8)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Remarks with only Characters not Numeric";
        return false;
    }

  var note1 = document.getElementById("note").value;

    if (note1 == "") {
        document.getElementById("msg").innerHTML=("");
        return false;
    }if (note1.length > 35) {
        document.getElementById("msg").innerHTML = "Please Enter an Note value that is 35 characters or less";
        return false;
    }else if (!/^[a-zA-Z .,()/]+$/.test(note1)) {
        document.getElementById("msg").innerHTML = "Please Enter a valid Notes with only Characters not Numeric";
        return false;
    }

}