@section('titre', 'Mise  à jour')
@extends('admin.fixe')

@section('body')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="javascript: void(0);" style="color: #9fc52e">{{ config('app.name') }}</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('doctors') }}" style="color: #9fc52e">Docteurs</a>
                                        </li>
                                        <li class="breadcrumb-item active" style="color: #9fc52e">Liste</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- coachs List Table -->

                        <div class="card radius-15">
                            <div class="card-body">
                            <hr />
                            <form action="{{ route('doctors.update', $coach->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-sm-6">

                                           <img src="{{ Storage::url($coach->photo) }}"  width="400 " height="400 "
                                           class="rounded shadow" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-6">
                                                <label for="">Nouvelle photo</label>
                                                <input type="file" name="photo"    class="form-control">
                                                @error('photo')
                                                    <span class="small text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class="mb-6">
                                                <label for="">Nom</label>
                                                <input type="text" class="form-control" value=" {{ $coach->nom }}"  name="nom">
                                                @error('nom')
                                                    <span class="small text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Prénom</label>
                                                <input type="text" class="form-control" value=" {{ $coach->prenom }}"  name="prenom">
                                                @error('prenom')
                                                    <span class="small text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">
                                                    Adresse E-mail *
                                                </label>
                                                <input type="email" id="email" name="email" value="{{ $coach->email }}" class="form-control">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">
                                                    Numéro de téléphone
                                                </label>
                                                <input type="tel" id="phone" name="phone" value="{{ $coach->phone }}" class="form-control">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="adresse">Adresse</label>
                                                <input type="text" id="adresse" value="{{ $coach->adresse }}" name="adresse" class="form-control">
                                                @error('adresse')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="adresse">Poste</label>
                                                <input type="text" id="adresse" value="{{ $coach->poste }}" name="poste" class="form-control">
                                                @error('poste')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="description">Description</label>
                                                <textarea rows="5" id="description" value={{ $coach->description }} name="description" class="form-control">{{ old('description', $coach->description) }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            @include('components.alert')

                                            <div class="modal-footer">
                                                <button class="btn bg-primary2 btn-sm px-5" type="submit" wire:loading.attr="disabled">
                                                    {{-- <span wire:loading>
                                                        <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
                                                    </span> --}}
                                                Mettre à jour
                                                </button>
                                                &nbsp; &nbsp;
                                              {{--   <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fermer</button> --}}
                                                <a class="btn btn-sm btn-secondary"  href="{{ route('doctors') }}">Renourner à la liste</a>

                                            </div>


                                        </div>
                                    </div>
                                </form>
                              @include('components.confirmation')


                            </div>
                        </div>


                    </div>



                </div>

            </div>




        </div>
    </div>


@endsection
