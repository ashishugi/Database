<?php
require("dbconnect.php");
        $rollno=$_GET['rollno'];
        $name=$_GET['name'];
        $course=$_GET['course'];
        $branch=$_GET['branch'];
        $query="update student set name='$name',course='$course',branch='$branch' where rollno=$rollno";
        if(mysqli_query($conn,$query)>0){
            //echo "<div class='container'><div class='row'><div class='col-md-6'><h6 style='color:green;'>inserted</h6></div></div></div>";
           
            header("Location:show.php");    
        }else{
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
    
?>