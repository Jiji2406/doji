<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                            <h3 class="text-primary ">LOGIN</h3>
                        </div>
                        <div class="p-4">
                                
                        <a href="reg.php" class="tex-white"> Click To Register</a> </p>        

                            <form action="process.php" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white  "></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                </div>

                              
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit" name="login"><span></span>LOGIN</button>
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