<?php
session_start();
include 'header.php';
include 'config.php';
	$pdo_statement = $pdo->prepare("SELECT * FROM tbl_teacher WHERE username = '".$_SESSION['username']."'");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
  foreach($result as $row) {
  $id = $row['id'];
  $subject = $row['subject'];
  $teacher_name = $row['firstname'].' '.$row['lastname'];
  }
?>
<body style="background-color:#f0f0f0">

    <?php
    include 'navbar.php';
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE id=".$_GET['i']." ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    foreach($result as $row) {
      $subject = $row['subject'];
      $grade_level = $row['grade_level'];
      }
    ?>
    <div class="container mt-5" >
    <div class="row m-auto">
    <div class="card shadow p-2 m-auto" style="width:25rem !important;" >
<div class="col-md-12 m-auto"> 
<form class="form-horizontal title1" name="form" action="function.php?new-test&i=<?php echo $_GET['i'];?>"  method="POST">
<h6 class="pt-3 pl-3" style="font-size:13px;">New Test</h6>
<div class="form-group mt-4">
  <div class="col-md-12">
    <input type="text" disabled name="subject" class="form-control input-md bg-light" style="font-size:12px;" value="<?php echo $subject;?>">
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
  <input type="text" disabled name="subject" class="form-control input-md bg-light" style="font-size:12px;" value="<?php echo $grade_level;?>">
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <select name="grading" style="font-size:12px;"  id="grading"  class="form-control input-md" required>
        <option value="60" disabled selected>Select Grading</option>
        <option value="1st Grading">1st Grading</option>
        <option value="2nd Grading">2nd Grading</option>
        <option value="3rd Grading">3rd Grading</option>
        <option value="4th Grading">4th Grading</option>
    </select>
  </div>
</div>


<div class="form-group">
  <div class="col-md-12">
    <select name="item_no" style="font-size:12px;"   id="total"  class="form-control input-md">
        <option value="60" disabled selected>Select No. of Items</option>
        <option value="50">50 Points</option>
        <option value="40">40 Points</option>
        <option value="20">20 Points</option>
        <option value="10">10 Points</option>
    </select>
  </div>
</div>


<div class="form-group">
  <div class="col-md-12">
    <select name="type" style="font-size:12px;"  id="type"  class="form-control input-md">
        <option value="60" disabled selected>Select Type of Test</option>
        <option value="Summative Test">Summative Test</option>
        <option value="Quiz 1">Quiz 1</option>
        <option value="Quiz 2">Quiz 2</option>
        <option value="Quiz 3">Quiz 3</option>
        <option value="Quiz 4">Quiz 4</option>
        <option value="Quiz 5">Quiz 5</option>
    </select>
  </div>
</div>



<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12 text-center"> 
    <input  type="submit" class="btn btn-primary btn-sm mx-auto" value="Create Test" class="btn btn-primary"/>
  </div>
</div>

</form></div>
</div>

        
   </div>

</body>
</html>