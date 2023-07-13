<?php
include 'config.php';

if(isset($_GET['verify-email'])){
session_start();
$email_address = $_POST['email'];

$query = "SELECT * FROM tbl_teacher WHERE email_address = :email_address";  
$statement = $pdo->prepare($query);  
$statement->execute(  
     array(  
          'email_address'     =>     $email_address
     )  
);  
$count = $statement->rowCount();  
if($count > 0)  
{  
    $code = rand(10000000,99999999); 
     $_SESSION["email"] = $_POST["email"];  
     $code = rand(10000000,99999999); 
     $_SESSION['code'] = $code;
     $pdo_statement=$pdo->prepare("update tbl_teacher set code='" . $code . "' where email_address='" . $_POST["email"]."'");
     $result = $pdo_statement->execute();
     

    //     require_once(__DIR__ . '/vendor/autoload.php');
    //     $email = "renzroldan.emata@gmail.com";
    //     $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
    //     $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

    //     $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
    //         'subject' => 'AutoCheck Forgot Password',
    //         'sender' => ['name' => 'AutoCheck', 'email' => 'emataisaac@gmail.com'],
    //         'to' => [[ 'name' => 'User', 'email' => ''.$_POST["email"].'']],
    //         'htmlContent' => '<html><body><h4>Code: {{params.bodyMessage}}</h4></body></html>',
    //         'params' => ['bodyMessage' => ''.$code.'']
    //     ]);

    //     try {
    //         $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    //         if($result) {
    //             header("location:verify.php");  
        
    //          }
    //     // print_r($result);
    //     } catch (Exception $e) {
    //     // echo $e->getMessage(),PHP_EOL;
    //     if($result) {
    //        echo 'error sending email';
    
    //      }
    //     }

        $name = "Auto_Check"; 
        $subject = "AutoCheck Forgot Password";
        $body = "Please use this code to change your password <b>".$code."</b>" ;
		$email = $_POST["email"];
        $from = "buenaventuranationalhighschool@gmail.com";  // you mail
        $password = "jljaztbiiihvozlu";  // your mail password

        // Ignore from here

        require_once "phpmailer/PHPMailer.php";
        require_once "phpmailer/SMTP.php";
        require_once "phpmailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($email); 
        
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        
        if ($mail->send()) {
            header("location:verify.php"); 
        } else {
            echo 'error sending email';
        }

    
}  
else  
{  
    header("location:forgot-password.php?err12");  
}  

}
if(isset($_GET['verify-email-student'])){
    session_start();
    $email_address = $_POST['email'];
    
    $query = "SELECT * FROM tbl_student WHERE email_address = :email_address";  
    $statement = $pdo->prepare($query);  
    $statement->execute(  
         array(  
              'email_address'     =>     $email_address
         )  
    );  
    $count = $statement->rowCount();  
    if($count > 0)  
    {  
         $_SESSION["email"] = $_POST["email"];  
         $code = rand(10000000,99999999); 
         $_SESSION['code'] = $code;
         $pdo_statement=$pdo->prepare("update tbl_student set code='" . $code . "' where email_address='" . $_POST["email"]."'");
         $result = $pdo_statement->execute();
         
    
         $name = "Auto_Check"; 
        $subject = "AutoCheck Forgot Password";
        $body = "Please use this code to change your password <b>".$code."</b>" ;
		$email = $_POST["email"];
        $from = "buenaventuranationalhighschool@gmail.com";  // you mail
        $password = "jljaztbiiihvozlu";  // your mail password

        // Ignore from here

        require_once "phpmailer/PHPMailer.php";
        require_once "phpmailer/SMTP.php";
        require_once "phpmailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($email); 
        
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        
        if ($mail->send()) {
            header("location:student/verify.php");  
        } else {
            echo 'error sending email';
        }
    }  
    else  
    {  
        header("location:forgot-password.php?err12");  
    }  
    
    }

    if(isset($_GET['verify-code-student'])){
        session_start();
        $code = $_POST['code'];
        $query = "SELECT * FROM tbl_student WHERE email_address = :email_address and code = :code";  
        $statement = $pdo->prepare($query);  
        $statement->execute(  
             array(  
                  'email_address'     =>     $_SESSION['email'],
                  'code'     =>     $code
             )  
        );  
        $count = $statement->rowCount();  
        if($count > 0)  
        {  
            header("location:student/new-password.php?reset");  
        }
        else{
            header("location:student/forgot-password.php?err13");  
        }
    }

    if(isset($_GET['new-password-student'])){
        session_start();
        $pdo_statement=$pdo->prepare("update tbl_student set password='" . $_POST['password'] . "' where email_address='" . $_SESSION["email"]."'");
         $result = $pdo_statement->execute();
       if($result) 
       {
         session_destroy();
         header("location:student/login.php?resetted");  
       }
       else{
        echo 0;
       }
        
    }


if(isset($_GET['verify-code'])){
    session_start();
    $code = $_POST['code'];
    $query = "SELECT * FROM tbl_teacher WHERE email_address = :email_address and code = :code";  
    $statement = $pdo->prepare($query);  
    $statement->execute(  
         array(  
              'email_address'     =>     $_SESSION['email'],
              'code'     =>     $code
         )  
    );  
    $count = $statement->rowCount();  
    if($count > 0)  
    {  
        header("location:new-password.php?reset");  
    }
    else{
        header("location:forgot-password.php?err13");  
    }
}

if(isset($_GET['new-password'])){
    session_start();
    $pdo_statement=$pdo->prepare("update tbl_teacher set password='" . $_POST['password'] . "' where email_address='" . $_SESSION["email"]."'");
     $result = $pdo_statement->execute();
   if($result) 
   {
     session_destroy();
     header("location:login.php?resetted");  
   }
   else{
    echo 0;
   }
    
}

if(isset($_GET['save-score'])){
    session_start();
	//echo $_SESSION['str'];
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_student_test WHERE student_id='".$_GET['s']."' and test_id = '".$_GET['i']."'");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    if(!empty($result)) { 
    foreach($result as $row) {
        
        $array = explode("-", $_SESSION['str']);
        $name = "score";
            
        foreach ($array as $i){
        ${$name} = $i;
        $name = "correct_answer";
            }

        //update score
        $pdo_statement=$pdo->prepare("update tbl_student_test set student_id='" . $_GET['s'] . "', test_id='" . $_GET['i'] . "', score='" . $score . "'  where student_id = '".$_GET['s']."' and test_id='" . $_GET["i"]."'");
        $result = $pdo_statement->execute();
        if (($result) ){
        }
    	else{
        echo 'unable to update test score 1';
        }
     
       
        $newarr = explode(",", substr($correct_answer,1,-1));
            foreach ($newarr as $w){
                    $pdo_statement=$pdo->prepare("DELETE FROM tbl_test_score where test_id='" . $_GET['i']."' and student_id = '".$_GET['s']."'");
                    $result = $pdo_statement->execute();    
            }
        
        $array1 = explode("-", $_SESSION['str2']);
        $name1 = "score1";
                
            foreach ($array1 as $i1){
        ${$name1} = $i1;
        $name1 = "correct_answer2";
                }
        $newarr2 = explode(",", substr($correct_answer2,1,-2));    
    		$item_no=1;
            foreach ($newarr2 as $r){
       
                $sql1 = "INSERT INTO tbl_test_score (student_id, test_id, item_no, correct_answer) VALUES (:student_id, :test_id, :item_no, :correct_answer)";
                $pdo_statement = $pdo->prepare( $sql1 );
                $result = $pdo_statement->execute( array( ':student_id'=>$_GET['s'], ':test_id'=>$_GET['i'], ':item_no'=>$item_no, ':correct_answer'=>$r ) );
				$item_no++;
              }
           
            if(!empty($result)) {
                header('location:test-activity.php?i='.$_GET['i'].'&t='.$_GET['t'].'&score-added');
            }
        	else{
                header('location:test-activity.php?i='.$_GET['i'].'&t='.$_GET['t'].'&score-added');
                }
      }
    }
    else{
        //insert score $output as $_SESSION['str'];
    
        $array = explode("-", $_SESSION['str']);
        $name = "score";
            
        foreach ($array as $i){
        ${$name} = $i;
        $name = "correct_answer";
            }
        // insert score
        $sql = "INSERT INTO tbl_student_test (student_id, test_id, score) VALUES (:student_id, :test_id, :score)";
        $pdo_statement = $pdo->prepare( $sql );
        $result = $pdo_statement->execute( array( ':student_id'=>$_GET['s'], ':test_id'=>$_GET['i'], ':score'=>$score ) );
        if (!empty($result) ){
        }
         else{
               echo 'unable to insert test score 3';
         }

			
       $array3 = explode("-", $_SESSION['str2']);
        $name3 = "score3";
                
            foreach ($array3 as $i3){
        ${$name3} = $i3;
        $name3 = "correct_answer3";
                }
        $newarr3 = explode(",", substr($correct_answer3,1,-2));    
        $item_no3=1;
        foreach ($newarr3 as $w){
   
			
                $sql = "INSERT INTO tbl_test_score (student_id, test_id, item_no, correct_answer) VALUES (:student_id, :test_id, :item_no, :correct_answer)";
                $pdo_statement = $pdo->prepare( $sql );
                $result = $pdo_statement->execute( array( ':student_id'=>$_GET['s'], ':test_id'=>$_GET['i'], ':item_no'=>$item_no3, ':correct_answer'=>$w ) );
				$item_no3++;

            }
                   if(!empty($result)) {
                header('location:test-activity.php?i='.$_GET['i'].'&t='.$_GET['t'].'&score-added');
            }
        	else{
                header('location:test-activity.php?i='.$_GET['i'].'&t='.$_GET['t'].'&score-added');
                }

    }

}


if(isset($_GET['login-teacher']))
{
session_start();     
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM tbl_teacher WHERE username = :username AND password = :password";  
$statement = $pdo->prepare($query);  
$statement->execute(  
     array(  
          'username'     =>     $username,  
          'password'     =>     $password  
     )  
);  
$count = $statement->rowCount();  
if($count > 0)  
{  
     $_SESSION["username"] = $_POST["username"];  
     header("location:login.php?success");  

    
}  
else  
{  
    header("location:login.php?err");  
}  
}



if(isset($_GET['login-student']))
{
session_start();     
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM tbl_student WHERE username = :username AND password = :password";  
$statement = $pdo->prepare($query);  
$statement->execute(  
     array(  
          'username'     =>     $username,  
          'password'     =>     $password  
     )  
);  
$count = $statement->rowCount();  
if($count > 0)  
{  
     $_SESSION["username"] = $_POST["username"];  
     header("location:student/login.php?success");  

    
}  
else  
{  
    header("location:student/login.php?err");  
}  
}



if(isset($_GET['register-teacher'])){
    $username = $_POST['username'];
    $query = "SELECT * FROM tbl_teacher WHERE username = :username";  
    $statement = $pdo->prepare($query);  
    $statement->execute(  
         array(  
              'username'     =>     $username
         )  
    );  
    $count = $statement->rowCount();  
    if($count > 0)  
    {  
        header("location:create-account.php?err-2");  
    }  
    else  
    {  
     
        if( empty($_POST["tnc"]) ) { 
        
            header("location:create-account.php?err-10");  
         }
        else { 

        if($_POST['password']!=$_POST['confirm_password']){
    
            header("location:create-account.php?err-1");  
            }
            else{ 
            $sql = "INSERT INTO tbl_teacher (username, password, teacher_level, subject, firstname, middlename, lastname, email_address ) VALUES ( :username, :password, :teacher_level, :subject, :firstname, :middlename, :lastname, :email_address )";
            $pdo_statement = $pdo->prepare( $sql );
            $result = $pdo_statement->execute( array( ':teacher_level'=>$_POST['teacher_level'], ':subject'=>$_POST['subject'], ':username'=>$_POST['username'],':firstname'=>$_POST['firstname'],':middlename'=>$_POST['middlename'],':lastname'=>$_POST['lastname'],  ':password'=>$_POST['password'],':email_address'=>$_POST['email_address']) );
            if (!empty($result) ){
              header('location:create-account.php?success-create');
                }
            }
        }  
    }
  
}


