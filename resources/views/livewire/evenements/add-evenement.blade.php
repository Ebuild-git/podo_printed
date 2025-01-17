<div>
    <div>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form wire:submit.prevent="create">
            <div class="modal-body">
                  @include('components.alert')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Titre de l'actualité *
                            </label>
                            <input type="text" id="titre" wire:model="titre" class="form-control">
                            @error('titre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="start" class="form-label">
                                Date *
                            </label>
                            <input type="date" id="start" wire:model="start" class="form-control">
                            @error('start')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label><strong> Meta Description :</strong></label>
                        <textarea class=" form-control" name="meta_description" wire:model="meta_description"></textarea>
                        @error('meta_description')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>



                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Image(394 * 256)
                            </label>
                            <input type="file" class="form-control" wire:model="image">
                            @error('image')
                                <span class="text-danger small"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>






                    {{-- <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea id="description" wire:model="description" class="form-control"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}

                    <div wire:ignore class="form-group row">

                        <div class="col-md-12">
                            <textarea  id="description"   wire:model="description" class="form-control"  >Message</textarea>

                        </div>
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm bg-primary2">
                    <span wire:loading>
                        <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
                    </span>
                    Enregistrer
                </button>
            </div>


        </form>



    </div>


</div>

<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

<script>
        const editor = CKEDITOR.replace('description');
        editor.on('change', function(event){
            console.log(event.editor.getData())
            @this.set('description', event.editor.getData());
        })
</script>
