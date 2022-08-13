<?php
  include "config.php";
  $id = $_GET['id'];

  if(hapus($id)){
    echo"
      <script>
        alert('Data Berhasil DIhapus');
        document.location.href = 'Data_Lahan_User.php';
      </script>
    ";
  } else {
    echo"
      <script>
        alert('Data Gagal Dihapus');
        document.location.href = 'Data_Lahan_User.php';
      </script>
    ";
}
