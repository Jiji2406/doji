<?php
include "conn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <div class="navigation"> &nbsp;|&nbsp;
    <a href="addproducts.php"> ADD PRODUCTS </a>
    <a href="viewproducts.php"> VIEW PRODUCTS </a>
  </div>

  <h1> PRODUCT LIST </h1>

   <table border="3px solid">
        <tr>
            <th> IMAGE </th>
            <th> PRODUCT NAME </th>
            <th> PRICE </th>

        </tr>
        <?php
            $get=mysqli_query($conn,"SELECT * FROM products");
            while($row=mysqli_fetch_array($get_products)){
        ?>
        <tr>
            <td> <img src="upload/ <?php echo $row ['picture'];?>"> </td>
            <td> <?php echo $row ['pn']; ?> </td>
            <td> <?php echo $row ['price']; ?> </td>
        </tr>

        <?php} ?>
    </table>



    


        
</body>
</html>
