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
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Nos docteurs') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Nos docteurs') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
              @foreach ($doctors as $coach )
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
                        <h3>{{ $coach->prenom ?? '' }} {{ $coach->nom ?? ' ' }}</h3>
                        <p>senior physiotherapist</p>
                    </div>
                    <!-- Team Content End -->
                </div>
                <!-- Team Member Item End -->
            </div>
              @endforeach

            </div>
        </div>
    </div>
    

</main>
@endsection
