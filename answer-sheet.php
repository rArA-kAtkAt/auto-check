<?php
session_start();
include 'header.php';
include 'config.php';

$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test WHERE id=".$_GET['i']." ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {
    $item_no =  $row['item_no'];
  }
?>
<body style="background-color:#f7f7f7;">
 


    <div class="container mt-3">
      
      <?php 
      if($item_no == 10)
      {
      ?>
      <?php 

  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {
      $subject = $row['subject'];
      $grading = $row['grading'];
      $grade_level = $row['grade_level'];
      $item_no = $row['item_no'];
      $type = $row['type'];
    }

?>

<div class="container p-2 pl-4 card mb-3 text-center m-auto" style="font-size:15px; max-width:40rem;">
<div class="m-auto">
<img src="img/10.jpg" style="width:50%;">
</div> 
</div>

<div class="container p-2 pl-4 card" style="font-size:15px; max-width:40rem;">
<div class="row pl-3 mt-3 mb-3">
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $subject;?></div>
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $grading;?> </div>       
</div>
<div class="row pl-3 mb-3" style="margin-top:-13px;">
<div style="font-size:12px;"  class="col-sm-3"><?php echo $grade_level;?></div>
     <div style="font-size:12px;" class="col-sm-3"><?php echo $type;?></div>     
</div>


<?php 
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {

  }
?>
<div class="row">
  <div class="col-md-12 text-left">1. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
 ?> 
<div class="row mt-4">
  <div class="col-md-12 text-left">2. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



   
  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">3. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">4. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">5. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">6. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">7. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">8. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

  <div class="row mt-4">
  <div class="col-md-12 text-left">9. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">10. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

</div>
      


<?php
      }

?>



<?php 
      if($item_no == 20)
      {
      ?>
      <?php 

  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {
      $subject = $row['subject'];
      $grading = $row['grading'];
      $grade_level = $row['grade_level'];
      $item_no = $row['item_no'];
      $type = $row['type'];
    }

?>

<div class="container p-2 pl-4 card mb-3 text-center m-auto" style="font-size:15px; max-width:40rem;">
<div class="m-auto">
<img src="img/20.jpg" style="width:50%;">
</div> 
</div>

<div class="container p-2 pl-4 card" style="font-size:15px; max-width:40rem;">
<div class="row pl-3 mt-3 mb-3">
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $subject;?></div>
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $grading;?> </div>       
</div>
<div class="row pl-3 mb-3" style="margin-top:-13px;">
<div style="font-size:12px;"  class="col-sm-3"><?php echo $grade_level;?></div>
     <div style="font-size:12px;" class="col-sm-3"><?php echo $type;?></div>     
</div>


<?php 
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {

  }
?>
<div class="row">
  <div class="col-md-12 text-left">1. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
 ?> 
<div class="row mt-4">
  <div class="col-md-12 text-left">2. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



   
  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">3. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">4. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">5. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">6. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">7. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">8. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

  <div class="row mt-4">
  <div class="col-md-12 text-left">9. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">10. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">11. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">12. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">13. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">14. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">15. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">16. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">17. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">18. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">19. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">20. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



</div>
      


<?php
      }
      
?>





