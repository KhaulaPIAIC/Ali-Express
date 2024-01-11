<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #191919;
            padding: 30px;
        }

        .container {
            position: relative;
            max-width: 850px;
            width: 100%;
            background: #fff;
            padding: 40px 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            perspective: 2700px;
        }

        .container .cover {
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            width: 50%;
            z-index: 98;
            transition: all 1s ease;
            transform-origin: left;
            transform-style: preserve-3d;
        }



        .container .cover .front{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

     

        .container .cover::before,
        .container .cover::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background: #191919;
            opacity: 0.5;
            z-index: 12;
        }

        .container .cover::after {
            opacity: 0.3;
           
            backface-visibility: hidden;
        }

        .container .cover img {
            position: absolute;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: 10;
        }

        .container .cover .text {
            position: absolute;
            z-index: 130;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .cover .text .text-1 {
            font-size: 26px;
            font-weight: 600;
            color: #fff;
            text-align: center;
        }

     

        .container .forms {
            height: 100%;
            width: 100%;
            background: #fff;
        }

        .container .form-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-content .login-form {
            width: calc(100% / 2 - 25px);
        }

        .forms .form-content .title {
            position: relative;
            font-size: 24px;
            font-weight: 500;
            color: #333;
        }

        .forms .form-content .title:before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 25px;
            background: #191919;
        }

        .forms .signup-form .title:before {
            width: 20px;
        }

        .forms .form-content .input-boxes {
            margin-top: 30px;
        }

        .forms .form-content .input-box {
            display: flex;
            align-items: center;
            height: 50px;
            width: 100%;
            margin: 10px 0;
            position: relative;
        }

        .form-content .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 500;
            border-bottom: 2px solid rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .form-content .input-box input:focus,
        .form-content .input-box input:valid {
            border-color: #191919;
        }

        .form-content .input-box i {
            position: absolute;
            color: #191919;
            font-size: 17px;
        }

        .forms .form-content .text {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .forms .form-content .text a {
            text-decoration: none;
            color: purple;
        }

        .forms .form-content .text a:hover {
            text-decoration: underline;
        }

        .forms .form-content .button {
            color: #fff;
            margin-top: 40px;
        }

        .forms .form-content .button input {
            color: #fff;
            background: #191919;
            border-radius: 6px;
            padding: 0;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .forms .form-content .button input:hover {
            background: #414142;
        }

        .forms .form-content label {
            color: #5b13b9;
            cursor: pointer;
        }

        .forms .form-content label:hover {
            text-decoration: underline;
        }

        .forms .form-content .login-text {
            text-align: center;
            margin-top: 25px;
        }

        .container #flip {
            display: none;
        
        }

        @media (max-width: 730px) {
            .container .cover {
                display: none;
            }

            .form-content .login-form{
                width: 100%;
            }

           
        }
    </style>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="images/hand.png" alt="">
                
            </div>
            <div class="back">
                <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="#" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name = "role" placeholder="Buyer" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name = "password" placeholder="Enter your password" required>
                            </div>
                            <div class="text"><a href="#" id="forgotpasswordlink">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Submit" name="submit" id="Loginsubmit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <a href="signupform.php">SignUp</a>
                            </div>
                        </div>
                    </form>
                </div>
               </div>
        </div>
    </div>
    <script>
        // Add a click event listener to the "Forgot Password" link
        document.getElementById('forgotpasswordlink').addEventListener('click', function (event) {
            event.preventDefault();
            // Simulate the password recovery logic (replace with your actual implementation)
            alert('Password recovery link sent to your email. Check your inbox.');
        });
    </script>
</body>

</html>

 <?php
 include "connect.php";

 if(isset($_POST['submit'])){
  $role= $_POST['role'];
  $password = $_POST['password'];
  if(empty($role) || empty($password)) {
      echo "<script>alert('Please fill in all fields');</script>";
      exit();
  }

// $sql = "INSERT INTO login(role, password) VALUES ('$role', '$password')";
//   $result = mysqli_query($con,$sql);
//   if($result){
//       echo "<script>alert('You are Loged In');</script>";
//   }else {
//       die(mysqli_error($con));
//   }
 

// Simulated user data (replace this with your database query)
$users = [
    [ 'role' => 'Buyer','password' => 'buyer12345'],
    [ 'role' => 'seller','password' => 'seller123456']
];

// Retrieve posted username and password (from login form)
$role = $_POST['role'] ?? '';
$password = $_POST['password'] ?? '';

// Check if the username and password match any user data
$authenticatedUser = null;
foreach ($users as $user) {
    if ($user['role'] === $role && $user['password'] === $password) {
        $authenticatedUser = $user;
        break;
    }
}

if ($authenticatedUser) {
    if ($authenticatedUser['role'] === 'Buyer') {
        echo '<script>window.location.href = "index.html";</script>';// Redirect to admin dashboard
        exit;
    } elseif ($authenticatedUser['role'] === 'seller') {
        echo '<script>window.location.href = "admin.php";</script>';// Redirect to user dashboard
        exit;
    }
} else {
    // If username or password doesn't match, redirect to login page with an error message
    echo '<script>window.location.href = "form.php";</script>'; // Redirect to login page with an error flag
    exit;
}
 }
?>


 
