<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PRODUCTS</title>
</head>
<body>
    <div class="navigation">
        <a href="addproducts.php">ADD PRODUCTS </a> &nbsp;|&nbsp;
        <a href="addproducts.php">VIEW PRODUCTS</a>
   </div>
   <form action="process.php" method="POST" enctype=multipart/form-data>
   <label>PICTURE </label> </br>
   <input type="file" name="pic" required
   accept=".jpeg,.jfif,.gif, .png, .webp, .jpg"> </p>
    <label> PRODUCT NAME </label> </br>
    <input type="text" name="pn" required> </p>
    <label> PRICE </label> </br>
    <input type="text" name="price" required> </p>
 <input type="submit" name="add_products" value="ADD">
</body>
</html>