<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page </title>
</head>
<body>
    
<div class="nav">

<a href="index.php"> Students Profile </a> &nbsp; | &nbsp;
<a href="records.php"> View Records </a>

</div>

<h1> Students Profile</h1>

    <table border="5px solid">
        <tr>
            <th>Id Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
            <?php
            $getdata = mysqli_query($conn, "SELECT * FROM student");
            while($row = mysqli_fetch_array($getdata)){
                ?>
        <tr>  

            <td> <?php echo $row['idnumber']?></td>
            <td> <?php echo $row['fn']?></td>
            <td> <?php echo $row['ln']?></td>
            <td> <?php echo $row['age']?></td>
            <td> <?php echo $row['cs']?></td>
            <td> <?php echo $row['yl']?></td>
            <td> <?php echo $row['email']?></td>
            <td> <?php echo $row['gr']?></td>
            <td> <?php echo $row['birthday']?></td>
            <td> <?php echo $row['address']?></td>
            <td> <a href="update.php"> Update </a></td>
            <td> <a href="delete.php"> Delete </td> 
        </tr>
            <?php
            }
            ?>
            
        
    </table>

</body>
</html>