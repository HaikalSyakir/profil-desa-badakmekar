<!DOCTYPE html>
<html lang="en">

<head>

    <title>Desa Badak Mekar</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="images/Lambang_Kecamatan.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>

    <!-- PRE LOADER -->
    {{-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> --}}


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="images/Lambang_Kecamatan.png" width="40px" height="40px" style="margin-right: 15px"
                        alt="">
                    Desa Badak Mekar
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="{{ route('tentang') }}" class="smoothScroll">Tentang</a></li>
                    <li><a href="{{ route('layanan.index') }}" class="smoothScroll">Layanan</a></li>
                    <li><a href="{{ route('layanan.index') }}" class="smoothScroll">Lembaga</a></li>
                    <li><a href="{{ route('wisata.index') }}" class="smoothScroll">Wisata</a></li>
                    <li><a href="{{ route('apbdes') }}" class="smoothScroll">APBDes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://web.facebook.com/profile.php?id=100087774984167&locale=id_ID"><i
                                class="fa fa-facebook-square"></i></a></li>
                    <li><a href="https://www.instagram.com/kantordesabm"><i class="fa fa-instagram"></i></a></li>
                    {{-- <li class="section-btn"><a href="#kontak" class="smoothScroll">Hubungi Kami</a></li> --}}
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
        <img src="images/Kantor_Desa.jpeg" alt="Background Image" class="background-image">
        <div class="overlay"></div>
        <div class="container" style="z-index: 3">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1 style="margin-bottom: 10px;">Desa Badak Mekar, Kecamatan Muara Badak</h1>
                        <p style="color: white; opacity:0.8; margin-bottom:30px;">
                            Website Desa Badak Mekar, salah satu desa di Kecamatan Muara Badak,
                            Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur, Indonesia.
                        </p>
                        <a href="#about" class="btn section-btn smoothScroll">Tentang Kami</a>
                        <span>
                            {{-- CALL US (+66) 010-020-0340
                            <small>For any inquiry</small> --}}
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/TwgGeebQxP4?si=jYrQ2pKSTKD6XBEu" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5" style="padding-bottom: 80px;">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Tentang Kami</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <p>Desa Badak Mekar adalah salah satu desa di Kecamatan Muara Badak,
                            Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur, Indonesia. </p>
                        <p>Kantor Desa Badak Mekar
                            akan mudah ditemukan karena lokasi yang tepat di pinggir jalan poros
                            Samarinda-Bontang, tepatnya di KM 45.</p>
                        <p>Kantor desa ini tidak hanya menjadi pusat pelayanan administratif tetapi juga menjadi pusat
                            informasi dan koordinasi berbagai kegiatan desa.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-info skill-thumb">

                        <strong>Luas Wilayah</strong>
                        <span class="pull-right" style="color: #6cbb94">5,500 Ha</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Fasilitas Umum</strong>
                        <span class="pull-right" style="color: #6cbb94">19 Buah</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Total Penduduk</strong>
                        <span class="pull-right" style="color: #6cbb94">1.215 Jiwa</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Pangan</strong>
                        <span class="pull-right" style="color: #6cbb94">Rp210.000.000</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map" style="height: 250px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57768.467595760085!2d117.21468856991173!3d-0.29713509102920654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5de7cd2cf29ff%3A0xd6e61fc48b77777a!2sBadak%20Mekar%2C%20Muara%20Badak%2C%20Kutai%20Kartanegara%20Regency%2C%20East%20Kalimantan!5e1!3m2!1sen!2sid!4v1721790203148!5m2!1sen!2sid"
                            width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- BLOG -->
    <section id="blog" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Layanan Kami</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                @php
                    use Illuminate\Support\Str;
                @endphp

                @foreach ($layanan->take(2) as $item)
                    <div class="col-md-6 col-sm-6">
                        <!-- BLOG THUMB -->
                        <div class="media blog-thumb">
                            <div class="media-object media-left">
                                <img src="images/blog-image1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="media-body blog-info">
                                <h3>{{ $item->nama_layanan }}</h3>
                                <p>{{ Str::words($item->deskripsi_layanan, 12, '...') }}</p>
                                <a href="{{ route('layanan.show', $item->ID) }}" class="btn section-btn">Lihat
                                    ></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 col-sm-12" style="padding-top: 50px;">
                    <div class="section-title" style="margin-bottom: 0px">
                        <a href="{{ route('layanan.index') }}" class="btn-lanjut">Lebih Lanjut</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Wisata</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                @if (count($wisata) == 4)
                    @foreach ($wisata as $item)
                        <div class="col-md-3 col-sm-6">
                            <!-- WORK THUMB -->
                            <div class="work-thumb">
                                <a href="{{ route('wisata.show', $item->ID) }}">
                                    <img src="{{ $item->gambar_wisata }}" alt="Work">

                                    <div class="work-info">
                                        <h3>{{ $item->nama_wisata }}</h3>
                                        <small style="color: white;">{{ $item->kategori_wisata }}</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach ($wisata as $item)
                        <div class="col-md-12 col-sm-12">
                            <!-- WORK THUMB -->
                            <div class="work-thumb" style="height: 450px">
                                <a href="{{ route('wisata.show', $item->ID) }}">
                                    <div class="container-center">
                                        <img src="{{ $item->gambar_wisata }}" alt="Work" class="image-left">
                                    </div>
                                    <div class="work-info">
                                        <h3>{{ $item->nama_wisata }}</h3>
                                        <small style="color: white;">{{ $item->kategori_wisata }}</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                @endif

                <div class="col-md-12 col-sm-12" style="padding-top: 50px;">
                    <div class="section-title" style="margin-bottom: 0px">
                        <a href="{{ route('wisata.index') }}" class="btn-lanjut">Lebih Lanjut</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="kontak" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Kontak</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6">
                    <div class="about-info skill-thumb">

                        <strong>Whatsapp/No.Telp</strong>
                        <br>
                        <a href="tel:+628115548177" style="color: #6cbb94">+62 811-5548-177</a>
                        <br>
                        <br>

                        <strong>Email</strong>
                        <br>
                        <a href="mailto:desabadakmekar2009@gmail.com"
                            style="color: #6cbb94">desabadakmekar2009@gmail.com</a>
                        <br>
                        <br>

                        <strong>Alamat</strong>
                        <br>
                        <span style="color: #6cbb94">Jl. Poros Samarinda-Bontang KM.45 RT.03 Desa Badak Mekar, Kec.
                            Muara Badak, Kab. Kutai Kartanegara, Prov. Kalimantan Timur</span>
                        <br>
                        <br>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-info skill-thumb">

                        <strong>Facebook</strong>
                        <br>
                        <a href="https://web.facebook.com/profile.php?id=100087774984167&locale=id_ID"
                            style="color:#6cbb94">Facebook.com/Kantor Badak Mekar</a>
                        <br>
                        <br>

                        <strong>Instagram</strong>
                        <br>
                        <a href="https://www.instagram.com/kantordesabm"
                            style="color: #6cbb94">instagram.com/kantordesabm</a>
                        <br>
                        <br>


                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.762292331806!2d117.2615120744776!3d-0.3036436353405266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5df85c14d07b5%3A0xfc78b03cdf4e315d!2sKantor%20Kepala%20Desa%20Badak%20Mekar!5e0!3m2!1sen!2sid!4v1721095271918!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-12">
                    <div class="footer-thumb footer-info">
                        <h2>Desa Badak Mekar</h2>
                        <p>Website desa dibangun dengan tujuan sebagai media pelayanan publik resmi desa, yang dibangun
                            dan dikelola oleh Kelompok KKN Bina Desa 2024. Dengan memanfaatkan website, penyelenggaraan
                            pelayanan
                            publik dapat dilakukan secara cepat dan mudah.</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Tentang</h2>
                        <ul class="footer-link">
                            <li><a href="{{ route('tentang') }}#Sejarah">Sejarah</a></li>
                            <li><a href="{{ route('tentang') }}#Geografis">Geografis</a></li>
                            <li><a href="{{ route('tentang') }}#Kondisi">Masyarakat</a></li>
                            <li><a href="{{ route('tentang') }}#Pemerintah">Pemerintahan</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Layanan</h2>
                        <ul class="footer-link">
                            @foreach ($layanan as $layanan)
                                <li><a
                                        href="{{ route('layanan.show', $layanan->ID) }}">{{ $layanan->nama_layanan }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Kontak</h2>
                        <ul class="footer-link">
                            <li><a href="tel:+628115548177">Whatsapp</a></li>
                            <li><a href="https://www.instagram.com/kantordesabm">Instagram</a></li>
                            <li><a
                                    href="https://web.facebook.com/profile.php?id=100087774984167&locale=id_ID">Facebook</a>
                            </li>
                            <li><a href="mailto:desabadakmekar2009@gmail.com">Email</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                        <div class="col-md-6 col-sm-5">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2024 Desa Badak Mekar</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- MODAL -->
    <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="modal-title">
                                    <h2>Hydro Co</h2>
                                </div>

                                <!-- NAV TABS -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab"
                                            data-toggle="tab">Create an account</a></li>
                                    <li><a href="#sign_in" aria-controls="sign_in" role="tab"
                                            data-toggle="tab">Sign In</a></li>
                                </ul>

                                <!-- TAB PANES -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                        <form action="#" method="post">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name" required>
                                            <input type="telephone" class="form-control" name="telephone"
                                                placeholder="Telephone" required>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email" required>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit"
                                                value="Submit Button">
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                        <form action="#" method="post">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email" required>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit"
                                                value="Submit Button">
                                            <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
