@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
    <main>



        @php
            $config = DB::table('configs')->first();

        @endphp
        


    <!-- Hero Section Start -->
    <div class="hero bg-image hero-video">
        <!-- Video Start -->
		<div class="hero-bg-video">
			<!-- Selfhosted Video Start -->
			<video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video>
			<!-- Selfhosted Video End -->

			<!-- Youtube Video Start -->
			<!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
			<!-- Youtube Video End -->
		</div>
		<!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to physiocare</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Destination</span> For Relief & Wellness</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the Ipsum less normal distribution of letters.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default">explore services</a>
                            <a href="#" class="btn-default btn-highlighted">book appointment</a>
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Home Contact Us Start -->
    <div class="home-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-home-contact-us-1.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>expert therapists</h3>
                            <p>Our team of licensed and certified physiotherapists</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-home-contact-us-2.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>emergency service</h3>
                            <p>Our emergency physiotherapy services are designed to address</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Item Start -->
                    <div class="home-contact-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-home-contact-us-3.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Home Contact Content Start -->
                        <div class="home-contact-content">
                            <h3>free consultant</h3>
                            <p>Our mission is to enhance the quality of life of our patients</p>
                        </div>
                        <!-- Home Contact Content End -->
                    </div>
                    <!-- Contact Item End -->
                </div>
            </div>
        </div>
        </div>
    <!-- Home Contact Us End -->

    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-us-image">
                        <div class="about-img">
                            <figure class="reveal image-anime">
                                <img src="images/about-img.jpg" alt="">
                            </figure>

                            <!-- Company Experience Box Start -->
                            <div class="company-experience">
                                <div class="icon-box">
                                    <img src="images/icon-experience.svg" alt="">
                                </div>
                                <div class="company-experience-content">
                                    <h3><span class="counter">15</span>+</h3>
                                    <p>years of experience</p>
                                </div>
                            </div>
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
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For <span>Physiotherapy</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt and effective care to help you manage pain, prevent further injury, and start your recovery process as quickly as possible.</p>
                            </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-1.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>nutrition strategies</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-2.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>be pro active</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-3.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>workout routines</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-about-us-4.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>support & motivation</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer">
                            <!-- Doctor Info Start -->
                            <div class="doctor-info wow fadeInUp" data-wow-delay="1s">
                                <div class="doctor-info-item">
                                    <div class="image-box">
                                        <figure class="image-anime">
                                            <img src="images/about-doctor-img.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="doctor-info-content">
                                        <h3>dr. jamie smith</h3>
                                        <p>Physiotherapy</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Doctor Info End -->

                            <!-- Appointment Button Start -->
                            <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                                <a href="#" class="btn-default">Make an appointment</a>
                            </div>
                            <!-- Appointment Button End -->
                        </div>
                        <!-- About Us Footer End -->
                        </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
        </div>
    <!--  About Us End -->

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
                                    <img src="{{ Storage::url($image->image ?? ' ') }}"  alt="">
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
                                    <img src="{{ Storage::url($image->image ?? ' ') }}"  alt="">
                                </figure>
                            </div>
                          
                            @endforeach
                            <!-- Image Item End -->

                            <!-- Image Item Start -->
                            
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
                        <h3 class="wow fadeInUp">{{ \App\Helpers\TranslationHelper::TranslateText('Equipe des docteurs') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Notre équipe de docteurs dévoués') }}</span> & {{ \App\Helpers\TranslationHelper::TranslateText('expérimentés') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-3">
                    <!-- Section Button Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="#" class="btn-default">{{ \App\Helpers\TranslationHelper::TranslateText('Voir tout') }}</a>
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
                        <!-- Team Image End -->
                
                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>{{ $coach->prenom  ??  ''}} {{ $coach->nom ?? '' }}</h3>
                            <p>senior physiotherapist</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    <!-- Team Member Item End -->
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
                        <h3 class="wow fadeInUp">review</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> Our Client Say</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>									
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>johan duo</h3>
                                                <p>professional athlete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
            
                                <!-- Testimonial Slide Start -->
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>jane smith</h3>
                                                <p>retired teacher</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>robert lee</h3>
                                                <p>construction worker</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
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
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>banson doe</h3>
                                                <p>marathon runner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <br><br>
            <br>
            <div class="col-12 d-flex justify-content-center">
                <div class="form-group mb--0">
                    <button class="axil-btn btn-bg-primary2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">
                        <span> {{ \App\Helpers\TranslationHelper::TranslateText('Laisser un témoignage') }}</span>
                    </button>
                </div>

            </div>


            <div id="successMessage" class="alert alert-success" style="display:none;"></div>
            <div id="errorMessage" class="alert alert-danger" style="display:none;"></div>

                    <!-- Testimonial Slider End -->
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
                                <button type="submit" class="btn btn-bg-primary2 rounded-pill shadow"> {{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>
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
                    e.preventDefault(); // Empêcher l'envoi classique du formulaire

                    $.ajax({
                        url: $(this).attr('action')
                        , method: $(this).attr('method')
                        , data: $(this).serialize()
                        , success: function(response) {
                            // Afficher le message de succès
                            $('#testimonialModal').modal('hide'); // Fermer le modal

                            $('#successMessage').text(
                                'Témoignage créé avec succès! Il sera valide après confirmation des administrateurs'

                            ).show();

                            setTimeout(function() {
                                location.reload();
                            }, 5000);
                        }
                        , error: function(response) {
                            // Afficher un message d'erreur si nécessaire
                            $('#errorMessage').text('Une erreur est survenue.')
                                .show(); // Afficher le message d'erreur
                        }
                    });
                });
            });

        </script>



        <style>
            .btn-bg-primary2 {
                background-color: #a8cc1b;
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Nos dernières') }}  </span>{{ \App\Helpers\TranslationHelper::TranslateText('Informations et mises à jour') }}</h2>
                    </div>
                </div>

                <div class="col-lg-3">
                   
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a  href="{{ route('evenements') }}" class="btn-default"> {{ \App\Helpers\TranslationHelper::TranslateText('Voir tout') }}</a>
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
                                <a href="#" class="image-anime">
                                    <img src="{{ Storage::url($event->image ?? ' ') }}" alt="">
                                </a>
                            </figure>
                        </div>
       
                        <div class="post-item-content">
                        
                            <div class="post-item-body">
                                <h2><a href="#">{{ \App\Helpers\TranslationHelper::TranslateText($event->titre ?? ' ') }} </a></h2>
                            </div>
                       

                       
                            <div class="post-item-footer">
                                <a href="#" class="readmore-btn">{{ \App\Helpers\TranslationHelper::TranslateText('Voir plus') }}</a>
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

     




    </main>


@endsection
