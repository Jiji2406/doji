<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Students Profile </title>

    <style>

    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        background: url('img/bg.jpg') no-repeat;
        background-size: cover;
    }

    h1{
        text-align: center;
        color: black;
        font-family: calibri;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        background-color:none;
        padding: 15px;
        border-radius: 5px;
        border-style: dashed;
        border:5px white;
       
      
    }

    label {
        display:block;
        font-size: 16px;
        color: black;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        display:white;
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border:2px white;
       
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 50px;
        background-color:white;
        color: 	black;
        font: size: 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: green;
    }

</style>

</head>
<body>


<div class="nav">

    <a href="index.php"> Student Profile Form </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records  </a>

</div>

    <h1>Student Form</h1>

    <form action="process.php" method="POST">
        
    
        <label>Id Number: </label> <br>
        <input type="text" name="id" required></p>

        <label>First Name: </label> <br>
        <input type="text" name="fn" required></p>

        <label>Last Name: </label> <br>
        <input type="text" name="ln" required></p>

        <label>Age: </label> <br>
        <input type="text" name="age" required></p>

        <label>Course: </label> <br>
        <input type="text" name="cs" required></p>

        <label>Year Level: </label> <br>
        <input type="text" name="yl" required></p>

        <label>Email: </label> <br>
        <input type="text" name="email" required></p>

        <label>Gender: </label> <br>
        <input type="text" name="gr" required></p>

        <label>Birthday: </label> <br>
        <input type="text" name="birthday" required></p>

        <label>Address: </label> <br>
        <input type="text" name="address" required></p>


        <input type="submit" name="button" value="Register">

    </form>

    
    
</body>
</html>

