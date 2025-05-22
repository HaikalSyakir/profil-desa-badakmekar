<!DOCTYPE html>
<html lang="en">

<head>

    <title>APBDes - Desa Badak Mekar</title>

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
        <img src="images/Kantor_Desa.jpeg" alt="Background Image" class="background-image">
        <div class="overlaywisata"></div>
        <div class="container" style="z-index: 3">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1 style="margin-bottom: 10px; margin-top:10px;">Anggaran Pendapatan dan Belanja Desa Badak
                            Mekar</h1>
                        <p style="color: white; opacity:0.8; margin-bottom:30px;">
                            Selamat datang di halaman Anggaran Pendapatan dan Belanja Desa Badak Mekar. Di sini, Anda
                            dapat melihat transparansi dan akuntabilitas penggunaan anggaran di Desa Badak Mekar,
                            Kecamatan Muara Badak, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur, Indonesia.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/DCCZg67cQ6g?si=7AfMNfQKDQQ0vNC_" frameborder="0"
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
                        <h2>Rincian Anggaran Pendapatan Desa</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Uraian</th>
                                <th>Volume</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>4.2</b></td>
                                <td>Pendapatan</td>
                                <td></td>
                                <td></td>
                                <td>4,707,705,800.00</td>
                            </tr>
                            <tr>
                                <td><b>4.2.1</b></td>
                                <td>Pendapatan Transfer</td>
                                <td></td>
                                <td></td>
                                <td>4,705,705,800.00</td>
                            </tr>
                            <tr>
                                <td>4.2.1.01</td>
                                <td>Dana Desa</td>
                                <td></td>
                                <td></td>
                                <td>771,676,000.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Dana Desa (DD)</td>
                                <td>1 Tahun</td>
                                <td>771,676,000.00</td>
                                <td>771,676,000.00</td>
                            </tr>
                            <tr>
                                <td><b>4.2.2</b></td>
                                <td>Bagi Hasil Pajak dan Retribusi</td>
                                <td></td>
                                <td></td>
                                <td>76,229,600.00</td>
                            </tr>
                            <tr>
                                <td>4.2.2.01</td>
                                <td>Bagi Hasil Pajak dan Retribusi Daerah Kabupaten/Kota (BHPRD)</td>
                                <td>1 Tahun</td>
                                <td>76,229,600.00</td>
                                <td>76,229,600.00</td>
                            </tr>
                            <tr>
                                <td><b>4.2.3</b></td>
                                <td>Alokasi Dana Desa</td>
                                <td></td>
                                <td></td>
                                <td>3,143,135,500.00</td>
                            </tr>
                            <tr>
                                <td>4.2.3.01</td>
                                <td>Alokasi Dana Desa (ADD)</td>
                                <td>1 Tahun</td>
                                <td>3,143,135,500.00</td>
                                <td>3,143,135,500.00</td>
                            </tr>
                            <tr>
                                <td><b>4.2.4</b></td>
                                <td>Bantuan Keuangan dari APBD Provinsi</td>
                                <td></td>
                                <td></td>
                                <td>75,000,000.00</td>
                            </tr>
                            <tr>
                                <td>4.2.4.01</td>
                                <td>Bantuan Keuangan Provinsi (PBP)</td>
                                <td>1 Tahun</td>
                                <td>75,000,000.00</td>
                                <td>75,000,000.00</td>
                            </tr>
                            <tr>
                                <td><b>4.2.5</b></td>
                                <td>Bantuan Keuangan dari APBD Kabupaten/Kota</td>
                                <td></td>
                                <td></td>
                                <td>639,564,700.00</td>
                            </tr>
                            <tr>
                                <td>4.2.5.01</td>
                                <td>Bantuan Keuangan dari APBD Kabupaten/Kota (PBK)</td>
                                <td>1 Tahun</td>
                                <td>500,000,000.00</td>
                                <td>500,000,000.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>BKD NAKES</td>
                                <td>1 Tahun</td>
                                <td>53,714,700.00</td>
                                <td>53,714,700.00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>BKD POSYANDU</td>
                                <td>1 Tahun</td>
                                <td>85,950,000.00</td>
                                <td>85,950,000.00</td>
                            </tr>
                            <tr>
                                <td><b>4.3</b></td>
                                <td>Pendapatan Lain-lain</td>
                                <td></td>
                                <td></td>
                                <td>2,000,000.00</td>
                            </tr>
                            <tr>
                                <td><b>4.3.6</b></td>
                                <td>Bunga Bank</td>
                                <td></td>
                                <td></td>
                                <td>2,000,000.00</td>
                            </tr>
                            <tr>
                                <td>4.3.6.01</td>
                                <td>Bunga Bank</td>
                                <td>1 Tahun</td>
                                <td>2,000,000.00</td>
                                <td>2,000,000.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">Jumlah Pendapatan</th>
                                <th>Rp4,707,705,800.00</th>
                            </tr>
                        </tfoot>
                    </table>
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
                        <h2>Rinciang Anggaran Pembiayaan Desa</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <table border="1">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Uraian</th>
                            <th>Volume</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>6</b></td>
                            <td>Pembiayaan</td>
                            <td></td>
                            <td></td>
                            <td>114,651,327.36</td>
                        </tr>
                        <tr>
                            <td><b>6.1</b></td>
                            <td>Penerimaan Pembiayaan</td>
                            <td></td>
                            <td></td>
                            <td>114,651,327.36</td>
                        </tr>
                        <tr>
                            <td><b>6.1.1</b></td>
                            <td>SILPA Tahun Sebelumnya</td>
                            <td></td>
                            <td></td>
                            <td>114,651,327.36</td>
                        </tr>
                        <tr>
                            <td>6.1.1.01</td>
                            <td>SILPA ADD</td>
                            <td>1 Tahun</td>
                            <td>37,147,591.25</td>
                            <td>37,147,591.25</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA DD</td>
                            <td>1 Tahun</td>
                            <td>42,564,250.00</td>
                            <td>42,564,250.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA BHPRD</td>
                            <td>1 Tahun</td>
                            <td>3,596,000.00</td>
                            <td>3,596,000.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA BANK EU</td>
                            <td>1 Tahun</td>
                            <td>588,000.00</td>
                            <td>588,000.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA BKDD Nakes</td>
                            <td>1 Tahun</td>
                            <td>17,950,000.00</td>
                            <td>17,950,000.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA BKDD Posyandu</td>
                            <td>1 Tahun</td>
                            <td>12,400,000.00</td>
                            <td>12,400,000.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>SILPA CSR</td>
                            <td>1 Tahun</td>
                            <td>600,000.00</td>
                            <td>600,000.00</td>
                        </tr>
                        <tr>
                            <td><b>6.2</b></td>
                            <td>Pengeluaran Pembiayaan</td>
                            <td></td>
                            <td></td>
                            <td>100,000,000.00</td>
                        </tr>
                        <tr>
                            <td><b>6.2.2</b></td>
                            <td>Penyertaan Modal Desa</td>
                            <td></td>
                            <td></td>
                            <td>100,000,000.00</td>
                        </tr>
                        <tr>
                            <td>6.2.2.01</td>
                            <td>Penyertaan Modal Desa Untuk BUMDes Mekar Sejahtera</td>
                            <td></td>
                            <td></td>
                            <td>100,000,000.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Pembiayaan Netto</th>
                            <th>Rp14,651,327.36</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>


    <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Laporan Realisasi APB Desa</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>


                <table border="1">
                    <thead>
                        <tr>
                            <th>Uraian</th>
                            <th>Ref.</th>
                            <th>Anggaran (Rp)</th>
                            <th>Realisasi (Rp)</th>
                            <th>Lebih/(Kurang)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5"><b>PENDAPATAN</b></td>
                        </tr>
                        <tr>
                            <td>Pendapatan Transfer</td>
                            <td></td>
                            <td>4,705,705,800.00</td>
                            <td>1,956,220,360.00</td>
                            <td>2,749,485,440.00</td>
                        </tr>
                        <tr>
                            <td>Dana Desa</td>
                            <td></td>
                            <td>771,676,000.00</td>
                            <td>371,028,400.00</td>
                            <td>400,647,600.00</td>
                        </tr>
                        <tr>
                            <td>Bagi Hasil Pajak dan Retribusi</td>
                            <td></td>
                            <td>76,229,600.00</td>
                            <td>76,229,600.00</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>Alokasi Dana Desa</td>
                            <td></td>
                            <td>3,143,135,500.00</td>
                            <td>1,119,267,660.00</td>
                            <td>2,023,837,840.00</td>
                        </tr>
                        <tr>
                            <td>Bantuan Keuangan Provinsi</td>
                            <td></td>
                            <td>75,000,000.00</td>
                            <td>0.00</td>
                            <td>75,000,000.00</td>
                        </tr>
                        <tr>
                            <td>Bantuan Keuangan Kabupaten/Kota</td>
                            <td></td>
                            <td>639,664,700.00</td>
                            <td>389,664,700.00</td>
                            <td>250,000,000.00</td>
                        </tr>
                        <tr>
                            <td>Pendapatan Lain-lain</td>
                            <td></td>
                            <td>2,000,000.00</td>
                            <td>0.00</td>
                            <td>2,000,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Jumlah Pendapatan</b></td>
                            <td><b>Rp4,707,705,800.00</b></td>
                            <td><b>Rp1,956,220,360.00</b></td>
                            <td><b>Rp2,751,485,440.00</b></td>
                        </tr>
                        <tr>
                            <td colspan="5"><b></b></td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>BELANJA</b></td>
                        </tr>
                        <tr>
                            <td>Bidang Penyelenggaraan Pemerintahan Desa</td>
                            <td></td>
                            <td>2,136,732,927.36</td>
                            <td>740,346,997.00</td>
                            <td>1,386,385,930.36</td>
                        </tr>
                        <tr>
                            <td>Bidang Pelaksanaan Pembangunan Desa</td>
                            <td></td>
                            <td>1,253,374,200.00</td>
                            <td>807,579,450.00</td>
                            <td>445,794,750.00</td>
                        </tr>
                        <tr>
                            <td>Bidang Pemberdayaan Masyarakat</td>
                            <td></td>
                            <td>282,000,000.00</td>
                            <td>187,500,000.00</td>
                            <td>94,500,000.00</td>
                        </tr>
                        <tr>
                            <td>Bidang Penanggulangan Bencana, Darurat dan Mendesak Desa</td>
                            <td></td>
                            <td>112,625,600.00</td>
                            <td>37,350,000.00</td>
                            <td>75,275,600.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Jumlah Belanja</b></td>
                            <td><b>Rp4,722,357,127.36</b></td>
                            <td><b>Rp1,496,914,947.00</b></td>
                            <td><b>Rp3,225,442,180.36</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Surplus / (Defisit)</b></td>
                            <td><b>Rp14,651,327.36</b></td>
                            <td><b>Rp459,305,413.00</b></td>
                            <td><b>Rp473,956,740.36</b></td>
                        </tr>
                        <tr>
                            <td colspan="5"><b></b></td>
                        </tr>
                        <tr>
                            <td colspan="5"><b>PEMBIAYAAN</b></td>
                        </tr>
                        <tr>
                            <td>Penerimaan Pembiayaan</td>
                            <td></td>
                            <td>114,651,327.36</td>
                            <td>114,651,327.36</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>Pengeluaran Pembiayaan</td>
                            <td></td>
                            <td>100,000,000.00</td>
                            <td>0.00</td>
                            <td>100,000,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pembiayaan Netto</b></td>
                            <td><b>Rp14,651,327.36</b></td>
                            <td><b>Rp114,651,327.36</b></td>
                            <td><b>Rp100,000,000.00</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>SILPA/SILPA Tahun Berjalan</b></td>
                            <td><b>Rp0.00</b></td>
                            <td><b>Rp573,956,740.36</b></td>
                            <td><b>Rp573,956,740.36</b></td>
                        </tr>
                    </tbody>
                </table>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