if(isset($_GET['register-student'])){
    $username = $_POST['username'];
    $status = 'Active';
    $query = "SELECT * FROM tbl_student WHERE username = :username";  
    $statement = $pdo->prepare($query);  
    $statement->execute(  
         array(  
              'username'     =>     $username
         )  
    );  
    $count = $statement->rowCount();  
    if($count > 0)  
    {  
        header("location:student/create-account.php?err-2");  
    }  
     else  
    {  
     
        if( empty($_POST["tnc"]) ) { 
        
            header("location:student/create-account.php?err-10");  
         }
        else { 
        if($_POST['password']!=$_POST['confirm_password']){
    
            header("location:student/create-account.php?err-1");  
            }
            else{ 
            $sql = "INSERT INTO tbl_student (firstname, middlename, lastname, username, password, email_address, grade_level, section, status ) VALUES ( :firstname, :middlename, :lastname, :username, :password, :email_address, :grade_level, :section, :status)";
            $pdo_statement = $pdo->prepare( $sql );
            $result = $pdo_statement->execute( array( ':firstname'=>$_POST['firstname'], ':middlename'=>$_POST['middlename'], ':lastname'=>$_POST['lastname'], ':username'=>$_POST['username'],':password'=>$_POST['password'],':email_address'=>$_POST['email_address'],':grade_level'=>$_POST['grade_level'],  ':section'=>$_POST['section'],':status'=>$status) );
            if (!empty($result) ){
              header('location:student/create-account.php?success-create');
            }
        }
    }  

  
}}

if(isset($_GET['new-class'])){
$status="Active";
$code1 = substr($_POST['subject'], 0, 3);
$code2 = strtoupper($code1);
$code3 = rand(100,999);
$subject_code = $code2.''.$code3;
$sql = "INSERT INTO tbl_class ( teacher_id, subject, grade_level, section, status, subject_code) VALUES ( :teacher_id, :subject, :grade_level, :section, :status, :subject_code )";
		$pdo_statement = $pdo->prepare( $sql );
		$result = $pdo_statement->execute( array( ':teacher_id'=>$_POST['teacher_id'],':subject'=>$_POST['subject'],':grade_level'=>$_POST['grade_level'],':section'=>$_POST['section'], ':status'=>$status, ':subject_code'=>$subject_code) );
		if (!empty($result) ){
		  $_SESSION['queue_no'] = $queue_no;
		  header('location:class.php?class-success');
		}
    }

if(isset($_GET['class-edit'])){
        $pdo_statement=$pdo->prepare("update tbl_class set grade_level='" . $_POST['grade_level'] . "',section='" . $_POST['section'] . "' where id=" . $_GET["i"]);
        $result = $pdo_statement->execute();
        if($result) {
            header('location:class-edit.php?i='.$_GET['i'].'&success-edit');
        }
    }


if(isset($_GET['class-archive'])){
        $status = 'Inactive';
        $pdo_statement=$pdo->prepare("update tbl_class set status='" . $status . "' where id=" . $_GET["i"]);
        $result = $pdo_statement->execute();
        if($result) {
            header('location:class.php?success-archive');
        }
    }

if(isset($_GET['student-class-archive'])){
    $status = 'Inactive';
    $pdo_statement=$pdo->prepare("update tbl_student_class set status='" . $status. "' where id=" . $_GET["i"]);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:student/class.php?success-archive');
    }
}

if(isset($_GET['student-class-delete'])){
    $pdo_statement=$pdo->prepare("DELETE FROM tbl_student_class where id=" . $_GET['i']);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:student/class.php?success-delete');
    }
}

if(isset($_GET['student-class-restore'])){
    $status = 'Active';
    $pdo_statement=$pdo->prepare("update tbl_student_class set status='" . $status. "' where id=" . $_GET["i"]);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:student/class.php?success-restore');
    }
}

if(isset($_GET['test-archive'])){
        $status = 'Inactive';
        $pdo_statement=$pdo->prepare("update tbl_test set status='" . $status . "' where id=" . $_GET["id"]);
        $result = $pdo_statement->execute();
        if($result) {
            header('location:tests.php?i='.$_GET['i'].'&success-archive');
        }
    }

    
if(isset($_GET['test-restore'])){
    $status = 'Active';
    $pdo_statement=$pdo->prepare("update tbl_test set status='" . $status . "' where id=" . $_GET["id"]);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:tests.php?i='.$_GET['i'].'&success-restored');
    }
}


if(isset($_GET['test-delete'])){
		$pdo_statement=$pdo->prepare("DELETE FROM tbl_test where id=" . $_GET['id']);
		$result = $pdo_statement->execute();
		if($result) {
            header('location:tests.php?i='.$_GET['i'].'&success-delete');
		}
    }

 if(isset($_GET['test-edit'])){

        $pdo_statement=$pdo->prepare("update tbl_test set grading='".$_POST['grading']."',type='".$_POST['type']."' where id=" . $_POST["id"]);
        $result = $pdo_statement->execute();
        if($result) {
            header('location:test-edit.php?id='.$_POST['id'].'&i='.$_GET['i'].'&success-edit-test');
        }
    }
if(isset($_GET['class-restore'])){
        $status = 'Active';
        $pdo_statement=$pdo->prepare("update tbl_class set status='" . $status . "' where id=" . $_GET["i"]);
        $result = $pdo_statement->execute();
        if($result) {
            header('location:class-archived.php?i='.$_GET['i'].'&success-restore');
        }
    }

if(isset($_GET['class-delete'])){
		$pdo_statement=$pdo->prepare("DELETE FROM tbl_class where id=" . $_GET['i']);
		$result = $pdo_statement->execute();
		if($result) {
            header('location:class.php?success-delete');
		}
    }

if(isset($_GET['as10'])){
    session_start();
   $_SESSION['item_no'] = 10 ;
   $_SESSION['q1'] = $_POST['q1'] ;
   $_SESSION['q2'] = $_POST['q2'] ;
   $_SESSION['q3'] = $_POST['q3'] ;
   $_SESSION['q4'] = $_POST['q4'] ;
   $_SESSION['q5'] = $_POST['q5'] ;
   $_SESSION['q6'] = $_POST['q6'] ;
   $_SESSION['q7'] = $_POST['q7'] ;
   $_SESSION['q8'] = $_POST['q8'] ;
   $_SESSION['q9'] = $_POST['q9'] ;
   $_SESSION['q10'] = $_POST['q10'] ;
   header('location:quick-check.php?success-10');
}

if(isset($_GET['as20'])){
    session_start();
    $_SESSION['item_no'] = 20 ;
    $_SESSION['q1'] = $_POST['q1'] ;
    $_SESSION['q2'] = $_POST['q2'] ;
    $_SESSION['q3'] = $_POST['q3'] ;
    $_SESSION['q4'] = $_POST['q4'] ;
    $_SESSION['q5'] = $_POST['q5'] ;
    $_SESSION['q6'] = $_POST['q6'] ;
    $_SESSION['q7'] = $_POST['q7'] ;
    $_SESSION['q8'] = $_POST['q8'] ;
    $_SESSION['q9'] = $_POST['q9'] ;
    $_SESSION['q10'] = $_POST['q10'];
    $_SESSION['q11'] = $_POST['q11'];
    $_SESSION['q12'] = $_POST['q12'];
    $_SESSION['q13'] = $_POST['q13'];
    $_SESSION['q14'] = $_POST['q14'];
    $_SESSION['q15'] = $_POST['q15'];
    $_SESSION['q16'] = $_POST['q16'];
    $_SESSION['q17'] = $_POST['q17'];
    $_SESSION['q18'] = $_POST['q18'];
    $_SESSION['q19'] = $_POST['q19'];
    $_SESSION['q20'] = $_POST['q20'];
    header('location:quick-check.php?success-10');
 }
 

 if(isset($_GET['as40'])){
    session_start();
    $_SESSION['item_no'] = 40 ;
    $_SESSION['q1'] = $_POST['q1'] ;
    $_SESSION['q2'] = $_POST['q2'] ;
    $_SESSION['q3'] = $_POST['q3'] ;
    $_SESSION['q4'] = $_POST['q4'] ;
    $_SESSION['q5'] = $_POST['q5'] ;
    $_SESSION['q6'] = $_POST['q6'] ;
    $_SESSION['q7'] = $_POST['q7'] ;
    $_SESSION['q8'] = $_POST['q8'] ;
    $_SESSION['q9'] = $_POST['q9'] ;
    $_SESSION['q10'] = $_POST['q10'];
    $_SESSION['q11'] = $_POST['q11'];
    $_SESSION['q12'] = $_POST['q12'];
    $_SESSION['q13'] = $_POST['q13'];
    $_SESSION['q14'] = $_POST['q14'];
    $_SESSION['q15'] = $_POST['q15'];
    $_SESSION['q16'] = $_POST['q16'];
    $_SESSION['q17'] = $_POST['q17'];
    $_SESSION['q18'] = $_POST['q18'];
    $_SESSION['q19'] = $_POST['q19'];
    $_SESSION['q20'] = $_POST['q20'];
    $_SESSION['q21'] = $_POST['q21'];
    $_SESSION['q22'] = $_POST['q22'];
    $_SESSION['q23'] = $_POST['q23'];
    $_SESSION['q24'] = $_POST['q24'];
    $_SESSION['q25'] = $_POST['q25'];
    $_SESSION['q26'] = $_POST['q26'];
    $_SESSION['q27'] = $_POST['q27'];
    $_SESSION['q28'] = $_POST['q28'];
    $_SESSION['q29'] = $_POST['q29'];
    $_SESSION['q30'] = $_POST['q30'];
    $_SESSION['q31'] = $_POST['q31'];
    $_SESSION['q32'] = $_POST['q32'];
    $_SESSION['q33'] = $_POST['q33'];
    $_SESSION['q34'] = $_POST['q34'];
    $_SESSION['q35'] = $_POST['q35'];
    $_SESSION['q36'] = $_POST['q36'];
    $_SESSION['q37'] = $_POST['q37'];
    $_SESSION['q38'] = $_POST['q38'];
    $_SESSION['q39'] = $_POST['q39'];
    $_SESSION['q40'] = $_POST['q40'];
    header('location:quick-check.php?success-10');
 }

 if(isset($_GET['as50'])){
    session_start();
    $_SESSION['item_no'] = 50 ;
    $_SESSION['q1'] = $_POST['q1'] ;
    $_SESSION['q2'] = $_POST['q2'] ;
    $_SESSION['q3'] = $_POST['q3'] ;
    $_SESSION['q4'] = $_POST['q4'] ;
    $_SESSION['q5'] = $_POST['q5'] ;
    $_SESSION['q6'] = $_POST['q6'] ;
    $_SESSION['q7'] = $_POST['q7'] ;
    $_SESSION['q8'] = $_POST['q8'] ;
    $_SESSION['q9'] = $_POST['q9'] ;
    $_SESSION['q10'] = $_POST['q10'];
    $_SESSION['q11'] = $_POST['q11'];
    $_SESSION['q12'] = $_POST['q12'];
    $_SESSION['q13'] = $_POST['q13'];
    $_SESSION['q14'] = $_POST['q14'];
    $_SESSION['q15'] = $_POST['q15'];
    $_SESSION['q16'] = $_POST['q16'];
    $_SESSION['q17'] = $_POST['q17'];
    $_SESSION['q18'] = $_POST['q18'];
    $_SESSION['q19'] = $_POST['q19'];
    $_SESSION['q20'] = $_POST['q20'];
    $_SESSION['q21'] = $_POST['q21'];
    $_SESSION['q22'] = $_POST['q22'];
    $_SESSION['q23'] = $_POST['q23'];
    $_SESSION['q24'] = $_POST['q24'];
    $_SESSION['q25'] = $_POST['q25'];
    $_SESSION['q26'] = $_POST['q26'];
    $_SESSION['q27'] = $_POST['q27'];
    $_SESSION['q28'] = $_POST['q28'];
    $_SESSION['q29'] = $_POST['q29'];
    $_SESSION['q30'] = $_POST['q30'];
    $_SESSION['q31'] = $_POST['q31'];
    $_SESSION['q32'] = $_POST['q32'];
    $_SESSION['q33'] = $_POST['q33'];
    $_SESSION['q34'] = $_POST['q34'];
    $_SESSION['q35'] = $_POST['q35'];
    $_SESSION['q36'] = $_POST['q36'];
    $_SESSION['q37'] = $_POST['q37'];
    $_SESSION['q38'] = $_POST['q38'];
    $_SESSION['q39'] = $_POST['q39'];
    $_SESSION['q40'] = $_POST['q40'];
    $_SESSION['q41'] = $_POST['q41'];
    $_SESSION['q42'] = $_POST['q42'];
    $_SESSION['q43'] = $_POST['q43'];
    $_SESSION['q44'] = $_POST['q44'];
    $_SESSION['q45'] = $_POST['q45'];
    $_SESSION['q46'] = $_POST['q46'];
    $_SESSION['q47'] = $_POST['q47'];
    $_SESSION['q48'] = $_POST['q48'];
    $_SESSION['q49'] = $_POST['q49'];
    $_SESSION['q50'] = $_POST['q50'];
    header('location:quick-check.php?success-10');
 }


