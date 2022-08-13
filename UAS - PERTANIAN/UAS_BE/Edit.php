<?php
    include "UI/header.php";
    include "config.php";

    $id = $_GET['id'];
    $query2 = mysqli_query($koneksi, "SELECT * FROM v_master WHERE id='$id'");
    $data2 = mysqli_fetch_array($query2);
    // var_dump($data2);
    
    session_start();

    if(!isset($_SESSION["login"])&& (!isset($_SESSION['id']))){
        header("Location: Login.php");
        exit;
    }
    $message = '';


    if(isset($_POST['submit'])){

        if (ubah($_POST) > 0) {
            $message = "Data Berhasil di Ubah";

            if(!empty($message)) :
                echo"
                <script>
                  alert('Data Berhasil Di Update');
                  document.location.href = 'Data_Lahan_User.php';
                </script>
              ";  
            endif;
        } else {
            echo"gagal";
        }
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
                        <input type="hidden" name="id" value="<?= $data2['id'] ?>">
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="Nama Pemilik Lahan" value="<?= $data2['nm_lengkap']; ?>" require>
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
                                    <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat Lengkap" required value="<?= $data2['alamat'];?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Luas Lahan</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" id="colFormLabel" placeholder="Luas Lahan" name="Luas_lahan" required value="<?= $data2['L_Lahan'];?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah Tenaga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="Jumlah Tenaga Yang Dibutuhkan" name="jumlah_tenaga" required value="<?= $data2['J_Tenaga'];?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="No HP" name="NO_HP" required value="<?= $data2['no_hp'];?>">
                                </div>
                            </div>
                        
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
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