<div>
    @livewireStyles

    @if (session()->has('error'))
        <div class="alert alert-danger p-3 small">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success p-3 small">
            {{ session('success') }}
        </div>
    @endif
    <form id="contactForm" wire:submit="save" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
        <div class="row">
            <div class="form-group col-md-6 mb-4">
                <input type="text" wire:model="nom" class="form-control" id="fullname" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }}" required="">
                @error('nom')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-6 mb-4">
                <input type="email" wire:model="email" class="form-control" id="email" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre email') }}" required="">
                @error('prenom')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-6 mb-4">
                <input type="number" wire:model="telephone" class="form-control" id="phone" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre téléphone') }}" required="">
                @error('telephone')
                <span class="small text-danger">
                    {{ $message }}
                </span>
            @enderror
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-6 mb-4">
                <input type="text" wire:model="sujet" class="form-control" id="subject" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Le sujet') }}" required="">
                @error('sujet')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-md-12 mb-5">
                <textarea wire:model="message" class="form-control" id="msg" rows="5" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Votre message') }}" required=""></textarea>
                @error('message')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                <div class="help-block with-errors"></div>
            </div>

            <div class="col-md-12">
            
                <button type="submit" class="btn-default disabled">{{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>
                <div id="msgSubmit" class="h3 hidden"></div>
            </div>
        </div>
    </form>



</div>
