<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!-- alert swalfire -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- databtables js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/> -->
    
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <title>Undangan Digital</title>
</head>
<style>
    section {
        padding-top: 5rem;
    }

    .row .column img {
        /* margin-top: 2%; */
        /* width: 100%;
        height: 100%; */
        cursor: pointer;
        filter: grayscale(1) brightness(0.5);
    }

    .row .column img:hover {
        filter: grayscale(0) brightness(1);
        transition: 0.9 linear;
    }

    /* .row {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    .row .column {
        flex: 3.3%;
        width: auto;
        overflow: hidden;
        padding: 0 4px;
        height: 100%;
    }

*/
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WeddingKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sampul</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mempelai">Mempelai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acara">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#history">Cerita Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#maps">Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prokes">Protokol Kesehatan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a class="nav-link" href="#kehadiran">Cek Kehadiran</a>
            </ul>
        </div>
    </div>
</nav>

<body>
    <section id="sampul" class="sampul"
        style="background: url(img/leaves-gd8f220669_1280.png) no-repeat; background-size: cover; height: 40rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <h1 class="text-center mt-3">The Wedding OF</h1>
                    <img src="img/thumb-350-857988.jpg" class="img-fluid mt-5 mb-2 rounded-circle img-thumbnail"
                        style="width: 45%;" alt="">
                </div>
                <div class="col-12 text-center">
                    <hr class="w-75 bg-danger text-center position-absolute d-flex">
                    <h2 class="text-center pt-4">Mr. Rahmat S.Kom & Mrs. No Found ckckck</h2>
                    <hr class="w-75 d-flex text-center position-absolute">
                </div>
                <div class="col-8">
                <i class="fa-solid fa-calendar-days"></i> Waktu
                <i class="fa-solid fa-calendar-days"></i> Waktu
                <i class="fa-solid fa-calendar-days"></i> Waktu
                </div>
            </div>
        </div>
    </section>

    <section id="mempelai" class="mempelai bg-warning bg-dark bg-gradient">
        <div class="container">
            <div class="row justify-content-center text-light">
                <h2 class="text-light text-center">MEMPELAI</h2>
                <img src="img/basmalah-removebg-preview.png" alt="basmalah" class="w-25 text-center">
                <p class="text-light text-center">Dengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan
                    resepsi
                    pernikahan Putra-Putri
                    kami :</p>
                <img src="img/man-removebg-preview.png" alt="man"
                    class="mt-2 mb-2 img-fluid img-thumbnail rounded-circle w-25">
                <h3 class="text-center">RAHMAT S.KOM</h3>
                <h5 class="text-center mb-5">Putra Bapak heemmm dan Ibu Hemmm</h5>
                <h2 class="text-center mb-5">Dengan</h2>
                <img src="img/woman-removebg-preview.png" alt="man"
                    class="mt-2 mb-2 img-fluid img-thumbnail rounded-circle w-25">
                <h3 class="text-center">Bidadari Unkwon</h3>
                <h5 class="text-center mb-5">Putra Bapak heemmm dan Ibu Hemmm</h5>
            </div>
        </div>
    </section>

    <section id="acara" class="acara bg-secondary bg-gradient">
        <div class="container text-center">
            <div class="row">
                <h2 class="text-center mb-5">Acara</h2>
                <div class="col-lg-6 mb-3">
                    <h3>- AKAD NIKAH -</h3>
                    <h5>Tanggal : Kamis, 15 Desember 2022</h5>
                    <h5>Jam : 09:00
                        Tempat : Kediaman Mempelai Wanita <br>
                        Jl. Medan Merdeka Utara No.3 RT.02/RW.03. Gambir, Jakarta Pusat.</h5>

                    <img src="img/woman-removebg-preview.png" class="img-fluid w-25 mb-3" alt="woman">
                </div>
                <div class="col-lg-6">
                    <h3>- RESEPSI PERNIKAHAN -</h3>
                    <h5>Tanggal : Kamis, 15 Desember 2022</h5>
                    <h5>Kediaman Mempelai Pria
                        Jl. Medan Merdeka Utara No.3 RT.02/RW.03. Gambir, Jakarta Pusat.</h5>

                    <img src="img/man-removebg-preview.png" class="img-fluid w-25" alt="man">
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="galeri d-flex">
        <div class="container">
            <h2 class="text-center">Galeri Foto</h2>
            <div class="row">
                <div class="column d-flex align-content-center flex-wrap">
                    <img src="img/galeri/bride-g71649dca2_640.jpg" class="img-fluid w-25" alt="">
                    <img src="img/galeri/wedding-g56b0ef8ca_640.jpg" class="img-fluid w-25" alt="">
                    <img src="img/galeri/heart-g787d95366_640.jpg" class="img-fluid w-25" alt="">
                    <img src="img/galeri/bride-g71649dca2_640.jpg" class="img-fluid w-25" alt="">
                </div>
                <div class="column d-flex align-content-center flex-wrap">
                    <img src="img/galeri/wedding-dress-g62f69567f_640.jpg" class="img-fluid w-25 h-75" alt="">
                    <img src="img/galeri/couple-g5028352ba_640.jpg" class="img-fluid w-25 h-75" alt="">
                    <img src="img/galeri/wedding-gd01d582d5_640.jpg" class="img-fluid w-25 h-75" alt="">
                    <img src="img/galeri/portrait-g9ed57eb10_640.jpg" class="img-fluid w-25 h-75" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="history">
        <div class="container">
            <h2 class="text-center">Cerita Kami</h2>
            <!-- start one timeline -->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-circle bg-danger border">
                            &nbsp;
                        </span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card">
                        <div class="card-body border border-danger">
                            <div class="float-end">Sunday, Mar 20th 2022</div>
                            <h4 class="card-title text-muted">Pertemuan Awal</h4>
                            <p class="card-text text-muted">Kami sebenarnya baru kenal beberapa bulan lalu dan kebetulan
                                bertemu di BTN, orang tua kami ternyata saling mengenal. akhirnya baru tahu klo kami
                                sepupu 1x hehehehehe canda nikah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- one timeline end -->

            <!-- start two timeline -->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-circle bg-warning border">
                            &nbsp;
                        </span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card">
                        <div class="card-body border border-warning">
                            <div class="float-end">Sunday, Mar 20th 2022</div>
                            <h4 class="card-title text-muted">Lecturer day</h4>
                            <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- two timeline end -->

            <!-- start three timeline -->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-circle bg-success border">
                            &nbsp;
                        </span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card">
                        <div class="card-body border border-success">
                            <div class="float-end">Sunday, Mar 20th 2022</div>
                            <h4 class="card-title text-muted">Lecturer day</h4>
                            <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- three timeline end -->

            <!-- start four timeline -->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-circle bg-danger border">
                            &nbsp;
                        </span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card">
                        <div class="card-body border border-danger">
                            <div class="float-end">Sunday, Mar 20th 2022</div>
                            <h4 class="card-title text-muted">Lecturer day</h4>
                            <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- four timeline end -->

            <!-- start five timeline -->
            <div class="row">
                <div class="col-auto text-center flex-column d-none d-sm-flex">
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                    <h5 class="m-2">
                        <span class="badge rounded-circle bg-warning border">
                            &nbsp;
                        </span>
                    </h5>
                    <div class="row h-50">
                        <div class="col border-end">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
                <div class="col py-2">
                    <div class="card">
                        <div class="card-body border border-warning">
                            <div class="float-end">Sunday, Mar 20th 2022</div>
                            <h4 class="card-title text-muted">Lecturer day</h4>
                            <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- five timeline end -->
        </div>
    </section>

    <section id="maps" class="maps">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                </div>

                <div class="span4">
                    <h2>Snail mail</h2>
                    <address>
                        <strong>Hythe Window Cleaning</strong><br>
                        15 Springfield Way<br>
                        Hythe<br>
                        Kent<br>
                        United Kingdon<br>
                        CT21 5SH<br>
                        <abbr title="Phone">P:</abbr> 01234 567 890
                    </address>
                </div>
            </div>
        </div>
    </section>

    <section id="prokes" class="prokes bg-secondary bg-gradient">
        <div class="container">
            <h2 class="text-center m-2 mb-4">Protokol Kesehatan</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-3">
                    <div class="card h-100">
                        <img src="img/galeri/bride-g71649dca2_640.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card h-100">
                        <img src="img/galeri/couple-g5028352ba_640.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class=" card h-100">
                        <img src="img/galeri/heart-g787d95366_640.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tabel_tamu" class="tabel_tamu">
        <div class="container">
            <h2 class="text-center mb-2">Daftar Kehadiran Para Tamu</h2>
                <a href="#kehadiran" class="btn btn-primary mt-5 text-center mb-3" style="width:20%">Ikut Hadir</a>
            <div class="row">
			    <table id="tabelhadir" class="table table-hover table-bordered" style="width:100%">
                    <thead class="bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>
                        <?php
                        include ('includes/koneksi.php');
                            $no = 1;
                            $sql = $koneksiku->query("SELECT * from tamu");
                            while ($data= $sql->fetch_assoc()) {
                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['kontak']; ?></td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
			    </table>
                <img src="img/woman-removebg-preview.png" class="img-fluid text-center rounded-circle w-25" alt="me">
            </div>
        </div>

    <!-- Datatables net -->
	<script type="text/javascript">
    $(document).ready(function() {
    $('#tabelhadir').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true,
        "searching": true,
        "length" : 5,  
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    } );
} );
	</script>
    </section>

    <?php
        include ('includes/koneksi.php');
        $id = mysqli_query($koneksiku,"SELECT MAX(id) AS id_baru FROM tamu");
    ?>
    <section id="kehadiran" class="bg-primary bg-gradient">
        <div class="container">
            <h2 class="text-center">Konfirmasi Kehadiran</h2>
            <div class="row justify-content-center">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="name" class="form-control" disabled name="id" id="id" style="width:5%">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="name" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama...">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat..." id="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input type="name" name="kontak" class="form-control" id="kontak"
                            placeholder="Masukkan Misal: No. Wa/ Pribadi/ Bisnis...">
                    </div>
                    <button type="submit" value="kirim" name="kirim" class="btn btn-success">Kirim</button>
                    <button type="reset" value="reset" name="reset" class="btn btn-danger">Reset</button>
                
                <?php
                include ('includes/koneksi.php');
                // if(isset($_POST['kirim'])){
                //     if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //         if(isset($_POST['nama']) and isset($_POST['kontak'])){ // Memeriksa apakah inputan nama dan kontak ada atau tidak
                //             $nama = $_POST['nama']; // membuat variabel nama untuk menampung data inputan nama
                //                 $kontak = $_POST['kontak']; // membuat variabel kontak untuk menampung data inputan kontak
                //                 $alamat = $_POST['alamat']; // membuat variabel kontak untuk menampung data inputan alamat
                        
                //             if(!empty($nama) and (!empty($kontak))){ // Memeriksa apakah variabel nama dan kontak sudah terisi,jika sudah jalankan query dibawah
                //                     $tambah=mysqli_query($koneksiku,"INSERT INTO tamu (nama, kontak, alamat) VALUES ('$nama','$kontak', '$alamat')");
                //                     if ($tambah) {
                //                             echo "<script>
                //                             Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                //                             }).then((result) => {if (result.value){
                //                                 window.location = 'http://localhost:8800/myrepo/wedding/#tabel_tamu';
                //                                 }
                //                             })
                //                             </script>";
                //                             }else{
                //                             echo "<script>
                //                             Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                //                             })</script>";
                //                           }
                //                 }else{
                //                     echo "<script>
                //                     Swal.fire({title: 'Tambah Nama ataupun kontak telah digunakan',text: '',icon: 'error',confirmButtonText: 'OK'
                //                     })</script>";
                //             }
                //         }
                //     }
                // }

                //cek coba
                if(isset($_POST['kirim'])){

                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // ambil data dari formulir
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $kontak = $_POST['kontak'];
                    // apakah query simpan berhasil?
                    $data = mysqli_query($koneksiku,"SELECT * from tamu WHERE nama='$nama' OR kontak='$kontak'");
                    $cek = mysqli_num_rows($data);
            
                    if($cek > 0) {
                        echo "<script>
                        Swal.fire({title: 'Data Nama atau Kontak Sudah digunakan',text: '',icon: 'error',confirmButtonText: 'OK'
                        }).then((result) => {if (result.value){
                            window.location = 'https://undangan-nikah.hidayatrahmat2.repl.co/#kehadiran';
                            }
                        })</script>";
                       } else {
                        $query = mysqli_query($koneksiku, "INSERT INTO tamu (nama, alamat, kontak) VALUES ('$nama', '$alamat', '$kontak')");
                        
                        echo "<script>
                        Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                        }).then((result) => {if (result.value){
                            window.location = 'https://undangan-nikah.hidayatrahmat2.repl.co/#tabel_tamu';
                            }
                        })</script>";
            
                    }
                
                    } else {
                        die("Akses dilarang...".mysqli_error);
                }
            }
                
                ?>
                </form>
                <div class="col-12">
        <img src="img/basmalah-removebg-preview.png" class="img-fluid text-center w-50" alt="basmalah"></div>
            </div>
        </div>
    </section>

    <section id="footer" class="footer bg-dark bg-gradient text-light">
        <div class="container">
            <div class="row">
                <h2 class="text-center mx-auto">FOOTER</h2>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>