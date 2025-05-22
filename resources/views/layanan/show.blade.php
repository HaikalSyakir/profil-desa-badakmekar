<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profil Layanan - Desa Badak Mekar</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="{{ asset('images/Lambang_Kecamatan.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
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
                    <img src="{{ asset('images/Lambang_Kecamatan.png') }}" width="40px" height="40px"
                        style="margin-right: 15px" alt="">
                    Desa Badak Mekar
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{ route('home') }}" class="smoothScroll">Home</a></li>
                    <li><a href="{{ route('tentang') }}" class="smoothScroll">Tentang</a></li>
                    <li><a href="{{ route('layanan.index') }}" class="smoothScroll">Layanan</a></li>
                    <li><a href="{{ route('wisata.index') }}" class="smoothScroll">Wisata</a></li>
                    <li><a href="{{ route('apbdes') }}" class="smoothScroll">APBDes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://web.facebook.com/profile.php?id=100087774984167&locale=id_ID"><i
                                class="fa fa-facebook-square"></i></a></li>
                    <li><a href="https://www.instagram.com/kantordesabm"><i class="fa fa-instagram"></i></a></li>
                    <li class="section-btn"><a href="#footer" class="smoothScroll">Hubungi Kami</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
        <img src="{{ asset('images/Kantor_Desa.jpeg') }}" alt="Background Image" class="background-image">
        <div class="overlayprofil"></div>
        <div class="container" style="z-index: 3">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1 style="margin-bottom: 10px;">{{ $layanan->nama_layanan }}</h1>
                        <p style="color: white; opacity:0.8; margin-bottom:30px;">
                            Temukan berbagai layanan untuk mendukung kebutuhan dan kesejahteraan warga Desa Badak Mekar,
                            Kecamatan Muara Badak, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur.
                        </p>
                        <a href="#about" class="btn section-btn smoothScroll">Detail ></a>
                        <span>
                            {{-- CALL US (+66) 010-020-0340
                            <small>For any inquiry</small> --}}
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/luQQEyC5Zhs?si=ftiaPeIYQ7oqqfPT" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    {{-- <section id="about" data-stellar-background-ratio="0.5" style="padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>Desa Badak Mekar adalah salah satu desa di Kecamatan Muara Badak,
                            Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur, Indonesia. </p>
                        <p>Kantor Desa Badak Mekar
                            akan mudah ditemukan karena lokasi yang tepat di pinggir jalan poros
                            Samarinda-Bontang, tepatnya di KM 45.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about-info skill-thumb">

                        <strong>Luas Wilayah</strong>
                        <span class="pull-right" style="color: #6cbb94">5,500 Ha</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Fasilitas Umum</strong>
                        <span class="pull-right" style="color: #6cbb94">19 Buah</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Total Penduduk</strong>
                        <span class="pull-right" style="color: #6cbb94">1.215 Jiwa</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Pangan</strong>
                        <span class="pull-right" style="color: #6cbb94">Rp210.000.000</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="about-info about-image">
                        <img src="images/Peta Lokasi.png" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    <!-- BLOG -->
    <section id="about" data-stellar-background-ratio="0.5" style="padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Tentang Layanan</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p> {{ $layanan->deskripsi_layanan }} </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class=" skill-thumb  tentang-tempat">
                        @if ($layanan->nama_layanan == 'Disapa Idaman')
                            <strong>Link Aplikasi</strong>
                            <br>
                            <a href="https://disapaidaman.kukarkab.go.id"
                                style="color: #6cbb94">disapaidaman.kukarkab.go.id</a>
                            <br>
                            <br>
                        @else
                            <strong>Whatsapp/No.Telp</strong>
                            <br>
                            <a href="tel:+628115548177" style="color: #6cbb94">{{ $layanan->kontak_layanan }}</a>
                            <br>
                            <br>
                        @endif
                        <strong>Alamat</strong>
                        <br>
                        <span style="color: #6cbb94">Jl. Tembus, Badak Mekar, Kec. Muara Badak,
                            Kabupaten Kutai Kartanegara, Kalimantan Timur 75382</span>


                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7616459549768!2d117.26012437447766!3d-0.30539013533963166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5dfb20c269029%3A0x629f437b9fc226e5!2sGubuk%20Semar!5e0!3m2!1sen!2sid!4v1721018831178!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Wisata</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                        <a href="images/work-image1.jpg" class="image-popup">
                            <img src="images/Gubuk Semar.png" class="img-responsive" alt="Work">

                            <div class="work-info">
                                <h3>Gubuk Semar</h3>
                                <small style="color: white;">Wisata Alam</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                        <a href="images/work-image2.jpg" class="image-popup">
                            <img src="images/work-image2.jpg" class="img-responsive" alt="Work">

                            <div class="work-info">
                                <h3>Studio Bag</h3>
                                <small>Branding</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                        <a href="images/work-image3.jpg" class="image-popup">
                            <img src="images/work-image3.jpg" class="img-responsive" alt="Work">

                            <div class="work-info">
                                <h3>Frame Design</h3>
                                <small>Photography</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                        <a href="images/work-image4.jpg" class="image-popup">
                            <img src="images/work-image4.jpg" class="img-responsive" alt="Work">

                            <div class="work-info">
                                <h3>Paint Work</h3>
                                <small>Art, Design</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12" style="padding-top: 50px;">
                    <div class="section-title" style="margin-bottom: 0px">
                        <a href="#" class="btn-lanjut">Lebih Lanjut</a>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- CONTACT -->
    {{-- <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Contact us</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">

                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" role="form" action="#" method="post">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Full Name" id="cf-name"
                                name="cf-name" required="">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" id="cf-email"
                                name="cf-email" required="">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number"
                                name="cf-number" required="">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" id="cf-budgets" name="cf-budgets">
                                <option>Budget Level</option>
                                <option>$500 to $1,000</option>
                                <option>$1,000 to $2,200</option>
                                <option>$2,200 to $4,500</option>
                                <option>$4,500 to $7,500</option>
                                <option>$7,500 to $12,000</option>
                                <option>$12,000 or more</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message"
                                required=""></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="submit" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map">
                        <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
 -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1186.1634456479414!2d117.26409273945248!3d-0.30346726148859143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5df85c14d07b5%3A0xfc78b03cdf4e315d!2sKantor%20Kepala%20Desa%20Badak%20Mekar!5e0!3m2!1sen!2sid!4v1720625919298!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


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
                            @foreach ($list as $layanan)
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
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
