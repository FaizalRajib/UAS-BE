

<?php 
    include "UI/header.php";
    include "config.php";
    session_start();

    // if(isset($_COOKIE["login"])){
    //     if($_COOKIE["login"] == "true") {
    //         $_SESSION["login"] = true;
    //     }
    // }

    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $id =  $_COOKIE['id'];
        $key =  $_COOKIE['key'];

        //ambil user berdasarkan id
        $result = mysqli_query($koneksi,"SELECT username FROM tb_akun WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        if ($key === hash('sha256', $row['username'])){
            $_SESSION['login'] = true;
        }

    }

    if(isset($_SESSION["login"])){
        header("Location: main.php");
        exit;
    }

    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM tb_akun WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1){
            //validasi password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                //set session
                $_SESSION ["login"] = true;
                $_SESSION ['id'] = $row['id'];


                //cek cookie
                if(isset($_POST["remember"])) {
                    // setcookie('login', 'true', time()+120);
                    setcookie('id', $row['id'], time()+120);
                    setcookie('key', hash('sha256', $row['username']), time()+120);
                }

                header("Location: main.php");
                exit; 
            }
        }

        $error = true;
    }
?>
        <title>Pakoko | Log In</title>
    </head>
    <style>
        body{
            background-image: url('img_girl.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
        }
    </style>
    <body>
        <div class="container mt-3">
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    Username / Password Salah!!
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="singin-form">
                        <form action="" method= "POST" class="mt-5 border p-3 bg-light shadow">
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                        <img src="asset/LOGIN2.svg" alt="Login"class="img-fluid mb-3">
                                </div>
                            </div>
                            <!-- <img src="asset/LOGIN2.svg" alt="Login"class="rounded mx-auto d-block"> -->
                            <h3 class="mb-5 text-center">LOGIN</h3>
                            <div class="row justify-content-center">
                                <div class="mb-3 col-md-6">
                                    <label for="">Username </span></label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="mb-3 col-md-6">
                                    <label for="">Password</span></label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">                                    
                                <input type="checkbox" id="remember" name="remember">
                                <label for="costumeCheckbox" class="mb-3">Remember Me</label>
                                <!-- <a href="">Forget Password</a> -->
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
                            <p class="text-center mt-3 text-secondary">Don't have a Account?<a href="register.php"> Register here</a></p>    
                        </form>
                        
                    </div>
                </div>
            </div>
        </div> 
<?php include "UI/footer.php";?>