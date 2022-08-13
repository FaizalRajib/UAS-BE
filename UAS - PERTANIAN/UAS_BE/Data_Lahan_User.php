<?php
    include "UI/header.php";
    include "config.php";
    session_start();

    if(!isset($_SESSION["login"]) && (!isset($_SESSION['id']))){
    // if(!isset($_SESSION['id'])){
    // if(!isset($_SESSION["login"])){
        echo "<script>
                        alert('User Berhasil Ditambahkan!'); 
                    </script>";
        header("Location: Login.php");
        exit;
    }

    // if(!isset($_SESSION["login"])){
    //     header("Location: Login.php");
    //     exit;
    // }
?>
 <title>Pakoko | .... </title>

</head>
<body>
    <?php 
        include "UI/nav.php";
    ?>
    <div class="container mt-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Kecamatan</th>
                    <th>Alamat</th>
                    <th>Luas Lahan</th>
                    <th>Jumlah Tenaga</th>
                    <th>No Hp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM v_master WHERE id_akun='$_SESSION[id]'");
                    while ($data = mysqli_fetch_array($query)){
                ?> 
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nm_lengkap'] ?></td>
                    <td><?= $data['nm_kec'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['L_Lahan'] ?></td>
                    <td><?= $data['J_Tenaga'] ?></td>
                    <td><?= $data['no_hp'] ?></td>
                    <td>
                        <a href="Edit.php?id=<?= $data['id']?>" class="btn btn-primary">Detail</a>
                        <!-- <a href="" class="btn btn-warning">Edit</a> -->
                        <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
        
    </div>
<?php include "UI/footer.php";?>