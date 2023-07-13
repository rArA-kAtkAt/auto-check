<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<title>Document</title>
</head>

<?php
if(isset($_GET['err'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: 'Please check inputs',
            text: 'Invalid username or password!',
            icon: 'error',
            timer: 2000
        });
    });
</script>
    ";
}

if(isset($_GET['err-10'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Please check agree with the terms and condition!',
            icon: 'error',
            timer: 2000 
        }).then(function() {
                window.location = 'create-account.php';
            });
    });
</script>
    ";
}

if(isset($_GET['err12'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Email Address does not exist in our records!',
            icon: 'error',
            timer: 2000
        }).then(function() {
            window.location = 'forgot-password.php';
        });
    });
</script>
    ";
}

if(isset($_GET['err13'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Invalid reset code!',
            icon: 'error',
            timer: 2000
        }).then(function() {
            window.location = 'verify.php';
        });
    });
</script>
    ";
}

if(isset($_GET['reset'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Successfuly entered reset code!',
            icon: 'success',
            timer: 2000
        }).then(function() {
            window.location = 'new-password.php';
        });
    });
</script>
    ";
}

if(isset($_GET['resetted'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'You have successfuly reset your password!',
            icon: 'success',
            timer: 4000
        }).then(function() {
            window.location = 'login.php';
        });
    });
</script>
    ";
}
if(isset($_GET['err-2'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Username already exists!',
            icon: 'error',
            timer: 2000
        });
    });
</script>
    ";
}


if(isset($_GET['err-1'])){
    echo "
    <script type='text/javascript'>
    $(document).ready(function() {
        swal({
            title: '',
            text: 'Password not match!',
            icon: 'error',
            timer: 2000
        });
    });
</script>
    ";
}

if(isset($_GET['success'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: 'Login Successfuly',
                text: 'Redirected automatically!',
                icon: 'success',
                timer: 4000
            }).then(function() {
                window.location = 'class.php';
            });
    
        });
    </script>
        ";
}

if(isset($_GET['success-create'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: 'Successfuly Registered!',
                text: 'Redirected automatically!',
                icon: 'success',
                timer: 4000
            }).then(function() {
                window.location = 'login.php';
            });
    
        });
    </script>
        ";
}


if(isset($_GET['added'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'Successfuly Enrolled to class!',
                icon: 'success',
                timer: 2000
                });
    });
    </script>
        ";
}

if(isset($_GET['sc-error'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'Subject code not exists!',
                icon: 'error',
                timer: 2000
                });
    });
    </script>
        ";
}

if(isset($_GET['success-restore'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'Successfuly restored class!',
                icon: 'success',
                timer: 2000
                });
    });
    </script>
        ";
}

if(isset($_GET['success-archive'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'Successfuly archived class!',
                icon: 'success',
                timer: 2000
                });
    });
    </script>
        ";
}

if(isset($_GET['success-delete'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'Successfuly droped class!',
                icon: 'success',
                timer: 2000
                });
    });
    </script>
        ";
}

if(isset($_GET['exist'])){
    echo "
        <script type='text/javascript'>
        $(document).ready(function() {
            swal({
                title: '',
                text: 'You already enrolled in this class!',
                icon: 'error',
                timer: 2000
                });
    });
    </script>
        ";
}

?>