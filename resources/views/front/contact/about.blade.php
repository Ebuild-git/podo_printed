@extends('front.fixe')
@section('titre', 'Contact')
@section('body')
<main>

    @php
    $config = DB::table('configs')->first();

    @endphp


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-us-image">
                        <div class="about-img">

                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-indicators">
                                    @if ($config && $config->photos)
                                    @foreach (json_decode($config->photos, true) as $index => $photo)
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                    @endif
                                </div>


                                <div class="carousel-inner">
                                    @if ($config && $config->photos)
                                    @foreach (json_decode($config->photos, true) as $index => $photo)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ Storage::url($photo) }}" class="d-block w-100" alt="Image">
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="carousel-item active"  style="color: #119093">
                                        <p class="text-center">Aucune image disponible</p>
                                    </div>
                                    @endif
                                </div>

                                <!-- Contrôles -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Précédent</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Suivant</span>
                                </button>
                            </div>
                            <style>
                                .carousel-inner img {
                                    height: 500px;
                                    object-fit: cover;
                                }

                                .carousel-item {
                                    text-align: center;
                                    background-color: #f8f9fa;
                                }

                            </style>

                            <!-- Company Experience Box Start -->
                           {{--  <div class="company-experience">
                                <div class="icon-box">
                                    <img src="images/icon-experience.svg" alt="">
                                </div>
                                <div class="company-experience-content">
                                    <h3><span class="counter">15</span>+</h3>
                                    <p>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos5  ?? '' ) }}</p>
                                </div>
                            </div> --}}
                            <!-- Company Experience Box End -->
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos) }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s"  style="color: #119093"> {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos) !!}


                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About List Item Start -->
                            <div class="solution-plan-body wow fadeInUp"  data-wow-delay="0.5s">
                                <ul>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos1 ?? ' ') }}</h3></li>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos2 ?? ' ') }}</h3></li>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos3 ?? ' ') }}</h3></li>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos4 ?? ' ') }}</h3></li>

                                </ul>
                            </div>

                            <!-- About List Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer">

                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!--  About Us End -->




</main>
@endsection
