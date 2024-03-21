<?php
    include "conn.php";
    session_start();

    if(empty($_SESSION)){
        ?>
        <script>
            alert("Session Expired!\nPlease Login!");
            window.location.href="index.php"
            </script>
    <?php
    }else{
        $email =$_SESSION['email'];
        $get_name= mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
        while($row = mysqli_fetch_object($get_name)){
            $name = $row -> name;

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
</head>
<body>
    <h1>This is your homepage!</h1>
    <a href="logout.php"> Logout</a> <p>

    Your Email: <?php echo $email; ?>


</body>
</html>