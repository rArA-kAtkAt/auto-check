<?php
session_start();
include 'config.php';
//insert image and go to python
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $date = date("Ymdhis");
 $name = $date . '.' . $ext;
 $location = './captures/' . $name;  

 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
 
 




$pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna WHERE test_id=".$_GET['i']." ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
foreach($result as $answers) {
    $ans = $answers['correct_answer'].',';
    //echo $ans;
  }

$pdo_statement1 = $pdo->prepare("SELECT * FROM tbl_test WHERE id='".$_GET['i']."' ");
$pdo_statement1->execute();
$result1 = $pdo_statement1->fetchAll();
  foreach($result1 as $items) {
      $item_no = $items['item_no'];
      //echo $item_no;
}


$exam_type = $item_no;
$imagepath = $location;
$python = shell_exec("python python/OMR.py -e ".$item_no." -i ".$imagepath."");
#$python = shell_exec("python OMR.py -i Resources/10_ans.jpg -e 10");
echo $python;


$_SESSION['str'] = $python;
header("location:student.php?i=".$_GET['i']."");  

}

?>