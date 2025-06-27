@extends('layouts.app')

@section('title', 'Campus Page')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">campus</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Campus</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h1 class="mb-0">Kampus SMK Canda Bhirawa</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            <!-- Kampus 1 -->
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('img/baru/image.png') }}" height="250px" alt="Kampus 1">
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Kampus 1</h5>
                        <small class="text-uppercase">Jl. Pb. Sudirman No.68, Plongko, Pare, Kabupaten Kediri</small>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-12 text-center px-0">
                            <a href="https://maps.app.goo.gl/zgo3SYebAtkAy8tD9" class="btn btn-primary text-white py-2 px-4">Lihat di sini</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kampus 2 -->
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('img/baru/Screenshot211404.png') }}" height="250px" alt="Kampus 2">
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Kampus 2</h5>
                        <small class="text-uppercase">Jl. Gede I No.30, Pare, Kabupaten Kediri</small>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-12 text-center px-0">
                            <a href="https://maps.app.goo.gl/vpiKEVaeGTYjqprg9" class="btn btn-primary text-white py-2 px-4">Lihat di sini</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kampus 3 -->
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('img/baru/Screenshot210345.png') }}" height="250px" alt="Kampus 3">
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Kampus 3</h5>
                        <small class="text-uppercase">Puhrejo, Tulungrejo, Pare, Kabupaten Kediri</small>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-12 text-center px-0">
                            <a href="https://maps.app.goo.gl/GQGvW5jm4qZ4EZPj9" class="btn btn-primary text-white py-2 px-4">Lihat di sini</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kampus 4 -->
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('img/baru/Screenshot(10).png') }}" height="250px" alt="Kampus 4">
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Kampus 4</h5>
                        <small class="text-uppercase">Dilem, Ringinrejo, Kabupaten Kediri</small>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-12 text-center px-0">
                            <a href="https://maps.app.goo.gl/nC2s9axDqxqzjCf39" class="btn btn-primary text-white py-2 px-4">Lihat di sini</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kampus 5 -->
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('img/baru/Screenshot(9).png') }}" height="250px" alt="Kampus 5">
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Kampus 5</h5>
                        <small class="text-uppercase">Gogorejo, Pandantoyo, Ngancar, Kabupaten Kediri</small>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-12 text-center px-0">
                            <a href="https://maps.app.goo.gl/RmRnf7AEGQ5Subvq7" class="btn btn-primary text-white py-2 px-4">Lihat di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Tour Booking Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="text-white mb-4">Canda Bhirawa</h1>
                <p class="text-white mb-4">
                    SMK Canda Bhirawa adalah sekolah kejuruan yang berdiri sejak 1965, menawarkan program keahlian seperti TKJ, TKR, TITL, TOI, dan TPM. Sekolah ini berkomitmen mencetak lulusan yang siap kerja dengan fasilitas lengkap dan tenaga pengajar profesional.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Canda Bhirawa Vocational High School</h5>
            <h1 class="text-white mb-4">Terakreditasi A</h1>
            <p class="text-white mb-5">Mempersiapkan generasi muda dengan skill dan mental tangguh untuk masa depan.</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->
@endsection

@section('styles')
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
@endsection

@section('scripts')
<!-- jQuery + Owl Carousel JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".packages-carousel").owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            dots:true,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                0:{ items:1 },
                576:{ items:2 },
                992:{ items:3 }
            }
        });
    });
</script>
@endsection
