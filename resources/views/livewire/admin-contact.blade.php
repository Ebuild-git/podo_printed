<div>
    @include('components.alert')

    <style>
        .bg-primary2 {
            background-color: #9fc52e;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

    </style>
    <div class="card mb-8">
        <h5 class="card-header">Les configurations</h5>
        <form class="card-body" wire:submit="update_form" enctype="multipart/form-data">
            @csrf

            <div class="text-center bg-primary2 card my-auto p-1 mb-3" style="">
                <h6 class="text-white">
                    Logo et images
                </h6>
            </div>
            <div class="row g-6">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Logo</label>

                    <input type="file" wire:model="logo" accept="image/*" placeholder="votre logo" class="form-control">
                    @error('logo')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Logo Header ou Entête de page</label>

                    <input type="file" wire:model="logoHeader" accept="image/*" placeholder="votre icone entête" class="form-control">
                    @error('logoHeader')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Icone</label>

                    <input type="file" wire:model="icon" accept="image/*" placeholder="votre icone" class="form-control">
                    @error('icon')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Image page contact(636*644)</label>

                    <input type="file" wire:model="logocontact" accept="image/*" placeholder="votre icone" class="form-control">
                    @error('logocontact')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="multicol-username">Description</label>

                    <textarea type="text" wire:model="description" placeholder="description" rows="3" class="form-control"> </textarea>
                    @error('description')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>

            </div>

            <hr class="my-6 mx-n4" />
            <div class="text-center bg-primary2 card my-auto p-1 mb-3">
                <h6 class="text-white">
                    A propos de nous
                </h6>
            </div>
            <div class="row g-6">
                <div class="col-md-12">
                    <label class="form-label" for="multicol-username">Titre A propos de nous</label>

                    <input type="text" wire:model="titre_apropos" placeholder="Le titre " rows="3" class="form-control">
                    @error('titre_apropos')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-12 mb-10">
                    <label class="form-label" for="multicol-username">Description à propos de nous</label>
                    <div id="editor"></div>
                    <input type="hidden" id="des_apropos" wire:model="des_apropos" placeholder="La description" class="form-control">
                    @error('des_apropos')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 mt-20">
                    <label class="form-label" for="multicol-username"> Les Images à propos de nous(600*666) </label>

                    <input type="file" wire:model="photos" multiple name="photos" accept="image/*" placeholder="Cargez les images" class="form-control">
                    @error('photos')
                    <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label" for="multicol-username"> Sous Titre A propos de nous</label>

                        <input type="text" wire:model="titre_apropos1" placeholder="Le titre " rows="3" class="form-control">
                        @error('titre_apropos1')
                        <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label" for="multicol-username"> Sous Titre A propos de nous</label>

                        <input type="text" wire:model="titre_apropos2" placeholder="Le titre " rows="3" class="form-control">
                        @error('titre_apropos2')
                        <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>


                    <div class="col-md-3">
                        <label class="form-label" for="multicol-username"> Sous Titre A propos de nous</label>

                        <input type="text" wire:model="titre_apropos3" placeholder="Le titre " rows="3" class="form-control">
                        @error('titre_apropos3')
                        <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label" for="multicol-username"> Sous Titre A propos de nous</label>

                        <input type="text" wire:model="titre_apropos4" placeholder="Le titre " rows="3" class="form-control">
                        @error('titre_apropos4')
                        <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>

                </div>
<hr class="my-6 mx-n4" />
<div class="text-center bg-primary2 card my-auto p-1 mb-3">
    <h6 class="text-white">
        Les Adresses et réseaux sociaux
    </h6>
</div>
<div class="row g-6">
    <div class="col-md-12">
        <label class="form-label" for="multicol-first-name">Adresse</label>
        <input type="text" wire:model="addresse" id="multicol-first-name" class="form-control" placeholder="Addresse" />
        @error('addresse')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="multicol-last-name">Téléphone</label>
        <input type="text" wire:model="telephone" id="multicol-last-name" class="form-control" placeholder="Doe" />
        @error('telephone')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="multicol-last-name">Fax</label>
        <input type="number" wire:model="fax" id="multicol-last-name" class="form-control" placeholder="Votre fax" />
        @error('fax')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="multicol-country">Email</label>
        <input type="email" wire:model="email" id="multicol-last-name" class="form-control" placeholder="Email" />
        @error('email')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-country">Facebook</label>
        <input type="text" wire:model="facebook" id="multicol-last-name" class="form-control" placeholder="Facebook" />
        @error('facebook')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="multicol-country">Instagram</label>
        <input type="text" wire:model="instagram" id="multicol-last-name" class="form-control" placeholder="Instagram" />
        @error('instagram')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="multicol-country">TikTok</label>
        <input type="text" wire:model="tiktok" id="multicol-last-name" class="form-control" placeholder="TikTok" />
        @error('tiktok')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="multicol-country">Youtube</label>
        <input type="text" wire:model="youtube" id="multicol-last-name" class="form-control" placeholder="Youtube" />
        @error('youtube')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>



</div>

<hr class="my-6 mx-n4" />
<div class="text-center bg-primary2 card my-auto p-1 mb-3">
    <h6 class="text-white">
        Impressions 3D
    </h6>
</div>



<div class="row g-6">
    <div class="col-md-6">
        <label class="form-label" for="multicol-username">Image principale(1270*790)</label>

        <input type="file" wire:model="image_impression" accept="image/*" placeholder="votre image principale" class="form-control">
        @error('image_impression')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>


</div>

<hr class="my-6 mx-n4" />
<div class="text-center bg-primary2 card my-auto p-1 mb-3">
    <h6 class="text-white">
        Le processus
    </h6>
</div>

<div class="row g-6">
    <div class="col-md-4">
        <label class="form-label" for="multicol-username">Image principale(1200*800)</label>

        <input type="file" wire:model="image_processus" accept="image/*" placeholder="votre image principale" class="form-control">
        @error('image_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label" for="multicol-username">Image1 (424*276)</label>

        <input type="file" wire:model="image1_processus" accept="image/*" placeholder="votre image principale" class="form-control">
        @error('image1_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label" for="multicol-username">Image2 (424*276)</label>

        <input type="file" wire:model="image2_processus" accept="image/*" placeholder="votre image principale" class="form-control">
        @error('image2_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre1_processus" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre1_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="multicol-username">Description</label>

        <textarea type="text" wire:model="desc1_processus" placeholder="description" rows="3" class="form-control"> </textarea>
        @error('desc1_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre2_processus" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre2_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="multicol-username">Description</label>

        <textarea type="text" wire:model="desc2_processus" placeholder="description" rows="3" class="form-control"> </textarea>
        @error('desc2_processus')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

</div>

<hr class="my-6 mx-n4" />
<div class="text-center bg-primary2 card my-auto p-1 mb-3">
    <h6 class="text-white">
        Les avantages
    </h6>
</div>

<div class="row g-6">

    <div class="col-md-6">
        <label class="form-label" for="multicol-username">Image1 (424*276)</label>

        <input type="file" wire:model="image1_avantage" accept="image/*" placeholder="votre image " class="form-control">
        @error('image1_avantage')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label" for="multicol-username">Image2 (424*276)</label>

        <input type="file" wire:model="image2_avantage" accept="image/*" placeholder="votre image" class="form-control">
        @error('image2_avantage')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

</div>

<hr class="my-6 mx-n4" />
<div class="text-center bg-primary2 card my-auto p-1 mb-3">
    <h6 class="text-white">
        Les statistiques globales
    </h6>
</div>
<div class="row g-6">
    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre_sta1" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre_sta1')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>



    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre_sta2" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre_sta2')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre_sta3" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre_sta3')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>
    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Titre</label>
        <input type="text" wire:model="titre_sta4" id="multicol-last-name" class="form-control" placeholder="Titre" />
        @error('titre_sta4')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

</div>
{{-- <div class="row">

    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Numbre</label>
        <input type="number" wire:model="number_sta1" id="multicol-last-name" class="form-control" placeholder="Nombre" />
        @error('number_sta1')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Numbre</label>
        <input type="number" wire:model="number_sta2" id="multicol-last-name" class="form-control" placeholder="Nombre" />
        @error('number_sta2')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Numbre</label>
        <input type="number" wire:model="number_sta3" id="multicol-last-name" class="form-control" placeholder="Nombre" />
        @error('number_sta3')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-first-name">Numbre</label>
        <input type="number" wire:model="number_sta4" id="multicol-last-name" class="form-control" placeholder="Nombre" />
        @error('number_sta4')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

</div>
 --}}
<div class="row">
    <div class="col-md-3">
        <label class="form-label" for="multicol-username">Icon</label>

        <input type="file" wire:model="icon_sta1" accept="image/*" placeholder=" icon" class="form-control">
        @error('icon_sta1')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-username">Icon</label>

        <input type="file" wire:model="icon_sta2" accept="image/*" placeholder=" icon" class="form-control">
        @error('icon_sta2')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-username">Icon</label>

        <input type="file" wire:model="icon_sta5" accept="image/*" placeholder=" icon" class="form-control">
        @error('icon_sta5')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label" for="multicol-username">Icon</label>

        <input type="file" wire:model="icon_sta4" accept="image/*" placeholder=" icon" class="form-control">
        @error('icon_sta4')
        <span class="text-danger small"> {{ $message }} </span>
        @enderror
    </div>

</div>
<div class="pt-6">
    <span wire:loading>
        <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
    </span>
    <i class="ri-save-line me-1 fs-16 lh-1"></i>
    <button type="submit" class="btn bg-primary2 me-4">Enregistrer les changements</button>

</div>
</form>
</div>



</div>
