<?php
include "header.php";
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br><br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Discharge Date</th>
      <th scope="col">Weight</th>
      <th scope="col">Height</th>
      <th scope="col">Admission Date</th>
      <th scope="col">dietad</th>
    </tr>
  </thead>
  <tbody>
                  <style>
  .dept1{
    color: white;
    background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
  }
  .inventoryform1{
    display: none;
   
  }
  .assetdetails{
    display: none;
  }
  .licensemanagement{
    display: none;
  }
  .loca{
    display: none;
  }
  .profile{
    display: none;

  }
  .transferform{
    display: none;
  }
  .transferdetails1{
    display: none;
  }
  .updatetransferform{
    display: none;
  }
  .assetview{
    display: none;
  }
  .updateasset{
    display: none;
  }
  .licenseform1{
    display: none;
  }
  .assettype{
    display: none;
  }
  .view1{
    display: none;
  }
  .licenseupdate{
    display: none;
  }
  .staff1{
    display: none;
  }
  .notification{
    display: none;
  }
  .settings1{
    display: none;
  }
  .dept{
    display: block;
  }
  .dashboard{
    display: none;
  }
  .licenselist1{
    display: none;
  }
 </style>
                 
 <?php 
 $sql = "SELECT * FROM patdata"; 
 $res = $con->query($sql);
 while($row=$res->fetch_assoc()){

            echo "
               <tr>
                   <td class='align-middle' >
                      <span class='text-secondary text-xs font-weight-bold'>{$row['sno']}</span>
                    </td>

                    <td class='align-middle '>
                      <span class='text-secondary text-xs font-weight-bold'>{$row["pname"]}</span>
                    </td>

                    <td class='align-middle '>
                    <span class='text-secondary text-xs font-weight-bold'>{$row["dname"]}</span>
                  </td>

                  <td class='align-middle '>
                   <span class='text-secondary text-xs font-weight-bold'>{$row["age"]}</span>
                </td>
                <td class='align-middle '>
                <span class='text-secondary text-xs font-weight-bold'>{$row["gender"]}</span>
             </td>
                <td class='align-middle' >
                <span class='text-secondary text-xs font-weight-bold'>{$row['ddate']}</span>
              </td>

              <td class='align-middle '>
                <span class='text-secondary text-xs font-weight-bold'>{$row["weight"]}</span>
              </td>

              <td class='align-middle '>
              <span class='text-secondary text-xs font-weight-bold'>{$row["height"]}</span>
            </td>

            <td class='align-middle '>
             <span class='text-secondary text-xs font-weight-bold'>{$row["adate"]}</span>
          </td>
          <td class='align-middle '>
          <span class='text-secondary text-xs font-weight-bold'>{$row["dietad"]}</span>
       </td>

            </tr>";
         }
        
      
          ?>          
                   
                  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>