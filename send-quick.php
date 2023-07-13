<?php
session_start();
include 'config.php';

if($_SESSION['item_no']==10)
{
    
   echo $item_no = $_SESSION['item_no'];

}

if($_SESSION['item_no']==20)
{
    echo $item_no = $_SESSION['item_no'];
}

if($_SESSION['item_no']==40)
{
    echo $item_no = $_SESSION['item_no'];
}

if($_SESSION['item_no']==50)
{
    echo $item_no = $_SESSION['item_no'];
}


?>