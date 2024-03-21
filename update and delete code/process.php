<?php

    include "conn.php";
    session_start();

    // This code is for registration
    if(isset($_POST['button'])){

        $idnumber=$_POST["id"];
        $firstname=$_POST["fn"];
        $lastname=$_POST["ln"];
        $age=$_POST["age"];
        $course=$_POST["cs"];
        $yearlevel=$_POST["yl"];
        $email=$_POST["email"];
        $gender=$_POST["gr"];
        $birthday=$_POST["birthday"];
        $address=$_POST["address"];


        $insertusers=mysqli_query($conn, "INSERT INTO student VALUES('0','$idnumber','$firstname','$lastname','$age','$course','$yearlevel','$email','$gender','$birthday','$address')");

        if($insertusers==TRUE){
            ?>
            <script>
                alert("Your Registration was Successful!");
                window.location.href="index.php";
            </script>
            <?php

        }else{
            ?>
            <script>
                alert("Error Registration!\nTry Again!");
                window.location.href="index.php";
            </script>
            <?php

        }

    } 



     //update process

if(ISSET($_POST['update_student'])){
    $ref_id = $_GET['id'];
  
    $a=$_POST['update_idnumber'];
    $b=$_POST['update_fn'];
    $c=$_POST['update_ln'];
    $d=$_POST['update_age'];
    $e=$_POST['update_cs'];
    $f=$_POST['update_yl'];
    $g=$_POST['update_email'];
    $h=$_POST['update_gr'];
    $i=$_POST['update_birthday'];
    $j=$_POST['update_address'];
  
    $update = mysqli_query($conn, "UPDATE student SET idnumber='$a',fn='$b',ln='$c',age='$d',cs='$e',yl='$f',email='$g',gr='$h',birthday='$i',address='$j' WHERE id='$ref_id' ");
  if($update==TRUE){
   ?>
   <script>
     alert("Data was Updated!");
     window.location.href="records.php";
    </script>
   <?php
  }else{
    ?>
    <script>
      alert("Data was not Updated");
      window.location.href="records.php";
     <?php
  }
  }
       

?>





      
       
