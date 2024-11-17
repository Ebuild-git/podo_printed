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
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">

                @foreach ($events as $event)
                @if ($events)
                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
                                <a    href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}" class="image-anime">
                                    <img src="{{ Storage::url($event->image ?? ' ') }}" alt="">
                                </a>
                            </figure>

                            post-featured-image
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2><a  href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}" >{{ \App\Helpers\TranslationHelper::TranslateText($event->titre) }}</a></h2>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a  href="{{ route('details-news', ['id' => $event->id, 'slug' => Str::slug(Str::limit($event->titre, 10))]) }}"  class="readmore-btn">{{ \App\Helpers\TranslationHelper::TranslateText('Voir plus') }}</a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>
                @endif
                @endforeach

            
            </div>

            <div class="row">
				<div class="col-md-12">
					<!-- Post Pagination Start -->
					<div class="post-pagination wow fadeInUp" data-wow-delay="0.5s">
                        {{ $events->links() }}
					</div>
					<!-- Post Pagination End -->
				</div>
			</div>
        </div>
    </div>
    <!-- Page Blog End -->

    </main>
@endsection
