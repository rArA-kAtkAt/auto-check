<nav class="navbar navbar-default p-1">
  <div class="container-fluid">
    <div class="navbar-header pt-2">
<?php 
if(!isset($_SESSION['username']))
{
?>
<div type="button" class="h-100 d-flex align-items-center justify-content-center">

<?php
}
else{
?>
 <div type="button"  onclick="location.href='class.php';" class="h-100 d-flex align-items-center justify-content-center">
<?php
}
?>
        <h5 class="letter-circle3">A</h5>
        <h5 class="letter-circle3 ml-1">U</h5>
        <h5 class="letter-circle3 ml-1">T</h5>
        <h5 class="letter-circle3 ml-1">O</h5>
        <h5 class="letter-circle3 ml-1">-</h5>
        <h5 class="letter-circle3 ml-1">C</h5>
        <h5 class="letter-circle3 ml-1">H</h5>
        <h5 class="letter-circle3 ml-1">E</h5>
        <h5 class="letter-circle3 ml-1">C</h5>
        <h5 class="letter-circle3 ml-1">K</h5>
       
      </div>
    
      <div class="position-absolute" style="right:0; top:0;">
<?php 
if(!isset($_SESSION['username']))
{
}
else{
?>
<button type="button" data-toggle="modal" data-target="#logoutModal" class="btn login-btn" title="Logout" style="border-radius:25px; max-width:50px;"><i class="fas fa-sign-out"></i></a>
<?php
}
?>


    </div>
  </div>
</nav>  

<?php 
include 'modal.php';
?>