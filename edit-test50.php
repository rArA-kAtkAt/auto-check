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
    <div class="container mt-5" >
    <form action="function.php?edit-test-qna50&i=<?php echo $_GET['i'];?>" method="POST">
    <div class="row m-auto">
    <div class="card shadow w-100 p-2" style="background-color:#fafafa;">
                <div class="row p-2 ml-5 mt-3">
            <div style="font-size:12px;"  class="col-sm-2">Subject: <?php echo $subject;?></div>
            <div style="font-size:12px;"  class="col-sm-2">Grading: <?php echo $grading;?> </div>
            <div style="font-size:12px;"  class="col-sm-2">Grade Level:  <?php echo $grade_level;?></div>
            <div style="font-size:12px;"  class="col-sm-2">Items: <?php echo $item_no.' Points';?></div>
            <div style="font-size:12px;" class="col-sm-2">Type: <?php echo $type;?></div>
        </div>
        <bR>

        <input type="hidden" name="test_id" value="<?php echo $_GET['i'];?>">

<?php 
$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $row) {

  }
?>


        <div class="h-100 d-flex  m-auto pb-2 mb-5">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 1.</label>
            <textarea name="q1" style="font-size:12px;"  cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q1a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a'];?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q1c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c'];?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q1b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b'];?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q1d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d'];?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q1ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>       
        
        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 2.</label>
            <textarea name="q2" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q2a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q2c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q2b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q2d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q2ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>    


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 3.</label>
            <textarea name="q3" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q3a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q3c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q3b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q3d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q3ans" id="" style="font-size:12px;" class="form-control">
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>    


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 4.</label>
            <textarea name="q4" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q4a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q4c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q4b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q4d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q4ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 5.</label>
            <textarea name="q5" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q5a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q5c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q5b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q5d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q5ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?>  value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?>  value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?>  value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?>  value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 6.</label>
            <textarea name="q6" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q6a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q6c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q6b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q6d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q6ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 7.</label>
            <textarea name="q7" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q7a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q7c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q7b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q7d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q7ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 8.</label>
            <textarea name="q8" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q8a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q8c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q8b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q8d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q8ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  
        
    <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 9.</label>
            <textarea name="q9" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q9a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q9c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q9b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q9d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q9ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {

        }
        ?>  
        
    <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 10.</label>
            <textarea name="q10" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q10a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q10c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q10b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q10d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q10ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 11.</label>
            <textarea name="q11" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q11a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q11c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q11b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q11d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q11ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 12.</label>
            <textarea name="q12" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q12a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q12c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q12b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q12d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q12ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 13.</label>
            <textarea name="q13" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q13a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q13c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q13b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q13d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q13ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 14.</label>
            <textarea name="q14" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q14a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q14c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q14b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q14d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q14ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 15.</label>
            <textarea name="q15" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q15a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q15c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q15b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q15d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q15ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 16.</label>
            <textarea name="q16" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q16a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q16c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q16b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q16d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q16ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 17.</label>
            <textarea name="q17" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q17a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q17c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q17b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q17d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q17ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 18.</label>
            <textarea name="q18" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q18a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q18c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q18b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q18d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q18ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 19.</label>
            <textarea name="q19" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q19a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q19c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control"required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q19b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q19d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q19ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
        
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 20.</label>
            <textarea name="q20" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q20a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q20c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q20b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q20d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q20ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 20");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 21.</label>
            <textarea name="q21" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q21a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q21c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q21b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q21d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q21ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 21");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 22.</label>
            <textarea name="q22" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q22a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q22c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q22b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q22d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q22ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 22");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 23.</label>
            <textarea name="q23" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q23a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q23c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q23b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q23d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q23ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 23");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 24.</label>
            <textarea name="q24" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q24a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q24c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q24b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q24d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q24ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 24");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 25.</label>
            <textarea name="q25" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q25a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q25c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q25b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q25d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q25ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>
    
        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 25");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 26.</label>
            <textarea name="q26" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q26a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q26c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q26b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q26d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q26ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 26");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 27.</label>
            <textarea name="q27" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q27a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q27c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q27b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q27d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q27ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 27");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 28.</label>
            <textarea name="q28" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q28a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q28c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q28b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q28d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q28ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 28");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 29.</label>
            <textarea name="q29" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q29a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q29c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q29b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q29d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q29ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 29");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 30.</label>
            <textarea name="q30" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q30a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q30c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q30b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q30d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q30ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 30");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 31.</label>
            <textarea name="q31" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q31a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q31c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q31b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q31d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q31ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 31");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 32.</label>
            <textarea name="q32" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q32a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q32c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q32b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q32d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q32ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 32");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 33.</label>
            <textarea name="q33" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q33a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q33c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q33b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q33d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q33ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 33");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 34.</label>
            <textarea name="q34" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q34a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q34c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q34b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q34d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q34ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 34");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 35.</label>
            <textarea name="q35" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q35a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q35c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q35b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q35d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q35ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 35");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  


        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 36.</label>
            <textarea name="q36" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q36a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q36c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q36b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q36d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q36ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 36");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 37.</label>
            <textarea name="q37" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q37a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q37c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q37b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q37d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q37ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 37");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 38.</label>
            <textarea name="q38" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q38a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q38c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q38b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q38d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q38ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 38");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 39.</label>
            <textarea name="q39" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q39a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q39c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q39b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q39d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q39ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>

        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 39");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 40.</label>
            <textarea name="q40" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q40a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q40c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q40b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q40d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q40ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 40");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 41.</label>
            <textarea name="q41" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q41a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q41c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q41b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q41d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q41ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 41");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 42.</label>
            <textarea name="q42" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q42a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q42c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q42b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q42d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q42ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 42");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 43.</label>
            <textarea name="q43" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q43a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q43c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q43b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q43d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q43ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 43");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 44.</label>
            <textarea name="q44" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q44a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q44c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q44b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q44d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q44ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 44");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 45.</label>
            <textarea name="q45" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q45a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q45c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q45b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q45d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q45ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 45");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 46.</label>
            <textarea name="q46" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q46a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q46c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q46b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q46d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q46ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>




        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 46");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 47.</label>
            <textarea name="q47" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q47a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q47c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q47b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q47d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q47ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 47");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 48.</label>
            <textarea name="q48" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q48a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q48c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q48b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q48d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q48ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>



        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 48");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 49.</label>
            <textarea name="q49" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q49a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q49c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q49b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q49d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q49ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>




        <?php 
        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q LEFT JOIN tbl_test as t ON q.test_id = t.id LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ORDER BY q.id ASC LIMIT 1 OFFSET 49");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $row) {
        }
        ?>  

        <br>
        <div class="h-100 d-flex m-auto pb-2">
            <label for="" style="font-size:12px;" class="mr-3 text-center">Question 50.</label>
            <textarea name="q50" style="font-size:12px;" cols="60" rows="2" class="form-control" required><?php echo $row['question']; ?></textarea>
        </div>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">A.</label>
            <textarea name="q50a" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_a']; ?></textarea>
            <label for="" style="font-size:12px;"  class="mr-3 ml-3">C.</label>
            <textarea name="q50c" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_b']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex  mt-5 m-auto">
            <label for="" style="font-size:12px;"  class="mr-3">B.</label>
            <textarea name="q50b" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_c']; ?></textarea>
            <label for="" style="font-size:12px;"   class="mr-3 ml-3">D.</label>
            <textarea name="q50d" style="font-size:12px;" id="" cols="20" rows="1" class="form-control" required><?php echo $row['option_d']; ?></textarea>
        </div>
        <br>
        <div class="h-100 d-flex mt-5  m-auto">
            <label for="" class="mr-3" style="font-size:12px;">Correct answer</label>
            <select name="q50ans" id="" style="font-size:12px;" class="form-control" required>
                <option <?php if($row['correct_answer']=="A"){ print 'selected'; }?> value="A">Option A</option>
                <option <?php if($row['correct_answer']=="B"){ print 'selected'; }?> value="B">Option B</option>
                <option <?php if($row['correct_answer']=="C"){ print 'selected'; }?> value="C">Option C</option>
                <option <?php if($row['correct_answer']=="D"){ print 'selected'; }?> value="D">Option D</option>
            </select>            
        </div>


        <div class="row mt-3">
                <div class="col-md-9 p-3 m-auto text-center">
                    <button type="submit" class="login-btn">Save</button>
                
                </div>
            </div>
            </form>


    </div>



    
    </div>

        
    
   </div>

</body>
</html>