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
    if(!isset($_GET['a']))
    {
      $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE teacher_id =".$id." and status='Inactive'");
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
  
    }
    else{
      $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE teacher_id =".$id." and status='Inactive' and subject_code LIKE '%".$_GET['a']."%'");
      $pdo_statement->execute();
      $result = $pdo_statement->fetchAll();
  
    }

    ?>
    <div class="container mt-3">
    <button onclick="location.href='class.php';" class="fader add-btn float-left mt-1" title="Go Back" ><i class="fas fa-arrow-left"></i></button>

            <button style="margin-left:3px !important; margin-right:3px;" data-toggle="modal" data-target="#New-Class" title="Add Class" class="fader add-btn float-left mt-1"><i class="fas fa-plus"></i></button>

            <form method="POST" action="function.php?search-class2" class="fader form-1 mt-1" style="border:1px solid silver;">
            <input type="search" name="activity_code" style=" font-size:10px !important;" placeholder="Input Activity Code here...">
            <button class="submit-button" type="submit">Search</button>
            </form>
            
        </div>
    
    <div class="container fader">
    <h6 style="font-size:15px;">Archived Class</h6><hr>

        <div class="ml-5 container1 pl-5 pr-5">

        <div class="btn-group row" role="group" aria-label="Basic example">
        <?php
	if(!empty($result)) { 
		foreach($result as $row) {
  

    echo '  <div class="card card3 p-3 mr-2 mt-2 card-design1">
        <div class="setting-btn" style="margin-left:100px;">
        <button type="button" data-toggle="dropdown" class="bg-transparent text-white border-0" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v" style="color:white !important;"></i>
    </button>
    <div class="dropdown-menu" style="font-size:12px;">
      <a class="dropdown-item" href="function.php?class-restore&i='.$row['id'].'">Restore</a>
      <a class="dropdown-item" href="function.php?class-delete&i='.$row['id'].'">Delete</a>
      </div></div>
      <div onClick=\'location.href="tests.php?i='.$row['id'].'"\' type="button" class="text-center">
        <h6 class="text-center">'.$row['subject'].'</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">'.$row['grade_level'].'-'.$row['section'].'</h6>
        <h6 class="text-center" style="font-size:12px; margin-top:-5px;">'.$teacher_name.'</h6>
        <i class="fas fa-book-open h1 text-center"></i>                        
        </div>
        </div>';


    }
  }
  else{
    echo '<h6 style="font-size:12px;">No class found!</h6>';
  }
?>
        
    
      
           </div>

        
    </div>
    </div>
<?php
include 'modal.php';
?>
</body>
</html>
