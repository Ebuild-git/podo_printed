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
						<h1 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Nos processus') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Processus') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Featured Image Start -->
                        <div class="service-featured-img">
                            <figure class="reveal image-anime">
                                <img  src="{{ Storage::url($config->image_processus ?? ' ') }}" alt="">
                            </figure>

                            <style>
                                .service-featured-img img {
                                    height: 600px;
                                    width: 500%;
                                    object-fit: cover;
                                }

                                .carousel-item {
                                    text-align: center;
                                    background-color: #f8f9fa;
                                }

                            </style>

                        </div>
                        <!-- Service Featured Image End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            <h3 class="wow fadeInUp">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre1_processus ?? ' ') }}</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">

                                {{ \App\Helpers\TranslationHelper::TranslateText($config->desc1_processus ?? ' ') }}
                               <h3 class="wow fadeInUp" data-wow-delay="0.6s">{{ \App\Helpers\TranslationHelper::TranslateText($config->titre2_processus ?? ' ') }}</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.8s">
                                {{ \App\Helpers\TranslationHelper::TranslateText($config->desc2_processus ) }}


                                <div class="service-entry-image">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="service-entry-img-1">
                                                <figure class="image-anime reveal">
                                                    <img
                                                        src="{{ Storage::url($config->image1_processus ?? 'images/placeholder.png') }}"
                                                        alt="Process Image 1"
                                                        class="img-fluid"
                                                        loading="lazy"
                                                    >
                                                </figure>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="service-entry-img-2">
                                                <figure class="image-anime reveal">
                                                    <img
                                                        src="{{ Storage::url($config->image2_processus ?? 'images/placeholder.png') }}"
                                                        alt="Process Image 2"
                                                        class="img-fluid"
                                                        loading="lazy"
                                                    >
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            {{-- <div class="service-entry-image">
                                <div class="row">
                                    <div class="col-md-6 col-12">

                                        <div class="service-entry-img-1">
                                            <figure class="image-anime reveal">
                                                <img  src="{{ Storage::url($config->image1_processus ?? ' ') }}" alt="">
                                            </figure>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-12">

                                        <div class="service-entry-img-2">
                                            <figure class="image-anime reveal">

                                               <img src="{{ Storage::url($config->image2_processus ?? ' ') }}"  alt="">
                                            </figure>
                                        </div>

                                    </div>
                                </div>
                            </div> --}}

                        </div>

                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="service-sidebar">

                        <div class="service-catagery-list wow fadeInUp">
                            <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Avantages') }}</h3>
                            <ul>
                                @foreach ($avantages as $avantage )
                                <li  style="color: #119093"><a href="#"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($avantage->titre ?? '') }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="opening-hour-section wow fadeInUp" data-wow-delay="0.25s">
                            <h3  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Horaires de travail') }}</h3>
                            <ul>
                                <li style="font-size: 12px;color: #119093">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Lundi à Vendredi : 08:30 à 17:30') }}
                                </li>
                                <li style="font-size: 12px; color:#119093">

                                    {{ \App\Helpers\TranslationHelper::TranslateText('Samedi : 08:30 à 14:00') }}

                                </li>
                                <li  style="color: #119093">
                                    <p>{{ \App\Helpers\TranslationHelper::TranslateText('Dimanche : Fermé') }}</p>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

</main>
@endsection
