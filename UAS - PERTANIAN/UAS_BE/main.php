<?php 
    include "UI/header.php";
    include "config.php";
    session_start();

    // if(isset($_SESSION["login"]) && isset($_SESSION["id"])){
    // if(!isset($_SESSION['id'])){
    //     echo "<script>
    //                     alert('User Berhasil Ditambahkan!'); 
    //                 </script>";
        // header("Location: Login.php");
        // exit;
    // }
?>

    <title>Pakoko | .... </title>
</head>
<body>
    <?php include "UI/nav.php";?>
    <!-- Hero -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Mencari 
                        Buruh Tani.</h1>
                    <p><span class="fw-bold">Pakoko</span> hadir untuk membantu para buruh tani dan pemilik lahan serta mengurangi jumlah pengangguran yang sedang ada.</p>

                    <a href="#layanan"><button class="btn-lg-primary">Temukan Lahan</button></a>
                    <style>
                        .btn-lg-primary:hover{
                            width: 237px;
                            height: 70px;
                            background-color:#c5ffe8;
                            color: var(--pr-color);
                            border: none;
                            font-size: 20px;
                            font-weight: 700;
                            border-radius:3%;
                        }
                    </style>
                    <a href="#">
                        <img src="asset/Right Arrow lg.png" alt="">
                    </a>
                </div>
            </div>

            <img src="asset/Hero Image.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
            <img src="asset/Accsent 1.png" alt="" class="accsent-img h-100 position-absolute top-0 start-0">
        </div>
    </section>

    <!-- Layanan -->
        <section id="layanan">
            <div class="container py-5">
                <div class="row mt-4">
                        <h2 class="mb-2 text-center mb-5">Lahan Yang Tersedia</h2>
                        <!-- <div class="card"> -->
                            <!-- <div class="card-body"> -->
                                <?php
                                    $query = "SELECT * FROM v_master";
                                    $query_2 = mysqli_query($koneksi,$query);
                                    $query_cek = mysqli_num_rows($query_2) > 0;

                                    if($query_cek){
                                        while ($row = mysqli_fetch_assoc($query_2)) 
                                        {
                                            ?>
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row mb-2"><label for="" >Nama Lengkap : <?php echo $row['nm_lengkap']; ?> </label></div>
                                                            <div class="row mb-2"><label for="" > Kecamatan : <?php echo $row['nm_kec']; ?> </label></div>
                                                            <div class="row mb-2"><label for="" > Alamat : <?php echo $row['alamat']; ?> </label></div>
                                                            <div class="row mb-2"><label for="" > Luas Lahan : <?php echo $row['L_Lahan']; ?> </label></div>
                                                            <div class="row mb-2"><label for="" > Jumlah Tenaga : <?php echo $row['J_Tenaga']; ?> </label></div>
                                                            <div class="row mb-2"><label for="" > No HP : <?php echo $row['no_hp']; ?> </label></div>
                                                            
                                                        </div>
                                                        <!-- <div class="card-footer">
                                                            <button type="button" class="btn btn-primary">Detail</button>
                                                        </div> -->
                                                    </div>   
                                                </div>
                                            <?php
                                        }
                                    } else {
                                            echo "Not Fond";
                                    }
                                ?>
                            <!-- </div> -->
                        <!-- </div> -->
                </div>
            </div>
        </section>


<?php include "UI/footer.php"?>