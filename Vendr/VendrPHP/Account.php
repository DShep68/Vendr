<?php

include 'LoginCheck.php';
echo $userA;
?>

<html id="fullHD">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='../VendrCSS/Account.css' rel='stylesheet' type='text/css'>
    <link href='../VendrCSS/Navbar.css' rel='stylesheet' type='text/css'>
    <link href='../VendrCSS/Main.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="nav-bar">
      <div class="row">
        <div class="double-column">
          <h2 id="vendr">Vendr</h2>
        </div>
        <div class="column">
          <ul>
            <li><a href="../VendrPHP/Home.php">Home</a></li>
            <li><a href="../VendrPHP/History.php">History</a></li>
            <li><a class="active" href="../VendrPHP/Account.php">Account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
          <h2 class="title"> Account Information </h2>
          <div class="account-information">
            <label>
              Account Holder
            </label>
            <p>
              Tony Stark
            </p>
            <label>
              Email
            </label>
            <p>
              Tony.Stark@starkindustries.com
            </p>
            <label>
              UserName
            </label>
            <p>
              <?php echo $user; ?>
            </p>
            <label>
              Password
            </label>
            <p>
              *********
            </p>
          </div>
          <form action="">
            <input type="submit" id="edit" value="Edit Profile">
          </form>
      </div>
    </div>
  </body>
</html>
