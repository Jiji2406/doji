<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM student WHERE id='$ref_id'");
    while($z=mysqli_fetch_object($getdata)){
        $a = $z -> idnumber;
        $b = $z -> firstname;
        $c = $z -> lastname;
        $d= $z ->age;
        $e= $z -> course;
        $f= $z -> yearlevel;
        $g= $z -> email;
        $h= $z -> gender;
        $i = $z -> birthday;
        $j= $z -> address;
    
    
        
    }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
<h1> UPDATE RECORDS</h1>
<form action="process.php?id=<?php echo $ref_id;?>" method="POST">
        
    
        <label>Id Number: </label> <br>
        <input type="text" name="update_idnumber"  value="<?php echo $a?>"required></p>

        <label>First Name: </label> <br>
        <input type="text" name="update_firstname" value="<?php echo $b?>" required></p>

        <label>Last Name: </label> <br>
        <input type="text" name="update_lastname"  value="<?php echo $c?>" required></p>

        <label>Age: </label> <br>
        <input type="text" name="update_age" value="<?php echo $d?>" required></p>

        <label>Course: </label> <br>
        <input type="text" name="update_course" value="<?php echo $e?>" required></p>

        <label>Year Level: </label> <br>
        <input type="text" name="update_yearlevel"value="<?php echo $f?>" required></p>

        <label>Email: </label> <br>
        <input type="text" name="update_email"value="<?php echo $g?>" required></p>

        <label>Gender: </label> <br>
        <input type="text" name="update_gender" value="<?php echo $h?>" required></p>

        <label>Birthday: </label> <br>
        <input type="text" name="update_birthday" value="<?php echo $i?>" required></p> 

        <label>Address: </label> <br>
        <input type="text" name="update_address" value="<?php echo $j?>" required></p>

        <input type="submit" name="update_student" value="UPDATE">

    </form>
</body>
</html>
