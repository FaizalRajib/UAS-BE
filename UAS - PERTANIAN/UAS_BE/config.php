<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pakok_db";

    $koneksi = mysqli_connect($servername,$username,$password,$dbname);

    // function registrasi($data){
    //     global $koneksi;
    // }

    function registrasi($data) {
    global $koneksi;
 
    $nama = mysqli_real_escape_string($koneksi, $data["FullName"]);
    $usernm = mysqli_real_escape_string($koneksi, $data["Username"]);
    $email = strtolower(stripslashes($data["email"]));
    $nohp = mysqli_real_escape_string($koneksi, $data["Nohp"]);
    $posisi = mysqli_real_escape_string($koneksi, $data["posisi"]);
    $pw = mysqli_real_escape_string($koneksi, $data["pw"]);
    $cpw = mysqli_real_escape_string($koneksi, $data["cpw"]);

    if( $pw != $cpw) {
        echo "<script>
                alert('Komfirmasi Password gagal!'); 
            </script>";
        return false;
        }
     $pw = password_hash($pw, PASSWORD_DEFAULT);
    // mysqli_query($koneksi, "INSERT INTO tb_akun (full_nm,username,password,email,no_hp,posisi) VALUES('$nama','$usernm','$pw','$email','$nohp','$posisi')");
    mysqli_query($koneksi, "INSERT INTO tb_akun (full_nm,username,password,email,no_hp,posisi) VALUES('$nama','$usernm','$pw','$email','$nohp','$posisi')");

    return mysqli_affected_rows($koneksi);
    }

    function Tambah($data){
        global $koneksi;

        $nm_lengkap = htmlspecialchars($data['name']);
        $kec = htmlspecialchars($data['kec']);
        $alamat = htmlspecialchars($data['alamat']);
        $LS_Lahan = htmlspecialchars($data['Luas_lahan']);
        $JML_Tenaga = htmlspecialchars($data['jumlah_tenaga']);
        $No_Hp = htmlspecialchars($data['NO_HP']);
        
        $insert = "INSERT INTO tb_lahan (id_akun,nm_lengkap,id_kec,alamat,L_Lahan,J_Tenaga,no_hp) VALUES ('$_SESSION[id]','$nm_lengkap','$kec','$alamat','$LS_Lahan','$JML_Tenaga','$No_Hp')";

        mysqli_query($koneksi, $insert);
        return mysqli_affected_rows($koneksi);
        
    }

    function hapus($id){
        global $koneksi;

        mysqli_query($koneksi, "DELETE FROM tb_lahan WHERE id = $id");
        return mysqli_affected_rows($koneksi);
    }

    function query($query){
        global $koneksi;

        $result = mysqli_query($koneksi, "");
    }

    function ubah($data){
        global $koneksi;

        $id = $data['id'];
        $nm_lengkap = htmlspecialchars($data['name']);
        $kec = htmlspecialchars($data['kec']);
        $alamat = htmlspecialchars($data['alamat']);
        $LS_Lahan = htmlspecialchars($data['Luas_lahan']);
        $JML_Tenaga = htmlspecialchars($data['jumlah_tenaga']);
        $No_Hp = htmlspecialchars($data['NO_HP']);
        
        $update = "UPDATE tb_lahan SET 
                    nm_lengkap = '$nm_lengkap'
                    WHERE id=$id"
                ;

        mysqli_query($koneksi, $update);
        return mysqli_affected_rows($koneksi);
    }
?>