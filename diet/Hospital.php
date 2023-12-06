<?php 
include "conn.php"
?>
<?php 
     if(isset($_POST['searchdata']))
     {
          $cid = $_POST['cid'];

          $sql = "SELECT * from detail where cid = '$cid' ";
          $data = mysqli_query($con,$sql);

          $result = mysqli_fetch_assoc($data);

          //$pname = $result['pname'];
          //echo $pname;
     }
?>

<?php
ob_end_clean();
ob_start(); 
require('fpdf.php');
if (isset($_POST['print'])) {

$cid=$_POST['cid'];
$cdate=($_POST['cdate']);
$dadvised=($_POST['dadvised']);
$adate=($_POST['adate']);

$dname=($_POST['dname']);
$pname=($_POST['pname']);
$title=($_POST['title']);
$age=($_POST['age']);
$gender=($_POST['gender']);

$height=($_POST['height']);
$weight=($_POST['weight']);
$wardno=($_POST['wardno']);
$bedno=($_POST['bedno']);

$dietician=($_POST['dietician']);


$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];
$t7=$_POST['t7'];
$t8=$_POST['t8'];

$d1=$_POST['d1'];
$d2=$_POST['d2'];
$d3=$_POST['d3'];
$d4=$_POST['d4'];
$d5=$_POST['d5'];
$d6=$_POST['d6'];
$d7=$_POST['d7'];
$d8=$_POST['d8'];

$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];
$r6=$_POST['r6'];
$r7=$_POST['r7'];
$r8=$_POST['r8'];

$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
$c7=$_POST['c7'];
$c8=$_POST['c8'];

$calories=$_POST['calories'];

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('arial','B',16);
$pdf->Cell(0,20,'DIET SUMMARY REPORT - HOSPITAL',0,1,'C');

$pdf->Line(0,38,210,38);

$pdf->SetFont('arial','',14);
$pdf->SetY(50);
$pdf->SetX(10);
$pdf->cell(50,7,'Diet Chart ID : '.$cid,0,1);
$pdf->cell(50,7,'Diet Chart Date : '.$cdate,0,1);
$pdf->cell(50,7,'Diet Advised : '.$dadvised,0,1);
$pdf->cell(50,7,'Admission Date : '.$adate,0,1);

$pdf->SetFont('arial','',14);
$pdf->SetY(50);
$pdf->SetX(-90);
$pdf->cell(50,7,'Doctor Name : '.$dname,0,1);
$pdf->SetY(57);
$pdf->SetX(-90);
$pdf->cell(50,7,'Patient Name : '.$title .$pname,0,1);
$pdf->SetY(64);
$pdf->SetX(-90);
$pdf->cell(50,7,'Age : '.$age,0,1);
$pdf->SetY(71);
$pdf->SetX(-90);
$pdf->cell(50,7,'Gender : '.$gender,0,1);

$pdf->SetFont('arial','',14);
$pdf->SetY(85);
$pdf->SetX(10);
$pdf->cell(50,7,'Height : '.$height,0,1);
$pdf->cell(50,7,'Weight : '.$weight,0,1);
$pdf->cell(50,7,'Ward No : '.$wardno,0,1);
$pdf->cell(50,7,'Bed No : '.$bedno,0,1);

$pdf->SetFont('arial','',14);
$pdf->SetY(85);
$pdf->SetX(-90);
$pdf->cell(50,7,'Dietician : '.$dietician,0,1);


