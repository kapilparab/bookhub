<?php
include ('login.php'); //Includes Login Script

if (isset($_SESSION['login_user'])){
  header("location: main.php"); //Redirecting to main page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title></title>

<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

</head>

<body>

<nav class="nav-extended blue darken-3">
  <div class="nav-wrapper">
    <a href="main.php" class="brand-logo">BookHub</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
    </ul>
  </div>
</nav>

<div class="line"></div>

<div class="row">

  <div class="col s4">

    <div class="card grey darken-2 center-align">
      <div class="card-content white-text">
        <h1 style="text-align:center;">Welcome to Bookhub</h1>
        <p style="text-align:center;">The Reader's Heaven</p>
      </div>

      <div class="card-action">
        <div class="row">

        <!-- LOGIN FORM -->
        <form class="col" action = "login1.php" method = "POST" enctype="multipart/form-data" autocomplete="off">
          <h4 style="text-align:center; color: white;">Login</h4>
          <div class="row">
            <div class="input-field col">
              <input id="email_login" name = "email_login" type="text" class="validate">
              <label for="email_login">Email</label>
            </div>
            <div class="input-field col">
              <input id="password_login" name = "password_login" type="password" class="validate">
              <label for="password_login">Password</label>
            </div>
          </div>

          <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
          </div>

          <div class="row">
            <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Forgot Password</button>
          </div>

        </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<!-- SIGNUP FORM -->
          <!-- <div class="column2">
            <form class="col s6" action = "insertdb.php" method = "POST" enctype="multipart/form-data" autocomplete="off">
              <h4 style="text-align:center; color: white;">Signup</h4>

              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" name = "first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" name = "last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="password_signup" name = "password_signup" type="password" class="validate">
                  <label for="password_signup">Password</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="email_signup" name = "email_signup" type="email" class="validate">
                  <label for="email_signup">Email</label>
                </div>
              </div>

              <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
              </div>

            </form>
          </div> -->

          <!-- <div class="row">
            <a href="main.php">Skip Login or Signup</a>
          </div> -->