<div>
    <form wire:submit.prevent="submit" id="tm-contactform" class="tm-contact-form">
        <div class="tm-contact-formfield">
            <input type="text" wire:model="name" placeholder="Nama">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="tm-contact-formfield">
            <input type="text" wire:model="email" placeholder="Email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="tm-contact-formfield">
            <textarea wire:model="pesan" cols="30" rows="5" placeholder="Pesan"></textarea>
            @error('pesan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="tm-contact-formfield">
            <button type="submit" class="tm-button">Kirim Feedback <b></b></button>
        </div>
    </form>
</div>
