<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
                <form action="" method="GET">
                        <label>Roll no</label>
                        <input type="number" name="rollno" class="form-control"/ >
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"/ >
                        <label>Course</label>
                        <input type="text" name="course" class="form-control"/ >
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control"/ >
                        <br/>
                        <button type="submit" class="btn btn-primary" name="b1" >Submit</button>
                        
                    </form>
        </div>
    </div>
</div>
<?php
   if(isset($_GET['b1'])){
    $rollno = $_GET['rollno'];
    $name = $_GET['name'];
    $course = $_GET['course'];
    $branch = $_GET['branch'];
   require("dbconnect.php");
    $query = "insert into student(rollno,name,course,branch) values ($rollno,'$name','$course','$branch')";
    if(mysqli_query($conn,$query)>0 ){
        echo "<div class='container'><div class='row'><div class='col-md-6'><h6 style='color:green;'>inserted</h6></div></div></div>";
    }else{
        echo "<div class='container'><div class='row'><div class='col-md-6'><h6 style='color:red;'>not inserted</h6></div></div></div>";

    }
   
   }


?>


</body>
</html>