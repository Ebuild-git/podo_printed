@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
<main>
    @php
    $config = DB::table('configs')->first();
    @endphp
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<div class="container-fluid px-0 mb-1">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ Storage::url($banner->image) }}" alt="Image">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>
    /* Ensure the carousel takes full width */
    .carousel-item img {
        width: 100%; /* Full width */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Maintain cover behavior */
        max-height: 70vh; /* Max height of 70% of viewport */
    }

    /* Set the carousel container to adjust height */

    /* For large screens */
    @media (min-width: 769px) {
        .carousel-item img {
            height: auto; /* Automatically adjust height */
            max-height: 500px; /* Set max height for large screens */
        }
    }

    /* For small screens */
    @media (max-width: 768px) {
        .carousel-item img {
            height: auto; /* Automatically adjust height */
            max-height: 134px; /* Set max height for smaller screens */
        }
    }
</style>




    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-us-image">
                        <div class="about-img">
                            {{-- <figure class="reveal image-anime">
                                <img src="images/about-img.jpg" alt="">
                            </figure> --}}

                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <!-- Indicateurs -->
                                <div class="carousel-indicators">
                                    @if ($config && $config->photos)
                                    @foreach (json_decode($config->photos, true) as $index => $photo)
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                    @endif
                                </div>

                                <!-- Images du carrousel -->
                                <div class="carousel-inner">
                                    @if ($config && $config->photos)
                                    @foreach (json_decode($config->photos, true) as $index => $photo)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ Storage::url($photo) }}" class="d-block w-100" alt="Image">
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="carousel-item active">
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


                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="about-content">

                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</h3>
                            {{-- <h2 class="text-anime-style-2" data-cursor="-opaque" style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos) }}</h2> --}}
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.25s"> {{ \App\Helpers\TranslationHelper::TranslateText($config->des_apropos) }} --}}

                              </div>

                        <div class="about-us-body">

                            <div class="solution-plan-body wow fadeInUp"  data-wow-delay="0.5s">
                                <ul>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos1 ?? ' ') }}</h3></li>
                                    <li>  <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos2 ?? ' ') }}</h3></li>

                                </ul>
                            </div>

                        {{--
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image_apropos1 ?? ' ') }}" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos1 ?? ' ') }}</h3>
                                </div>
                            </div>

                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image_apropos2 ?? ' ') }}" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos2 ?? ' ') }}</h3>
                                </div>
                            </div>

                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image_apropos3 ?? ' ') }}" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos3 ?? ' ') }}</h3>
                                </div>
                            </div>



                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image_apropos4 ?? ' ') }}" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos4 ?? '') }}</h3>
                                </div>
                            </div> --}}

                        </div>


                        <div class="about-us-footer">

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--  About Us End -->


    <!-- Company Counter Start -->
    <div class="company-counter" style=" background-color: #9fc52e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ Storage::url($config->icon_sta1 ?? ' ') }}" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            {{-- <h3><span class="counter">{{ $config->number_sta1 ?? ' ' }}</span></h3> --}}
                            <p style="color: white;">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_sta1 ?? '') }}</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ Storage::url($config->icon_sta2 ?? ' ') }}" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">

                            <p style="color: white;">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_sta2 ?? '') }}</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ Storage::url($config->icon_sta5 ?? ' ') }}" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                           {{--  <h3><span class="counter">{{ $config->number_sta3 ?? ' ' }}</span></h3> --}}
                            <p style="color: white;" >{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_sta3 ?? '') }}</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Company Counter Item Start -->
                    <div class="company-counter-item">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ Storage::url($config->icon_sta4 ?? ' ') }}" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Company Counter Content Start -->
                        <div class="company-counter-content">
                            {{-- <h3><span class="counter">{{ $config->number_sta4 ?? ' '  }}</span></h3> --}}
                            <p style="color: white;">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre_sta4 ?? '') }}</p>
                        </div>
                        <!-- Company Counter Content End -->
                    </div>
                    <!-- Company Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Company Counter End -->

    <!-- Gallery Carousel Section Start -->
    <div class="gallery-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Scrolling Content Start -->
                    <div class="gallery-carousel-box">
                        <div class="gallery-scrolling-content">
                            <!-- Image Item Start -->
                            @foreach ($images as $image)

                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ Storage::url($image->image ?? ' ') }}" alt="">
                                </figure>
                            </div>

                            @endforeach
                            <!-- Image Item End -->

                        </div>

                        <div class="gallery-scrolling-content">
                            <!-- Image Item Start -->
                            @foreach ($images as $image)

                            <div class="gallery-image">
                                <figure class="image-anime">
                                    <img src="{{ Storage::url($image->image ?? ' ') }}" alt="">
                                </figure>
                            </div>

                            @endforeach
                            <!-- Image Item End -->

                            <!-- Image Item Start -->

                            <style>
                                .gallery-image img {
                                    height: 200px;
                                    width: 200%;
                                    object-fit: cover;
                                }



                            </style>

                        </div>
                    </div>
                    <!-- Scrolling Content End -->
                </div>
            </div>
        </div>

    </div>
    <!-- Gallery Carousel Section End -->




    <!-- Our Team Start -->
    <div class="our-team">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Mots de notre directeur') }}</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn  wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route('all_doctors') }}" class="btn-default">{{ \App\Helpers\TranslationHelper::TranslateText('Voir tout') }}</a>
                    </div>
                    <!-- Section Button End -->
                </div>
            </div>

            <div class="row">
                @foreach ($coachs as $coach)
                @if ($coachs)
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ Storage::url($coach->photo ?? ' ') }}" alt="">
                            </figure>
                            <style>
                                .image-anime img {
                                    height: 300px;
                                    object-fit: cover;
                                }

                                .carousel-item {
                                    text-align: center;
                                    background-color: #f8f9fa;
                                }

                            </style>
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                        </div>
                        <div class="team-content">
                            <h3>{{ $coach->prenom  ??  ''}} {{ $coach->nom ?? '' }}</h3>
                            <p>{{ \App\Helpers\TranslationHelper::TranslateText($coach->poste ?? ' ') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="coach-description">
                        <p>{{ $coach->description ?? 'Aucune mot disponible.' }}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Team End -->



    <!-- Client Testimonial Start -->
    <div class="our-testimonial parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Les retours de nos clients') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Ce que') }}</span> {{ \App\Helpers\TranslationHelper::TranslateText('nos clients pensent') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                         <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">

                                @if ($testimonials->isEmpty())
                                <p  style="color: #119093"> {{ \App\Helpers\TranslationHelper::TranslateText('Aucun témoignage disponible') }}.</p>
                                @else
                                @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>“
                                                    {!! \App\Helpers\TranslationHelper::TranslateText($testimonial->message) !!}
                                                    “</p>
                                              </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    @if ($testimonial->photo)
                                                    <img src="{{ asset('uploads/testimonials/' . $testimonial->photo) }}" alt="Photo Témoignage" width="100" height="100">
                                                    @else
                                                    <img src="images/author-1.jpg" alt="">
                                                    @endif
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> <span class="designation"  style="color: #119093">{{ $testimonial->name }}</span></h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <br><br>
                    <br>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="form-group mb--0">
                            <button class="axil-btn bg-primary2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">
                                <span> {{ \App\Helpers\TranslationHelper::TranslateText('Laisser un témoignage') }}</span>
                            </button>
                        </div>

                    </div>


                    <div id="successMessage" class="alert alert-success" style="display:none;"></div>
                    <div id="errorMessage" class="alert alert-danger" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- New Section for Videos -->
    <div class="our-videos parallaxie" style="background-color: #f5f5f5; padding: 50px 0;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Découvrez nos vidéos') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="color: #119093"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Vidéos') }}</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="video-item">
                        <video width="100%" height="315" controls preload="none" poster="assets/audio/cover.jpeg">
                            <source src="assets/audio/1000035056.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-item">
                        <video width="100%" height="315" controls preload="none" poster="assets/audio/cover.jpeg">
                            <source src="assets/audio/insoles5.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ \App\Helpers\TranslationHelper::TranslateText('Témoignage') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>



                <div class="modal-body">
                    <form id="testimonialForm" action="{{ route('testimonial.store') }}" method="POST" class="testimonial-form p-4 rounded shadow-sm bg-light">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="form-label text-muted"> {{ \App\Helpers\TranslationHelper::TranslateText('Nom') }}</label>
                            <input type="text" class="form-control border-0 rounded-pill shadow-sm" id="name" name="name" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="testimonial" class="form-label text-muted"> {{ \App\Helpers\TranslationHelper::TranslateText('Message') }}</label>
                            <textarea class="form-control border-0 rounded-3 shadow-sm" id="testimonial" name="message" rows="8" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-primary2 rounded-pill shadow"> {{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>
                        </div>
                    </form>

                    @if ($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="alert alert-success mt-4">
                        {{ session('success') }}
                    </div>
                    @endif
                    <style>
                        .testimonial-form {
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #f8f9fa;
                        }

                        .form-group {
                            margin-bottom: 1.5rem;
                        }

                        .form-label {
                            font-weight: 600;
                            font-size: 1rem;
                        }

                        .form-control {
                            padding: 0.75rem 1rem;
                            font-size: 1rem;
                            color: #495057;
                            background-color: #fff;
                            border-radius: 25px;
                        }

                        textarea.form-control {
                            border-radius: 15px;
                        }

                        button.btn {
                            padding: 0.5rem 2rem;
                            font-size: 1.125rem;
                            transition: background-color 0.3s ease;
                        }

                        button.btn-primary {
                            background-color: #EFB121;
                            border-color: #EFB121;
                        }

                        button.btn-primary:hover {
                            background-color: #EFB121;
                            border-color: #EFB121;
                        }

                        .alert {
                            max-width: 600px;
                            margin: 1rem auto;
                        }

                    </style>

                </div>



            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#testimonialForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action')
                    , method: $(this).attr('method')
                    , data: $(this).serialize()
                    , success: function(response) {

                        $('#testimonialModal').modal('hide');

                        $('#successMessage').text(
                            'Témoignage créé avec succès! Il sera valide après confirmation des administrateurs'


                        ).show();

                        setTimeout(function() {
                            location.reload();
                        }, 5000);
                    }
                    , error: function(response) {

                        $('#errorMessage').text('Une erreur est survenue.')
                            .show();
                    }
                });
            });
        });

    </script>


