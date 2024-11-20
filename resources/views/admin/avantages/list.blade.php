@section('titre', 'Liste des produits')
@extends('admin.fixe')

@section('body')
    <!--page-content-wrapper-->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">










            <div class="content-wrapper">


                <div class="container-xxl flex-grow-1 container-p-y">


            <!-- start page title -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);"  style="color: #9fc52e">{{ config('app.name') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('avantages') }}"  style="color: #9fc52e">Les avantages</a>
                                </li>
                                <li class="breadcrumb-item active"  style="color: #9fc52e">Liste</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="card radius-15">
                <div class="card-body">
                    <div class="row">

                        <div class="d-flex justify-content-between">
                            <div class="card-title">
                                <h5 class="mb-0 my-auto">
                                    Liste des avantages
                                </h5>
                            </div>
                            <div>
                          


                                <button type="button" class="btn btn-sm bg-primary2" data-bs-toggle="modal"
                                    data-bs-target="#add">
                                    <i class="ri-user-add-line"></i>
                                    Ajouter avantage
                                </button>
                            </div>
                        </div>
                     
                    </div>
                    <hr />
               {{--    @livewire('Categories.ListCategory')   --}}
               @livewire('Avantages.ListAvantage')
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <!-- Center modal content -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="myCenterModalLabel">
                        Ajouter  avantage.
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             {{--    @livewire('Images.AddImage', ['img'=>null])  --}}

             @livewire('Avantages.AddAvantage', ['avantage'=>null])

                 @if(session('success'))
                 <script>
                     Swal.fire({
                         title: 'Succès!',
                         text: '{{ session('success') }}',
                         icon: 'success',
                         confirmButtonText: 'OK'
                     });
                 </script>
                 @endif
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    
@endsection
