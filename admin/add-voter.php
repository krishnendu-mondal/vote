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
  <title>Add voters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
  <style>
    h2 {
      color: crimson;

      padding: 10px;
    }

    h3 {
      color: crimson;
      font-size: 40px;
      padding: 5px;
    }
    h4{
      margin-top: 3rem;
    }
    hr {
      border: 1px solid black;
      width: 15%;
    }

    .a {
      margin-left: 2%;
      float: left;
      height: 80vh;
      width: 40%;
      margin-top: 15px;
    }

    .b {
      float: right;
      height: 80vh;
      width: 50%;
      background-image: url('pic.svg');
      margin-right: 1%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    form{
      width: 50%;
      display: grid;
      margin-left: 30%;
      margin-top: -3rem;
    }
    form label{
      margin-top: 1rem;
      color: grey;
    }
    form input{
      padding: 8px 10px;
      border: none;
      outline-color: #5A6268;
      box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
      border-radius: 5px;
    }
    form .btn{
      margin-top: 2rem;
    }
    form i{
      font-size: 1.2em;
      color: grey;
    }
  </style>
</head>

<body>
  <center>
    <h3>Add new voters</h3>
    <hr>
  </center>
  <div class="a">
    <form action="save-voter.php" method="POST" enctype="multipart/form-data">
      <label><i class="ri-pass-valid-line"></i> Voter Id:</label>
      <input type="text" name="id" required autocomplete="off">

      <label><i class="ri-user-3-line"></i> Name:</label>
      <input type="text" name="fname" required autocomplete="off">

      <label><i class="ri-lock-password-line"></i> Password:</label>
      <input type="password" name="pass" required autocomplete="off">

      <label><i class="ri-user-location-line"></i> Region:</label>
      <input type="text" name="reg" required autocomplete="off">

      <label><i class="ri-image-2-line"></i> Photo:</label>
      <input type="file" name="pic" required>

      <input type="submit" name="submit" class="btn btn btn-secondary">
    </form>

    <h4>Back to:
      <a href="index.php" style="background-color: white; font-size:20px;"><input type="submit" value="Dashboard"
          class="btn btn-dark"></a>
    </h4>
  </div>
  <div class="b">


  </div>
</body>

</html>