$pdf->SetFont('arial','B',14);
$pdf->SetY(119);
$pdf->SetX(10);
$pdf->cell(35,10,'Timing',1,0,"C");
$pdf->cell(65,10,'Diet Plan',1,0,"C");
$pdf->cell(55,10,'Restricted Diet',1,0,"C");
$pdf->cell(35,10,'Calories',1,0,"C");

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t1,1,0);
$pdf->cell(65,10,$d1,1,0);
$pdf->cell(55,10,$r1,1,0);
$pdf->cell(35,10,$c1,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t2,1,0);
$pdf->cell(65,10,$d2,1,0);
$pdf->cell(55,10,$r2,1,0);
$pdf->cell(35,10,$c2,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t3,1,0);
$pdf->cell(65,10,$d3,1,0);
$pdf->cell(55,10,$r3,1,0);
$pdf->cell(35,10,$c3,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t4,1,0);
$pdf->cell(65,10,$d4,1,0);
$pdf->cell(55,10,$r4,1,0);
$pdf->cell(35,10,$c4,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t5,1,0);
$pdf->cell(65,10,$d5,1,0);
$pdf->cell(55,10,$r5,1,0);
$pdf->cell(35,10,$c5,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t6,1,0);
$pdf->cell(65,10,$d6,1,0);
$pdf->cell(55,10,$r6,1,0);
$pdf->cell(35,10,$c6,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t7,1,0);
$pdf->cell(65,10,$d7,1,0);
$pdf->cell(55,10,$r7,1,0);
$pdf->cell(35,10,$c7,1,0);

$pdf->Ln();

$pdf->SetFont('arial','',13);
$pdf->cell(35,10,$t8,1,0);
$pdf->cell(65,10,$d8,1,0);
$pdf->cell(55,10,$r8,1,0);
$pdf->cell(35,10,$c8,1,0);

$pdf->Ln();

$pdf->SetFont('arial','B',13,);
$pdf->cell(155,10,'Total Calories',1,0,"R");
$pdf->cell(35,10,$calories,1,0);

$pdf->Ln(15);
$pdf->SetFont('Arial','',14);
$pdf->Cell(180,52,"Authorized Signatory",0,1,"R");


