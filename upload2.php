<?php
session_start();
include 'config.php';

if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $date = date("Ymdhis");
 $name = $date . '.' . $ext;
 $location = './captures2/' . $name;  

 #move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
 

 if (move_uploaded_file($_FILES["file"]["tmp_name"], $location)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }
echo '<script type="text/javascript">alert("'.$msg.'");</script>';


if($_SESSION['item_no']==10){
$correct_answer = $_SESSION['q1'].','.$_SESSION['q2'].','.$_SESSION['q3'].','.$_SESSION['q4'].','.$_SESSION['q5'].','.$_SESSION['q6'].','.$_SESSION['q7'].','.$_SESSION['q8'].','.$_SESSION['q9'].','.$_SESSION['q10'].',';
}

if($_SESSION['item_no']==20){
 $correct_answer = $_SESSION['q1'].','.$_SESSION['q2'].','.$_SESSION['q3'].','.$_SESSION['q4'].','.$_SESSION['q5'].','.$_SESSION['q6'].','.$_SESSION['q7'].','.$_SESSION['q8'].','.$_SESSION['q9'].','.$_SESSION['q10'].','.$_SESSION['q11'].','.$_SESSION['q12'].','.$_SESSION['q13'].','.$_SESSION['q14'].','.$_SESSION['q15'].','.$_SESSION['q16'].','.$_SESSION['q17'].','.$_SESSION['q18'].','.$_SESSION['q19'].','.$_SESSION['q20'].',';
 }

if($_SESSION['item_no']==40){
$correct_answer = $_SESSION['q1'].','.$_SESSION['q2'].','.$_SESSION['q3'].','.$_SESSION['q4'].','.$_SESSION['q5'].','.$_SESSION['q6'].','.$_SESSION['q7'].','.$_SESSION['q8'].','.$_SESSION['q9'].','.$_SESSION['q10'].','.$_SESSION['q11'].','.$_SESSION['q12'].','.$_SESSION['q13'].','.$_SESSION['q14'].','.$_SESSION['q15'].','.$_SESSION['q16'].','.$_SESSION['q17'].','.$_SESSION['q18'].','.$_SESSION['q19'].','.$_SESSION['q20'].','.$_SESSION['q21'].','.$_SESSION['q22'].','.$_SESSION['q23'].','.$_SESSION['q24'].','.$_SESSION['q25'].','.$_SESSION['q26'].','.$_SESSION['q27'].','.$_SESSION['q28'].','.$_SESSION['q29'].','.$_SESSION['q30'].','.$_SESSION['q31'].','.$_SESSION['q32'].','.$_SESSION['q33'].','.$_SESSION['q34'].','.$_SESSION['q35'].','.$_SESSION['q36'].','.$_SESSION['q37'].','.$_SESSION['q38'].','.$_SESSION['q39'].','.$_SESSION['q40'].',';
}

if($_SESSION['item_no']==50){
$correct_answer = $_SESSION['q1'].','.$_SESSION['q2'].','.$_SESSION['q3'].','.$_SESSION['q4'].','.$_SESSION['q5'].','.$_SESSION['q6'].','.$_SESSION['q7'].','.$_SESSION['q8'].','.$_SESSION['q9'].','.$_SESSION['q10'].','.$_SESSION['q11'].','.$_SESSION['q12'].','.$_SESSION['q13'].','.$_SESSION['q14'].','.$_SESSION['q15'].','.$_SESSION['q16'].','.$_SESSION['q17'].','.$_SESSION['q18'].','.$_SESSION['q19'].','.$_SESSION['q20'].','.$_SESSION['q21'].','.$_SESSION['q22'].','.$_SESSION['q23'].','.$_SESSION['q24'].','.$_SESSION['q25'].','.$_SESSION['q26'].','.$_SESSION['q27'].','.$_SESSION['q28'].','.$_SESSION['q29'].','.$_SESSION['q30'].','.$_SESSION['q31'].','.$_SESSION['q32'].','.$_SESSION['q33'].','.$_SESSION['q34'].','.$_SESSION['q35'].','.$_SESSION['q36'].','.$_SESSION['q37'].','.$_SESSION['q38'].','.$_SESSION['q39'].','.$_SESSION['q40'].','.$_SESSION['q41'].','.$_SESSION['q42'].','.$_SESSION['q43'].','.$_SESSION['q44'].','.$_SESSION['q45'].','.$_SESSION['q46'].','.$_SESSION['q47'].','.$_SESSION['q48'].','.$_SESSION['q49'].','.$_SESSION['q50'].',';
}

//$python = shell_exec("python3 python/OMR.py -e ".$item_no." -i ".$imagepath."");
$item_no = $_SESSION['item_no'];
$exam_type = $item_no;
$imagepath =  $location;
$command = "-i ".$imagepath." -e ".$exam_type." -a '".$correct_answer."'";
$python = shell_exec("python3 python/OMRFinal.py ".$command."");

//$_SESSION['str3'] = $python;

$array = explode("-", $python);
        $name = "score";
		
  foreach ($array as $i){
        ${$name} = $i;
        $name = "correct_answer";
            }
if (strlen($score) == 4){
$error = 1;
}else{
echo '<div class="card p-5 container m-auto text-center text-dark" id="hide-me" style="z-index:3;"><h6> Score is: '.$score.'<h6>
<div class="m-auto text-center"><button onclick="hide()" class="btn btn-primary btn-sm">Clear</a></div>
<div>';
}

if($error == 1){
#echo '<script>alert("Failed! Try another Image")</script>';
echo '<script type="text/javascript">alert("'.$command.'");</script>';
}


//echo 'Image path:'.$location.' ['.$correct_answer.'] '.$item_no;
}

?>
<script>
function hide() {
  var x = document.getElementById("hide-me");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
