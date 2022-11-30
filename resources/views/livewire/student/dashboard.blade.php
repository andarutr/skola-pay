<div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_block_1">
            <div class="row">
                <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>Pembayaran Terbaru {{ Auth::user()->name }}
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="contact-list-view">
                                <div class="table-responsive">
                                    <table class="table nowrap w-100 mb-5">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th>Invoice</th>
                                                <th>Keterangan</th>
                                                <th>Status Bayar</th>
                                                <th>Data Mutakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($invoice as $inv)
                                            <tr>
                                                <td>
                                                    <p>{{ $inv->no_invoice }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $inv->note_invoice }}</p>
                                                </td>
                                                <td>
                                                    @if($inv->status_invoice === 'Belum Bayar')
                                                    <span class="badge badge-danger">{{ $inv->status_invoice }}</span>
                                                    @else
                                                    <span class="badge badge-primary">{{ $inv->status_invoice }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p>{{ $inv->updated_at }}</p>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>