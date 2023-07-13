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
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['id']." ");
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
<h6 class="pt-3 pl-3" style="font-size:13px;">Update Test</h6>
<form action="function.php?test-edit" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="class_id" value="<?php echo $_GET['i'];?>">

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
        <option <?php if($row['grading']=="1st Grading"){ print 'selected'; }?> value="1st Grading">1st Grading</option>
        <option <?php if($row['grading']=="2nd Grading"){ print 'selected'; }?>  value="2nd Grading">2nd Grading</option>
        <option <?php if($row['grading']=="3rd Grading"){ print 'selected'; }?>  value="3rd Grading">3rd Grading</option>
        <option <?php if($row['grading']=="4th Grading"){ print 'selected'; }?>  value="4th Grading">4th Grading</option>
    </select>
  </div>
</div>




<div class="form-group">
  <div class="col-md-12">
    <select name="type" style="font-size:12px;"  id="type"  class="form-control input-md">
        <option value="60" disabled selected>Select Type of Test</option>
        <option  <?php if($row['type']=="Summative Test"){ print 'selected'; }?> value="Summative Test">Summative Test</option>
        <option <?php if($row['type']=="Quiz 1"){ print 'selected'; }?>  value="Quiz 1">Quiz 1</option>
        <option <?php if($row['type']=="Quiz 2"){ print 'selected'; }?>  value="Quiz 2">Quiz 2</option>
        <option <?php if($row['type']=="Quiz 3"){ print 'selected'; }?>  value="Quiz 3">Quiz 3</option>
        <option <?php if($row['type']=="Quiz 4"){ print 'selected'; }?>  value="Quiz 4">Quiz 4</option>
        <option <?php if($row['type']=="Quiz 5"){ print 'selected'; }?>  value="Quiz 5">Quiz 5</option>
    </select>
  </div>
</div>



<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12 text-center"> 
    <button  type="submit" class="btn btn-primary btn-sm mx-auto" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
</div>
</div>

        
   </div>

</body>
</html>