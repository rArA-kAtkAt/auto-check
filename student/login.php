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
        
    </style>
<div class="h-100 d-flex align-items-center justify-content-center" >
    <div class="container" >
        <form action="../function.php?login-student" method="POST">
        <div class="card m-auto card-design" style="max-width:20rem !important;">
            <div class="m-3 mt-5">
              <h1 class="letter-circle2 text-center m-auto">A</h1>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size"  style="width:17rem;">
            <input type="text" name="username" style="font-size:14px;" class="form-control" placeholder="Input Username"/>
            <i class="fa fa-user fa-lg"></i>

                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size" style="width:17rem; margin-top:-14px !important;">
            <input type="password"  name="password" style="font-size:14px;" class="form-control" id="id_password2" placeholder="Input Password">
            <i class="fa fa-key fa-lg"></i>
         	<i onclick="hide(this)" class="fas fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
             <a style="font-size:12px; margin-top:-5px;" class="float-right mr-2" href="forgot-password.php">Forgot Password</a>
        </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button class="login-btn">Log-in</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center" style="margin-top:-28px !important;">
                    <a class="register-color" href="create-account.php"><u>Register</u></a>
                </div>
            </div>

        
            <br>            <br>            <br>            <br>            <br>            <br>

         </div>
     </div>
</div>
    </form>
<div class="semi-circle"></div>

</body>
</html>
<script>
const togglePassword = document.querySelector('#togglePassword2');
  const password = document.querySelector('#id_password2');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
});

function hide(x) {
  x.classList.toggle("fa-eye-slash");
  x.classList.toggle("fa-eye");
}

</script><?php
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
        
    </style>
<div class="h-100 d-flex align-items-center justify-content-center" >
    <div class="container" >
        <form action="../function.php?login-student" method="POST">
        <div class="card m-auto card-design" style="max-width:20rem !important;">
            <div class="m-3 mt-5">
              <h1 class="letter-circle2 text-center m-auto">A</h1>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size"  style="width:17rem;">
            <input type="text" name="username" style="font-size:14px;" class="form-control" placeholder="Input Username"/>
            <i class="fa fa-user fa-lg"></i>

                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto fontuser input-size" style="width:17rem; margin-top:-14px !important;">
            <input type="password"  name="password" style="font-size:14px;" class="form-control" id="id_password2" placeholder="Input Password">
            <i class="fa fa-key fa-lg"></i>
         	<i onclick="hide(this)" class="fas fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button class="login-btn">Log-in</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 p-3 m-auto text-center" style="margin-top:-28px !important;">
                    <a class="register-color" href="create-account.php"><u>Register</u></a>
                </div>
            </div>

        
            <br>            <br>            <br>            <br>            <br>            <br>

         </div>
     </div>
</div>
    </form>
<div class="semi-circle"></div>

</body>
</html>
<script>
const togglePassword = document.querySelector('#togglePassword2');
  const password = document.querySelector('#id_password2');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
});

function hide(x) {
  x.classList.toggle("fa-eye-slash");
  x.classList.toggle("fa-eye");
}

</script>