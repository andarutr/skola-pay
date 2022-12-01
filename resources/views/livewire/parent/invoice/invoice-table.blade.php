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
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $invoice->links() }}
            @elseif($statusPage === 'show')
            <livewire:parent.invoice.show-invoice />
            @endif
        </div>
    </div>
</div>