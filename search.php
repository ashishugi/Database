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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="GET">
                    <label >Roll No</label>
                    <input type="number" name="rollno" class="form-control" required/>
                    <br/>
                    <button type="submit" class="btn btn-success" name="b1">Submit</button>
                    <?php
                        if(isset($_GET["b1"])){
                            require("dbconnect.php");
                            $rollno=$_GET['rollno'];
                            $query="select * from student where rollno=".$rollno;
                           $rs=mysqli_query($conn,$query);
                            $row=mysqli_fetch_array($rs);
                            
          if($rs){
              ?>
            <br/>
            <br/>
            <table class="table table-stripped table-bright  table-hover">
            <tr> 
            <th>ROLL NO</th>
            <th>NAME</th>
            <th>COURSE</th>
            <th>BRANCH</th>

            </tr>
            <tr>
            <td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            </tr>
        </table>
            <?php
          }else{
            echo "<div class='container'><div class='row'><div class='col-md-6'><h6 style='color:green;'>NO RECORD FOUND</h6></div></div></div>";
    
          }
            
                        }
                    ?>
        
                </form>
            </div>
        </div>
    </div>
</body>
</html>