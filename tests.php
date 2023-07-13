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
      	form{
        width:50% ;
        }
      span{
      font-size:15px;
      }
    
}
@media (max-width: 767px) {
        .card2 {
          display: none !important;
        }
		form{
        width:80%;
        }
        .form-to{
            margin-left:-1px !important;
        }
	  	span{
      font-size:8px;
      }

      }
      .form-1{
          margin-left:-1px !important;
	
  
      }
      .add-btn{
      margin-top:1px !important;
    }

    }
    @media only screen and (max-width: 600px) {
  a{
  	font-size:12px;
  }  
   
    }
</style>

    <?php
    include 'navbar.php';
 
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE id=".$_GET['i']." ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    foreach($result as $row) {
      $subject_code = $row['subject_code'];
      $subject = $row['subject'];
      }
    ?>
    <div class="container mt-3 fader">
    
            
            <div class="card card2 bg-transparent float-left p-3 bg-dark" style="margin-left:-100px; margin-bottom:2000px;">
            <div class="card card-design1 p-1" style="width:8rem;">
                    <span class="text-center"><?php echo $row['subject_code'];?></span>
                </div>
                    <span class="text-center mb-4" style="font-size:12px;">Subject Code</span>
                   <a href="student-list.php?i=<?php echo $_GET['i'];?>" title="View Student List" type="button" class="border-0 bg-white"><div class="m-auto" style="background-color:#041662;border-radius:50px; width:50px; border:2px solid #041662;">
                    <i class="fas fa-users h3 pl-1 mt-2 text-white"></i></div>
                    <h6 class="text-center mt-1" style="font-size:12px !important; color:#041662 !important;">Student List</h6></a></button>   
            </div>
            <div class="form-to" style="margin-left:100px;">
            <button onclick="location.href='test-archive.php?i=<?php echo $_GET['i'];?>';" class="fader add-btn float-left mt-1" title="Archived tests" style="margin-left:3px !important; margin-right:3px;"><i class="fas fa-trash"></i></button>
            <form action="function.php?search-tests&i=<?php echo $_GET['i'];?>" method="POST" class="form-1 mt-1" style="border:1px solid silver;">
            <input type="search" name="test" style=" font-size:10px !important; width:40rem;" placeholder="Search test/grading/grade level/section...">
            <button type="submit">Search</button>
            </form>
          </div>

        </div>
    

        <div class="container fader d-flex">
   
    <div type="button" onclick="location.href='create-test.php?i=<?php echo $_GET['i'];?>';" class="card card-btn p-1 text-white w-100 mb-2" style="height:32px; border:3px solid #ebeced;">
    <h6><i class="fas fa-plus ml-1"></i> <span style="font-size:14px;">Create New</span> </h6>
    </div>
    </h6>
    </div>

    <?php 
       if(!isset($_GET['t']))
       {
        $pdo_statement = $pdo->prepare("SELECT *, t.id as id FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE c.id=".$_GET['i']." and t.status='Active' ");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
       }
       else{
        $pdo_statement = $pdo->prepare("SELECT *, t.id as id FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id LEFT JOIN tbl_teacher as te ON te.id = c.teacher_id WHERE  c.subject = '".$subject."' and c.grade_level LIKE '%".$_GET['t']."%' OR c.section LIKE '%".$_GET['t']."%' or t.type LIKE '%".$_GET['t']."%' or t.grading LIKE '%".$_GET['t']."%' AND c.subject = '".$subject."'");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll(); 
       }

  	if(!empty($result)) { 
      foreach($result as $row) {
        if($row['type']!='Summative Test'){
          $letter_code = 'Q';
        }
        else{
          $letter_code = 'S';
        }
        echo '
        
        <div class="container fader d-flex mt-2">
        <div class="card p-1 text-white" style="background-color:#041662; height:32px;">
            <span class="pl-1" style="border-radius:25px; font-size:12px;width:22px; border:2px solid white !important;">'.$letter_code.'</span>
        </div> 
        <div class="card p-1 ml-2 text-white w-100" style=" background-color:#041662; height:32px;">  
        <h6 style="font-size:14px; margin-top:3px; font-size:12px;"><div type="button" onClick=\'location.href="test-activity.php?i='.$row['id'].'&t='.$_GET['i'].'"\'><span class="ml-3" >'.$row['subject'].'</span> - <span>'.$row['type'].'</span> - <span>'.$row['grading'].'- <span>'.$row['item_no'].' Items</span></div>
         <div class="float-right" style="margin-top:-17px;">   
            <button type="button" data-toggle="dropdown" class="bg-transparent text-white border-0" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v" style="color:white !important;"></i>
        </button>
        <div class="dropdown-menu" style="font-size:12px;">
          <a class="dropdown-item" href="test-edit.php?id='.$row['id'].'&i='.$_GET['i'].'">Edit</a>
          <a class="dropdown-item" href="function.php?test-archive&id='.$row['id'].'&i='.$_GET['i'].'">Archive</a>
          <a class="dropdown-item" href="function.php?test-delete&id='.$row['id'].'&i='.$_GET['i'].'">Delete</a>
          
          </div>
        </div>
        </h6>
        </div>
        </div>
        ';

      }
    }

    ?>

   

    


  
    
  



   <div class="container footer-left">
   <div class="card card3 p-2">
        <span><?php echo $row['subject_code'];?></span>
      </div>
    <h6 class="pl-4 mt-1" style="font-size:11px;">Subject Code</h6>
   </div>

   <div class="container footer-right">
    <a href="student-list.php?i=<?php echo $_GET['i'];?>" type="button" class="m-auto" style="background-color:#041662;border-radius:50px; width:50px; border:2px solid #041662; margin-left:35px !important;">
      <i class="fas fa-users h3 pl-1 mt-2 text-white"></i></a>
    <h6 class="pl-4 mt-1" style="font-size:11px;">Student List</h6>
   </div>

</body>
</html>