@extends('layouts.master')
@section('title', 'Home')
@section('content')

<!-- Hero -->
<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style">

        <div class="site-section">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg" style="background-image: url({{asset('assets/images/big_img_1.jpeg')}})"></div>
                    <div class="contents">
                        <span class="caption">Nomads Dev</span>
                        <h2><a>Info Kesehatan dan Penyakit Menular</a></h2>
                        <p class="mb-3">
                            Kesehatan adalah suatu faktor yang sangat berharga didalam hidup. Tubuh yang sehat sanggup meringankan anda dalam melakukan bermacam – macam pekerjaan dan kesibukan tanpa kendala. Karena dengan mempunyai Raga yang bugar, tentu saja akan menghasilkan jiwa yang damai dan perasaan yang seimbang. Dilengkapi dengan fitur konsultasi dengan dokter spesialis penyakit
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg" style="background-image: url({{asset('assets/images/big_img_2.jpg')}})"></div>
                    <div class="contents">
                        <span class="caption">Nomads Dev</span>
                        <h2><a>Konsultasi Bersama Doketer Andalan</a></h2>
                        <p class="mb-3">
                            Informasi bisa menjadi pertolongan pertama untuk menjaga kesehatan dan mencegah penyakit pada diri kita. Penanganan lebih lanjut perlu tindakan medis  ke rumah sakit untuk pemeriksaan intensif yang ditangani paramedis.
                            Kehadiran info penyakit akan memudahkan user dalam mencari informasi mengenai segala penyakit menular. 
                        </p>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- End Hero -->

<!--  Contenr -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Penyakit Menular</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="post-entry-1">
                            <a href="post-single.html"><img src="{{ url($single->img) }}" alt="Image" class="img-fluid"></a>
                            <h2><a href="/penyakit/show/{{$single->title}}">{{$single->title}}</a></h2>
                            <div>
                                {!! Str::limit($single->content, 300) !!}
                            </div>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Author : {{$single->user->name}}</a>
                                <span class="date-read">Dibuat : {{$single->created_at->format('d M Y - H:i:s')}}</span> <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        @foreach ($artikels as $artikel)
                            
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image: url( {{ url($artikel->img) }} )"></div>
                            <div class="contents">
                                <h2><a href="/penyakit/show/{{$artikel->title}}">{{$artikel->title}}</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Author : {{$artikel->user->name}}</a>
                                    <span class="date-read">Dibuat : {{$artikel->created_at->format('d M Y - H:i:s')}}</span> <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                     
                    </div>
                </div>
            </div>

            {{-- Sering dibaca --}}
            <div class="col-lg-4">
                <div class="section-title">
                    <h2>Sering Dibaca</h2>
                </div>

                @php
                    $angkaAwal = 1;
                @endphp

                @foreach ($reads as $read)
                    
                <div class="trend-entry d-flex">
                    <div class="number align-self-start">{{$angkaAwal}}</div>
                    <div class="trend-contents">
                        <h2><a href="/penyakit/show/{{$read->title}}">{{$read->title}}</a></h2>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Author : {{$read->user->name}}</a>
                            <span class="date-read">Dibuat : {{$read->created_at->format('d M Y - H:i:s')}} </span></span>
                        </div>
                    </div>
                </div>
                @php
                    $angkaAwal++;
                @endphp

                @endforeach


            </div>
        </div>
    </div>
</div>
<!-- END Content -->

@endsection


