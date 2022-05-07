<?php
    include "koneksi.php";
  
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // if(isset($_POST['nama']) and isset($_POST['kontak'])){ // Memeriksa apakah inputan nama dan kontak ada atau tidak
    //     $nama = $_POST['nama']; // membuat variabel nama untuk menampung data inputan nama
    //         $kontak = $_POST['kontak']; // membuat variabel kontak untuk menampung data inputan kontak
    //         $alamat = $_POST['alamat']; // membuat variabel kontak untuk menampung data inputan alamat
    
    //     if(!empty($nama) and (!empty($kontak))){ // Memeriksa apakah variabel nama dan kontak sudah terisi,jika sudah jalankan query dibawah
    //             $tambah=mysqli_query($koneksiku,"INSERT INTO tamu (nama, kontak, alamat) VALUES ('$nama','$kontak', '$alamat')");
                
    //             // if($tambah>0){
    //             //     header('location:http://localhost:8800/myrepo/wedding/');
    //             // }else{
    //             //     echo "gagal! silahkan coba lagi";
    //             // }
    //         if(($tambah) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    //             trigger_error('Perintah SQL Salah: ' . $tambah . ' Error: ' . $mysqli->error, E_USER_ERROR);
    //         } else { // Jika berhasil alihkan ke halaman tampil.php
    //         header('location: ../index.php');
    //         }
    //         }
    //     }
    // }

    if(isset($_POST['kirim'])){

        // ambil data dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        // apakah query simpan berhasil?
        $data = mysqli_query($koneksiku,"SELECT * FROM tamu");
        $cek = mysqli_num_rows($data);

        if($cek > 0) {
            echo "<script>
            Swal.fire({title: 'Data Nama atau Kontak Sudah digunakan',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = 'http://localhost:8800/myrepo/wedding/#kehadiran';
                }
            })</script>";
           } else {
            $query = mysqli_query($koneksiku, "INSERT INTO tamu (nama, alamat, kontak) VALUES ('$nama', '$alamat', '$kontak')");
            
            echo "<script>
            Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = 'http://localhost:8800/myrepo/wedding/#tabel_tamu';
                }
            })</script>";

        }
    
        } else {
            die("Akses dilarang...".mysqli_error);
    }
?>