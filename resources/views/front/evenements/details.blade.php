@extends('front.fixe')
@section('titre', $event->titre)
@section('body')

     <head>
    @section('header')
        <meta name="author" content="https://podoprinted.tn">
        <meta property="og:title" content="{{ $event->titre }}">
        <meta property="og:description" content="{{ $event->description ?? '' }}">
        <meta property="og:description" content="{{ $event->meta_description ?? '' }}">

        <meta property="og:image" content="{{ $event->image }}">
        <meta property="og:type" content="event">

        <meta name="robots" content="index, follow">
    @endsection

</head>

<main>



    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque"  style="color: #119093">{{ \App\Helpers\TranslationHelper::TranslateText($event->titre) }}</h1>

					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Single Post Start -->
	<div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ Storage::url($event->image ?? ' ') }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">
                                {!! \App\Helpers\TranslationHelper::TranslateText($event->description ?? ' ') !!}</p>


                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p> {!! \App\Helpers\TranslationHelper::TranslateText($event->meta_description ?? '') !!} </p>
                            </blockquote>



                            </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->

                                    <!-- Post Tags End -->
                                </div>

                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->


</main>
@endsection
