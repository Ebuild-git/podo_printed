@extends('front.fixe')
@section('titre', 'Contact')
@section('body')
    <main>

        @php
            $config = DB::table('configs')->first();

        @endphp




<style>
    .rs-breadcrumbs .breadcrumbs-wrap {
    background-image: url('{{ asset('assets/contact/1.png') }}');
    background-size: contain; /* Ajuste l'image pour qu'elle soit entièrement visible sans la découper */
    background-repeat: no-repeat; /* Empêche l'image de se répéter */
    background-position: center; /* Centre l'image dans l'élément */
    height: 300px; /* Ajustez cette valeur pour réduire la hauteur du conteneur */
    width: 100%; /* Assurez que l'élément prend toute la largeur disponible */
}

</style>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img src="assets/contact/2.png"  height="1920" width="520"  alt="Breadcrumbs Image">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title mb-17">Conditions Générales d'Utilisation </h1>
                    <div class="categories">
                        <ul>
                            <li><a href="{{  route('home') }}">Accueil</a></li>
                            <li class="active">Conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>                
</div>
        <!-- Breadcrumbs Section End -->

        <!-- Contact Section Start -->
        <div class="rs-contact ">
            <!-- Contact Icon Start -->
      <style>
        .single-icon {
    background-image: url('/assets/counter/2.png');
    background-size: cover; /* Assure que l'image couvre toute la zone */
    background-position: center; /* Centre l'image dans l'élément */
}

      </style>
       
         @include('front.contact.condition') 
            <!-- Contact Icon End -->

            <!-- Contact Form And Map Start -->
        {{--     <div class="contact-part sec-bg pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 md-mb-30">
                            <div class="g-map">
                                <img src="{{ Storage::url($config->logocontact) }}" alt="">

                            </div>
                        </div>
                     
                    </div>
                </div>
            </div> --}}
            <!-- Contact Form And Map End -->



      


        </div>
        <!-- Contact Section End -->



    </main>
@endsection
