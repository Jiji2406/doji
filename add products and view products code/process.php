<?php
include "conn.php";
session_start();

if(isset($_POST['add_products'])){
    $picname=$_FILES['pic'] ['name'];
    $fileTmpName=$_FILES['pic'] ['tmp_name'];
    $pn=$_POST['pn'];
    $price=$_POST['price'];

    $insert=mysqli_query($conn,"INSERT INTO products VALUES('0', '$picname','$pn', '$price')");

    if($insert==TRUE){
        $fileDestination='upload/' .$picname;
        move_uploaded_file($fileTmpName,$fileDestination);

    ?>
    <script>
        alert('one product added');
        window.location.href="addproducts.php";
    </script>
    <?php
    }else{
        ?>
        <script>
            alert('No product added') 
            window.location.href="addproducts.php";
        </script>
        <?php
    }

}