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
                    <div class="col-lg-4">
                        <!-- Page Header Box Start -->
                     
                    </div>
                    <!-- Page Header Box Start -->
				<div class="col-lg-4">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Impressions 3D') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Impressions') }}</li>
							</ol>
						</nav>
					</div>
                   
					<!-- Page Header Box End -->
				</div>

                <div class="col-lg-4">
                    <img src="{{ Storage::url($config->image_entete_impression) }}"  alt="Impressions 3D" width="200" height="300" class="img-fluid">
                </div>

                
			</div>
		</div>
	</div>
	<!-- Page Header End -->

 
    <!-- Why Choose Us Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText('Pourquoi nous') }}</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"  style="color: #119093"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Excellence en') }}</span>  {{ \App\Helpers\TranslationHelper::TranslateText('Soins et réadaptation') }}</h2>
                    </div>
                <!-- Section Title End -->
            </div>

            <!-- Why Choose Us Box Start -->
            <div class="why-choose-us-box">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-1">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image1_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre1_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc1_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image2_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre2_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc2_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image3_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre3_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc3_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>
    
                    <div class="col-lg-6">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box-2">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image4_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre4_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc4_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image5_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre5_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc5_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
    
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ Storage::url($config->image6_impression ?? ' ') }}" alt="">
                                </div>  
                                <!-- Icon Box End -->
    
                                <!-- Why Choose Content Start -->
                                <div class="why-choose-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre6_impression  ?? ' ') }}
                                    </h3>
                                    <p>
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->desc6_impression  ?? ' ') }}
                                    </p>
                                </div>
                                <!-- Why Choose Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Box End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image">
                            <img src="{{ Storage::url($config->image_impression ?? ' ') }}"  
                            style="transform: rotate(350deg); width: 300px; height: 400px;hover:-translate-y-50 object-fit: cover;" 
                            alt="">
                        </div>
                        <!-- Why Choose Image End -->
                    </div>
                </div>
            </div>
            <!-- Why Choose Us Box End -->
        </div>
     </div>
    <!--

</main>
@endsection