if(isset($_GET['search-student'])){
		$student = $_POST['student'];
            header('location:student-list.php?i='.$_GET['i'].'&s='.$student.'');
}

if(isset($_GET['approvedelete'])){
		$subjectId = $_GET['i'];
        $studentId = $_GET['si'];
        $type = $_GET['type'];

        $sql = "";
        if ($type == 1){
            $sql = "UPDATE tbl_student_class SET `status`= 'Active' where class_id = '$subjectId' and student_id = '$studentId'";
        }else{
            $sql = "DELETE FROM tbl_student_class where class_id = '$subjectId' and student_id = '$studentId'";
        }
        
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();
        
        header('location:student-list.php?i='.$_GET['i']);
}


if(isset($_GET['search-class'])){
		$activity_code = $_POST['activity_code'];
            header('location:class.php?a='.$activity_code.'');
}
if(isset($_GET['search-tests'])){
	
            header('location:tests.php?t='.$_POST['test'].'&i='.$_GET['i'].'');
}
if(isset($_GET['search-class2'])){
    $activity_code = $_POST['activity_code'];
        header('location:class-archived.php?a='.$activity_code.'');
}

if(isset($_GET['search-class-add'])){


$query = "SELECT * FROM tbl_student_class WHERE subject_code = :subject_code AND student_id = :student_id";  
$statement = $pdo->prepare($query);  
$statement->execute(  
     array(  
          'subject_code'     =>     $_POST['subject_code'],  
          'student_id'     =>      $_POST['student_id'] 
     )  
);  
$count = $statement->rowCount();  
if($count > 0)  
{  
    header("location:student/class.php?exist");  
}  
else  
{  
    $pdo_statement = $pdo->prepare("SELECT * FROM tbl_class WHERE subject_code = '".$_POST['subject_code']."'");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
	if(!empty($result)) { 
		foreach($result as $row) {
            $id = $row['id'];
            $status = 'Pending';
            $sql = "INSERT INTO tbl_student_class (student_id, class_id, subject_code, status) VALUES (:student_id, :class_id, :subject_code, :status)";
            $pdo_statement = $pdo->prepare( $sql );
            $result = $pdo_statement->execute( array( ':student_id'=>$_POST['student_id'],':class_id'=>$id,':subject_code'=>$_POST['subject_code'],':status'=>$status) );
          
            header("location:student/class.php?added");  
        }
 
}
else{
    header("location:student/class.php?sc-error");  
}  
}
}

if(isset($_GET['new-test'])){
    $item_no = $_POST['item_no'];
    $status ='Active';
    $sql = "INSERT INTO tbl_test ( class_id, grading, item_no, type, status) VALUES (:class_id, :grading, :item_no, :type, :status )";
            $pdo_statement = $pdo->prepare( $sql );
            $result = $pdo_statement->execute( array( ':class_id'=>$_GET['i'],':grading'=>$_POST['grading'],':item_no'=>$_POST['item_no'],':type'=>$_POST['type'],':status'=>$status) );
            $id = $pdo->lastInsertId();
            if (!empty($result) ){
                if($item_no == 10)
                {
                    header('location:test10.php?i='.$id.'');
                }
                if($item_no == 20)
                {
                    header('location:test20.php?i='.$id.'');
                }
                if($item_no == 40)
                {
                    header('location:test40.php?i='.$id.'');
                }
                if($item_no == 50)
                {
                    header('location:test50.php?i='.$id.'');
                }
            	
            }
        }
    

