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
                    <img src="{{ Storage::url($config->image_impression ?? ' ') }}" style="border: 3px solid #009196; border-radius: 8px;">
                </div>
            </div>
            <!-- Why Choose Us Box End -->
        </div>
     </div>
    <!--

</main>
@endsection
