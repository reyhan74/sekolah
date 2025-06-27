@extends('layouts.app')

@section('title', 'Campus Page')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Campus</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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
                <h5 class="section-title px-3"></h5>
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
                            <small class="text-uppercase">
                                Jl. Pb. Sudirman No.68, Plongko, Pare, Kec. Pare, Kabupaten Kediri, Jawa Timur 64211
                            </small>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-12 text-start px-0">
                                <a href="https://maps.app.goo.gl/zgo3SYebAtkAy8tD9" class="btn-hover btn text-white py-2 px-4">
                                    <span>Lihat disini</span>
                                </a>
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
                            <small class="text-uppercase">
                                Jl. Gede I No.30, Pare, Kec. Pare, Kabupaten Kediri, Jawa Timur 64211
                            </small>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-12 text-start px-0">
                                <a href="https://maps.app.goo.gl/vpiKEVaeGTYjqprg9" class="btn-hover btn text-white py-2 px-4">
                                    <span>Lihat disini</span>
                                </a>
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
                            <small class="text-uppercase">
                                Puhrejo, Tulungrejo, Kec. Pare, Kabupaten Kediri, Jawa Timur 54212
                            </small>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-12 text-start px-0">
                                <a href="https://maps.app.goo.gl/GQGvW5jm4qZ4EZPj9" class="btn-hover btn text-white py-2 px-4">
                                    <span>Lihat disini</span>
                                </a>
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
                            <small class="text-uppercase">
                                Dilem, Ringinrejo, Kec. Ringinrejo, Kabupaten Kediri, Jawa Timur 64176
                            </small>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-12 text-start px-0">
                                <a href="https://maps.app.goo.gl/nC2s9axDqxqzjCf39" class="btn-hover btn text-white py-2 px-4">
                                    <span>Lihat disini</span>
                                </a>
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
                            <small class="text-uppercase">
                                Gogorejo, Pandantoyo, Kec. Ngancar, Kabupaten Kediri, Jawa Timur 64291
                            </small>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-12 text-start px-0">
                                <a href="https://maps.app.goo.gl/RmRnf7AEGQ5Subvq7" class="btn-hover btn text-white py-2 px-4">
                                    <span>Lihat disini</span>
                                </a>
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
                        Canda Bhirawa Vocational School is a vocational high school that was founded in 1965. As a vocational-based educational institution, Canda Bhirawa Vocational School is committed to producing graduates who are skilled and ready to work in various industrial fields. This school offers several skills programs, including Computer and Network Engineering (TKJ), Light Vehicle Engineering (TKR), Electrical Power Installation Engineering (TITL), Industrial Automation Engineering (TOI), and Machining Engineering (TPM). With professional teaching staff and supporting facilities, Canda Bhirawa Vocational School continues to strive to improve the quality of education in order to produce graduates who are competent and competitive in the world of work and industry.
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
                <p class="text-white mb-5">
                    Mempersiapkan generasi muda skill dan mental tangguh untuk dijadikan bekal masa depan mereka.
                </p>
                <div class="position-relative mx-auto" style="max-width: 600px;">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
