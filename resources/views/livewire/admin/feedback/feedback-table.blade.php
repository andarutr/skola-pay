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
        <div class="col-6 col-lg-4">
            <input type="text" class="form-control" placeholder="Cari Data..." wire:model="search">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-11 col-sm-9 col-12">
            @if(session()->has('success'))
                <livewire:partials.notification.success />
            @endif
            @if($feed_count > 0)
            <button class="btn btn-sm btn-danger btn-floating mb-3" wire:click="destroyAll" onclick="return confirm('Yakin ingin menghapus semua data?') || event.stopImmediatePropagation()"><i class="bi bi-trash"></i> Delete All</button>
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Dibuat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feed)
                        <tr>
                            <td>{{ $feed->name_feedback }}</td>
                            <td>{{ $feed->email_feedback }}</td>
                            <td>{{ $feed->pesan_feedback }}</td>
                            <td>{{ $feed->created_at }}</td>
                            <td>
                                <button wire:click="destroy({{ $feed->id_feedback }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $feedbacks->links() }}
        </div>
    </div>
</div>