if(isset($_GET['test-qna50']))
{
        $q1 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q1 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q1'],':oa'=>$_POST['q1a'],':ob'=>$_POST['q1b'],':oc'=>$_POST['q1c'],':od'=>$_POST['q1d'],':correct_answer'=>$_POST['q1ans']) );

        $q2 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q2 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q2'],':oa'=>$_POST['q2a'],':ob'=>$_POST['q2b'],':oc'=>$_POST['q2c'],':od'=>$_POST['q2d'],':correct_answer'=>$_POST['q2ans']) );

        $q3 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q3 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q3'],':oa'=>$_POST['q3a'],':ob'=>$_POST['q3b'],':oc'=>$_POST['q3c'],':od'=>$_POST['q3d'],':correct_answer'=>$_POST['q3ans']) );
        
        $q4 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q4 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q4'],':oa'=>$_POST['q4a'],':ob'=>$_POST['q4b'],':oc'=>$_POST['q4c'],':od'=>$_POST['q4d'],':correct_answer'=>$_POST['q4ans']) );
    
        $q5 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q5 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q5'],':oa'=>$_POST['q5a'],':ob'=>$_POST['q5b'],':oc'=>$_POST['q5c'],':od'=>$_POST['q5d'],':correct_answer'=>$_POST['q5ans']) );

        $q6 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q6 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q6'],':oa'=>$_POST['q6a'],':ob'=>$_POST['q6b'],':oc'=>$_POST['q6c'],':od'=>$_POST['q6d'],':correct_answer'=>$_POST['q6ans']) );

        $q7 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q7 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q7'],':oa'=>$_POST['q7a'],':ob'=>$_POST['q7b'],':oc'=>$_POST['q7c'],':od'=>$_POST['q7d'],':correct_answer'=>$_POST['q7ans']) );

        $q8 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q8 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q8'],':oa'=>$_POST['q8a'],':ob'=>$_POST['q8b'],':oc'=>$_POST['q8c'],':od'=>$_POST['q8d'],':correct_answer'=>$_POST['q8ans']) );

        $q9 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q9 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q9'],':oa'=>$_POST['q9a'],':ob'=>$_POST['q9b'],':oc'=>$_POST['q9c'],':od'=>$_POST['q9d'],':correct_answer'=>$_POST['q9ans']) );

        $q10 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q10 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q10'],':oa'=>$_POST['q10a'],':ob'=>$_POST['q10b'],':oc'=>$_POST['q10c'],':od'=>$_POST['q10d'],':correct_answer'=>$_POST['q10ans']) );

        $q11 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q11 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q11'],':oa'=>$_POST['q11a'],':ob'=>$_POST['q11b'],':oc'=>$_POST['q11c'],':od'=>$_POST['q11d'],':correct_answer'=>$_POST['q11ans']) );

        $q12 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q12 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q12'],':oa'=>$_POST['q12a'],':ob'=>$_POST['q12b'],':oc'=>$_POST['q12c'],':od'=>$_POST['q12d'],':correct_answer'=>$_POST['q12ans']) );

        $q13 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q13 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q13'],':oa'=>$_POST['q13a'],':ob'=>$_POST['q13b'],':oc'=>$_POST['q13c'],':od'=>$_POST['q13d'],':correct_answer'=>$_POST['q13ans']) );

        $q14 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q14 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q14'],':oa'=>$_POST['q14a'],':ob'=>$_POST['q14b'],':oc'=>$_POST['q14c'],':od'=>$_POST['q14d'],':correct_answer'=>$_POST['q14ans']) );

        $q15 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q15 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q15'],':oa'=>$_POST['q15a'],':ob'=>$_POST['q15b'],':oc'=>$_POST['q15c'],':od'=>$_POST['q15d'],':correct_answer'=>$_POST['q15ans']) );

        $q16 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q16 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q16'],':oa'=>$_POST['q16a'],':ob'=>$_POST['q16b'],':oc'=>$_POST['q16c'],':od'=>$_POST['q16d'],':correct_answer'=>$_POST['q16ans']) );

        $q17 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q17 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q17'],':oa'=>$_POST['q17a'],':ob'=>$_POST['q17b'],':oc'=>$_POST['q17c'],':od'=>$_POST['q17d'],':correct_answer'=>$_POST['q17ans']) );

        $q18 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q18 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q18'],':oa'=>$_POST['q18a'],':ob'=>$_POST['q18b'],':oc'=>$_POST['q18c'],':od'=>$_POST['q18d'],':correct_answer'=>$_POST['q18ans']) );

        $q19 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q19 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q19'],':oa'=>$_POST['q19a'],':ob'=>$_POST['q19b'],':oc'=>$_POST['q19c'],':od'=>$_POST['q19d'],':correct_answer'=>$_POST['q19ans']) );

        $q20 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q20 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q20'],':oa'=>$_POST['q20a'],':ob'=>$_POST['q20b'],':oc'=>$_POST['q20c'],':od'=>$_POST['q20d'],':correct_answer'=>$_POST['q20ans']) );

        $q21 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q21 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q21'],':oa'=>$_POST['q21a'],':ob'=>$_POST['q21b'],':oc'=>$_POST['q21c'],':od'=>$_POST['q21d'],':correct_answer'=>$_POST['q21ans']) );

        $q22 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q22 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q22'],':oa'=>$_POST['q22a'],':ob'=>$_POST['q22b'],':oc'=>$_POST['q22c'],':od'=>$_POST['q22d'],':correct_answer'=>$_POST['q22ans']) );

        $q23 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q23 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q23'],':oa'=>$_POST['q23a'],':ob'=>$_POST['q23b'],':oc'=>$_POST['q23c'],':od'=>$_POST['q23d'],':correct_answer'=>$_POST['q22ans']) );

        $q24 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q24 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q24'],':oa'=>$_POST['q24a'],':ob'=>$_POST['q24b'],':oc'=>$_POST['q24c'],':od'=>$_POST['q24d'],':correct_answer'=>$_POST['q24ans']) );

        $q25 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q25 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q25'],':oa'=>$_POST['q25a'],':ob'=>$_POST['q25b'],':oc'=>$_POST['q25c'],':od'=>$_POST['q25d'],':correct_answer'=>$_POST['q25ans']) );

        $q26 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q26 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q26'],':oa'=>$_POST['q26a'],':ob'=>$_POST['q26b'],':oc'=>$_POST['q26c'],':od'=>$_POST['q26d'],':correct_answer'=>$_POST['q26ans']) );

        $q27 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q27 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q27'],':oa'=>$_POST['q27a'],':ob'=>$_POST['q27b'],':oc'=>$_POST['q27c'],':od'=>$_POST['q27d'],':correct_answer'=>$_POST['q27ans']) );

        $q28 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q28 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q28'],':oa'=>$_POST['q28a'],':ob'=>$_POST['q28b'],':oc'=>$_POST['q28c'],':od'=>$_POST['q28d'],':correct_answer'=>$_POST['q28ans']) );

        $q29 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q29 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q29'],':oa'=>$_POST['q29a'],':ob'=>$_POST['q29b'],':oc'=>$_POST['q29c'],':od'=>$_POST['q29d'],':correct_answer'=>$_POST['q29ans']) );

        $q30 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q30 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q30'],':oa'=>$_POST['q30a'],':ob'=>$_POST['q30b'],':oc'=>$_POST['q30c'],':od'=>$_POST['q30d'],':correct_answer'=>$_POST['q30ans']) );

        $q31 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q31 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q31'],':oa'=>$_POST['q31a'],':ob'=>$_POST['q31b'],':oc'=>$_POST['q31c'],':od'=>$_POST['q31d'],':correct_answer'=>$_POST['q31ans']) );

        $q32 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q32 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q32'],':oa'=>$_POST['q32a'],':ob'=>$_POST['q32b'],':oc'=>$_POST['q32c'],':od'=>$_POST['q32d'],':correct_answer'=>$_POST['q32ans']) );

        $q33 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q33 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q33'],':oa'=>$_POST['q33a'],':ob'=>$_POST['q33b'],':oc'=>$_POST['q33c'],':od'=>$_POST['q33d'],':correct_answer'=>$_POST['q33ans']) );

        $q34 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q34 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q34'],':oa'=>$_POST['q34a'],':ob'=>$_POST['q34b'],':oc'=>$_POST['q34c'],':od'=>$_POST['q34d'],':correct_answer'=>$_POST['q34ans']) );

        $q35 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q35 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q35'],':oa'=>$_POST['q35a'],':ob'=>$_POST['q35b'],':oc'=>$_POST['q35c'],':od'=>$_POST['q35d'],':correct_answer'=>$_POST['q35ans']) );

        $q36 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q36 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q36'],':oa'=>$_POST['q36a'],':ob'=>$_POST['q36b'],':oc'=>$_POST['q36c'],':od'=>$_POST['q36d'],':correct_answer'=>$_POST['q36ans']) );

        $q37 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q37 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q37'],':oa'=>$_POST['q37a'],':ob'=>$_POST['q37b'],':oc'=>$_POST['q37c'],':od'=>$_POST['q37d'],':correct_answer'=>$_POST['q37ans']) );

        $q38 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q38 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q38'],':oa'=>$_POST['q38a'],':ob'=>$_POST['q38b'],':oc'=>$_POST['q38c'],':od'=>$_POST['q38d'],':correct_answer'=>$_POST['q38ans']) );

        $q39 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q39 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q39'],':oa'=>$_POST['q39a'],':ob'=>$_POST['q39b'],':oc'=>$_POST['q39c'],':od'=>$_POST['q39d'],':correct_answer'=>$_POST['q39ans']) );

        $q40 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q40 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q40'],':oa'=>$_POST['q40a'],':ob'=>$_POST['q40b'],':oc'=>$_POST['q40c'],':od'=>$_POST['q40d'],':correct_answer'=>$_POST['q40ans']) );

        $q41 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q41 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q41'],':oa'=>$_POST['q41a'],':ob'=>$_POST['q41b'],':oc'=>$_POST['q41c'],':od'=>$_POST['q41d'],':correct_answer'=>$_POST['q41ans']) );

        $q42 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q42 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q42'],':oa'=>$_POST['q42a'],':ob'=>$_POST['q42b'],':oc'=>$_POST['q42c'],':od'=>$_POST['q42d'],':correct_answer'=>$_POST['q42ans']) );

        $q43 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q43 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q43'],':oa'=>$_POST['q43a'],':ob'=>$_POST['q43b'],':oc'=>$_POST['q43c'],':od'=>$_POST['q43d'],':correct_answer'=>$_POST['q43ans']) );

        $q44 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q44 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q44'],':oa'=>$_POST['q44a'],':ob'=>$_POST['q44b'],':oc'=>$_POST['q44c'],':od'=>$_POST['q44d'],':correct_answer'=>$_POST['q44ans']) );

        $q45 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q45 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q45'],':oa'=>$_POST['q45a'],':ob'=>$_POST['q45b'],':oc'=>$_POST['q45c'],':od'=>$_POST['q45d'],':correct_answer'=>$_POST['q45ans']) );

        $q46 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q46 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q46'],':oa'=>$_POST['q46a'],':ob'=>$_POST['q46b'],':oc'=>$_POST['q46c'],':od'=>$_POST['q46d'],':correct_answer'=>$_POST['q46ans']) );

        $q47 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q47 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q47'],':oa'=>$_POST['q47a'],':ob'=>$_POST['q47b'],':oc'=>$_POST['q47c'],':od'=>$_POST['q47d'],':correct_answer'=>$_POST['q47ans']) );

        $q48 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q48 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q48'],':oa'=>$_POST['q48a'],':ob'=>$_POST['q48b'],':oc'=>$_POST['q48c'],':od'=>$_POST['q48d'],':correct_answer'=>$_POST['q48ans']) );

        $q49 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q49 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q49'],':oa'=>$_POST['q49a'],':ob'=>$_POST['q49b'],':oc'=>$_POST['q49c'],':od'=>$_POST['q49d'],':correct_answer'=>$_POST['q49ans']) );

        $q50 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
        $pdo_statement = $pdo->prepare( $q50 );
        $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q50'],':oa'=>$_POST['q50a'],':ob'=>$_POST['q50b'],':oc'=>$_POST['q50c'],':od'=>$_POST['q50d'],':correct_answer'=>$_POST['q50ans']) );


        
        if (!empty($result) ){
            header('location:test-activity.php?i='.$_POST['test_id'].'&success-test#n');
        }
    }

if(isset($_GET['test-qna40']))
    {
            $q1 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q1 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q1'],':oa'=>$_POST['q1a'],':ob'=>$_POST['q1b'],':oc'=>$_POST['q1c'],':od'=>$_POST['q1d'],':correct_answer'=>$_POST['q1ans']) );

            $q2 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q2 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q2'],':oa'=>$_POST['q2a'],':ob'=>$_POST['q2b'],':oc'=>$_POST['q2c'],':od'=>$_POST['q2d'],':correct_answer'=>$_POST['q2ans']) );

            $q3 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q3 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q3'],':oa'=>$_POST['q3a'],':ob'=>$_POST['q3b'],':oc'=>$_POST['q3c'],':od'=>$_POST['q3d'],':correct_answer'=>$_POST['q3ans']) );
            
            $q4 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q4 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q4'],':oa'=>$_POST['q4a'],':ob'=>$_POST['q4b'],':oc'=>$_POST['q4c'],':od'=>$_POST['q4d'],':correct_answer'=>$_POST['q4ans']) );
        
            $q5 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q5 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q5'],':oa'=>$_POST['q5a'],':ob'=>$_POST['q5b'],':oc'=>$_POST['q5c'],':od'=>$_POST['q5d'],':correct_answer'=>$_POST['q5ans']) );

            $q6 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q6 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q6'],':oa'=>$_POST['q6a'],':ob'=>$_POST['q6b'],':oc'=>$_POST['q6c'],':od'=>$_POST['q6d'],':correct_answer'=>$_POST['q6ans']) );

            $q7 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q7 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q7'],':oa'=>$_POST['q7a'],':ob'=>$_POST['q7b'],':oc'=>$_POST['q7c'],':od'=>$_POST['q7d'],':correct_answer'=>$_POST['q7ans']) );

            $q8 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q8 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q8'],':oa'=>$_POST['q8a'],':ob'=>$_POST['q8b'],':oc'=>$_POST['q8c'],':od'=>$_POST['q8d'],':correct_answer'=>$_POST['q8ans']) );

            $q9 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q9 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q9'],':oa'=>$_POST['q9a'],':ob'=>$_POST['q9b'],':oc'=>$_POST['q9c'],':od'=>$_POST['q9d'],':correct_answer'=>$_POST['q9ans']) );

            $q10 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q10 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q10'],':oa'=>$_POST['q10a'],':ob'=>$_POST['q10b'],':oc'=>$_POST['q10c'],':od'=>$_POST['q10d'],':correct_answer'=>$_POST['q10ans']) );

            $q11 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q11 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q11'],':oa'=>$_POST['q11a'],':ob'=>$_POST['q11b'],':oc'=>$_POST['q11c'],':od'=>$_POST['q11d'],':correct_answer'=>$_POST['q11ans']) );

            $q12 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q12 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q12'],':oa'=>$_POST['q12a'],':ob'=>$_POST['q12b'],':oc'=>$_POST['q12c'],':od'=>$_POST['q12d'],':correct_answer'=>$_POST['q12ans']) );

            $q13 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q13 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q13'],':oa'=>$_POST['q13a'],':ob'=>$_POST['q13b'],':oc'=>$_POST['q13c'],':od'=>$_POST['q13d'],':correct_answer'=>$_POST['q13ans']) );

            $q14 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q14 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q14'],':oa'=>$_POST['q14a'],':ob'=>$_POST['q14b'],':oc'=>$_POST['q14c'],':od'=>$_POST['q14d'],':correct_answer'=>$_POST['q14ans']) );

            $q15 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q15 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q15'],':oa'=>$_POST['q15a'],':ob'=>$_POST['q15b'],':oc'=>$_POST['q15c'],':od'=>$_POST['q15d'],':correct_answer'=>$_POST['q15ans']) );

            $q16 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q16 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q16'],':oa'=>$_POST['q16a'],':ob'=>$_POST['q16b'],':oc'=>$_POST['q16c'],':od'=>$_POST['q16d'],':correct_answer'=>$_POST['q16ans']) );

            $q17 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q17 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q17'],':oa'=>$_POST['q17a'],':ob'=>$_POST['q17b'],':oc'=>$_POST['q17c'],':od'=>$_POST['q17d'],':correct_answer'=>$_POST['q17ans']) );

            $q18 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q18 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q18'],':oa'=>$_POST['q18a'],':ob'=>$_POST['q18b'],':oc'=>$_POST['q18c'],':od'=>$_POST['q18d'],':correct_answer'=>$_POST['q18ans']) );

            $q19 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q19 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q19'],':oa'=>$_POST['q19a'],':ob'=>$_POST['q19b'],':oc'=>$_POST['q19c'],':od'=>$_POST['q19d'],':correct_answer'=>$_POST['q19ans']) );

            $q20 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q20 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q20'],':oa'=>$_POST['q20a'],':ob'=>$_POST['q20b'],':oc'=>$_POST['q20c'],':od'=>$_POST['q20d'],':correct_answer'=>$_POST['q20ans']) );

            $q21 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q21 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q21'],':oa'=>$_POST['q21a'],':ob'=>$_POST['q21b'],':oc'=>$_POST['q21c'],':od'=>$_POST['q21d'],':correct_answer'=>$_POST['q21ans']) );

            $q22 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q22 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q22'],':oa'=>$_POST['q22a'],':ob'=>$_POST['q22b'],':oc'=>$_POST['q22c'],':od'=>$_POST['q22d'],':correct_answer'=>$_POST['q22ans']) );

            $q23 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q23 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q23'],':oa'=>$_POST['q23a'],':ob'=>$_POST['q23b'],':oc'=>$_POST['q23c'],':od'=>$_POST['q23d'],':correct_answer'=>$_POST['q22ans']) );

            $q24 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q24 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q24'],':oa'=>$_POST['q24a'],':ob'=>$_POST['q24b'],':oc'=>$_POST['q24c'],':od'=>$_POST['q24d'],':correct_answer'=>$_POST['q24ans']) );

            $q25 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q25 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q25'],':oa'=>$_POST['q25a'],':ob'=>$_POST['q25b'],':oc'=>$_POST['q25c'],':od'=>$_POST['q25d'],':correct_answer'=>$_POST['q25ans']) );

            $q26 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q26 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q26'],':oa'=>$_POST['q26a'],':ob'=>$_POST['q26b'],':oc'=>$_POST['q26c'],':od'=>$_POST['q26d'],':correct_answer'=>$_POST['q26ans']) );

            $q27 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q27 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q27'],':oa'=>$_POST['q27a'],':ob'=>$_POST['q27b'],':oc'=>$_POST['q27c'],':od'=>$_POST['q27d'],':correct_answer'=>$_POST['q27ans']) );

            $q28 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q28 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q28'],':oa'=>$_POST['q28a'],':ob'=>$_POST['q28b'],':oc'=>$_POST['q28c'],':od'=>$_POST['q28d'],':correct_answer'=>$_POST['q28ans']) );

            $q29 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q29 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q29'],':oa'=>$_POST['q29a'],':ob'=>$_POST['q29b'],':oc'=>$_POST['q29c'],':od'=>$_POST['q29d'],':correct_answer'=>$_POST['q29ans']) );

            $q30 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q30 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q30'],':oa'=>$_POST['q30a'],':ob'=>$_POST['q30b'],':oc'=>$_POST['q30c'],':od'=>$_POST['q30d'],':correct_answer'=>$_POST['q30ans']) );

            $q31 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q31 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q31'],':oa'=>$_POST['q31a'],':ob'=>$_POST['q31b'],':oc'=>$_POST['q31c'],':od'=>$_POST['q31d'],':correct_answer'=>$_POST['q31ans']) );

            $q32 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q32 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q32'],':oa'=>$_POST['q32a'],':ob'=>$_POST['q32b'],':oc'=>$_POST['q32c'],':od'=>$_POST['q32d'],':correct_answer'=>$_POST['q32ans']) );

            $q33 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q33 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q33'],':oa'=>$_POST['q33a'],':ob'=>$_POST['q33b'],':oc'=>$_POST['q33c'],':od'=>$_POST['q33d'],':correct_answer'=>$_POST['q33ans']) );

            $q34 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q34 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q34'],':oa'=>$_POST['q34a'],':ob'=>$_POST['q34b'],':oc'=>$_POST['q34c'],':od'=>$_POST['q34d'],':correct_answer'=>$_POST['q34ans']) );

            $q35 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q35 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q35'],':oa'=>$_POST['q35a'],':ob'=>$_POST['q35b'],':oc'=>$_POST['q35c'],':od'=>$_POST['q35d'],':correct_answer'=>$_POST['q35ans']) );

            $q36 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q36 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q36'],':oa'=>$_POST['q36a'],':ob'=>$_POST['q36b'],':oc'=>$_POST['q36c'],':od'=>$_POST['q36d'],':correct_answer'=>$_POST['q36ans']) );

            $q37 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q37 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q37'],':oa'=>$_POST['q37a'],':ob'=>$_POST['q37b'],':oc'=>$_POST['q37c'],':od'=>$_POST['q37d'],':correct_answer'=>$_POST['q37ans']) );

            $q38 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q38 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q38'],':oa'=>$_POST['q38a'],':ob'=>$_POST['q38b'],':oc'=>$_POST['q38c'],':od'=>$_POST['q38d'],':correct_answer'=>$_POST['q38ans']) );

            $q39 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q39 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q39'],':oa'=>$_POST['q39a'],':ob'=>$_POST['q39b'],':oc'=>$_POST['q39c'],':od'=>$_POST['q39d'],':correct_answer'=>$_POST['q39ans']) );

            $q40 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q40 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q40'],':oa'=>$_POST['q40a'],':ob'=>$_POST['q40b'],':oc'=>$_POST['q40c'],':od'=>$_POST['q40d'],':correct_answer'=>$_POST['q40ans']) );

            
            if (!empty($result) ){
                header('location:test-activity.php?i='.$_POST['test_id'].'&success-test#n');
            }
        }





