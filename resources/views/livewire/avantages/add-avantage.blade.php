<div>
    <form wire:submit="create">
        <div class="modal-body">
            @include('components.alert')
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Titre *
                        </label>
                        <input type="text" class="form-control" wire:model="titre">
                        @error('titre')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
               
               

               

                
                 <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="photo" class="form-label">
                            Photo(300*300)
                        </label>
                        <input type="file" class="form-control" wire:model="photo">
                        @error('photo')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>

                    
                   
                </div> 
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label><strong>Description :</strong></label>
                        <textarea  class="form-control" name="description"   wire:model="description" rows="5"></textarea>
                        @error('description')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btnCopy").addEventListener("click", function() {
                var input = document.getElementById("inputContent");
                input.select();
                document.execCommand("copy");
                alert("Le contenu a été copié dans le presse-papiers ");
            });
        });
    </script>

</div>
