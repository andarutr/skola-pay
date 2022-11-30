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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-primary">
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Kelas</th>
                            <th>Role</th>
                            <th>Tgl Daftar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        @if($user->id_role === 2 || $user->id_role === 3)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->nomor_kelas.' '.$user->prodi_kelas }}</td>
                            <td>{{ $user->name_role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <button wire:click="destroy({{ $user->id }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                </table>
            </div>
            {{ $users->links() }}
        </div>
    </div>
</div>