<?php
    $rollno=$_GET['id'];
    require("dbconnect.php");
    $query="delete from student where rollno=".$rollno;
    mysqli_query($conn,$query);
   // location.href="show.php";
   header("Location:show.php");
?>