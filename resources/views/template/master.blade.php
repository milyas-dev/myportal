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
                        <a href="index.html">
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
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Support</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="#">HelpDesk</a>
                                            </li>
                                            <li class=""><a href="#">Documentation</a>
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
                    <h1>Website, Landing Page dan Hosting</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <section>
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h4>Layanan kami</h4>
                    <p>Pelajar yang memerlukan bantuan untuk tugas pembuatan website aplikasi, Pemilik usaha yang ingin memiliki website agar menaikkan branding, silahkan pilih layanan kami yang tertera dibawah ini</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modal" data-bs-toggle="modal"><i class="fa fa-trophy"></i></a>

                            </div>
                            <h3>Tugas Pembuatan Website</h3>
                            <p>Kami buatkan dan jelaskan proses nya bertahap bagaimana aplikasi website dibuat</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modaldua" data-bs-toggle="modal"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Portal Website Usaha</h3>
                            <p>Agar menjangkau lebih banyak pelanggan dan menaikkan branding usaha anda</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#" data-bs-target="#modaltiga" data-bs-toggle="modal"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Add on : Online Website</h3>
                            <p>agar aplikasi website anda dapat diakses di internet dengan domain yang anda bisa sesuaikan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="call-to-action background-image p-t-100 p-b-100" style="background-image:url({{asset('assets/images/banner.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h3 class="text-light">Konsultasi gratis untuk membantu anda merancang website yang sesuai dengan kebutuhan anda</h3>
                        <p class="text-light">Tarif terjangkau sesuai dengan kebutuhan website yang anda inginkan, jangan ragu untuk bertanya, kami siap merespon dengan senang hati.</p>
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
                        <h4 class="modal-title" id="modal-label">Website Untuk Tugas Kuliah / Skripsi</h4>
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
                                <p>Anda mahasiswa yang ingin membuat website untuk tugas akhir atau skripsi ? Kami siap membantu, akan kami buatkan dan jelaskan proses pembuatan nya, harga dapat di negosiasikan.. jangan ragu untuk bertanya :)</p>
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
                        <h4 class="modal-title" id="modal-label">Landing Page / Portal Website</h4>
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
                                <p>Ayo naikkan branding usaha anda dengan membuat website pribadi yang akan meningkatkan kepercayaan pelanggan anda, konsultasi kan sekarang :)</p>
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
                        <h4 class="modal-title" id="modal-label">Layanan tambahan : Managed online website</h4>
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
                                <p>Kami bantu online kan dan memelihara website anda agar tetap beroperasi stabil, konsultasi kan gratis :)</p>
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