if(isset($_GET['test-qna20']))
{
            $q1 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q1 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q1'],':oa'=>$_POST['q1a'],':ob'=>$_POST['q1b'],':oc'=>$_POST['q1c'],':od'=>$_POST['q1d'],':correct_answer'=>$_POST['q1ans']) );

            $q2 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q2 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q2'],':oa'=>$_POST['q2a'],':ob'=>$_POST['q2b'],':oc'=>$_POST['q2c'],':od'=>$_POST['q2d'],':correct_answer'=>$_POST['q2ans']) );

            $q3 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q3 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q3'],':oa'=>$_POST['q3a'],':ob'=>$_POST['q3b'],':oc'=>$_POST['q3c'],':od'=>$_POST['q3d'],':correct_answer'=>$_POST['q3ans']) );
           
            $q4 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q4 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q4'],':oa'=>$_POST['q4a'],':ob'=>$_POST['q4b'],':oc'=>$_POST['q4c'],':od'=>$_POST['q4d'],':correct_answer'=>$_POST['q4ans']) );
       
            $q5 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q5 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q5'],':oa'=>$_POST['q5a'],':ob'=>$_POST['q5b'],':oc'=>$_POST['q5c'],':od'=>$_POST['q5d'],':correct_answer'=>$_POST['q5ans']) );

            $q6 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q6 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q6'],':oa'=>$_POST['q6a'],':ob'=>$_POST['q6b'],':oc'=>$_POST['q6c'],':od'=>$_POST['q6d'],':correct_answer'=>$_POST['q6ans']) );

            $q7 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q7 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q7'],':oa'=>$_POST['q7a'],':ob'=>$_POST['q7b'],':oc'=>$_POST['q7c'],':od'=>$_POST['q7d'],':correct_answer'=>$_POST['q7ans']) );

            $q8 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q8 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q8'],':oa'=>$_POST['q8a'],':ob'=>$_POST['q8b'],':oc'=>$_POST['q8c'],':od'=>$_POST['q8d'],':correct_answer'=>$_POST['q8ans']) );

            $q9 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q9 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q9'],':oa'=>$_POST['q9a'],':ob'=>$_POST['q9b'],':oc'=>$_POST['q9c'],':od'=>$_POST['q9d'],':correct_answer'=>$_POST['q9ans']) );

            $q10 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q10 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q10'],':oa'=>$_POST['q10a'],':ob'=>$_POST['q10b'],':oc'=>$_POST['q10c'],':od'=>$_POST['q10d'],':correct_answer'=>$_POST['q10ans']) );

            $q11 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q11 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q11'],':oa'=>$_POST['q11a'],':ob'=>$_POST['q11b'],':oc'=>$_POST['q11c'],':od'=>$_POST['q11d'],':correct_answer'=>$_POST['q11ans']) );

            $q12 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q12 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q12'],':oa'=>$_POST['q12a'],':ob'=>$_POST['q12b'],':oc'=>$_POST['q12c'],':od'=>$_POST['q12d'],':correct_answer'=>$_POST['q12ans']) );

            $q13 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q13 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q13'],':oa'=>$_POST['q13a'],':ob'=>$_POST['q13b'],':oc'=>$_POST['q13c'],':od'=>$_POST['q13d'],':correct_answer'=>$_POST['q13ans']) );

            $q14 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q14 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q14'],':oa'=>$_POST['q14a'],':ob'=>$_POST['q14b'],':oc'=>$_POST['q14c'],':od'=>$_POST['q14d'],':correct_answer'=>$_POST['q14ans']) );

            $q15 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q15 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q15'],':oa'=>$_POST['q15a'],':ob'=>$_POST['q15b'],':oc'=>$_POST['q15c'],':od'=>$_POST['q15d'],':correct_answer'=>$_POST['q15ans']) );

            $q16 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q16 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q16'],':oa'=>$_POST['q16a'],':ob'=>$_POST['q16b'],':oc'=>$_POST['q16c'],':od'=>$_POST['q16d'],':correct_answer'=>$_POST['q16ans']) );

            $q17 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q17 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q17'],':oa'=>$_POST['q17a'],':ob'=>$_POST['q17b'],':oc'=>$_POST['q17c'],':od'=>$_POST['q17d'],':correct_answer'=>$_POST['q17ans']) );

            $q18 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q18 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q18'],':oa'=>$_POST['q18a'],':ob'=>$_POST['q18b'],':oc'=>$_POST['q18c'],':od'=>$_POST['q18d'],':correct_answer'=>$_POST['q18ans']) );

            $q19 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q19 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q19'],':oa'=>$_POST['q19a'],':ob'=>$_POST['q19b'],':oc'=>$_POST['q19c'],':od'=>$_POST['q19d'],':correct_answer'=>$_POST['q19ans']) );

            $q20 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q20 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q20'],':oa'=>$_POST['q20a'],':ob'=>$_POST['q20b'],':oc'=>$_POST['q20c'],':od'=>$_POST['q20d'],':correct_answer'=>$_POST['q20ans']) );


            if (!empty($result) ){
                header('location:test-activity.php?i='.$_POST['test_id'].'&success-test#n');
            }
        }

if(isset($_GET['test-qna10']))
{
            $q1 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q1 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q1'],':oa'=>$_POST['q1a'],':ob'=>$_POST['q1b'],':oc'=>$_POST['q1c'],':od'=>$_POST['q1d'],':correct_answer'=>$_POST['q1ans']) );

            $q2 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q2 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q2'],':oa'=>$_POST['q2a'],':ob'=>$_POST['q2b'],':oc'=>$_POST['q2c'],':od'=>$_POST['q2d'],':correct_answer'=>$_POST['q2ans']) );

            $q3 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q3 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q3'],':oa'=>$_POST['q3a'],':ob'=>$_POST['q3b'],':oc'=>$_POST['q3c'],':od'=>$_POST['q3d'],':correct_answer'=>$_POST['q3ans']) );
           
            $q4 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q4 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q4'],':oa'=>$_POST['q4a'],':ob'=>$_POST['q4b'],':oc'=>$_POST['q4c'],':od'=>$_POST['q4d'],':correct_answer'=>$_POST['q4ans']) );
       
            $q5 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q5 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q5'],':oa'=>$_POST['q5a'],':ob'=>$_POST['q5b'],':oc'=>$_POST['q5c'],':od'=>$_POST['q5d'],':correct_answer'=>$_POST['q5ans']) );

            $q6 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q6 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q6'],':oa'=>$_POST['q6a'],':ob'=>$_POST['q6b'],':oc'=>$_POST['q6c'],':od'=>$_POST['q6d'],':correct_answer'=>$_POST['q6ans']) );

            $q7 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q7 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q7'],':oa'=>$_POST['q7a'],':ob'=>$_POST['q7b'],':oc'=>$_POST['q7c'],':od'=>$_POST['q7d'],':correct_answer'=>$_POST['q7ans']) );

            $q8 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q8 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q8'],':oa'=>$_POST['q8a'],':ob'=>$_POST['q8b'],':oc'=>$_POST['q8c'],':od'=>$_POST['q8d'],':correct_answer'=>$_POST['q8ans']) );

            $q9 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q9 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q9'],':oa'=>$_POST['q9a'],':ob'=>$_POST['q9b'],':oc'=>$_POST['q9c'],':od'=>$_POST['q9d'],':correct_answer'=>$_POST['q9ans']) );

            $q10 = "INSERT INTO tbl_test_qna (test_id, question, option_a, option_b, option_c, option_d, correct_answer) VALUES (:test_id, :q, :oa, :ob, :oc, :od, :correct_answer)";
            $pdo_statement = $pdo->prepare( $q10 );
            $result = $pdo_statement->execute( array( ':test_id'=>$_POST['test_id'],':q'=>$_POST['q10'],':oa'=>$_POST['q10a'],':ob'=>$_POST['q10b'],':oc'=>$_POST['q10c'],':od'=>$_POST['q10d'],':correct_answer'=>$_POST['q10ans']) );

            if (!empty($result) ){
                header('location:test-activity.php?i='.$_POST['test_id'].'&success-test#n');
            }
        }

