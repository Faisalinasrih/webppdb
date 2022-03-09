<?php 

    require_once ("./inc/config.php");
    


 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SI PPDB Online || MAN 1 Kota Bengkulu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/logoman.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logonav.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Syarat</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Alur Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Narahubung</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Maps</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di SI PPDB Online </div>
                <div class="masthead-heading text-uppercase">MAN 1 KOTA BENGKULU</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="<?= BASEURL."/page/login.php"; ?>">Registrasi Sekarang</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Syarat Pedaftaran </h2>
                    <h3 class="section-subheading text-muted">Calon Siswa / Siswi Baru MAN 1 Kota Bengkulu</h3>
                </div>
                <div class="row text-center">
                    <img src="assets/img/pengumuman.png">
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Alur PPDB Online</h2>
                    <h3 class="section-subheading text-muted">Tahap - Tahap Penyeleksian Calon Siswa / Siswi Baru <br> MAN 1 Kota Bengkulu</h3>
                </div>
                <div class="row">
                    <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Pendaftaran Account pada Sistem Informasi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Calon Siswa diharapkan untuk melakukan pendaftaran dan pembuatan account untuk melakukan proses registrasi sebagai siswa baru dengan meninputkan Nilai Rapor dan pencetakan Kartu Ujian Seleksi</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Seleksi Sistem</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pada tahap ini sistem akan menyeleksi calon siswa / siswi berdasarkan hasil nilai rapor yang di inputkan</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Seleksi Pemberkasan dan Kompetensi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Siswa di wajibkan untuk melakukan seleksi pemberkasan dan uji kompetensi yang akan di laksanaan di Madrasah Aliyah Negeri 1 Kota Bengkulu</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Pengumuman Hasil Seleksi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Informasi kelulusan akan di informasikan di Sistem Informasi PPDB Online melauli account calon siswa / siswi masing - masing</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Input 
                                <br />
                                Data Diri Siswa/i
                                <br />
                                Baru
                            </h4>
                        </div>
                    </li>
                </ul>  
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Narahubung</h2>
                    <h3 class="section-subheading text-muted">Admin PPDB Online yang datap dihubungi</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Admin 1</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Admin 2</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Admin 3</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kunjungi Kami </h2>
                </div>
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.9521499419843!2d102.29256610000002!3d-3.8204063999999978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36ba8313e6fcc9%3A0x714509668ea47b67!2sMAN%201%20Kota%20Bengkulu!5e0!3m2!1sen!2sid!4v1644206007258!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; MAN 1 Kota Bengkulu 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/man1bengkulu_official/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mansatubengkulu?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Disclaimer</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
