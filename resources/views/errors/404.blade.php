@extends('front.fixe')

@section('body')
    <main>
    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Page introuvable') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Erreur 404') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

     <!-- error section start -->
     <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                    <img src="images/404-error-img.png" alt="">
                </div>
                <div class="error-page-content">
                    <div class="error-page-content-heading">
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Oops!</span> {{ \App\Helpers\TranslationHelper::TranslateText('Page introuvable') }}</h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            {{ \App\Helpers\TranslationHelper::TranslateText('La page que vous êtes entrain de chercher n\'existe pas') }}
                        </p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.75s"  href="{{ route('home') }}" >{{ \App\Helpers\TranslationHelper::TranslateText('Retournez à la page d\'accueil') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>


@endsection