if(isset($_GET['edit-test-qna10']))
{
    echo $_POST['test_id'];

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q1) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q1']."', option_a ='".$_POST['q1a']."', option_b ='".$_POST['q1b']."', option_c ='".$_POST['q1c']."', option_d ='".$_POST['q1d']."', correct_answer='".$_POST['q1ans']."' where id=" . $q1['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q2) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q2']."', option_a ='".$_POST['q2a']."', option_b ='".$_POST['q2b']."', option_c ='".$_POST['q2c']."', option_d ='".$_POST['q2d']."', correct_answer='".$_POST['q2ans']."' where id=" . $q2['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q  WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q3) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q3']."', option_a ='".$_POST['q3a']."', option_b ='".$_POST['q3b']."', option_c ='".$_POST['q3c']."', option_d ='".$_POST['q3d']."', correct_answer='".$_POST['q3ans']."' where id=" . $q3['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']."  ORDER BY q.id ASC LIMIT 1 OFFSET 3");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q4) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q4']."', option_a ='".$_POST['q4a']."', option_b ='".$_POST['q4b']."', option_c ='".$_POST['q4c']."', option_d ='".$_POST['q4d']."', correct_answer='".$_POST['q4ans']."' where id=" . $q4['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']."  ORDER BY q.id ASC LIMIT 1 OFFSET 4");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q5) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q5']."', option_a ='".$_POST['q5a']."', option_b ='".$_POST['q5b']."', option_c ='".$_POST['q5c']."', option_d ='".$_POST['q5d']."', correct_answer='".$_POST['q5ans']."' where id=" . $q5['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q6) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q6']."', option_a ='".$_POST['q6a']."', option_b ='".$_POST['q6b']."', option_c ='".$_POST['q6c']."', option_d ='".$_POST['q6d']."', correct_answer='".$_POST['q6ans']."' where id=" . $q6['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']."  ORDER BY q.id ASC LIMIT 1 OFFSET 6");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q7) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q7']."', option_a ='".$_POST['q7a']."', option_b ='".$_POST['q7b']."', option_c ='".$_POST['q7c']."', option_d ='".$_POST['q7d']."', correct_answer='".$_POST['q7ans']."' where id=" . $q7['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q8) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q8']."', option_a ='".$_POST['q8a']."', option_b ='".$_POST['q8b']."', option_c ='".$_POST['q8c']."', option_d ='".$_POST['q8d']."', correct_answer='".$_POST['q8ans']."' where id=" . $q8['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q9) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q9']."', option_a ='".$_POST['q9a']."', option_b ='".$_POST['q9b']."', option_c ='".$_POST['q9c']."', option_d ='".$_POST['q9d']."', correct_answer='".$_POST['q9ans']."' where id=" . $q9['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q10) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q10']."', option_a ='".$_POST['q10a']."', option_b ='".$_POST['q10b']."', option_c ='".$_POST['q10c']."', option_d ='".$_POST['q10d']."', correct_answer='".$_POST['q10ans']."' where id=" . $q10['id']);
            $result = $pdo_statement->execute();
        }



                if (!empty($result) ){
                    header('location:test-activity.php?i='.$_GET['i'].'&success-test#n');
                }
         }


if(isset($_GET['edit-test-qna20']))
{

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q1) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q1']."', option_a ='".$_POST['q1a']."', option_b ='".$_POST['q1b']."', option_c ='".$_POST['q1c']."', option_d ='".$_POST['q1d']."', correct_answer='".$_POST['q1ans']."' where id=" . $q1['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q2) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q2']."', option_a ='".$_POST['q2a']."', option_b ='".$_POST['q2b']."', option_c ='".$_POST['q2c']."', option_d ='".$_POST['q2d']."', correct_answer='".$_POST['q2ans']."' where id=" . $q2['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q3) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q3']."', option_a ='".$_POST['q3a']."', option_b ='".$_POST['q3b']."', option_c ='".$_POST['q3c']."', option_d ='".$_POST['q3d']."', correct_answer='".$_POST['q3ans']."' where id=" . $q3['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q4) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q4']."', option_a ='".$_POST['q4a']."', option_b ='".$_POST['q4b']."', option_c ='".$_POST['q4c']."', option_d ='".$_POST['q4d']."', correct_answer='".$_POST['q4ans']."' where id=" . $q4['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q5) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q5']."', option_a ='".$_POST['q5a']."', option_b ='".$_POST['q5b']."', option_c ='".$_POST['q5c']."', option_d ='".$_POST['q5d']."', correct_answer='".$_POST['q5ans']."' where id=" . $q5['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q6) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q6']."', option_a ='".$_POST['q6a']."', option_b ='".$_POST['q6b']."', option_c ='".$_POST['q6c']."', option_d ='".$_POST['q6d']."', correct_answer='".$_POST['q6ans']."' where id=" . $q6['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q7) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q7']."', option_a ='".$_POST['q7a']."', option_b ='".$_POST['q7b']."', option_c ='".$_POST['q7c']."', option_d ='".$_POST['q7d']."', correct_answer='".$_POST['q7ans']."' where id=" . $q7['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q8) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q8']."', option_a ='".$_POST['q8a']."', option_b ='".$_POST['q8b']."', option_c ='".$_POST['q8c']."', option_d ='".$_POST['q8d']."', correct_answer='".$_POST['q8ans']."' where id=" . $q8['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q9) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q9']."', option_a ='".$_POST['q9a']."', option_b ='".$_POST['q9b']."', option_c ='".$_POST['q9c']."', option_d ='".$_POST['q9d']."', correct_answer='".$_POST['q9ans']."' where id=" . $q9['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q10) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q10']."', option_a ='".$_POST['q10a']."', option_b ='".$_POST['q10b']."', option_c ='".$_POST['q10c']."', option_d ='".$_POST['q10d']."', correct_answer='".$_POST['q10ans']."' where id=" . $q10['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q11) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q11']."', option_a ='".$_POST['q11a']."', option_b ='".$_POST['q11b']."', option_c ='".$_POST['q11c']."', option_d ='".$_POST['q11d']."', correct_answer='".$_POST['q11ans']."' where id=" . $q11['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q12) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q12']."', option_a ='".$_POST['q12a']."', option_b ='".$_POST['q12b']."', option_c ='".$_POST['q12c']."', option_d ='".$_POST['q12d']."', correct_answer='".$_POST['q12ans']."' where id=" . $q12['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q13) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q13']."', option_a ='".$_POST['q13a']."', option_b ='".$_POST['q13b']."', option_c ='".$_POST['q13c']."', option_d ='".$_POST['q13d']."', correct_answer='".$_POST['q13ans']."' where id=" . $q13['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q14) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q14']."', option_a ='".$_POST['q14a']."', option_b ='".$_POST['q14b']."', option_c ='".$_POST['q14c']."', option_d ='".$_POST['q14d']."', correct_answer='".$_POST['q14ans']."' where id=" . $q14['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q15) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q15']."', option_a ='".$_POST['q15a']."', option_b ='".$_POST['q15b']."', option_c ='".$_POST['q15c']."', option_d ='".$_POST['q15d']."', correct_answer='".$_POST['q15ans']."' where id=" . $q15['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q16) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q16']."', option_a ='".$_POST['q16a']."', option_b ='".$_POST['q16b']."', option_c ='".$_POST['q16c']."', option_d ='".$_POST['q16d']."', correct_answer='".$_POST['q16ans']."' where id=" . $q16['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q17) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q17']."', option_a ='".$_POST['q17a']."', option_b ='".$_POST['q17b']."', option_c ='".$_POST['q17c']."', option_d ='".$_POST['q17d']."', correct_answer='".$_POST['q17ans']."' where id=" . $q17['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q18) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q18']."', option_a ='".$_POST['q18a']."', option_b ='".$_POST['q18b']."', option_c ='".$_POST['q18c']."', option_d ='".$_POST['q18d']."', correct_answer='".$_POST['q18ans']."' where id=" . $q18['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q19) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q19']."', option_a ='".$_POST['q19a']."', option_b ='".$_POST['q19b']."', option_c ='".$_POST['q19c']."', option_d ='".$_POST['q19d']."', correct_answer='".$_POST['q19ans']."' where id=" . $q19['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q20) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q20']."', option_a ='".$_POST['q20a']."', option_b ='".$_POST['q20b']."', option_c ='".$_POST['q20c']."', option_d ='".$_POST['q20d']."', correct_answer='".$_POST['q20ans']."' where id=" . $q20['id']);
            $result = $pdo_statement->execute();
        }

                if (!empty($result) ){
                    header('location:test-activity.php?i='.$_GET['i'].'&success-test#n');
                }
            }


