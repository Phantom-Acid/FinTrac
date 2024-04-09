<?php 
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="img/jpg" href="images/symbol.png" />

    <title>Reminder | FinTrac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style4.css" />
  </head>
  <body>
    <div class="container-2">
    <?php 
    require_once 'pageFormat.php';
    require_once 'dbFuncs.php';
    if(isset($_SESSION['user']))
    {
      $arr = array("Overview", "Income", "Expense", "Budget", "Reminder", "LogOut");
    }
    else
      $arr = array("Home", "Income", "Expense", "Budget", "Contact", "Login", "Sign Up");

    pageHeader("Home", "./images/logo.png", $arr);
    ?>
    </div>

    <div class="container p-5">
        <h1>Under Construction. Will be done by due date.</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>