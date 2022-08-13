<?php 

    include "UI/header.php";
    include "config.php";

?>
    <title>Register</title>
    </head>
    <body>
    <?php include "UI/nav.php";?>
        <div class="container">
        <?php
            if(isset($_POST["register"]) ){
                if (registrasi($_POST) > 0) { ?>
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                        </div> <?php
                    // echo "<script>
                    //     alert('User Berhasil Ditambahkan!'); 
                    // </script>";
                } else {
                    echo mysqli_error($koneksi);
                }
            };
        ?>
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5">
                    <div class="singup-form">
                        <form action="" method= "POST" class="mt-5 border p-3 bg-light shadow">
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
                                            <option value="Kelompok Tani">Kelompok Tani</option>
                                            <option value="Penyedia Lahan">Penyedia Lahan</option>
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
                                        <button type="submit" name="register" class="btn btn-primary float-end" value="Register">Singup Now</button>
                                    </div>
                            </div>
                                <p class="text-center mt-3 text-secondary">If you have account <a href="Login.php">Login Now</p>
                        </form>  
                    </div>
                </div>
            </div> 
        </div>
    <?php include "UI/footer.php";?>