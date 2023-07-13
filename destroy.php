<?php
Session_start();
Session_destroy();
header('Location: quick-check.php');

?>