$file = time().'.pdf';
$pdf->Output($file,'F');
$pdf->Output();
ob_end_flush();
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diet Summary Report</title>
	<link rel="stylesheet" type="text/css" href="Hospital.css">
	<link rel="stylesheet" type="text/css" href="style-home.css">
	<script src="https://kit.fontawsome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>

    <body>
        <div class="menu">
        <div><a href="index.php">Home</a></div>
            <div><a href="Hospital.php">Hospital</a></div>
            <div><a href="discharge.php">Discharge</a></div>
            <div><a href="Summary1.php">Summary</a></div>
        </div>
	<div class="wrapper">
		<h1>Diet Summary Report - Hospital</h1><br>
		<div id="msg"></div>
		<form id="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
		<table>
			<tr>
				<th>Diet Chart ID<span style="color: red; font-weight: bold;">*</span></th><td><input type="number" min="1" name="cid" id="cid"
				value="<?php if(isset($_POST['searchdata'])){echo $result['cid'];}?>" onblur="validateCid()"> </td>			
				<th>Diet ChartDate</th><td><input type="date" name="cdate" class="datepicker" id="cdate"
				value="<?php if(isset($_POST['searchdata'])){echo $result['cdate'];}?>" onblur="validateCdate()"></td>
				<th>Height<span style="color: red;font-weight: bold;">*</span></th><td><input type="number" name="height" id="height" class="hei"
				value="<?php if(isset($_POST['searchdata'])){echo $result['height'];}?>" onblur="validateHeight()"></td>
				<th>Weight<span style="color: red;font-weight: bold;">*</span></th><td><input type="number" name="weight" id="weight"
				value="<?php if(isset($_POST['searchdata'])){echo $result['weight'];}?>" onblur="validateWeight()"></td>
			</tr>
			<tr>
				<th>AdmissionDate</th><td><input type="date" class="datepicker" name="adate" id="adate"
				value="<?php if(isset($_POST['searchdata'])){echo $result['adate'];}?>" onblur="validateAdate()"></td>
				<th>Patient Name<span style="color: red; font-weight: bold;">*</span></th>
					<td><select id="title" name="title">
					<option value="">-----</option>
					<option value="Mr."
					<?php 
					if(isset($result['title'])&& $result['title'] == 'Mr.')
					{
						echo "selected";
					}
					?>
					>Mr</option>
					<option value="Mrs."
					<?php 
					if(isset($result['title'])&& $result['title'] == 'Mrs.')
					{
						echo "selected";
					}
					?>
					>Mrs</option>
					<option value="Miss."
					<?php 
					if(isset($result['title'])&& $result['title'] == 'Miss.')
					{
						echo "selected";
					}
					?>
					>Miss</option>
					<option value="Child."
					<?php 
					if(isset($result['title'])&& $result['title'] == 'Child.')
					{
						echo "selected";
					}
					?>
					>Child</option>
				</select><input type="text" name="pname" id="pname"
				value="<?php if(isset($_POST['searchdata'])){echo $result['pname'];}?>" onblur="validatePname()"></td>
				<th>Age<span style="color: red;font-weight: bold;">*</span></th><td><input type="number" name="age" id="age" class="hei"
				value="<?php if(isset($_POST['searchdata'])){echo $result['age'];}?>" onblur="validateAge()"></td>
				<th>Gender<span style="color: red; font-weight: bold;">*</span></th>
				<td><select id="gender" name="gender" onblur="validateGender()">
					<option value="">----Select----</option>
					<option value="Male"
					<?php 
					if(isset($result['gender'])&& $result['gender'] == 'Male')
					{
						echo "selected";
					}
					?>
					>Male</option>
					<option value="Female"
					<?php 
					if(isset($result['gender'])&& $result['gender'] == 'Female')
					{
						echo "selected";
					}
					?>
					>Female</option>
					<option value="Others"
					<?php 
					if(isset($result['gender'])&& $result['gender'] == 'Others')
					{
						echo "selected";
					}
					?>
					>Others</option></select></td>
			</tr>
			<tr>
				<th>Diet Advised<span style="color: red; font-weight: bold;">*</span></th><td><input type="number" name="dadvised" id="dadvised"
				value="<?php if(isset($_POST['searchdata'])){echo $result['dadvised'];}?>" onblur="validateDadv()"></td>
				<th>Docter Name<span style="color: red; font-weight: bold;">*</span></th><td><input type="text" name="dname" id="dname" class="dname"
				value="<?php if(isset($_POST['searchdata'])){echo $result['dname'];}?>" onblur="validateDname()"></td>
				<th>Ward No<span style="color: red;font-weight: bold;">*</span></th><td><input type="number" name="wardno" id="wardno" class="hei"
				value="<?php if(isset($_POST['searchdata'])){echo $result['wardno'];}?>" onblur="validateWardno()"></td>
				<th>Bed No<span style="color: red;font-weight: bold;">*</span></th><td><input type="number" name="bedno" id="bedno"
				value="<?php if(isset($_POST['searchdata'])){echo $result['bedno'];}?>" onblur="validateBedno()"></td>
			</tr>
			<tr>
				<th>Dietician<span style="color: red; font-weight: bold;">*</span></th><td><input type="text" name="dietician" id="dietician"
				value="<?php if(isset($_POST['searchdata'])){echo $result['dietician'];}?>" onblur="validateDietician()"></td>
			</tr>
			<br>
		</table>
		<br>
		<table class="timing">
			<tr>
				<th name="timing">Timing</th></tr>
				<tr>
					<td><input type="text" name="t1" value="6.00 AM" id="timing"></td>	
				</tr>
			<tr>
				<td><input type="text" name="t2" value="7.00 AM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t3" value="10.00 AM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t4" value="12.00 PM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t5" value="4.00 PM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t6" value="6.00 PM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t7" value="8.00 PM" id="timing"></td>
			</tr>
			<tr>
				<td><input type="text" name="t8" value="10.00 PM" id="timing"></td>
			</tr>			
		</table><br>
		<table class="dietplan">
			<tr>
				<th name="dplan">Diet Plan<span style="color: red; font-weight: bold;">*</span></th></tr>
				<tr>
					<td><input type="text" name="d1" id="dietplan1" class="plan"
						value="<?php if(isset($_POST['searchdata'])){echo $result['d1'];}?>" onblur="validateDietplan()"></td>	
				</tr>
			<tr>
				<td><input type="text" name="d2" id="dietplan2" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d2'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d3" id="dietplan3" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d3'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d4" id="dietplan4" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d4'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d5" id="dietplan5" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d5'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d6" id="dietplan6" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d6'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d7" id="dietplan7" class="plan"
					value="<?php if(isset($_POST['searchdata'])){echo $result['d7'];}?>" onblur="validateDietplan()"></td>
			</tr>
			<tr>
				<td><input type="text" name="d8" id="dietplan8" class="plan" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['d8'];}?>" onblur="validateDietplan()"></td>
			</tr>
			</table>
		<table class="total">
			<tr>
				<th>Total Calories</th>
			</tr>
		</table><br>
		<table class="calories">
			<tr>
				<th name="calories">Calories<span style="color: red; font-weight: bold;">*</span></th></tr>
				<tr>
					<td><input type="number" name="c1" id="calories1" oninput="showSum()" class="cal"
						value="<?php if(isset($_POST['searchdata'])){echo $result['c1'];}?>" onblur="validateCalories()"></td>	
				</tr>
			<tr>
				<td><input type="number" name="c2" id="calories2"  oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c2'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c3" id="calories3" oninput="showSum()" class="cal" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['c3'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c4" id="calories4" oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c4'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c5" id="calories5"  oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c5'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c6" id="calories6" oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c6'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c7" id="calories7" oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c7'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="c8" id="calories8" oninput="showSum()" class="cal"
					value="<?php if(isset($_POST['searchdata'])){echo $result['c8'];}?>" onblur="validateCalories()"></td>
			</tr>
			<tr>
				<td><input type="number" name="calories" id="total" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['calories'];}?>" onblur="validateCalories()"></td>
			</tr>
		</table>
		<table class="restricteddiet">
			<tr>
				<th name="rdiet">Restricted Diet</th></tr>
				<tr>
					<td><input type="text" name="r1" id="restricteddiet1" 
						value="<?php if(isset($_POST['searchdata'])){echo $result['r1'];}?>" onblur="validateRestricteddiet()"></td>	
				</tr>
			<tr>
				<td><input type="text" name="r2" id="restricteddiet2" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r2'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r3" id="restricteddiet3" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r3'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r4" id="restricteddiet4" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r4'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r5" id="restricteddiet5" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r5'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r6" id="restricteddiet6" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r6'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r7" id="restricteddiet7" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r7'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
			<tr>
				<td><input type="text" name="r8" id="restricteddiet8" 
					value="<?php if(isset($_POST['searchdata'])){echo $result['r8'];}?>" onblur="validateRestricteddiet()"></td>
			</tr>
		</table>
		<table class="remarks">
			<tr>
				<th name="remarks">Remarks</th></tr>
				<tr>
					<td><input type="text" name="remark1" id="remarks1" class="remark"
						value="<?php if(isset($_POST['searchdata'])){echo $result['remark1'];}?>" onblur="validateRemarks()">
					</td>	
				</tr>
			<tr>
				<td><input type="text" name="remark2" id="remarks2" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark2'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark3" id="remarks3" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark3'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark4" id="remarks4" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark4'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark5" id="remarks5" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark5'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark6" id="remarks6" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark6'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark7" id="remarks7" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark7'];}?>" onblur="validateRemarks()"></td>
			</tr>
			<tr>
				<td><input type="text" name="remark8" id="remarks8" class="remark"
					value="<?php if(isset($_POST['searchdata'])){echo $result['remark8'];}?>" onblur="validateRemarks()"></td>
			</tr>
		</table>
		<br><br><br>
		<table class="note" name="note">
			<tr>
				<th>Note</th>
				<td><input type="text" name="note" id="note" class="not"
					value="<?php if(isset($_POST['searchdata'])){echo $result['note'];}?>" onblur="validateNote()"></td>
			</tr>
		</table>
		<div class="button">	
		<input type="submit" name="save" value="Save" id="button" onclick="return myFun();">
		<input type="reset" value="Clear" id="button">
		<input type="submit" value="Cancel" id="button">
		<input type="submit" name="searchdata" value="Search" id="button">
		<input type="submit" value="Modify" name="update" id="button">
		<input type="submit" value="Print" name="print"  id="button"><br>
	</div>
	</div>
	</form>
	<script src="Hoke/Diet2.js"></script>
	<script src="Hoke/calories.js"></script>
	<script type="text/javascript">
		var today = new Date();
