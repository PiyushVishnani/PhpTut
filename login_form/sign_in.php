<?php
$con=mysqli_connect('localhost','root','','users');
if(isset($_POST['signup']))
{
  $name = $_POST['username'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
if(!$con)
{
  die("connection failed").error();
}
 $insert_query="INSERT INTO loginusers('username','password') values ('$name','$password')";
if(mysqli_query($con, $insert_query) and $password==$confirmpassword)
{
  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  // <strong>Success!!</strong> You account is now created and you can login.
  // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div>';
  echo "successssss.....";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/code/login_form">Signup System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/code/login_form/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/code/login_form/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/code/login_form/sign_in.php">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/code/login_form/logout.php">LogOut</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
    <form action="login_form/sign_in.php" method="post"></form>
    <div class="container"></div>
    <h1 class="text-center">Signup to our website</h1>
    <form>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="confirmpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword>
    <div id="emailHelp" class="form-text">Make sure to enter same password.</div>
  </div>
  </div>
      <input type="submit" name="signup" value="Signup" id="">
</form>

  </body>
</html>