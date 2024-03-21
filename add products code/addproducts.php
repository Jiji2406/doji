<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="container-fluid vh-100" style="margin-top:50px">
            <div class="" style="margin-top:100px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-success">ADD PRODUCTS</h3>
                        </div>
                        <div class="p-4">

                        <div class="navigation">
                            <a href="view_products.php">View Products </a>

                        </div>  

                        <form action="process.php" method="POST" enctype="multipart/form-data"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-success">
                                    <i class="bi bi-card-image"></i></span>
                                    <input type="file" name="pic"
                                    accept=".jpg, .png, .gif, .jpeg, .webp, .jfif" placeholder="Picture" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-success">
                                    <i class="bi bi-cart3"></i></span>
                                    <input type="text" name="pn" class="form-control" placeholder="Product Name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-success">  
                                    <i class="bi bi-tags"></i></span>
                                     <input type="text" name="price"  class="form-control" placeholder="Price" required>
                                </div>

                              
                                <div class="d-grid col-12 mx-auto">
                                <button class="btn btn-success" type="submit" name="add_products"><span></span>ADD</button>
                                </div>
                                </p>
                                
                               
                                
            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>