var datePicker = document.getElementById("cdate");
datePicker.setAttribute("min", today.toISOString().split("T")[0]);
var today = new Date().toISOString().substr(0, 10);
  document.getElementById("cdate").value = today;

		var today = new Date();
var datePicker = document.getElementById("adate");
datePicker.setAttribute("min", today.toISOString().split("T")[0]);
var today = new Date().toISOString().substr(0, 10);
  document.getElementById("adate").value = today;
	</script>
</body>
</html>
<?php
if(isset($_POST['save']))
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	
$cid=($_POST['cid']);
$cdate=($_POST['cdate']);
$height=($_POST['height']);
$weight=($_POST['weight']);

$adate=($_POST['adate']);
$pname=($_POST['pname']);
$title=($_POST['title']);
$age=($_POST['age']);
$gender=($_POST['gender']);

$dadvised=($_POST['dadvised']);
$dname=($_POST['dname']);
$wardno=($_POST['wardno']);
$bedno=($_POST['bedno']);

$dietician=($_POST['dietician']);

$t1=($_POST['t1']);
$t2=($_POST['t2']);
$t3=($_POST['t3']);
$t4=($_POST['t4']);
$t5=($_POST['t5']);
$t6=($_POST['t6']);
$t7=($_POST['t7']);
$t8=($_POST['t8']);

