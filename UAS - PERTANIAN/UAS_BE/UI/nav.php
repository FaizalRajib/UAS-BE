    <?php include "header.php"; ?>

    <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed-top w-100">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark "> -->
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="asset/Logo Icon.png" alt="" width="30" class="d-inline-block align-text-top"> PAKOKO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Input_data_lahan.php">Features</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="Data_Lahan_User.php">Pricing</a>
                </li>
            </ul>
            <div>
                <!-- <a href="" class="button-primary"> DAFTAR </a> -->
                <!-- <button class="button-primary" type="submit"> <a href="register.php">DAFTAR</a></button> -->
                <a href="register.php"><button class="button-primary">DAFTAR</button></a>
                <a href="login.php"><button class="button-secundary">LOGIN</button></a>
                <a href="logout.php"><button class="button-secundary">LOGOUT</button></a>
            </div>
            </div>
        </div>
    </nav>

<?php include "footer.php"; ?>