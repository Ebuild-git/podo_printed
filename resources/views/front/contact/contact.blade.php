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
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Page Contact Start -->
	<div class="page-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
				
					<div class="contact-info-item wow fadeInUp">
					
						 <div class="icon-box">
							<img src="images/icon-green-location.svg" alt="">
						 </div>
					
					
						<div class="contact-info-content">
							<h3>{{ \App\Helpers\TranslationHelper::TranslateText('Location') }}</h3>
							<p>{{ \App\Helpers\TranslationHelper::TranslateText($config->addresse ?? ' ') }}</p>
						</div>
                      
					
					</div>
					
				</div>

				<div class="col-lg-3 col-md-6">
					
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
						
						 <div class="icon-box">
							<img src="images/icon-green-mail.svg" alt="">
						 </div>
					

						
						<div class="contact-info-content">
							<h3>{{ \App\Helpers\TranslationHelper::TranslateText('Email') }}</h3>
							<p>{{ $config->email ?? ' ' }}</p>
							
						</div>
					
					</div>
				
				</div>

				<div class="col-lg-3 col-md-6">
			
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
						
						 <div class="icon-box">
							<img src="images/icon-green-phone.svg" alt="">
						 </div>
				

				
						<div class="contact-info-content">
							<h3>{{ \App\Helpers\TranslationHelper::TranslateText('Téléphone') }}</h3>
							<p>{{ $config->telephone ?? ' ' }}</p>
							
						</div>
						
					</div>
					
				</div>

				<div class="col-lg-3 col-md-6">
					
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
					
						 <div class="icon-box">
							<img src="images/icon-green-hour.svg" alt="">
						 </div>
					

				
						<div class="contact-info-content">
							<h3>{{ \App\Helpers\TranslationHelper::TranslateText('Horaires de travail') }}</h3>
							<p>
                                {{ \App\Helpers\TranslationHelper::TranslateText('Lundi à Vendredi : 10:00 à 18:00') }}
                            </p>
							<p>  {{ \App\Helpers\TranslationHelper::TranslateText('Samedi : 10:00 à 15:00') }}</p>
						</div>
					
					</div>
				
				</div>
			</div>
		</div>
	 </div>
	<!-- Page Contact End -->

	<!-- Contact Form Start -->
	<div class="contact-us-form">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Contact Us Image Start -->
					 <div class="contact-us-img">
						<figure class="reveal image-anime">
							<img src="{{ Storage::url($config->logocontact) }}" alt="Image" width="636" height="644">
						</figure>
					 </div>
					 <style>
						.contact-us-img img {
							height: 600px;
							width: 500%;
							object-fit: cover;
						}

						.carousel-item {
							text-align: center;
							background-color: #f8f9fa;
						}

					</style>

					 
					<!-- Contact Us Image End -->
				</div>
				<div class="col-lg-6">
					<div class="contact-form">
						<!-- Section Title Start -->
						<div class="section-title">
                            <h3 class="wow fadeInUp">  {{ \App\Helpers\TranslationHelper::TranslateText('Contactez') }}</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">  {{ \App\Helpers\TranslationHelper::TranslateText('Contactez-nous') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        @livewire('Front.ContactForm')
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form End -->


    </main>
@endsection
