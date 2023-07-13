<?php
session_start();
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
@media print {
  #printPageButton {
    display: none;
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
	 $pdo_statement_q = $pdo->prepare("SELECT question FROM `tbl_test_qna` WHERE `test_id` =".$_GET['i']." order by id");
    $pdo_statement_q->execute();
    $result_q = $pdo_statement_q->fetchAll();
    $questionnaire = array();
	$counter_q = 0;
    foreach($result_q as $row_q) {
    	++$counter_q;
        $question = $row_q['question'];
		array_push($questionnaire, array($counter_q,$question));

      }
     
    ?>
    <div class="container mt-4 fader">
        <div class="text-center">
       <h5 class="theme-color"><?php echo $subject.' - '.$type.' - '.$grading;?></h5>
       </div>
    </div>

    <div class="container mt-4 text-center w-50 fader">
        <div class="row">
          <div class="col mt-3">
            <a type="button" href="item-analysis.php?i=<?php echo $_GET['i'];?>" class="shadow p-2 text-white btn-theme btn-block text-decoration-none" type="button"><span>ITEM ANALYSIS &nbsp</span><i class="h3 fa fa-area-chart"></i></a>
          </div>
   
        </div>
    </div>

    <div class="container card shadow-sm mt-3 mb-1 p-3 text-center fader" style=" overflow: auto;">
    <table class="w-100" >
    <thead>
	<tr>
	  <th class="text-center theme-bg text-white">Item no.</th>
       <th class="text-center theme-bg text-white">Question</th>
    <th class="text-center theme-bg text-white">Correct Answer</th>
    <th class="text-center theme-bg text-white">Percent</th>
       <th class="text-center theme-bg text-white">Result</th>
    <th class="text-center theme-bg text-white">Remarks</th>

    </tr>
    <?php	
   $pdo_statement1 = $pdo->prepare("SELECT COUNT(student_id) as student_id FROM tbl_student_test WHERE test_id = ".$_GET['i']."");
    $pdo_statement1->execute();
    $result1 = $pdo_statement1->fetchAll();
    foreach($result1 as $row1) {
     $total_student = $row1['student_id'];
    }


       
    $pdo_statement = $pdo->prepare("SELECT item_no, SUM(correct_answer) as correct_answer FROM tbl_test_score WHERE test_id = ".$_GET['i']." GROUP BY item_no");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
    foreach($result as $row) {
   echo '    <tr>';
    $percentage = ($row['correct_answer']/$total_student)*100;
    $include = "";
    if ($percentage >= 0 && $percentage <=34){
      $include = "Include in next lesson";
    }else {
      $include = "Result achieved";
    }
    if($percentage >= 0 && $percentage <=4){
    	$remarks = 'NM';
    }elseif($percentage >= 5 && $percentage <=14){
    	$remarks = 'VLM';
    }elseif($percentage >= 15 && $percentage <=34){
    	$remarks = 'LM';
    }elseif($percentage >= 35 && $percentage <=65){
    	$remarks = 'AM';
    }elseif($percentage >= 66 && $percentage <=85){
    	$remarks = 'MTM';
    }elseif($percentage >= 86 && $percentage <=95){
    	$remarks = 'CAM';
    }elseif($percentage >= 96 && $percentage <=100){
    	$remarks = 'M';
    }else{
    	$remarks = 'NM';
    }
    ?>
    <tbody>
      <td><?php echo $row['item_no'];?></td>
   	  <td>
    	 <?php
			for($i = 0; $i < count($questionnaire); $i++) {
            	if ($row['item_no'] == $questionnaire[$i][0]){
                	echo $questionnaire[$i][1];
                }

      		}
    	?>
      </td>
      <td><?php echo $row['correct_answer']; ?></td>
      <td><?php echo round($percentage,2);?>%</td>
      <td><?php echo $remarks;?></td>
		<td><?php echo $include;?></td>
    </tbody>
      <?php 
      echo '</tr>';
      }
    }
      ?>
       </table>
  </div>
	      
       </table>
       <div class="" style="margin-top:5px; text-align:center">
        <button class="btn btn-success btn-sm" id="printPageButton" onClick="window.print();">Print</button>

       </div>


</body>
      
</html>
