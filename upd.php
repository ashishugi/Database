<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include "menu.php" ?>
<?php
             $rollno=$_GET['id'];
             require("dbconnect.php");
             $query="select * from student where rollno=".$rollno;
             $rs=mysqli_query($conn,$query);
             $row=mysqli_fetch_array($rs);
            
             ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
             <form action="update.php" method="GET">
                    <label>Roll no</label>
                    <input type="number" name="rollno" class="form-control" value="<?php echo $row['rollno'];?>" readonly/ >
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control"/ >
                    <label>Course</label>
                    <input type="text" name="course" value="<?php echo $row['course'];?>" class="form-control"/ >
                    <label>Branch</label>
                    <input type="text" name="branch" value="<?php echo $row['branch'];?>" class="form-control"/ >
                    <br/>
                    <button type="submit" class="btn btn-primary" name="b1" >Submit</button>
                   
             </form>
        </div>
    </div>
</div>
</body>
</html>