$d1=($_POST['d1']);
$d2=($_POST['d2']);
$d3=($_POST['d3']);
$d4=($_POST['d4']);
$d5=($_POST['d5']);
$d6=($_POST['d6']);
$d7=($_POST['d7']);
$d8=($_POST['d8']);

$c1=($_POST['c1']);
$c2=($_POST['c2']);
$c3=($_POST['c3']);
$c4=($_POST['c4']);
$c5=($_POST['c5']);
$c6=($_POST['c6']);
$c7=($_POST['c7']);
$c8=($_POST['c8']);

$r1=($_POST['r1']);
$r2=($_POST['r2']);
$r3=($_POST['r3']);
$r4=($_POST['r4']);
$r5=($_POST['r5']);
$r6=($_POST['r6']);
$r7=($_POST['r7']);
$r8=($_POST['r8']);

$remark1=($_POST['remark1']);
$remark2=($_POST['remark2']);
$remark3=($_POST['remark3']);
$remark4=($_POST['remark4']);
$remark5=($_POST['remark5']);
$remark6=($_POST['remark6']);
$remark7=($_POST['remark7']);
$remark8=($_POST['remark8']);

$note=($_POST['note']);
$calories=($_POST['calories']);

$sql="INSERT INTO detail (cid,cdate,height,weight,adate,pname,title,age,gender,dadvised,dname,wardno,bedno,dietician,t1,t2,t3,t4,t5,t6,t7,t8,d1,d2,d3,d4,d5,d6,d7,d8,c1,c2,c3,c4,c5,c6,c7,c8,r1,r2,r3,r4,r5,r6,r7,r8,remark1,remark2,remark3,remark4,remark5,remark6,remark7,remark8,note,calories) VALUES ('$cid','$cdate','$height','$weight','$adate','$pname','$title','$age','$gender','$dadvised','$dname','$wardno','$bedno','$dietician','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$remark1','$remark2','$remark3','$remark4','$remark5','$remark6','$remark7','$remark8','$note','$calories')";

	$query = mysqli_query($con,$sql);

	if($query)
	{	
		?><script type="text/javascript">alert("Data Saved Successfully")</script><?php
	}
	else{
   		echo $errorMessage;
}
}
?>

