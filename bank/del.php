<?php
    include('conn.php');
    $obj=new conn();
    $venue=$_GET['venue'];
    $n=$obj->del_record($venue);
    header('location:showbank.php');
?>