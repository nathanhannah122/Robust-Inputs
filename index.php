<?php
   // Start the session
   session_start();
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <link rel="shortcut icon" type="image/png" href="salefavi.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="style.css" />
<body>


<!-- Error Alerts -->
<?php
  // if signup process fails, output error message
  if (isset($_SESSION['errMessage'])) {
  //echo $_SESSION['login_error_msg'];
  echo "<div id='errortext' class='alert alert-danger alert-dismissible fade show' role='alert'>";
  echo "<strong>Error! </strong>";
  echo $_SESSION['errMessage'];
  unset($_SESSION['errMessage']);
  echo  "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
  echo "<span aria-hidden='true'>&times;</span></div>";
  }

?>

<div class="container align-self-center rounded ">
  <div class="row">
   <div class="col-sm-4">
    </div>
    <div class="col-sm-4 box-shadow " style="text-align: center; background-color: white;">
        <!-- form login -->
        <form class="text-center border border-light p-5" method="post" action="login-auth.php">
            <!-- Send Screen Details -->
            <span class="h4 mb-4 today" title="Today"></span>
            <p class="h4 mb-4">Signup <i> System</i></p>

            <!-- Username -->
            <input type="email" name="email" class="form-control mb-4" placeholder="Email" id="email" required >

            <!-- Name -->
            <input type="text" name="name" class="form-control mb-4" placeholder="Name" id="name" required maxlength="40">

            <!-- Age -->
            <input type="number" min="1" max="120" name="age" class="form-control mb-4" placeholder="Age" id="age" required> 

            <!-- Password -->
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" id="password" required>

            <!-- Show Password -->
            <input type="checkbox" id="passcheck" onclick="showPassword()"> Show Password</input>

            <!-- Sign up button -->
            <button class="btn btn-info btn-block my-4" style="background-color: #4723D9;"type="submit">Sign up</button>

        </form>
        <!--form login -->
    </div>
        <div class="col-sm-4">
    </div>
  </div>
</div>



<!-- FOOTER -->
<div id="footer" class="footer-copyright text-center py-3">© 2021 Copyright Nathan Hannah
</div>

<!-- VERSION ID-->
<div id="version" style="text-align: center;">
<a href="https://github.com/nathanhannah122" target="_blank" style="color: grey; text-decoration: none;">Version 3</a></p>
</div>


<script type="text/javascript">
    $(document).ready(function() {
    var today = new Date().toDateString();
    $('.today').html(today);
})
</script>


<script>
    function showPassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }


</script>
</body>
</html>