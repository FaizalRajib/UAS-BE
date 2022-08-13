<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="singup-form">
                    <form action="" class="mt-5 borderp-3 bg-light shadow">
                                <h3 class="mb-5 text-secondary">Create Your Account</h3>
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                        <label for="">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="FullName" class="form-control" placeholder = "Enter your full name" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="">Username <span class="text-danger">*</span></label>
                                        <input type="text" name="Username" class="form-control" placeholder = "Enter your username" required>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"aria-describedby="emailHelp" placeholder = "Enter your email" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="">Number Phone <span class="text-danger">*</span></label>
                                        <input type="" name="Nohp" class="form-control" placeholder = "Enter your number" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="">Posisition <span class="text-danger">*</span></label>
                                        <select name="posisi" class="form-select form-control" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">Kelompok Tani</option>
                                            <option value="2">Penyedia Lahan</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                        <input type="password" name="pw" class="form-control" placeholder = "Enter Your password" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="">Comfirm Password <span class="text-danger">*</span></label>
                                        <input type="password" name="cpw" class="form-control" placeholder = "Comfirm your password" required>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <button type="submit" name="registrasi" class="btn btn-primary float-end" value="Register">Singup Now</button>
                                    </div>
                                </div>
                                <p class="text-center mt-3 text-secondary">If you have account <a href="Login.php">Login Now</p>
                            </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>