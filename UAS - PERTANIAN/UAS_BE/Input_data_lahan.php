<?php
    include "UI/header.php";
    include "config.php";
    session_start();

    if(!isset($_SESSION["login"])&& (!isset($_SESSION['id']))){
        header("Location: Login.php");
        exit;
    }
    $message = '';
    if(isset($_POST['submit'])){
        // $nm_lengkap = htmlspecialchars($_POST['name']);
        // $kec = htmlspecialchars($_POST['kec']);
        // $alamat = htmlspecialchars($_POST['alamat']);
        // $LS_Lahan = htmlspecialchars($_POST['Luas_lahan']);
        // $JML_Tenaga = htmlspecialchars($_POST['jumlah_tenaga']);
        // $No_Hp = htmlspecialchars($_POST['NO_HP']);
        
        // $insert = mysqli_query($koneksi, "INSERT INTO tb_lahan (id_akun,nm_lengkap,id_kec,alamat,L_Lahan,J_Tenaga,no_hp) VALUES ('$_SESSION[id]','$nm_lengkap','$kec','$alamat','$LS_Lahan','$JML_Tenaga','$No_Hp')");
        if (tambah($_POST) > 0) {
            $message = "Data Berhasil di Input";
        } else {
            echo"gagal";
        }
        
         
        //  echo "<script>
        //                 alert('User Berhasil Ditambahkan!'); 
        //             </script>";
        // header('location:#');
    }

    $error = true;
?>
    <title>Pakoko | .... </title>

</head>
<body>
    <?php 
        include "UI/nav.php";
    ?>
    <div class="container mt-3">
        
        <?php if(!empty($message)) :?>
            <div class="alert alert-success" role="alert">
                Data Berhasil Di Input
            </div>
        <?php endif; ?>

        <div class="row justify-content-start" >
            <div class="col-sm-4">
                <img src="asset/REGISTER2.svg" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5><b>INPUT DATA LAHAN</b></h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="Nama Pemilik Lahan">
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label class="col  sm-2" >Kecematan</label>
                                <div class="col-sm-10">
                                    
                                    <select class="form-control" name="kec" id="input" required>
                                        <option selected>Pilih Kecamatan</option>
                                        <?php
                                            $query = mysqli_query($koneksi,"SELECT * FROM kec");
                                            while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?= $data['id_kec']?>"><?= $data['nm_kec']?></option>
                                        <?php }?>
                                    </select>
                                
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat Lengkap" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Luas Lahan</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="colFormLabel" placeholder="Luas Lahan" name="Luas_lahan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah Tenaga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="Jumlah Tenaga Yang Dibutuhkan" name="jumlah_tenaga" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="No HP" name="NO_HP" required>
                                </div>
                            </div>
                        
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                <!-- <button type="button" class="btn btn-warning">Edit</button> -->
                                <button type="button" class="btn btn-dark">Bersih</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
        
    </div>
<?php include "UI/footer.php";?>