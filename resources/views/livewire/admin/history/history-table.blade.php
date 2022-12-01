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
            @if($data_count > 0)
            <button class="btn btn-sm btn-danger btn-floating mb-3" wire:click="destroyAll" onclick="return confirm('Yakin ingin menghapus semua data?') || event.stopImmediatePropagation()"><i class="bi bi-trash"></i> Delete All</button>
            @endif
            @if(session()->has('success'))
                <livewire:partials.notification.success />
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($histories as $history)
                        <tr>
                            <td>{{ $history->name }}</td>
                            <td>{{ $history->username }}</td>
                            <td>{{ $history->activity_history }} pada {{ $history->created_at }}</td>
                            <td>
                                <button wire:click="destroy({{ $history->id_history }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ $histories->links() }}
        </div>
    </div>
</div>