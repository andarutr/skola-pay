<div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_block_1">
            <div class="row">
                <div class="col-md-12 mb-md-4 mb-3">
                    <div class="card card-border mb-0 h-100">
                        <div class="card-header card-header-action">
                            <h6>Data Pembayaran Ibu/Bapak {{ Auth::user()->name }}</h6>
                            <p>Note: Jika pembayaran melalui cash, silahkan check pada menu Tagihan!</p>
                        </div>
                        <div class="card-body">
                            <div class="contact-list-view">
                                <div class="table-responsive">
                                    <table class="table nowrap w-100 mb-5">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>No.Handphone</th>
                                                <th>Data Mutakhir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $pay)
                                            <tr>
                                                <td>
                                                    <p>{{ $pay->name_student }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $pay->nomor_kelas.' '.$pay->prodi_kelas }}</p>
                                                </td>
                                                <td>
                                                    <p>Pembayaran {{ $pay->jenis_pembayaran }} Bulan {{ $pay->month_payment }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $pay->phone_number }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $pay->updated_at }}</p>
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