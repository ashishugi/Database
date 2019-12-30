<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php include 'menu.php'?>
    <br/>
    <br/>
    <div class="container">
        <table class="table table-stripped table-bright  table-hover">
            <tr> 
                <th>ROLL NO</th>
                <th>NAME</th>
                <th>COURSE</th>
                <th>BRANCH</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php
                require("dbconnect.php");
                $query = "select * from student";
                $res = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo $row["rollno"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["course"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                       <td><a href="upd.php?id=<?php echo $row['rollno']; ?>"><i class="fas fa-pencil-ruler"></i></a></td>
                        <td><a href="del.php?id=<?php echo $row['rollno']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>