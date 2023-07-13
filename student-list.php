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
<body>
<style>
table, th, td,tr{
  border:1px solid gray;
  font-size:13px;
}
tr:hover{
  background: #041662 !important;
  color:white;

}
    .form-1 {
  color: #555;
  display: flex;
  padding: 1    px;
  border: 1px solid gray;
  border-radius: 25px;
  margin: 0 0 30px;
  max-width:950px;
}

input[type="search"] {
  border: none;
  background: transparent;
  margin: 0;
  width:900px;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

input[type="search"]::placeholder {
  color: #bbb;
}

.card3{
    margin-left:10px;
    border:2px solid #041662;
    width:100px;
    text-align:center;
}
.footer-left{
    position:fixed;
    bottom:0%;
    left:0%; 
    color:#041662;
    font-weight:bold;
}
.footer-right{
position: fixed;
  right: 0px; 
  bottom: 0px;
  width: 130px;
color:#041662;
font-weight:bold;
}

button[type="submit"] {
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
.card-btn{
    color:gray !important;
}
.card-btn:hover{
    background-color:#a7a7a8;
    color:white !important;
}
button[type="submit"]:hover {
  opacity: 1;
}

button[type="submit"]:focus,
input[type="search"]:focus {
  box-shadow: 0 0 3px 0 #1183d6;
  border-color: #1183d6;
  outline: none;
}

.setting-btn{
  float:right;
}

.fa-ellipsis-v:nth-child(odd) {
    color:blue !important;
}


      
      @media only screen and (min-width: 768px) {
        .footer-right, .footer-left{
          display:none !important;
          
      }
      
}
@media (max-width: 767px) {
 
        .card2 {
          display: none !important;
        }
        .form-to{
            margin-left:-1px !important;
        }
      }
      .form-1{
          margin-left:-1px !important;
      }


  

    }
    @media only screen and (max-width: 600px) {
    
    
    }
</style>

    <?php
    include 'navbar.php';
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE id=".$_GET['i']." ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    foreach($result as $row) {
      $subject_code = $row['subject_code'];
      }
    ?>
    <div class="container mt-3 fader">
    
            
            <div class="card card2 bg-transparent float-left p-3 bg-dark" style="margin-left:-100px; margin-bottom:2000px;">
            <div class="card card-design1 p-1" style="width:8rem;">
                    <span class="text-center"><?php echo $row['subject_code'];?></span>
                </div>
                    <span class="text-center mb-4" style="font-size:12px;">Subject Code</span>
                   <a href="tests.php?i=<?php echo $_GET['i'];?>" type="button" class="border-0 bg-white"><div class="m-auto" style="background-color:#041662;border-radius:50px; width:50px; padding-left:8px;border:2px solid #041662;">
                    <i class="fas fa-arrow-left h3 pl-1 mt-2 text-white"></i></div>
                    <h6 class="text-center mt-3" style="font-size:12px !important; color:#041662 !important;"></h6></a></button>   
            </div>
            <div class="form-to" style="margin-left:100px;">
            <button onclick="location.href='test-archive.php?i=<?php echo $_GET['i'];?>';" class="fader add-btn float-right mt-1" title="Archived tests" style="margin-left:3px !important; margin-right:3px;"><i class="fas fa-trash"></i></button>
            <form class="form-1 mt-1" method="POST" action="function.php?search-student&i=<?php echo $_GET['i']?>" style="border:1px solid silver;">
            <input type="search" name="student" style=" font-size:10px !important;" placeholder="Search Student...">
            <button type="submit">Search</button>
            </form>
          </div>

        </div>
    

     <div class="container fader d-flex">
  
        <table  style="width:50rem;" >
    <thead>
    
`	<tr>
	  <th class="text-center theme-bg text-white">First Name</th>
	  <th class="text-center theme-bg text-white">Middle Name</th>
	  <th class="text-center theme-bg text-white">Last Name</th>
    <th class="text-center theme-bg text-white">Status</th>
    <th class="text-center theme-bg text-white">Action</th>


    </tr>
    <?php	
    if(!isset($_GET['s'])){
      $pdo_statement = $pdo->prepare("SELECT *,`sc`.`status`  FROM tbl_student_class as sc LEFT JOIN tbl_student as s ON sc.student_id = s.id WHERE sc.class_id=".$_GET['i']."");
    }
    else{
      $pdo_statement = $pdo->prepare("SELECT *,`sc`.`status` FROM tbl_student_class as sc LEFT JOIN tbl_student as s ON sc.student_id = s.id WHERE sc.class_id=".$_GET['i']." and s.firstname  LIKE '%".$_GET['s']."%' or s.middlename LIKE '%".$_GET['s']."%' or s.lastname LIKE '%".$_GET['s']."%'");
      
    }
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
    foreach($result as $row) {
   echo '    <tr>';
    ?>
    <tbody>

      <td class="text-center"><?php echo $row['firstname']?></td>
      <td class="text-center"><?php echo $row['middlename']?></td>
      <td class="text-center"><?php echo $row['lastname']?></td>
      <td class="text-center"><?php echo $row['status'] == 'Pending' ? 'For approval' : 'Enrolled' ?></td>
      <td class="text-center">
        <?php if($row['status'] == 'Pending'){ ?>
        <form method="POST" action="function.php?approvedelete&i=<?php echo $_GET['i']?>&si=<?php echo $row['id']?>&type=1" style="border:0; display:inline-block; padding:0 !important; margin:0 !important">
          <button class="badge badge-success" style="height:25px"><i class="fa fa-check"></i> Approve</button>
        </form>
        <?php } ?>
        <form method="POST" action="function.php?approvedelete&i=<?php echo $_GET['i']?>&si=<?php echo $row['id']?>&type=0" style="border:0; display:inline-block; padding:0 !important; margin:0 !important">
          <button class="badge badge-danger" style="height:25px"><i class="fa fa-trash"></i> Drop</button>
        </form>
      </td>
    </tbody>
      <?php 
      echo '</tr>';
      }
    }
   
      ?>
       </table>
        </div>
   

    


  
    
  



   <div class="container footer-left">
   <div class="card card3 p-2">
        <span><?php echo $row['subject_code'];?></span>
      </div>
    <h6 class="pl-4 mt-1" style="font-size:11px;">Subject Code</h6>
   </div>

   <div class="container footer-right">
    <a href="tests.php?i=<?php echo $_GET['i'];?>" type="button" class="m-auto" style=" background-color:#041662;border-radius:50px; width:50px; padding-left:8px;  border:2px solid #041662; margin-left:35px !important;">
      <i class="fas fa-arrow-left h3 pl-1 mt-2 text-white"></i></a>
      <h6 class="pl-4 mt-3" style="font-size:11px;"></h6>

   </div>


</body>
</html>