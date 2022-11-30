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
                            <th>Nomor Invoice</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoice as $inv)
                        <tr>
                            <td>{{ $inv->no_invoice }}</td>
                            <td>{{ $inv->name }}</td>
                            <td>{{ $inv->username }}</td>
                            <td>{{ $inv->note_invoice }}</td>
                            <td>
                                @if($inv->status_invoice === 'Belum Bayar')
                                    <span class="badge badge-danger">{{ $inv->status_invoice }}</span>
                                @else
                                    <span class="badge badge-primary">{{ $inv->status_invoice }}</span>
                                @endif
                            </td>
                            <td>
                                <button wire:click="getInvoice({{ $inv->id_invoice }})" class="btn btn-primary btn-animated"><i class="bi bi-eye"></i></button>
                                @if($inv->status_invoice === 'Belum Bayar')
                                <button wire:click="changeStatusInvoice({{ $inv->id_invoice }})" class="btn btn-success btn-animated" onclick="return confirm('Pastikan siswa sudah bayar!') || event.stopImmediatePropagation()">
                                    <i class="bi bi-check2-all"></i></button>
                                @elseif($inv->status_invoice === 'Sudah Bayar')
                                <button wire:click="changeStatusInvoice({{ $inv->id_invoice }})" class="btn btn-secondary btn-animated" onclick="return confirm('Reset status pembayaran menuju belum bayar?') || event.stopImmediatePropagation()"><i class="bi bi-bag-x"></i></button>
                                @endif
                                <button wire:click="destroy({{ $inv->id_invoice }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $invoice->links() }}
            @elseif($statusPage === 'show')
            <livewire:admin.invoice.show-invoice />
            @endif
        </div>
    </div>
</div>