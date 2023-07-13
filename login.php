<?php
session_start();
if(isset($_SESSION['username'])){
header("Location: class.php");
}
include 'header.php';
?>
<body class="body1">
    <style>
         .fontuser {
            position: relative;
        }
          
        .fontuser i{
            position: absolute;
            left: 20px;
            top: 41px;
            font-size:14px;
        }
 		.fontuser .fa-eye{
            position: absolute;
        	left: 235px;
        	color:#7a7777 !important;
            top: 34px;
            font-size:14px;
        }

     	.fontuser .fa-eye-slash{
            position: absolute;
        	left: 235px;
        	color:#7a7777 !important;
            top: 34px;
            font-size:14px;
        }

        .fontuser .fa-eye{
            position: absolute;
        	left: 235px;
        	color:#7a7777 !important;
            top: 34px;
            font-size:14px;
        }

        input[type=text], 
        input[type=password] { 
            width: 100%; 
            padding: 10px 30px; 
            margin: 8px -5px; 
            display: inline-block; 
            border: 1px solid #ccc; 
            box-sizing: border-box; 
        } 
        .semi-circle {
            position: fixed;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 350px;
            width: 700px;
            border-radius: 350px 350px 0 0;
            background-color: #041662 !important;
            margin-top:-100px !important;
        }
        .card{
            z-index:1;
        }
        @media only screen and (max-width: 600px) {
        .col-md-9{
            max-width:250px !important;
        }
        }
    </style>

<div class="h-100 d-flex align-items-center justify-content-center" >
    <div class="container" >
        <div class="card m-auto card-design" style="max-width:20rem !important;">
            <div class="m-3 mt-5">
              <h1 class="letter-circle2 text-center m-auto">A</h1>
            </div>
            <form action="function.php?login-teacher" method="POST">

            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size ">
            <input type="text" name="username" style="font-size:14px;" class="form-control" placeholder="Input Username" required/>
            <i class="fa fa-user fa-lg"></i>

                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size " style="margin-top:-14px !important;">
            <input type="password" name="password" id="id_password" style="font-size:14px;" class=" form-control" placeholder="Input Password" required>
            <i class="fa fa-key fa-lg"></i>
         	<i onclick="hide(this)" class="fas fa-eye-slash" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
              <a style="font-size:12px; margin-top:-5px;" class="float-right mr-2" href="forgot-password.php">Forgot Password</a>
            </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button type="submit" class="login-btn">Log-in</button>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center" style="margin-top:-28px !important;">
                    <a class="register-color" href="create-account.php"><u>Register</u></a>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-9 p-3 m-auto text-center" style="margin-top:28px !important;">
                <a type="button" href="quick-check.php" class="text-decoration-none quick-check-btn">Quick Check</a>
                </div>
    			  <div class="col-md-9 p-3 m-auto text-center" style="margin-top:-28px !important;">
                    <a class="register-color" href="student/index.php"><u>Login Student</u></a>
                </div>
    
            </div>

         </div>
     </div>
</div>

<div class="semi-circle"></div>

</body>
</html>
<script>
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
});

function hide(x) {
  x.classList.toggle("fa-eye");
  x.classList.toggle("fa-eye-slash");

}
</script>