if(isset($_GET['edit-test-qna40']))
{

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q1) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q1']."', option_a ='".$_POST['q1a']."', option_b ='".$_POST['q1b']."', option_c ='".$_POST['q1c']."', option_d ='".$_POST['q1d']."', correct_answer='".$_POST['q1ans']."' where id=" . $q1['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q2) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q2']."', option_a ='".$_POST['q2a']."', option_b ='".$_POST['q2b']."', option_c ='".$_POST['q2c']."', option_d ='".$_POST['q2d']."', correct_answer='".$_POST['q2ans']."' where id=" . $q2['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q3) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q3']."', option_a ='".$_POST['q3a']."', option_b ='".$_POST['q3b']."', option_c ='".$_POST['q3c']."', option_d ='".$_POST['q3d']."', correct_answer='".$_POST['q3ans']."' where id=" . $q3['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q4) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q4']."', option_a ='".$_POST['q4a']."', option_b ='".$_POST['q4b']."', option_c ='".$_POST['q4c']."', option_d ='".$_POST['q4d']."', correct_answer='".$_POST['q4ans']."' where id=" . $q4['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q5) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q5']."', option_a ='".$_POST['q5a']."', option_b ='".$_POST['q5b']."', option_c ='".$_POST['q5c']."', option_d ='".$_POST['q5d']."', correct_answer='".$_POST['q5ans']."' where id=" . $q5['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q6) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q6']."', option_a ='".$_POST['q6a']."', option_b ='".$_POST['q6b']."', option_c ='".$_POST['q6c']."', option_d ='".$_POST['q6d']."', correct_answer='".$_POST['q6ans']."' where id=" . $q6['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q7) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q7']."', option_a ='".$_POST['q7a']."', option_b ='".$_POST['q7b']."', option_c ='".$_POST['q7c']."', option_d ='".$_POST['q7d']."', correct_answer='".$_POST['q7ans']."' where id=" . $q7['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q8) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q8']."', option_a ='".$_POST['q8a']."', option_b ='".$_POST['q8b']."', option_c ='".$_POST['q8c']."', option_d ='".$_POST['q8d']."', correct_answer='".$_POST['q8ans']."' where id=" . $q8['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q9) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q9']."', option_a ='".$_POST['q9a']."', option_b ='".$_POST['q9b']."', option_c ='".$_POST['q9c']."', option_d ='".$_POST['q9d']."', correct_answer='".$_POST['q9ans']."' where id=" . $q9['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q10) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q10']."', option_a ='".$_POST['q10a']."', option_b ='".$_POST['q10b']."', option_c ='".$_POST['q10c']."', option_d ='".$_POST['q10d']."', correct_answer='".$_POST['q10ans']."' where id=" . $q10['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q11) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q11']."', option_a ='".$_POST['q11a']."', option_b ='".$_POST['q11b']."', option_c ='".$_POST['q11c']."', option_d ='".$_POST['q11d']."', correct_answer='".$_POST['q11ans']."' where id=" . $q11['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q12) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q12']."', option_a ='".$_POST['q12a']."', option_b ='".$_POST['q12b']."', option_c ='".$_POST['q12c']."', option_d ='".$_POST['q12d']."', correct_answer='".$_POST['q12ans']."' where id=" . $q12['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q13) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q13']."', option_a ='".$_POST['q13a']."', option_b ='".$_POST['q13b']."', option_c ='".$_POST['q13c']."', option_d ='".$_POST['q13d']."', correct_answer='".$_POST['q13ans']."' where id=" . $q13['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q14) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q14']."', option_a ='".$_POST['q14a']."', option_b ='".$_POST['q14b']."', option_c ='".$_POST['q14c']."', option_d ='".$_POST['q14d']."', correct_answer='".$_POST['q14ans']."' where id=" . $q14['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q15) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q15']."', option_a ='".$_POST['q15a']."', option_b ='".$_POST['q15b']."', option_c ='".$_POST['q15c']."', option_d ='".$_POST['q15d']."', correct_answer='".$_POST['q15ans']."' where id=" . $q15['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q16) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q16']."', option_a ='".$_POST['q16a']."', option_b ='".$_POST['q16b']."', option_c ='".$_POST['q16c']."', option_d ='".$_POST['q16d']."', correct_answer='".$_POST['q16ans']."' where id=" . $q16['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q17) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q17']."', option_a ='".$_POST['q17a']."', option_b ='".$_POST['q17b']."', option_c ='".$_POST['q17c']."', option_d ='".$_POST['q17d']."', correct_answer='".$_POST['q17ans']."' where id=" . $q17['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q18) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q18']."', option_a ='".$_POST['q18a']."', option_b ='".$_POST['q18b']."', option_c ='".$_POST['q18c']."', option_d ='".$_POST['q18d']."', correct_answer='".$_POST['q18ans']."' where id=" . $q18['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q19) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q19']."', option_a ='".$_POST['q19a']."', option_b ='".$_POST['q19b']."', option_c ='".$_POST['q19c']."', option_d ='".$_POST['q19d']."', correct_answer='".$_POST['q19ans']."' where id=" . $q19['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q20) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q20']."', option_a ='".$_POST['q20a']."', option_b ='".$_POST['q20b']."', option_c ='".$_POST['q20c']."', option_d ='".$_POST['q20d']."', correct_answer='".$_POST['q20ans']."' where id=" . $q20['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 20");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q21) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q21']."', option_a ='".$_POST['q21a']."', option_b ='".$_POST['q21b']."', option_c ='".$_POST['q21c']."', option_d ='".$_POST['q21d']."', correct_answer='".$_POST['q21ans']."' where id=" . $q21['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 21");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q22) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q22']."', option_a ='".$_POST['q22a']."', option_b ='".$_POST['q22b']."', option_c ='".$_POST['q22c']."', option_d ='".$_POST['q22d']."', correct_answer='".$_POST['q22ans']."' where id=" . $q22['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 22");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q23) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q23']."', option_a ='".$_POST['q23a']."', option_b ='".$_POST['q23b']."', option_c ='".$_POST['q23c']."', option_d ='".$_POST['q23d']."', correct_answer='".$_POST['q23ans']."' where id=" . $q23['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 23");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q24) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q24']."', option_a ='".$_POST['q24a']."', option_b ='".$_POST['q24b']."', option_c ='".$_POST['q24c']."', option_d ='".$_POST['q24d']."', correct_answer='".$_POST['q24ans']."' where id=" . $q24['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 24");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q25) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q25']."', option_a ='".$_POST['q25a']."', option_b ='".$_POST['q25b']."', option_c ='".$_POST['q25c']."', option_d ='".$_POST['q25d']."', correct_answer='".$_POST['q25ans']."' where id=" . $q25['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 25");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q26) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q26']."', option_a ='".$_POST['q26a']."', option_b ='".$_POST['q26b']."', option_c ='".$_POST['q26c']."', option_d ='".$_POST['q26d']."', correct_answer='".$_POST['q26ans']."' where id=" . $q26['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 26");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q27) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q27']."', option_a ='".$_POST['q27a']."', option_b ='".$_POST['q27b']."', option_c ='".$_POST['q27c']."', option_d ='".$_POST['q27d']."', correct_answer='".$_POST['q27ans']."' where id=" . $q27['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 27");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q28) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q28']."', option_a ='".$_POST['q28a']."', option_b ='".$_POST['q28b']."', option_c ='".$_POST['q28c']."', option_d ='".$_POST['q28d']."', correct_answer='".$_POST['q28ans']."' where id=" . $q28['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 28");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q29) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q29']."', option_a ='".$_POST['q29a']."', option_b ='".$_POST['q29b']."', option_c ='".$_POST['q29c']."', option_d ='".$_POST['q29d']."', correct_answer='".$_POST['q29ans']."' where id=" . $q29['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 29");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q30) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q30']."', option_a ='".$_POST['q30a']."', option_b ='".$_POST['q30b']."', option_c ='".$_POST['q30c']."', option_d ='".$_POST['q30d']."', correct_answer='".$_POST['q30ans']."' where id=" . $q30['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 30");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q31) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q30']."', option_a ='".$_POST['q31a']."', option_b ='".$_POST['q31b']."', option_c ='".$_POST['q31c']."', option_d ='".$_POST['q31d']."', correct_answer='".$_POST['q31ans']."' where id=" . $q31['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 31");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q32) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q32']."', option_a ='".$_POST['q32a']."', option_b ='".$_POST['q32b']."', option_c ='".$_POST['q32c']."', option_d ='".$_POST['q32d']."', correct_answer='".$_POST['q32ans']."' where id=" . $q32['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 32");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q33) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q33']."', option_a ='".$_POST['q33a']."', option_b ='".$_POST['q33b']."', option_c ='".$_POST['q33c']."', option_d ='".$_POST['q33d']."', correct_answer='".$_POST['q33ans']."' where id=" . $q33['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 33");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q34) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q34']."', option_a ='".$_POST['q34a']."', option_b ='".$_POST['q34b']."', option_c ='".$_POST['q34c']."', option_d ='".$_POST['q34d']."', correct_answer='".$_POST['q34ans']."' where id=" . $q34['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 34");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q35) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q35']."', option_a ='".$_POST['q35a']."', option_b ='".$_POST['q35b']."', option_c ='".$_POST['q35c']."', option_d ='".$_POST['q35d']."', correct_answer='".$_POST['q35ans']."' where id=" . $q35['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 35");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q36) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q36']."', option_a ='".$_POST['q36a']."', option_b ='".$_POST['q36b']."', option_c ='".$_POST['q36c']."', option_d ='".$_POST['q36d']."', correct_answer='".$_POST['q36ans']."' where id=" . $q36['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 36");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q37) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q37']."', option_a ='".$_POST['q37a']."', option_b ='".$_POST['q37b']."', option_c ='".$_POST['q37c']."', option_d ='".$_POST['q37d']."', correct_answer='".$_POST['q37ans']."' where id=" . $q37['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q  WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 37");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q38) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q38']."', option_a ='".$_POST['q38a']."', option_b ='".$_POST['q38b']."', option_c ='".$_POST['q38c']."', option_d ='".$_POST['q38d']."', correct_answer='".$_POST['q38ans']."' where id=" . $q38['id']);
            $result = $pdo_statement->execute();
        }


          $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 38");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q39) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q39']."', option_a ='".$_POST['q39a']."', option_b ='".$_POST['q39b']."', option_c ='".$_POST['q39c']."', option_d ='".$_POST['q39d']."', correct_answer='".$_POST['q39ans']."' where id=" . $q39['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 39");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q40) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q40']."', option_a ='".$_POST['q40a']."', option_b ='".$_POST['q40b']."', option_c ='".$_POST['q40c']."', option_d ='".$_POST['q40d']."', correct_answer='".$_POST['q40ans']."' where id=" . $q40['id']);
            $result = $pdo_statement->execute();
        }



                if (!empty($result) ){
                    header('location:test-activity.php?i='.$_GET['i'].'&success-test#n');
                }
            }


