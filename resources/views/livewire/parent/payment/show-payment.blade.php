<div class="row">
    <div class="col-lg-4 col-sm-12">
        <div class="card card-selected">
            <div class="card-header">
                <h6>Bukti Pembayaran</h6>
            </div>
            <div class="card-body">
                <a href="{{ Storage::url('public/payment-spp/'.$picture_payment) }}" data-fancybox>
                    <img src="{{ Storage::url('public/payment-spp/'.$picture_payment) }}" class="img-fluid rounded" style="height: 250px !important;">
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card card-selected">
            <div class="card-header">
                <h6>Biodata</h6>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <p>Nama Siswa : {{ $name_student }}</p>
                    <p>Nama Wali Murid : {{ $name_parent }}</p>
                    <p>Kelas : {{ $nomor_kelas.' '.$prodi_kelas }}</p>
                    <p>Email : {{ $email_payment }}</p>
                    <p>No.Hp : {{ $phone_number }}</p>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card card-selected">
            <div class="card-header">
                <h6>Pembayaran</h6>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <p>Jenis Pembayaran : {{ $jenis_pembayaran }}</p>
                    <p>Transfer Melalui : {{ $transfer_by }}</p>
                    <p>Virtual Akun : Bank Muamalat {{ $virtual_account }}</p>
                    <p>Pembayaran Bulan : {{ $month_payment }}</p>
                    <p>Nominal Transfer : Rp {{ number_format($nominal_payment,0,',','.') }}</p>
                    <p>Diperbarui : {{ $updated_at }}</p>
                    <p>Dibuat : {{ $created_at }}</p>
                </p>
            </div>
        </div>
    </div>
</div>
