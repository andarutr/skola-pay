<div class="hk-pg-body">
    @if(session()->has('success'))
        <livewire:partials.notification.success />
    @endif
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
        <div class="row">
            <div class="col-lg-11 col-sm-9 col-12">
            <button wire:click="createPage" class="btn btn-success btn-animated">Create</button>
            <div class="table-responsive">
                <table class="table table-striped mt-4">
                    <thead class="thead-primary">
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Kelas</th>
                            <th>Role</th>
                            <th>Tgl Daftar</th>
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
                        </tr>
                        @endif
                        @endforeach
                </table>
            </div>
            {{ $users->links() }}
        </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-11 col-sm-9 col-12">
            <button wire:click="backToMain" class="btn btn-success btn-animated">Kembali</button>
            <form wire:submit.prevent="store" class="mt-4">
                <div class="row gx-3">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" wire:model="name">
                            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" wire:model="username">
                            @error('username')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select class="form-select" wire:model="id_role">
                                <option value="">Pilih</option>
                                <option value="2">Student</option>
                                <option value="3">Parent</option>
                            </select>
                            @error('id_role')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-5">Create</button>
            </form>
            </div>
        </div>
    @endif
</div>