<style>
    .bg-primary2 {
        background-color: #9fc52e;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

</style>
    <!-- Client Testimonial End -->

    <!-- Our Blog Section End -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ \App\Helpers\TranslationHelper::TranslateText('Les actualités') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Nos dernières') }} </span>{{ \App\Helpers\TranslationHelper::TranslateText('Informations et mises à jour') }}</h2>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ route('evenements') }}" class="btn-default"> {{ \App\Helpers\TranslationHelper::TranslateText('Voir tout') }}</a>
                    </div>

                </div>
            </div>

            <div class="row">
                @foreach ($events as $event)
                @if ($events)
                <div class="col-lg-4 col-md-6">

                    <div class="blog-item wow fadeInUp">

                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}"  class="image-anime">
                                    <img src="{{ Storage::url($event->image ?? ' ') }}" alt="">
                                </a>
                            </figure>
                        </div>

                        <div class="post-item-content">

                            <div class="post-item-body">
                                <h2><a href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}" >{{ \App\Helpers\TranslationHelper::TranslateText($event->titre ?? ' ') }} </a></h2>
                            </div>



                            <div class="post-item-footer">
                                <a href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}"  class="readmore-btn">{{ \App\Helpers\TranslationHelper::TranslateText('Voir plus') }}</a>
                            </div>

                        </div>

                    </div>

                </div>
                @endif
                @endforeach


            </div>
        </div>
    </div>
    <!-- Our Blog End -->

    <!-- Our Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">

                <span><img src="images/icon-sparkles.svg" alt="">{{ \App\Helpers\TranslationHelper::TranslateText('Pour toute demande complémentaire') }} : {{ $config->email ?? '' }}</span>
                <span><img src="images/icon-sparkles.svg" alt="">{{ \App\Helpers\TranslationHelper::TranslateText('Prendre rendez-vous') }}: {{ $config->telephone ?? '' }}</span>
                <span><img src="images/icon-sparkles.svg" alt=""> {{ \App\Helpers\TranslationHelper::TranslateText('Lundi à Vendredi : 10:00 à 18:00') }} </span>
            </div>

            <div class="scrolling-content">

                <span><img src="images/icon-sparkles.svg" alt=""> {{ \App\Helpers\TranslationHelper::TranslateText('Pour toute demande complémentaire') }} : {{ $config->email ?? '' }}</span>
                <span><img src="images/icon-sparkles.svg" alt=""> {{ \App\Helpers\TranslationHelper::TranslateText('Prendre rendez-vous') }}: {{ $config->telephone ?? '' }}</span>
                <span><img src="images/icon-sparkles.svg" alt=""> {{ \App\Helpers\TranslationHelper::TranslateText('Lundi à Vendredi : 10:00 à 18:00') }} </span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->





   {{--  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
	    var botmanWidget = {
	        aboutText: 'ssdsd',
	        introMessage: "✋ Hi! I'm form PODO PRINTED"
	    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>  --}}

{{--     <div id="chatbox">
        <div id="messages"></div>
        <input type="text" id="message" placeholder="Type your message here...">
        <button id="send">Send</button>
    </div> --}}

  {{--   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
  {{--   <script>
	    var botmanWidget = {
	        aboutText: 'ssdsd',
	        introMessage: "✋ Hi! I'm form PODO PRINTED"

          /*   chatServer: '/botman',
            csrfToken: "{{ csrf_token() }}"  */
	    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
       --}}

{{--
       <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "✋ Hi! I'm form PODO PRINTED",
            chatServer: '/botman',
            csrfToken: "{{ csrf_token() }}",


        };
    </script>

     <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

       --}}



</main>


@endsection
