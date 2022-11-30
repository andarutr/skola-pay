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
            @if($statusPage === 'show' || $statusPage === 'edit')
            <button class="btn btn-success btn-floating mb-3" wire:click="goToMain"><i class="bi bi-arrow-left-square"></i> Kembali</button>
            @endif
            @if($statusPage === 'main')
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Peserta Didik</th>
                            <th>Kelas</th>
                            <th>Jenis Pembayaran</th>
                            <th>Bulan</th>
                            <th>Nominal</th>
                            <th>Dibuat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $pay)
                        <tr>
                            <td>{{ $pay->name_student }}</td>
                            <td>{{ $pay->nomor_kelas.' '.$pay->prodi_kelas }}</td>
                            <td>{{ $pay->jenis_pembayaran }}</td>
                            <td>{{ $pay->month_payment }}</td>
                            <td>Rp {{ number_format($pay->nominal_payment,0,',','.') }}</td>
                            <td>{{ $pay->created_at }}</td>
                            <td>
                                <button wire:click="getPayment({{ $pay->id_payment }})" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                <button wire:click="getPaymentEdit({{ $pay->id_payment }})" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                <button wire:click="destroy({{ $pay->id_payment }})" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $payments->links() }}
            @elseif($statusPage === 'show')
            <livewire:admin.payment.show-payment />
            @else
            <livewire:admin.payment.edit-payment />
            @endif
        </div>
    </div>
</div>