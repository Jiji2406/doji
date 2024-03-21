<?php
    include "conn.php";
    session_start();

    //this code is for registration
    if(isset($_POST['reg'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $name = $_POST['nm'];

        //validate  
        $validate = mysqli_query($conn,"SELECT * from users WHERE email='$email'");
        $val_num = mysqli_num_rows($validate);

        if($val_num <=0){
            //insert data
            $insert = mysqli_query($conn, "INSERT INTO users VALUES ('0','$email','$pass','$name')");

            if($insert == true){
                ?>
                    <script>
                        alert("Data is inserted!")
                        window.location.href="reg.php";
                    </script>

                <?php
            }else{
                ?>
                    <script>
                        alert("Data is not inserted!")
                        window.location.href="reg.php";
                    </script>

                <?php
            }
            
        }else{
            ?>
                    <script>
                        alert("Email is already use!")
                        window.location.href="reg.php";
                    </script>

                <?php

        }
     
    }

    //this program is for login

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $check_login = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'AND password='$pass' ");
    

        $n = mysqli_num_rows($check_login);

        if($n <=0 ){
           ?>
           <script>
            alert("Wrong Email or Password");
            window.location.href="index.php";
            </script>
            <?php
        }else{
            $_SESSION['email']=$email;
            ?>
            <script>
            alert("Login Successfully!");
            window.location.href="home.php";
            </script>
            <?php
        }

    }
?>