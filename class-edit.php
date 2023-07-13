<?php
session_start();
include 'config.php';
	$pdo_statement = $pdo->prepare("SELECT * FROM tbl_teacher WHERE username = '".$_SESSION['username']."'");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
  foreach($result as $row) {
  $id = $row['id'];
  $subject = $row['subject'];
  $teacher_name = $row['firstname'].' '.$row['lastname'];
  }
include 'header.php';
?>
<body>
<style>
  .submit-button[type="submit"] {
    text-indent: -999px;
    overflow: hidden;
    width: 40px;
    padding: 0;
    margin: 0;
    border: 1px solid transparent;
    border-radius: inherit;
    background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
    cursor: pointer;
    opacity: 0.7;
  }
  .submit-button[type="submit"]:hover {
    opacity: 1;
  }
  
  .submit-button[type="submit"]:focus,
  input[type="search"]:focus {
    box-shadow: 0 0 3px 0 #1183d6;
    border-color: #1183d6;
    outline: none;
  }
  
</style>
</style>
    <?php
    include 'navbar.php';
	$pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE id = ".$_GET['i']."");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	if(!empty($result)) { 
		foreach($result as $row) {
        }
    }
    ?>
    <div class="container mt-5 text-center">
    <div class="row">
    <a type="button" href="class.php" class="btn btn-outline-secondary btn-sm m-auto" style="border-radius:25px;"><i class="fas fa-arrow-left"></i></a>

    </div>
    </div>
    <div class="container mt-2">
        <div class="card m-auto shadow-sm" style="max-width:30rem;">
            <div class="card-header text-center">
                <span style="font-size:15px;">Update Class</span>
            </div>
            <div class="card-body">
                <form action="function.php?class-edit&i=<?php echo $_GET['i'];?>" method="POST">
                <div class="row">
                    <div class="col-md-7 m-auto">
                        <label for="" style="font-size:12px;">Subject:</label>
                        <input type="text" name="subject" class="form-control form-control-sm" style="font-size:12px;" readonly value="<?php echo $row['subject'];?>">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-7 m-auto">
                        <label for="" style="font-size:12px;">Grade Level:</label>
                        <select name="grade_level" style="font-size:12px;"  id="grade_level"  class="form-control input-md">
                            <option value="Grade 7" <?php if($row['grade_level']=="Grade 7"){ print 'selected'; }?> >Grade 7</option>
                            <option value="Grade 8" <?php if($row['grade_level']=="Grade 8"){ print 'selected'; }?>>Grade 8</option>
                            <option value="Grade 9" <?php if($row['grade_level']=="Grade 9"){ print 'selected'; }?>>Grade 9</option>
                            <option value="Grade 10" <?php if($row['grade_level']=="Grade 10"){ print 'selected'; }?>>Grade 10</option>
                        </select>                    
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-7 m-auto">
                        <label for="" style="font-size:12px;">Section:</label>
                        <input type="text" name="section" class="form-control form-control-sm" style="font-size:12px;" required value="<?php echo $row['section'];?>">
                    </div>
                </div>

                <div class="row mt-4 mb-2 text-center">
                    <div class="col-md-7 m-auto">
                        <button class="btn btn-primary btn-sm" style="font-size:12px;">Update Class</button>
                    </div>
                </div>


                </form>
            </div>
        </div>
    </div>
<?php
include 'modal.php';
?>
</body>
</html>
