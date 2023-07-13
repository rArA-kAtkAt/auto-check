<?php
session_start();
//shell exec
include 'config.php';
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $date = date("Ymdhis");
 $name = $date . '.' . $ext;
 $location = './captures/' . $name;  

 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';



$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna WHERE test_id=".$_GET['i']." ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
$array = array();
foreach($result as $answers) {

    $ans = $answers['correct_answer'].',';
	$array[] = $answers['correct_answer'];
    //echo $ans;
  }

$correct_answer = implode(",",$array);


$pdo_statement1 = $pdo->prepare("SELECT * FROM tbl_test WHERE id='".$_GET['i']."' ");
$pdo_statement1->execute();
$result1 = $pdo_statement1->fetchAll();
  foreach($result1 as $items) {
      $item_no = $items['item_no'];
      //echo $item_no;
}

}

$exam_type = $item_no; //item no 10, 20, 40, 50
$imagepath =  $location; // image path location
$correct_answer = "'".$correct_answer."'"; // correct answer lists
// console.log($correct_answer)
$command = "-i ".$imagepath." -e ".$exam_type." -a '".$correct_answer."'";
$python = shell_exec("python3 python/OMRFinal.py ".$command."");
#echo $python;

$array = explode("-", $python);
        $name = "score";
		
  foreach ($array as $i){
        ${$name} = $i;
        $name = "correct_answer";
            }

$python2 = $python;
$_SESSION['str'] = $score;
$_SESSION['str2'] = $python;
//echo "<script>alert('$python');</script>";

if (strlen($score) == 4){
$error = 1;
}else{
header("location:student.php?i=".$_GET['i']."&t=".$_GET['t']."&img=".$location."");  
}

if($error == 1){
echo '<script>alert("Failed! Try another Image")</script>';
}

?>

