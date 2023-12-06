<?php
include "header.php";
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INTAKE SUMMARY</title>


</head>

<body class="dappa">
  <div class="plan" style="background-color:lightgray">

    <div class="card-header">
      <h4>INTAKE SUMMARY</h4>
    </div><br><br><br>
    <form id="myForm" action="" method="GET">
      <div class="hoke">
        <div class="form-group">
          <label class="fd">From Date :</label>
          <input type="date" id="myFromDate" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                        echo $_GET['from_date'];
                                                      } ?>" class="form-control">

          <label class="td">To Date :</label>
          <input type="date" id="myToDate" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                      echo $_GET['to_date'];
                                                    } ?>" class="form-control">

          <!--<label class="td">Doctor Name :</label>
                                        <input type="text" name="Docto_rName" value="<?php if (isset($_GET['Doctor_name'])) {
                                                                                        echo $_GET['Doctor_Name'];
                                                                                      } ?>" class="form-control">
                                        <button type="submit">Search</button> -->
        </div>
      </div>
      <div class="btn">
        <label>Click To Search</label>
        <button type="submit">SEARCH</button>
        <button type="button" onclick="resetForm()">Reset Form</button>
        <!-- <button onclick="reloadPage()"><a href='Summary1.php'>CLEAR</a></button> -->
      </div>
    </form>
    <script>
      
      function resetForm() {
        event.preventDefault();
        var form = document.getElementById("myForm");
        var fromDateInput = document.getElementById("myFromDate");
        var toDateInput = document.getElementById("myToDate");
        fromDateInput.value = null;
        toDateInput.value = null;
        clearTable();
        reloadPage();
      }

      function reloadPage() {
      window.location.href = 'Summary1.php';
      }


      function clearTable() {
        var table = document.getElementById("myTable");
        var rowCount = table.rows.length;

        // Start from the last row and remove each row
        for (var i = rowCount - 1; i > 0; i--) {
          table.deleteRow(i);
        }
      }
    </script>


    <table id="myTable" class="table" style="background-color: white">
      <div>
        <thead>
          <tr>
            <th class="hoke"> SI.NO</th>
            <th class="hoke"> PATIENT NAME</th>
            <th class="hoke">DOCTOR NAME</th>
            <th class="hoke"> AGE</th>
            <th class="hoke"> GENDER</th>
            <th class="hoke"> DIET CHART DATE</th>
            <th class="hoke"> WEIGHT</th>
            <th class="hoke"> HEIGHT</th>
            <th class="hoke">ADMISSION DATE</th>
            <th class="hoke"> DIET ADVISED</th>
          </tr>
        </thead>
      </div>
      <button type="button" onclick="clearTable()">Clear Table</button>
      <div class="card">
        <div class="card-body">
          <?php
          $con = mysqli_connect("localhost", "root", "", "diet");

          if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
            $from_date = $_GET['from_date'];
            $to_date = $_GET['to_date'];

            $query = "SELECT * FROM patdata WHERE ddate BETWEEN '$from_date' AND '$to_date' ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $row) {

          ?>

                <tr>
                  <th><?= $row['sno']; ?></th>
                  <th><?= $row['pname']; ?></th>
                  <th><?= $row['dname']; ?></th>
                  <th><?= $row['age']; ?></th>
                  <th><?= $row['gender']; ?></th>
                  <th><?= $row['ddate']; ?></th>
                  <th><?= $row['weight']; ?></th>
                  <th><?= $row['height']; ?></th>
                  <th><?= $row['adate']; ?></th>
                  <th><?= $row['dietad']; ?></th>
                </tr>
          <?php
              }
            } else {
              echo "no record ";
            }
          }
          ?>
          </tbody>
        </div>
      </div>

    </table>
    <br><br>

    <div class="search">

      <form action="" method="GET">
        <input class="txt" type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                      } ?>" class="input3" placeholder="Search data">

        <button class="btt" type="submit" class="btn btn-primary">Search</button>

      </form>
      <br><br>
    </div>
    <table class="table " style="background-color: white;border:1px solid black">

      <tr>


        <th th class="hoke">SI.NO </th>
        <th th class="hoke">PATIENT NAME </th>
        <th th class="hoke">DOCTOR NAME </th>
        <th th class="hoke">AGE</th>
        <th th class="hoke">GENDER </th>
        <th th class="hoke">DIET CHART DATE</th>
        <th th class="hoke">WEIGHT</th>
        <th th class="hoke">HEIGHT </th>
        <th th class="hoke">ADMISSION DATE</th>
        <th th class="hoke">DIET ADVISED</th>



      </tr>



      <?php


      if (isset($_GET['search'])) {
        $filtervalues = $_GET['search'];

        $query = "SELECT *  FROM patdata WHERE dname like '$filtervalues%'/* or GENDER='$filtervalues' or PADDR='$filtervalues'*/";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $items) {
      ?>

            <tr>
              <td><?= $items['sno']; ?></td>
              <td><?= $items['pname']; ?></td>
              <td><?= $items['dname']; ?></td>
              <td><?= $items['age']; ?></td>
              <td><?= $items['gender']; ?></td>
              <td><?= $items['ddate']; ?></td>
              <td><?= $items['weight']; ?></td>
              <td><?= $items['height']; ?></td>
              <td><?= $items['adate']; ?></td>
              <td><?= $items['dietad']; ?></td>


            </tr>

      <?php
          }
        } else {
          echo "<div class='error'> No Record</div>";
        }
      }
      ?>
  </div>


</body>

</html>

</html>