<?php 
      if($item_no == 40)
      {
      ?>
      <?php 

  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {
      $subject = $row['subject'];
      $grading = $row['grading'];
      $grade_level = $row['grade_level'];
      $item_no = $row['item_no'];
      $type = $row['type'];
    }

?>

<div class="container p-2 pl-4 card mb-3 text-center m-auto" style="font-size:15px; max-width:40rem;">
<div class="m-auto">
<img src="img/40.jpg" style="width:80%; height:100%">
</div> 
</div>

<div class="container p-2 pl-4 card" style="font-size:15px; max-width:40rem;">
<div class="row pl-3 mt-3 mb-3">
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $subject;?></div>
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $grading;?> </div>       
</div>
<div class="row pl-3 mb-3" style="margin-top:-13px;">
<div style="font-size:12px;"  class="col-sm-3"><?php echo $grade_level;?></div>
     <div style="font-size:12px;" class="col-sm-3"><?php echo $type;?></div>     
</div>


<?php 
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {

  }
?>
<div class="row">
  <div class="col-md-12 text-left">1. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
 ?> 
<div class="row mt-4">
  <div class="col-md-12 text-left">2. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



   
  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">3. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">4. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">5. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">6. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">7. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">8. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

  <div class="row mt-4">
  <div class="col-md-12 text-left">9. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">10. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">11. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">12. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">13. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">14. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">15. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">16. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">17. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">18. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">19. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">20. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 20");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">21. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 21");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">22. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 22");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">23. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 23");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">24. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 24");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">25. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 25");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">26. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 26");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">27. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 27");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">28. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 28");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">29. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 29");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">30. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 30");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">31. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 31");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">32. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 32");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">33. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 33");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">34. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 34");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">35. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 35");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">36. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 36");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">37. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 37");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">38. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 38");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">39. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 39");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">40. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


</div>
      


<?php
      }
      
?>








<?php 
      if($item_no == 50)
      {
      ?>
      <?php 

  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {
      $subject = $row['subject'];
      $grading = $row['grading'];
      $grade_level = $row['grade_level'];
      $item_no = $row['item_no'];
      $type = $row['type'];
    }

?>

<div class="container p-2 pl-4 card mb-3 text-center m-auto" style="font-size:15px; max-width:40rem;">
<div class="m-auto">
<img src="img/50.jpg" style="width:80%; height:100%">
</div> 
</div>

<div class="container p-2 pl-4 card" style="font-size:15px; max-width:40rem;">
<div class="row pl-3 mt-3 mb-3">
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $subject;?></div>
            <div style="font-size:12px;"  class="col-sm-3"><?php echo $grading;?> </div>       
</div>
<div class="row pl-3 mb-3" style="margin-top:-13px;">
<div style="font-size:12px;"  class="col-sm-3"><?php echo $grade_level;?></div>
     <div style="font-size:12px;" class="col-sm-3"><?php echo $type;?></div>     
</div>


<?php 
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {

  }
?>
<div class="row">
  <div class="col-md-12 text-left">1. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
 ?> 
<div class="row mt-4">
  <div class="col-md-12 text-left">2. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



   
  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">3. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">4. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">5. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">6. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

<div class="row mt-4">
  <div class="col-md-12 text-left">7. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>
  
  <div class="row mt-4">
  <div class="col-md-12 text-left">8. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?>  

  <div class="row mt-4">
  <div class="col-md-12 text-left">9. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

  <?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">10. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">11. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">12. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">13. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">14. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">15. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">16. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>

<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">17. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">18. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">19. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">20. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 20");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">21. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 21");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">22. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 22");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">23. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 23");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">24. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 24");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">25. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 25");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">26. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 26");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">27. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 27");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">28. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 28");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">29. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 29");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">30. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 30");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">31. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 31");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">32. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 32");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">33. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 33");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">34. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 34");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">35. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 35");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">36. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 36");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">37. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 37");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">38. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 38");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">39. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 39");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">40. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 40");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">41. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 41");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">42. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 42");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">43. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 43");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">44. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 44");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">45. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 45");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">46. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 46");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">47. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 47");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">48. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>


<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 48");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">49. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>



<?php 
  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 49");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
  foreach($result as $row) {

  }
  ?> 

<div class="row mt-4">
  <div class="col-md-12 text-left">50. <?php echo $row['question'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">A. <?php echo $row['option_a'];?></div>
  <div class="col-md-5 text-left">B. <?php echo $row['option_b'];?></div>
</div>
<div class="row">
  <div class="col-md-5 text-left">C. <?php echo $row['option_c'];?></div>
  <div class="col-md-5 text-left">D. <?php echo $row['option_d'];?></div>
</div>
</div>
      


<?php
      }
      
?>




    </div>

</body>
</html>
<script>
  window.print();
// window.onmousemove = function() {
//   window.close();
// }
</script>
