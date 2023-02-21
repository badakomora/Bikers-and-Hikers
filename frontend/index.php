<?php
session_start();
include '../includes/dbconfiq.php';
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $query = mysqli_query($con, "SELECT * FROM users where email = '$email' AND password = '$password'");
    $row = mysqli_fetch_assoc($query);
    if ($row >= 1) {
      $_SESSION['email'] = $row['email'];
  
      header('refresh: 0, ./?p=Dashboard');
      $msg = "Admin Login Access Granted. First clear with your dashboard before you proceed to anything else. WELCOME!";
      echo "<script type='text/javascript'>alert('$msg');</script>";
    
    } else {
  
      header('refresh: 0, ./login.php');
      $msg = "Admin Login Access Denied. Please use the correct credentials";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      
    }
  
}elseif (isset($_POST['Register'])) {
    
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "SELECT * FROM admin where email = '$email' AND password = '$password'");
  $row = mysqli_fetch_assoc($query);
  if ($row >= 1) {
    $_SESSION['email'] = $row['email'];

    header('refresh: 0, ./?p=Dashboard');
    $msg = "Admin Login Access Granted. First clear with your dashboard before you proceed to anything else. WELCOME!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
  } else {

    header('refresh: 0, ./login.php');
    $msg = "Admin Login Access Denied. Please use the correct credentials";
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="vh-100 d-flex justify-content-center align-items-center" id="SignIn">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-secondary bg-white">
            <h2 class="text-center mb-4 text-secondary">Sign In Form</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-secondary" id="exampleInputPassword1">
                </div>
                <!-- <p class="small"><a class="text-secondary" href="forget-password.html">Forgot password?</a></p> -->
                <div class="d-grid">
                    <button class="btn btn-secondary" type="submit">Sign In</button>
                </div>
            </form>
            <div class="mt-3">
                <p class="mb-0  text-center">Don't have an account? <a href="#SignUp" class="text-secondary fw-bold" >Sign
                        Up</a></p>
            </div>
        </div>
    </div>


    <div class="vh-100 d-flex justify-content-center align-items-center" id="SignUp">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-secondary bg-white">
            <h2 class="text-center mb-4 text-secondary">Sign Up Form</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-secondary" id="exampleInputPassword1">
                </div>
                <p class="small"><a class="text-secondary" href="forget-password.html">Forgot password?</a></p>
                <div class="d-grid">
                    <button class="btn btn-secondary" id="In" type="submit">Sign Up</button>
                </div>
            </form>
            <div class="mt-3">
                <p class="mb-0  text-center">Already have an account? <a href="#SignIn" class="text-secondary fw-bold">Sign
                        In</a></p>
            </div>
        </div>
    </div>













</body>
</html>