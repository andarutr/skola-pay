<div class="hk-pg-body">
    @if($statusPage === 'main')
    <div class="row mb-4">
        <div class="col-4 col-lg-2">
            <select class="form-select" wire:model="paginate">
                <option>Filter</option>
                <option value="5">5</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="col-6 col-lg-4">
            <input type="text" class="form-control" placeholder="Cari Data..." wire:model="search">
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-11 col-sm-9 col-12">
            @if(session()->has('success'))
                <livewire:partials.notification.success />
            @endif
            @if($statusPage === 'show')
            <button class="btn btn-success btn-floating mb-3" wire:click="goToMain"><i class="bi bi-arrow-left-square"></i> Kembali</button>
            @endif
            @if($statusPage === 'main')
            <p>Cari data berdasarkan nama, dan bulan pembayaran.</p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jenis Pembayaran</th>
                            <th>No.Handphone</th>
                            <th>Data Mutakhir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $pay)
                        <tr>
                            <td>{{ $pay->name_student }}</td>
                            <td>{{ $pay->nomor_kelas.' '.$pay->prodi_kelas }}</td>
                            <td>Pembayaran {{ $pay->jenis_pembayaran }} Bulan {{ $pay->month_payment }}</td>
                            <td>{{ $pay->phone_number }}</td>
                            <td>{{ $pay->updated_at }}</td>
                            <td>
                                <a href="javascript:;" wire:click="getPayment({{ $pay->id_payment }})">
                                    <span class="badge badge-success">lihat</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $payments->links() }}
            @else
            <livewire:parent.payment.show-payment />
            @endif
        </div>
    </div>
</div>