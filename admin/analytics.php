<?php
session_start();
include "config.php";
if (!isset($_SESSION["name"])) {
  header("Location: ./admin/admin-login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <style>

    th{
      color: goldenrod;
    }

  </style>
  <title>Analytics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body style="padding: 1.3rem;">
  <a href="logout.php" style="position: absolute; right: 1.6rem;"><input type="submit" value="Logout" class="btn btn-dark"
      style="box-shadow: 1px 1px 5px rgba(0,0,0,0.5);"></a></h3>

  <div class="container" style="overflow: none; width:80%;">
    <h1>Analytics</h1>
    <br><br>

    <div class="row" style="display: flex; justify-content:space-between">
      <div class="col-sm-6" style=" overflow:none; width: 50%;">
        <div class="container">
          <h3> Region Wise Voter Count</h3>


          <table class="table table-dark table-striped table-hover" style="width: 80%; font-size: 20px; box-shadow: 1px 1px 5px rgba(0,0,0,0.5);">
            <?php
            include 'config.php';
            $sql = "SELECT * FROM `voter-count`";
            $result = mysqli_query($conn, $sql) or die('Query Failed');
            if (mysqli_num_rows($result) > 0) {


              ?>
              <thead>
                <tr>
                  <th>Region</th>
                  <th>Number of Voter</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {

                  ?>
                  <tr>
                    <td>
                      <?php echo $row['region']; ?>
                    </td>
                    <td>
                      <?php echo $row['count']; ?>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            <?php }
            ?>
          </table>
        </div>
      </div>
      <div class="col-sm-6">

        <div class="contain" style="width:90%;">
          <h3> Region Wise Voting Percentage</h3>

          <table class="table table-dark table-striped text-light table-hover"
            style="width: 100%; font-size: 20px; box-shadow: 1px 1px 5px rgba(0,0,0,0.5);">
            <?php
            include 'config.php';
            $sql1 = "SELECT * FROM `voting-count`";
            $sql = "SELECT * FROM `voter-count`";
            $result = mysqli_query($conn, $sql) or die('Query Failed');
            $result1 = mysqli_query($conn, $sql1) or die('Query Failed');
            if ((mysqli_num_rows($result1) > 0) and (mysqli_num_rows($result) > 0)) {


              ?>
              <thead>
                <tr>
                  <th>Region</th>
                  <th>Percentage</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while (($row1 = mysqli_fetch_assoc($result1)) and ($row = mysqli_fetch_assoc($result))) {

                  ?>
                  <tr>
                    <td>
                      <?php echo $row1['region']; ?>
                    </td>
                    <td>
                      <?php

                      $done = $row1['count'];
                      $total = $row['count'];
                      $ratio = ($done / $total) * 100;
                      ?>
                      <div class="progress">
                        <div class="progress-bar bg-success" style="width: <?php echo $ratio . '%' ?>">
                          <?php echo "<font color='black'><b>$ratio%<b></font>" ?>
                        </div>
                      </div>

                    </td>
                  </tr>
                  <?php
                }

                ?>
              </tbody>
              <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
    <div class="row ml-3 mt-5">
      <h3>Back to:</h3><a href="./" class="text-decoration-none">&nbsp;&nbsp;&nbsp;<button class="btn btn-secondary" style="box-shadow: 1px 1px 5px rgba(0,0,0,0.5);">Dashboard</button></a>
    </div>
    
  </div>

</body>

</html>