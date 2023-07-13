<?php
session_start();
include '../config.php';
	$pdo_statement = $pdo->prepare("SELECT * FROM tbl_student WHERE username = '".$_SESSION['username']."'");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
  foreach($result as $row) {
  $student_id = $row['id'];
  }
include 'header.php';
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
       	span{
      font-size:15px;
    }
}
@media (max-width: 767px) {
        .card2 {
          display: none !important;
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
  

    }
    @media only screen and (max-width: 600px) {
    
   
    
    }
</style>
    
    <?php
    include 'navbar.php';
    include '../config.php';
   $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class as c LEFT JOIN tbl_test as t ON c.id = t.class_id LEFT JOIN tbl_student_test as st ON t.id = st.test_id WHERE c.id=".$_GET['i']." and st.student_id =".$student_id."");
   //  $pdo_statement = $pdo->prepare("SELECT * FROM tbl_student_test as st LEFT JOIN tbl_student_class as sc ON sc.student_id = s.id LEFT JOIN tbl_class as c ON c.id = sc.class_id LEFT JOIN tbl_test as t ON t.class_id = c.id WHERE sc.id=".$_GET['i']."  ");

	$pdo_statement->execute();
    $result = $pdo_statement->fetchAll();


  if(!empty($result)) { 
      foreach($result as $row) {
        if($row['type']!='Summative Test'){
          $letter_code = 'Q';
        }
        else{
          $letter_code = 'S';
        }
        echo '
        
        <div class="container fader d-flex mt-3">
        <div class="card p-1 text-white" style="background-color:#041662; height:32px;">
            <span class="pl-1" style="border-radius:25px; font-size:12px;width:22px; border:2px solid white !important;">'.$letter_code.'</span>
        </div> 
        <div class="card p-1 ml-2 text-white w-100" style=" background-color:#041662; height:32px;">  
        <h6 style=" margin-top:3px;"><div type="button" ><span class="ml-3" >'.$row['subject'].'</span> - <span>'.$row['type'].'</span> - <span>'.$row['grading'].'</span></div>
        <div class="float-right" style="margin-top:-20px;">
        <span class="bg-white p-1" style="color:#041662;" title="Test Score">'.$row['score'].'/10</span>
        <a href="../answer-sheet.php?i='.$_GET['i'].'" title="Print Answer Sheet and Questionnaire"  target="_blank"><span class="bg-white p-1" style="color:#041662;"><i class="fas fa-file-alt"></i></span></a>
            
        </div>
        </h6>
        </div>
        </div>
        ';

      }
    }

    ?>


   
    
</body>
</html>