if(isset($_GET['edit-test-qna50']))
{

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q1) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q1']."', option_a ='".$_POST['q1a']."', option_b ='".$_POST['q1b']."', option_c ='".$_POST['q1c']."', option_d ='".$_POST['q1d']."', correct_answer='".$_POST['q1ans']."' where id=" . $q1['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 1");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q2) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q2']."', option_a ='".$_POST['q2a']."', option_b ='".$_POST['q2b']."', option_c ='".$_POST['q2c']."', option_d ='".$_POST['q2d']."', correct_answer='".$_POST['q2ans']."' where id=" . $q2['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 2");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q3) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q3']."', option_a ='".$_POST['q3a']."', option_b ='".$_POST['q3b']."', option_c ='".$_POST['q3c']."', option_d ='".$_POST['q3d']."', correct_answer='".$_POST['q3ans']."' where id=" . $q3['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 3");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q4) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q4']."', option_a ='".$_POST['q4a']."', option_b ='".$_POST['q4b']."', option_c ='".$_POST['q4c']."', option_d ='".$_POST['q4d']."', correct_answer='".$_POST['q4ans']."' where id=" . $q4['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 4");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q5) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q5']."', option_a ='".$_POST['q5a']."', option_b ='".$_POST['q5b']."', option_c ='".$_POST['q5c']."', option_d ='".$_POST['q5d']."', correct_answer='".$_POST['q5ans']."' where id=" . $q5['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 5");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q6) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q6']."', option_a ='".$_POST['q6a']."', option_b ='".$_POST['q6b']."', option_c ='".$_POST['q6c']."', option_d ='".$_POST['q6d']."', correct_answer='".$_POST['q6ans']."' where id=" . $q6['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 6");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q7) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q7']."', option_a ='".$_POST['q7a']."', option_b ='".$_POST['q7b']."', option_c ='".$_POST['q7c']."', option_d ='".$_POST['q7d']."', correct_answer='".$_POST['q7ans']."' where id=" . $q7['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 7");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q8) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q8']."', option_a ='".$_POST['q8a']."', option_b ='".$_POST['q8b']."', option_c ='".$_POST['q8c']."', option_d ='".$_POST['q8d']."', correct_answer='".$_POST['q8ans']."' where id=" . $q8['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 8");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q9) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q9']."', option_a ='".$_POST['q9a']."', option_b ='".$_POST['q9b']."', option_c ='".$_POST['q9c']."', option_d ='".$_POST['q9d']."', correct_answer='".$_POST['q9ans']."' where id=" . $q9['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 9");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q10) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q10']."', option_a ='".$_POST['q10a']."', option_b ='".$_POST['q10b']."', option_c ='".$_POST['q10c']."', option_d ='".$_POST['q10d']."', correct_answer='".$_POST['q10ans']."' where id=" . $q10['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 10");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q11) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q11']."', option_a ='".$_POST['q11a']."', option_b ='".$_POST['q11b']."', option_c ='".$_POST['q11c']."', option_d ='".$_POST['q11d']."', correct_answer='".$_POST['q11ans']."' where id=" . $q11['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 11");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q12) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q12']."', option_a ='".$_POST['q12a']."', option_b ='".$_POST['q12b']."', option_c ='".$_POST['q12c']."', option_d ='".$_POST['q12d']."', correct_answer='".$_POST['q12ans']."' where id=" . $q12['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 12");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q13) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q13']."', option_a ='".$_POST['q13a']."', option_b ='".$_POST['q13b']."', option_c ='".$_POST['q13c']."', option_d ='".$_POST['q13d']."', correct_answer='".$_POST['q13ans']."' where id=" . $q13['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 13");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q14) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q14']."', option_a ='".$_POST['q14a']."', option_b ='".$_POST['q14b']."', option_c ='".$_POST['q14c']."', option_d ='".$_POST['q14d']."', correct_answer='".$_POST['q14ans']."' where id=" . $q14['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 14");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q15) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q15']."', option_a ='".$_POST['q15a']."', option_b ='".$_POST['q15b']."', option_c ='".$_POST['q15c']."', option_d ='".$_POST['q15d']."', correct_answer='".$_POST['q15ans']."' where id=" . $q15['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 15");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q16) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q16']."', option_a ='".$_POST['q16a']."', option_b ='".$_POST['q16b']."', option_c ='".$_POST['q16c']."', option_d ='".$_POST['q16d']."', correct_answer='".$_POST['q16ans']."' where id=" . $q16['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 16");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q17) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q17']."', option_a ='".$_POST['q17a']."', option_b ='".$_POST['q17b']."', option_c ='".$_POST['q17c']."', option_d ='".$_POST['q17d']."', correct_answer='".$_POST['q17ans']."' where id=" . $q17['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 17");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q18) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q18']."', option_a ='".$_POST['q18a']."', option_b ='".$_POST['q18b']."', option_c ='".$_POST['q18c']."', option_d ='".$_POST['q18d']."', correct_answer='".$_POST['q18ans']."' where id=" . $q18['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 18");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q19) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q19']."', option_a ='".$_POST['q19a']."', option_b ='".$_POST['q19b']."', option_c ='".$_POST['q19c']."', option_d ='".$_POST['q19d']."', correct_answer='".$_POST['q19ans']."' where id=" . $q19['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 19");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q20) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q20']."', option_a ='".$_POST['q20a']."', option_b ='".$_POST['q20b']."', option_c ='".$_POST['q20c']."', option_d ='".$_POST['q20d']."', correct_answer='".$_POST['q20ans']."' where id=" . $q20['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 20");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q21) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q21']."', option_a ='".$_POST['q21a']."', option_b ='".$_POST['q21b']."', option_c ='".$_POST['q21c']."', option_d ='".$_POST['q21d']."', correct_answer='".$_POST['q21ans']."' where id=" . $q21['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 21");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q22) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q22']."', option_a ='".$_POST['q22a']."', option_b ='".$_POST['q22b']."', option_c ='".$_POST['q22c']."', option_d ='".$_POST['q22d']."', correct_answer='".$_POST['q22ans']."' where id=" . $q22['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 22");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q23) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q23']."', option_a ='".$_POST['q23a']."', option_b ='".$_POST['q23b']."', option_c ='".$_POST['q23c']."', option_d ='".$_POST['q23d']."', correct_answer='".$_POST['q23ans']."' where id=" . $q23['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 23");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q24) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q24']."', option_a ='".$_POST['q24a']."', option_b ='".$_POST['q24b']."', option_c ='".$_POST['q24c']."', option_d ='".$_POST['q24d']."', correct_answer='".$_POST['q24ans']."' where id=" . $q24['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 24");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q25) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q25']."', option_a ='".$_POST['q25a']."', option_b ='".$_POST['q25b']."', option_c ='".$_POST['q25c']."', option_d ='".$_POST['q25d']."', correct_answer='".$_POST['q25ans']."' where id=" . $q25['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 25");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q26) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q26']."', option_a ='".$_POST['q26a']."', option_b ='".$_POST['q26b']."', option_c ='".$_POST['q26c']."', option_d ='".$_POST['q26d']."', correct_answer='".$_POST['q26ans']."' where id=" . $q26['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 26");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q27) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q27']."', option_a ='".$_POST['q27a']."', option_b ='".$_POST['q27b']."', option_c ='".$_POST['q27c']."', option_d ='".$_POST['q27d']."', correct_answer='".$_POST['q27ans']."' where id=" . $q27['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 27");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q28) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q28']."', option_a ='".$_POST['q28a']."', option_b ='".$_POST['q28b']."', option_c ='".$_POST['q28c']."', option_d ='".$_POST['q28d']."', correct_answer='".$_POST['q28ans']."' where id=" . $q28['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 28");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q29) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q29']."', option_a ='".$_POST['q29a']."', option_b ='".$_POST['q29b']."', option_c ='".$_POST['q29c']."', option_d ='".$_POST['q29d']."', correct_answer='".$_POST['q29ans']."' where id=" . $q29['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 29");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q30) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q30']."', option_a ='".$_POST['q30a']."', option_b ='".$_POST['q30b']."', option_c ='".$_POST['q30c']."', option_d ='".$_POST['q30d']."', correct_answer='".$_POST['q30ans']."' where id=" . $q30['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 30");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q31) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q30']."', option_a ='".$_POST['q31a']."', option_b ='".$_POST['q31b']."', option_c ='".$_POST['q31c']."', option_d ='".$_POST['q31d']."', correct_answer='".$_POST['q31ans']."' where id=" . $q31['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 31");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q32) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q32']."', option_a ='".$_POST['q32a']."', option_b ='".$_POST['q32b']."', option_c ='".$_POST['q32c']."', option_d ='".$_POST['q32d']."', correct_answer='".$_POST['q32ans']."' where id=" . $q32['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 32");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q33) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q33']."', option_a ='".$_POST['q33a']."', option_b ='".$_POST['q33b']."', option_c ='".$_POST['q33c']."', option_d ='".$_POST['q33d']."', correct_answer='".$_POST['q33ans']."' where id=" . $q33['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 33");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q34) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q34']."', option_a ='".$_POST['q34a']."', option_b ='".$_POST['q34b']."', option_c ='".$_POST['q34c']."', option_d ='".$_POST['q34d']."', correct_answer='".$_POST['q34ans']."' where id=" . $q34['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 34");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q35) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q35']."', option_a ='".$_POST['q35a']."', option_b ='".$_POST['q35b']."', option_c ='".$_POST['q35c']."', option_d ='".$_POST['q35d']."', correct_answer='".$_POST['q35ans']."' where id=" . $q35['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 35");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q36) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q36']."', option_a ='".$_POST['q36a']."', option_b ='".$_POST['q36b']."', option_c ='".$_POST['q36c']."', option_d ='".$_POST['q36d']."', correct_answer='".$_POST['q36ans']."' where id=" . $q36['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 36");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q37) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q37']."', option_a ='".$_POST['q37a']."', option_b ='".$_POST['q37b']."', option_c ='".$_POST['q37c']."', option_d ='".$_POST['q37d']."', correct_answer='".$_POST['q37ans']."' where id=" . $q37['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q  WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 37");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q38) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q38']."', option_a ='".$_POST['q38a']."', option_b ='".$_POST['q38b']."', option_c ='".$_POST['q38c']."', option_d ='".$_POST['q38d']."', correct_answer='".$_POST['q38ans']."' where id=" . $q38['id']);
            $result = $pdo_statement->execute();
        }


            $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 38");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q39) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q39']."', option_a ='".$_POST['q39a']."', option_b ='".$_POST['q39b']."', option_c ='".$_POST['q39c']."', option_d ='".$_POST['q39d']."', correct_answer='".$_POST['q39ans']."' where id=" . $q39['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 39");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q40) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q40']."', option_a ='".$_POST['q40a']."', option_b ='".$_POST['q40b']."', option_c ='".$_POST['q40c']."', option_d ='".$_POST['q40d']."', correct_answer='".$_POST['q40ans']."' where id=" . $q40['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 40");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q41) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q41']."', option_a ='".$_POST['q41a']."', option_b ='".$_POST['q41b']."', option_c ='".$_POST['q41c']."', option_d ='".$_POST['q41d']."', correct_answer='".$_POST['q41ans']."' where id=" . $q41['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 41");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q42) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q42']."', option_a ='".$_POST['q42a']."', option_b ='".$_POST['q42b']."', option_c ='".$_POST['q42c']."', option_d ='".$_POST['q42d']."', correct_answer='".$_POST['q42ans']."' where id=" . $q42['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 42");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q43) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q43']."', option_a ='".$_POST['q43a']."', option_b ='".$_POST['q43b']."', option_c ='".$_POST['q43c']."', option_d ='".$_POST['q43d']."', correct_answer='".$_POST['q43ans']."' where id=" . $q43['id']);
            $result = $pdo_statement->execute();
        }



        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 43");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q44) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q44']."', option_a ='".$_POST['q44a']."', option_b ='".$_POST['q44b']."', option_c ='".$_POST['q44c']."', option_d ='".$_POST['q44d']."', correct_answer='".$_POST['q44ans']."' where id=" . $q44['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 44");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q45) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q45']."', option_a ='".$_POST['q45a']."', option_b ='".$_POST['q45b']."', option_c ='".$_POST['q45c']."', option_d ='".$_POST['q45d']."', correct_answer='".$_POST['q45ans']."' where id=" . $q45['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 45");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q46) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q46']."', option_a ='".$_POST['q46a']."', option_b ='".$_POST['q46b']."', option_c ='".$_POST['q46c']."', option_d ='".$_POST['q46d']."', correct_answer='".$_POST['q46ans']."' where id=" . $q46['id']);
            $result = $pdo_statement->execute();
        }


        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 46");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q47) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q47']."', option_a ='".$_POST['q47a']."', option_b ='".$_POST['q47b']."', option_c ='".$_POST['q47c']."', option_d ='".$_POST['q47d']."', correct_answer='".$_POST['q47ans']."' where id=" . $q47['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 47");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q48) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q48']."', option_a ='".$_POST['q48a']."', option_b ='".$_POST['q48b']."', option_c ='".$_POST['q48c']."', option_d ='".$_POST['q48d']."', correct_answer='".$_POST['q48ans']."' where id=" . $q48['id']);
            $result = $pdo_statement->execute();
        }


                $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 48");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q49) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q49']."', option_a ='".$_POST['q49a']."', option_b ='".$_POST['q49b']."', option_c ='".$_POST['q49c']."', option_d ='".$_POST['q49d']."', correct_answer='".$_POST['q49ans']."' where id=" . $q49['id']);
            $result = $pdo_statement->execute();
        }

        $pdo_statement = $pdo->prepare("SELECT * FROM tbl_test_qna as q WHERE q.test_id= ".$_POST['test_id']." ORDER BY q.id ASC LIMIT 1 OFFSET 49");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        foreach($result as $q50) {
            $pdo_statement=$pdo->prepare("update tbl_test_qna set question ='".$_POST['q50']."', option_a ='".$_POST['q50a']."', option_b ='".$_POST['q50b']."', option_c ='".$_POST['q50c']."', option_d ='".$_POST['q50d']."', correct_answer='".$_POST['q50ans']."' where id=" . $q50['id']);
            $result = $pdo_statement->execute();
        }



                if (!empty($result) ){
                    header('location:test-activity.php?i='.$_GET['i'].'&success-test#n');
                    
                }
            }
?>