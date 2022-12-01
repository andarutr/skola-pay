<div>
    @if(session()->has('success'))
    <script>
        document.getElementById('pembayaran_spp').scrollIntoView();
    </script>
    <livewire:partials.notification.success-app />
    @endif
    @if(!Auth::check())
    <h5><u>Silahkan login terlebih dahulu</u></h5>
    @endif
    <form wire:submit.prevent="store" class="tm-form tm-checkout-form">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="small-title">Pembayaran SPP</h4>
                
                <!-- Billing Form -->
                <div class="tm-checkout-billingform">
                    <div class="tm-form-inner">
                        @if($picture_payment)
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="picture_payment">Preview Bukti Transfer<br>(Klik untuk memperbesar gambar)</label>
                            <p>
                                <a href="{{ $picture_payment->temporaryUrl() }}" data-fancybox>
                                    <img src="{{ $picture_payment->temporaryUrl() }}" class="img-fluid rounded mt-2 mb-2" style="height: 150px !important">
                                </a>
                            </p>
                        </div>
                        @endif
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="picture_payment">Bukti Transfer*</label>
                            <input type="file" id="picture_payment" wire:model="picture_payment">
                            @error('picture_payment')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="name_student">Nama Lengkap (Siswa)*</label>
                            <input type="text" id="name_student" wire:model="name_student">
                            @error('name_student')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="name_parent">Nama Lengkap (Wali Murid)*</label> 
                            <input type="text" id="name_parent" wire:model="name_parent">
                            @error('name_parent')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="email">Email (Opsional)</label>
                            <input type="text" id="email" wire:model="email_payment">
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="kelas">Kelas*</label>
                            <select id="kelas" wire:model="id_kelas">
                                <option value="">Pilih</option>
                                @foreach($kelas as $kls)
                                <option value="{{ $kls->id_kelas }}">{{ $kls->nomor_kelas }} {{ $kls->prodi_kelas }}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="jenis_pembayaran">Jenis Pembayaran*</label>
                            <select id="jenis_pembayaran" wire:model="jenis_pembayaran">
                                <option value="">Pilih</option>
                                <option value="SPP">SPP</option>
                            </select>
                            @error('jenis_pembayaran')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="month_payment">Pembayaran Bulan*</label>
                            <select id="month_payment" wire:model="month_payment">
                                <option value="">Pilih</option>
                                <option value="Januari {{ date('Y') }}">Januari {{ date('Y') }}</option>
                                <option value="Februari {{ date('Y') }}">Februari {{ date('Y') }}</option>
                                <option value="Maret {{ date('Y') }}">Maret {{ date('Y') }}</option>
                                <option value="April {{ date('Y') }}">April {{ date('Y') }}</option>
                                <option value="Mei {{ date('Y') }}">Mei {{ date('Y') }}</option>
                                <option value="Juni {{ date('Y') }}">Juni {{ date('Y') }}</option>
                                <option value="Juli {{ date('Y') }}">Juli {{ date('Y') }}</option>
                                <option value="Agustus {{ date('Y') }}">Agustus {{ date('Y') }}</option>
                                <option value="September {{ date('Y') }}">September {{ date('Y') }}</option>
                                <option value="Oktober {{ date('Y') }}">Oktober {{ date('Y') }}</option>
                                <option value="November {{ date('Y') }}">November {{ date('Y') }}</option>
                                <option value="Desember {{ date('Y') }}">Desember {{ date('Y') }}</option>
                            </select>
                            @error('month_payment')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="transfer_by">Transfer Melalui*</label>
                            <select id="transfer_by" wire:model="transfer_by">
                                <option value="">Pilih</option>
                                <option value="ATM">ATM</option>
                                <option value="M-Banking">M-Banking</option>
                                <option value="Indomaret">Indomaret</option>
                                <option value="Alfamart">Alfamart</option>
                                <option value="E-Wallet">E-Wallet(Ovo, Dana, Flip)</option>
                            </select>
                            @error('transfer_by')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field tm-form-fieldhalf">
                            <label for="virtual_account">Pilih VA(Virtual Account)*</label>
                            <select id="virtual_account" wire:model="virtual_account">
                                <option value="">Pilih</option>
                                <option value="3960001011">Bank Muamalat 3960001011</option>
                            </select>
                            @error('virtual_account')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field">
                            <label for="nominal_payment">Nominal*</label>
                            <input type="text" id="nominal_payment" placeholder="Contoh: 550.000" wire:model="nominal_payment">
                            @error('nominal_payment')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="tm-form-field">
                            <label for="phone_number">No Handphone/Whatsapp (Wali Murid)*</label>
                            <input type="text" id="phone_number" wire:model="phone_number">
                            @error('phone_number')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <button class="btn btn-success mt-5">Submit</button>
                </div>
                <!--// Billing Form -->
            </div>
        </div>
    </form>
</div>
