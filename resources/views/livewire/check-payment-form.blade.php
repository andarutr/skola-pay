<div>
    <form class="tm-form tm-checkout-form">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="small-title">Check Pembayaran</h4>
                
                <!-- Billing Form -->
                <div class="tm-checkout-billingform">
                    <div class="tm-form-inner">
                        <div class="tm-form-field">
                            <label for="name_student">Note: Cari data pembayaran menggunakan nis atau nama siswa</label>
                            <input type="text" id="name_student" placeholder="Cari Data" wire:model="search">
                        </div>
                    </div>
                </div>
                <!--// Billing Form -->
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            @if($search === null)
            {{ $data_ }}
            @else
                @foreach($payments as $payment)
                <div class="card shadow mt-4">
                    <div class="card-header">
                        <b>INVOICE : {{ $payment->no_invoice }}</b>
                    </div>
                    <div class="card-body">
                        <p>Nama : {{ $payment->name }} </p>
                        <p>Nis : {{ $payment->username }} </p>
                        <p>Kelas : {{ $payment->nomor_kelas.' '.$payment->prodi_kelas }}</p>
                        <p>Status Pembayaran : <span class="badge badge-primary"><a href="{{ route('login') }}">lebih lanjut</a></span></p>
                        <p>Data Mutakhir : {{ $payment->updated_at }}</p>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
