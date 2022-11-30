<div class="hk-pg-body">
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
    <div class="row">
        <div class="col-lg-11 col-sm-9 col-12">
            <h5>Data Tagihan {{ Auth::user()->name }}</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Invoice</th>
                            <th>Keterangan</th>
                            <th>Tgl Bayar</th>
                            <th>Nominal Bayar</th>
                            <th>Status Bayar</th>
                            <th>Data Mutakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoice as $inv)
                        <tr>
                            <td>{{ $inv->no_invoice }}</td>
                            <td>{{ $inv->note_invoice }}</td>
                            <td>{{ $inv->tgl_bayar }}</td>
                            <td>Rp {{ number_format($inv->nominal_bayar,0,',','.') }}</td>
                            <td>
                                @if($inv->status_invoice === 'Belum Bayar')
                                    <span class="badge badge-danger">
                                        {{ $inv->status_invoice }}
                                    </span>
                                @else
                                    <span class="badge badge-primary">
                                        {{ $inv->status_invoice }}
                                    </span>
                                @endif
                            </td>
                            <td>{{ $inv->updated_at }}</td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $invoice->links() }}
        </div>
    </div>
</div>