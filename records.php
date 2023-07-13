<?php
session_start();
error_reporting(0);
include 'header.php';
?>

<body>
<style>
th,td,tr,table{
    border:1px solid gray;
    padding:2px;
}
th{
background: #041662 !important;
color:white !important;
}
tr:hover{
background-color:#041662 !important;
color:white;
}
.btn-theme:hover, .btn:hover{
  color:#041662 !important;
  background-color:white !important;
  border:1px solid #041662;
}
.btn-theme{
  color:white !important;
  background-color:#041662 !important;
}
</style>

    <?php
    include 'navbar.php';
    include 'config.php';
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test as t LEFT JOIN tbl_class as c ON t.class_id = c.id WHERE t.id=".$_GET['i']." ");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    foreach($result as $row) {
        $subject = $row['subject'];
        $type = $row['type'];
        $grading = $row['grading'];
 
      }
    ?>
    <div class="container mt-4 fader">
        <div class="text-center">
       <h5 class="theme-color"><?php echo $subject.' - '.$type.' - '.$grading;?></h5>
       </div>
    </div>
	<?php
    $pdo_statement1 = $pdo->prepare("SELECT * from tbl_test WHERE id=".$_GET['i']." ");
    $pdo_statement1->execute();
    $result1 = $pdo_statement1->fetchAll();
    foreach($result1 as $row1) {
    }
	if($row1['type']=='Summative Test'){
    ?>
    <div class="container mt-4 mb-3 text-center w-50 fader">
        <div class="row">
          <div class="col text-right mt-1">
            <a type="button" href="item-analysis.php?i=<?php echo $_GET['i'];?>" class="shadow p-2 text-white btn pl-3 pr-3 btn-theme" type="button"><span>ITEM ANALYSIS &nbsp</span><i class="h3 fa fa-area-chart"></i></a>
          </div>
          <div class="col mt-1 text-left">
          <a type="button" href="mean-mps-sd.php?i=<?php echo $_GET['i'];?>"  class="shadow p-2 text-white btn pl-3 pr-3 btn-theme" type="button"><span>MEAN, MPS & SD &nbsp</span><i class="h3 fa fa-calculator"></i></a>
          </div>
        </div>
    </div>
	<?php
    }
    ?>
    
    <div class="container card shadow-sm mt-3 mb-1 p-3 text-center fader" style="max-width:40rem !important;">
    <table class="w-100" >
    <thead>
`	<tr>
	  <th class="text-center theme-bg text-white">Student Name</th>
    <th class="text-center theme-bg text-white">Score</th>

    </tr>
    <?php	
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_student as s LEFT JOIN tbl_student_test as t ON t.student_id = s.id WHERE t.test_id = ".$_GET['i']."");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
    foreach($result as $row) {
   echo '    <tr>';
    ?>
    <tbody>

      <td><?php echo $row['lastname'].', '.$row['firstname']?></td>
      <td><?php echo $row['score']?></td>

    </tbody>
      <?php 
      echo '</tr>';
      }
    }
      ?>
       </table>
  </div>



</body>
</html>
