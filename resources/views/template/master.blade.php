<!DOCTYPE html>
<html lang="en">

@include('template.head')
<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{ route('index')}}">
                            <span class="logo-default"><img src="{{ asset('assets/images/logo.png') }}" alt="" width="250" height="auto"></span>
                            <span class="logo-dark"><img src="{{ asset('assets/images/logo.png') }}" alt="" width="250" height="auto"></span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->

                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index')}}">Home</a></li>
                                    <li class="dropdown"><a href="{{ route('index')}}">Support</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="{{ route('index')}}">HelpDesk</a>
                                            </li>
                                            <li class=""><a href="{{ route('index')}}">Documentation</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" class="text-light" data-bg-parallax="{{ asset('assets/images/banner.jpg') }}">
            <div class="container">
                <div class="page-title">
                    <h1>Bangun Online Presence Anda <br> "Website, Landing Page dan Manajemen"</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <section>
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h4>Layanan kami</h4>
                    <p>Jika Anda seorang pelajar yang membutuhkan bantuan dalam pembuatan website atau aplikasi, atau pemilik usaha yang ingin meningkatkan branding melalui website, kami menawarkan berbagai layanan yang dapat memenuhi kebutuhan Anda. Silakan pilih layanan yang sesuai dengan kebutuhan Anda dari daftar yang tertera di bawah ini.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modal" data-bs-toggle="modal"><i class="fa fa-trophy"></i></a>

                            </div>
                            <h3>Tugas Pembuatan Website</h3>
                            <p>Kami Membantu Anda Membangun Website Aplikasi dari Awal hingga Selesai, Dengan bimbingan proses yang Jelas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modaldua" data-bs-toggle="modal"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Portal Website Usaha</h3>
                            <p>Agar Usaha Anda Dapat Menjangkau Lebih Banyak Pelanggan dan Meningkatkan Branding Secara Signifikan</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modaltiga" data-bs-toggle="modal"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Add on : Online Website</h3>
                            <p>Menyediakan Solusi Lengkap Agar Aplikasi Website Anda Dapat Diakses di Internet Secara Optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="call-to-action background-image p-t-100 p-b-100" style="background-image:url({{asset('assets/images/banner.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h3 class="text-light">Diskusikan Kebutuhan Anda dengan Kami untuk Merancang Website yang Tepat Sesuai Kebutuhan Anda. Tanpa Biaya Tambahan.</h3>
                        <p class="text-light">Kami Menawarkan Tarif Terjangkau yang Disesuaikan dengan Kebutuhan Website Anda. Jangan Ragu untuk Menghubungi Kami, Dengan Senang Hati Akan Merespons Pertanyaan dan Membantu Anda Menyusun Solusi yang Ideal.</p>
                    </div>
                    <div class="col-lg-2"> <a class="btn btn-success btn-outline" style="color: white">Whatssapp kami</a> </div>
                </div>
            </div>
        </div>

        {{-- modal disini --}}

        <div class="modal fade" id="modal" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">Bimbingan Website Untuk Tugas Kuliah atau Skripsi</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ asset('assets/images/person.png') }}" alt="" width="200" height="auto" class="mb-5">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Anda Seorang Mahasiswa yang akan melakukan Tugas Akhir atau Skripsi yang berkaitan pembuatan website informatika ? Kami Siap Membantu Anda! Layanan bimbingan Proses Pembuatan website Secara Terperinci. Jangan Ragu untuk Bertanya!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-b" data-bs-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-success btn-b">Konsultasi Gratis</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaldua" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">Landing Page atau Portal Website</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ asset('assets/images/person.png') }}" alt="" width="200" height="auto" class="mb-5">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Tingkatkan Branding Usaha Anda dengan Membangun Website Pribadi yang Mampu Meningkatkan Kepercayaan Pelanggan Anda. Dapatkan Konsultasi Gratis Sekarang dan Mulai Proses Pembuatan Website Anda!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-b" data-bs-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-success btn-b">Konsultasi Gratis</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaltiga" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">Layanan Managed Online Website</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ asset('assets/images/person.png') }}" alt="" width="200" height="auto" class="mb-5">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Kami Membantu Anda Meng-online-kan dan Memelihara Website Anda Agar Tetap Beroperasi dengan Stabil. Nikmati Konsultasi Gratis untuk Mendapatkan Solusi Terbaik dan Dukungan dari Kami!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-b" data-bs-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-success btn-b">Konsultasi Gratis</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('template.footer')
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!--Template functions-->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>
