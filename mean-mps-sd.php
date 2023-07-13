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

</style>

    <?php
    include 'navbar.php';
    include 'config.php';

  	$pdo_statement1 = $pdo->prepare("SELECT SUM(correct_answer) as correct_answer FROM tbl_test_score WHERE test_id = ".$_GET['i']." GROUP BY test_id");
    $pdo_statement1->execute();
    $result1 = $pdo_statement1->fetchAll();
    foreach($result1 as $row1) {
    $corrects = $row1['correct_answer'];
    }

      $pdo_statement2 = $pdo->prepare("SELECT SUM(correct_answer) as correct_answer, item_no FROM tbl_test_score WHERE test_id = ".$_GET['i']." and SUM(correct_answer)!=0 GROUP BY item_no ");
    $pdo_statement2->execute();
    $result2 = $pdo_statement2->fetchAll();
    foreach($result2 as $row2) {
    echo $fx = $row2['item_no']*$row2['correct_answer'];
	
    }
	$sum = 0;
	  $pdo_statement2 = $pdo->prepare("SELECT SUM(correct_answer) as correct_answer, item_no FROM tbl_test_score WHERE test_id = ".$_GET['i']."  and correct_answer !=0 GROUP BY item_no");
    $pdo_statement2->execute();
    $result2 = $pdo_statement2->fetchAll();
    foreach($result2 as $row2) {
	$sum+= $row2['item_no']*$row2['correct_answer'];
    }

	

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

    <div class="container mt-4 text-center w-50 fader">
        <div class="row">
          <div class="col mt-3">
              <a type="button" href="mean-mps-sd.php?i=<?php echo $_GET['i'];?>"  class="shadow p-2 text-white btn pl-3 pr-3 btn-theme btn-block" type="button"><span>MEAN, MPS & SD &nbsp</span><i class="h3 fa fa-calculator"></i></a>
          </div>
   
        </div>
    </div>

    <div class="container card shadow-sm mt-3 mb-1 p-3 text-center fader" style="max-width:40rem !important;">
    <table class="w-50 m-auto">
    <thead>
	<tr>
	  <th class="text-center theme-bg text-white">Score</th>
    <th class="text-center theme-bg text-white">ƒ</th>
    <th class="text-center theme-bg text-white">ƒx</th>

    </tr>
    <?php	

        $test_num_statement = $pdo->prepare("Select item_no FROM tbl_test WHERE id = ".$_GET['i']." ");
    	$test_num_statement->execute();
    	$test_num = $test_num_statement->fetch();  
		$item_num = $test_num['item_no'];
	$new_fsum = 0;
	$new_fxsum = 0;
	$arr = array();
    for ($x = 0; $x <= $item_num; $x+=1) {
        $score_statement = $pdo->prepare("SELECT score  FROM tbl_student_test WHERE test_id = ".$_GET['i']." and score = ".$x."");
        $score_statement->execute();
    	$num_rows = $score_statement->rowCount();
    	
    echo '    <tr>';
    ?>
    <tbody>
      <td><?php echo $x;?></td>
      <td><?php echo $num_rows; ?></td>
      <td><?php echo $x*$num_rows; ?></td>

    </tbody>
      <?php 
      echo '
      </tr>';
    $new_sum+=$num_rows;
    $fx_total = $x*$num_rows;
    $new_fxsum+=$fx_total;
    if ($fx_total != 0){
    array_push($arr, $fx_total);
    }
	}
	$mean = round($new_fxsum/$new_sum,2);
    $mps = round(($mean/$item_num)*100,2);
    echo '
    <tr>
    <td>TOTAL</td>
    <td>'.$new_sum.'</td>
    <td>'.$new_fxsum.'</td>
    </tr>';

    echo '
    <tr>
    <td style="border-right:hidden !important;">MEAN</td>
    <td>'.$mean.'</td>
    <td></td>
    </tr>';

	function Stand_Deviation($arr)
    {
        $num_of_elements = count($arr);
          
        $variance = 0.0;
          
                // calculating mean using array_sum() method
        $average = array_sum($arr)/$num_of_elements;
          
        foreach($arr as $i)
        {
            // sum of squares of differences between 
                        // all numbers and means.
            $variance += pow(($i - $average), 2);
        }
          
        return (float)sqrt($variance/$num_of_elements);
    }
	$std = Stand_Deviation($arr);
    echo '
    <tr>
    <td style="border-right:hidden !important;">MPS</td>
    <td>'.$mps.'</td>
    <td></td>
    </tr>';

    echo '
    <tr>
    <td style="border-right:hidden !important;">STDEV</td>
    <td>'.$std.'</td>
    <td></td>
    </tr>';

      ?>
       </table>
  </div>



</body>
</html>
