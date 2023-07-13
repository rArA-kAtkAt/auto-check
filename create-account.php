<?php
include 'header.php';

?>
<style>
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


    @media only screen and (min-width: 768px) {
        .input-group{
            padding-left:50px;
            padding-right:50px;
        }
        .card-imgs{
            display:none;
        }
        .card-imgs2{
            display:block !important;
        }
        iframe{
        width:470px !important;
        }
    }
</style>
<body style=" background-color: rgba(243, 242, 242, 0.753) !important;  ">

<?php
include 'navbar.php';
include 'config.php';
$data = $pdo->query("Select (Select count(*) from `tbl_student`) + (Select count(*) from `tbl_teacher`) as 'id'");
$user = $data->fetch();

date_default_timezone_set('Asia/Manila');
$username = "";

if ($user["id"] < 10){
    $username = date('Y').'-'.'000'.($user["id"] + 1);
}else if ($user["id"] < 100){
    $username = date('Y').'-'.'00'.($user["id"] + 1);
}else if ($user["id"] < 1000){
    $username = date('Y').'-'.'0'.($user["id"] + 1);
}else{
    $username = date('Y').'-'.($user["id"] + 1);
}
?>

<div class="container mt-4">

<div class="modal fade" id="tnc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body img-responsive">
    
      <iframe src="TERMS-AND-CONDITIONS.pdf#toolbar=0" style="width:330px; height:500px;"></iframe>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

    <div class="row mt-4">
        <div class="col-md-8">
        <h6 class="crt-account-text"><strong>Create an Account</strong></h6><hr>

            <div class="card p-4" style="border:2px solid #041662; border-radius:10px;">
            <div class="card card-imgs p-3 text-center m-auto" style="max-width:17rem;border:2px solid #041662; border-radius:10px;">
            <i class="fa-solid fa-user-tie" style="color:#041662; font-size:100px;"></i>           
         </div>
         <form action="function.php?register-teacher" method="POST">
            <div class="input-group w-100  mt-4">
                <select name="teacher_level" class="form-control mr-2 rounded" style="font-size:12px; max-width:200px;" id="" required>
                    <option value="" selected disabled>Select Teacher Level</option>
                    <option value="" readonly>Master Teacher</option>
                    <option value="" readonly>Teacher</option>
                </select>
                <select name="subject" class="form-control rounded" style="font-size:12px; max-width:200px;" id="" required>
                    <option value="" selected disabled>Select Subject</option>
                    <option value="Filipino">Filipino</option>
                    <option value="English">English</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="Mother Toungue">Mother Toungue</option>
                    <option value="Araling Panlipunan">Araling Panlipunan</option>
                    <option value="Edukasyon sa Pagkakatao (Esp)">Edukasyon sa Pagkakatao (Esp)</option>
                    <option value="M.A.P.E.H.">M.A.P.E.H.</option>
                    <option value="Edukasyong Pangtahanan at Pangkabuhayan (EPP)">Edukasyong Pangtahanan at Pangkabuhayan (EPP)</option>
                    <option value="Technology and Livelihood Education (TLE)">Technology and Livelihood Education (TLE)</option>
                </select>
        </div>

        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-3" style="font-size:13px;">Username:</label>
            <input type="text" name="username" style="font-size:12px;" placeholder="Input Username" class="form-control rounded mt-2"  value="<?php echo isset($_POST['username'])? htmlspecialchars($_POST['username']) : $username ?>" readonly>
        </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">First Name:</label>
            <input type="text" name="firstname"  style="font-size:12px;" placeholder="Input First Name" class="form-control rounded" required>
        </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">Middle Name:</label>
            <input type="text" name="middlename"  style="font-size:12px;"  placeholder="Input Middle Name" class="form-control rounded" required>
        </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">Last Name:</label>
            <input type="text" name="lastname"  style="font-size:12px;" placeholder="Input Last Name" class="form-control rounded" required>
        </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">Password:</label>
            <input type="password" name="password" id="id_password" style="font-size:12px;"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Input Password" class="form-control rounded" required>
            <i onclick="hide(this)" class="fas fa-eye" id="togglePassword" style="cursor: pointer; margin-left:-24px; margin-top:8px !important; z-index:3;"></i>

            </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">Confirm Password:</label>
            <input type="password" name="confirm_password" style="font-size:12px;" id="id_password2" placeholder="Confirm Password" class="form-control rounded" required>
            <i onclick="hide2(this)" class="fas fa-eye" id="togglePassword2" style="cursor: pointer; margin-left:-24px; margin-top:8px !important; z-index:3;"></i>
            </div>
        <div class="input-group w-100 mt-3">
            <label for="" class="mr-2 mt-1" style="font-size:13px;">Email Address:</label>
            <input type="text" name="email_address" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" style="font-size:12px;" placeholder="Input Email Address" class="form-control rounded" required>
        </div>

        <div class="input-group w-100 mt-4">
        <input type="checkbox" class="form-check" id="tnc" name="tnc" value="1">
         <label for="tnc" style="font-size:12px; margin-left:10px; margin-top:8px;"> Agree with the <a href=""  data-toggle="modal" data-target="#tnc">terms and condition</a></label><br>
        </div>

        <div class="row mt-3">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button type="submit" class="login-btn">Register</button>
                </div>
            </div>
            </form>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-imgs2 p-3 text-center m-auto" style="display:none;max-width:17rem;border:2px solid #041662; border-radius:10px; margin-top:50px !important;">
            <i class="fa-solid fa-user-tie" style="color:#041662; font-size:200px;"></i>           
         </div>
        </div>
    </div>
</div>




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

const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#id_password2');

  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
});
function hide(x) {
  x.classList.toggle("fa-eye-slash");
  x.classList.toggle("fa-eye");
}

function hide2(x) {
  x.classList.toggle("fa-eye-slash");
  x.classList.toggle("fa-eye");
}
</script>