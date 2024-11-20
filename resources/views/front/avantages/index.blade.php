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
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Les avantages') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Avantages') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

 
    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                @if ($avantages->isEmpty())
                <p> {{ \App\Helpers\TranslationHelper::TranslateText('Aucun avantage disponible') }}.</p>
                @else
                @foreach ($avantages as $avantage)
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ Storage::url($avantage->photo ?? ' ') }}" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <h3>{{ \App\Helpers\TranslationHelper::TranslateText($avantage->titre ?? ' ') }}</h3>
                            <p>{{ \App\Helpers\TranslationHelper::TranslateText($avantage->description ?? '') }}</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Footer Start -->
                        <div class="service-footer">
                            <a href="#" class="service-btn"><img src="images/arrow-white.svg" alt="">
                            </a>
                        </div>
                        <!-- Service Footer End -->
                    </div>
                    <!-- Service Item End -->
                </div>
                @endforeach
                @endif

             

            </div>

            
            
            <div class="service-entry-image">
                <div class="row">
                    <div class="col-md-6 col-12">
                    
                        <div class="service-entry-img-1">
                            <figure class="image-anime reveal">
                                <img  src="{{ Storage::url($config->image1_avantage ?? ' ') }}" alt="">
                            </figure>
                        </div>
                        
                    </div>
                   {{--  <div class="col-md-4 col-12">

                    </div> --}}

                    <div class="col-md-6 col-12">
                    
                        <div class="service-entry-img-2">
                            <figure class="image-anime reveal">
                               {{--  <img src="images/service-entry-img-2.jpg" alt=""> --}}
                               <img src="{{ Storage::url($config->image2_avantage ?? ' ') }}"  alt="">
                            </figure>
                        </div>
              
                    </div>
                </div>
            </div>
            


</main>
@endsection