<?php
if(isset($_POST['update']))
{

$cid=($_POST['cid']);
$cdate=($_POST['cdate']);
$height=($_POST['height']);
$weight=($_POST['weight']);

$adate=($_POST['adate']);
$pname=($_POST['pname']);
$title=($_POST['title']);
$age=($_POST['age']);
$gender=($_POST['gender']);

$dadvised=($_POST['dadvised']);
$dname=($_POST['dname']);
$wardno=($_POST['wardno']);
$bedno=($_POST['bedno']);

$dietician=($_POST['dietician']);

$t1=($_POST['t1']);
$t2=($_POST['t2']);
$t3=($_POST['t3']);
$t4=($_POST['t4']);
$t5=($_POST['t5']);
$t6=($_POST['t6']);
$t7=($_POST['t7']);
$t8=($_POST['t8']);

$d1=($_POST['d1']);
$d2=($_POST['d2']);
$d3=($_POST['d3']);
$d4=($_POST['d4']);
$d5=($_POST['d5']);
$d6=($_POST['d6']);
$d7=($_POST['d7']);
$d8=($_POST['d8']);

$c1=($_POST['c1']);
$c2=($_POST['c2']);
$c3=($_POST['c3']);
$c4=($_POST['c4']);
$c5=($_POST['c5']);
$c6=($_POST['c6']);
$c7=($_POST['c7']);
$c8=($_POST['c8']);

$r1=($_POST['r1']);
$r2=($_POST['r2']);
$r3=($_POST['r3']);
$r4=($_POST['r4']);
$r5=($_POST['r5']);
$r6=($_POST['r6']);
$r7=($_POST['r7']);
$r8=($_POST['r8']);

$remark1=($_POST['remark1']);
$remark2=($_POST['remark2']);
$remark3=($_POST['remark3']);
$remark4=($_POST['remark4']);
$remark5=($_POST['remark5']);
$remark6=($_POST['remark6']);
$remark7=($_POST['remark7']);
$remark8=($_POST['remark8']);

$note=($_POST['note']);
$calories=($_POST['calories']);
$result=[];

$sql = "UPDATE detail SET cdate = '$cdate',height = '$height',weight = '$weight',adate = '$adate',pname = '$pname',title = '$title',age = '$age',gender = '$gender',dadvised = '$dadvised',dname = '$dname',wardno = '$wardno',bedno = '$bedno',dietician = '$dietician',t1 = '$t1',t2 = '$t2',t3 = '$t3',t4 = '$t4',t5 = '$t5',t6 = '$t6',t7 = '$t7',t8 = '$t8',d1 = '$d1',d2 = '$d2',d3 = '$d3',d4 = '$d4',d5 = '$d5',d6 = '$d6',d7 = '$d7',d8 = '$d8',c1 = '$c1',c2 = '$c2',c3 = '$c3',c4 = '$c4',c5 = '$c5',c6 = '$c6',c7 = '$c7',c8 = '$c8',r1 = '$r1',r2 = '$r2',r3 = '$r3',r4 = '$r4',r5 = '$r5',r6 = '$r6',r7 = '$r7',r8 = '$r8',remark1 = '$remark1',remark2 = '$remark2',remark3 = '$remark3',remark4 = '$remark4',remark5 = '$remark5',remark6 = '$remark6',remark7 = '$remark7',remark8 = '$remark8',note = '$note',calories = '$calories' WHERE cid = '$cid' ";

$query = mysqli_query($con,$sql);

if($query)
{
   ?><script type="text/javascript">alert("Record Updated Successfully")</script><?php
}
else{
   ?><script>alert("Failed to Update")</script><?php
}
}
?>

