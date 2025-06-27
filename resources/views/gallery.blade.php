@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Gallery SMK CANDA BHIRAWA</h3>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Gallery</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Gallery</h5>
        <h1 class="mb-4">Gallery SMK CB dan Kegiatan SMK</h1>
        <p class="mb-0">Di SMK Canda Bhirawa, siswa terlibat dalam berbagai kegiatan menarik seperti Karya Ilmiah Siswa (KYS) untuk pengembangan penelitian ilmiah, perayaan Dies Natalis yang penuh semangat, pembelajaran interaktif dengan metode yang beragam, serta proyek penguatan karakter pelajar Pancasila melalui kegiatan masyarakat.</p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                    <span class="text-dark" style="width: 150px;">All</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                    <span class="text-dark" style="width: 150px;">KTS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                    <span class="text-dark" style="width: 150px;">Dies Natalis</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                    <span class="text-dark" style="width: 150px;">Pembelajaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                    <span class="text-dark" style="width: 150px;">Kegiatan P5</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                <div class="row g-2">
                    @foreach($galleryItems as $item)
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{ $item->image }}" class="img-fluid w-100 h-100 rounded" alt="{{ $item->title }}">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">{{ $item->title }}</h5>
                                    <a href="#" class="btn-hover text-white">klik <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{ $item->largeImage }}" data-lightbox="gallery-{{ $loop->index }}" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Additional Gallery Tabs -->
            <div id="GalleryTab-2" class="tab-pane fade show p-0">
                <!-- Content for KTS -->
            </div>
            <div id="GalleryTab-3" class="tab-pane fade show p-0">
                <!-- Content for Dies Natalis -->
            </div>
            <div id="GalleryTab-4" class="tab-pane fade show p-0">
                <!-- Content for Pembelajaran -->
            </div>
            <div id="GalleryTab-5" class="tab-pane fade show p-0">
                <!-- Content for Kegiatan P5 -->
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">GALLERY</h5>
            <h1 class="text-white mb-4">Gallery SMK CB dan Kegiatan SMK</h1>
            <p class="text-white mb-5">"SMK Canda Bhirawa menawarkan berbagai kegiatan menarik untuk siswa, termasuk Karya Ilmiah Siswa (KYS) yang mengembangkan kemampuan penelitian dan penulisan ilmiah, perayaan Dies Natalis yang penuh semangat dengan pameran karya, pentas seni, dan lomba kreatif, serta pembelajaran interaktif dengan berbagai metode. Proyek Penguatan Profil Pelajar Pancasila (P5) juga membantu siswa memperkuat karakter melalui partisipasi dalam kegiatan masyarakat."</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ketik pesan">
                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Kirim</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->
@endsection