<div class="hk-pg-body">
    @if($statusPage === 'main')
        <div class="row">
            @if(session()->has('success'))
                <livewire:partials.notification.success />
            @endif
            <div class="col-lg-1 col-sm-9 col-12"></div>
            <div class="col-lg-4 col-sm-9 col-12">
                <button wire:click="createPage" class="btn btn-primary btn-animated mb-3">Create</button>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-primary">
                            <tr>
                                <th>Murid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($linked_user as $account)
                            <tr>
                                <td>{{ $account->name }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                {{ $linked_user->links() }}
            </div>
            <div class="col-lg-5 col-sm-9 col-12">
                <div class="mt-5"></div>
                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead class="thead-primary">
                            <tr>
                                <th>Wali Murid</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($linked_parent as $account)
                            <tr>
                                <td>{{ $account->name }}</td>
                                <td>
                                    <button wire:click="destroy({{ $account->id_linked }})" class="btn btn-danger btn-animated" onclick="return confirm('Yakin ingin menghapus data?') || event.stopImmediatePropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                {{ $linked_parent->links() }}
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-11 col-sm-9 col-12">
            <button wire:click="backToMain" class="btn btn-success btn-animated mb-3">Kembali</button>
            @if(session()->has('success'))
                <livewire:partials.notification.success />
            @endif
            <form wire:submit.prevent="store" class="mt-3">
                <div class="row gx-3">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Student</label>
                            <select class="form-select" wire:model="id_user">
                                <option value="">Pilih</option>
                                @foreach($option_users as $opus)
                                <option value="{{ $opus->id }}">{{ $opus->name }}</option>
                                @endforeach
                            </select>
                            @error('id_user')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Parent</label>
                            <select class="form-select" wire:model="id_parent">
                                <option value="">Pilih</option>
                                @foreach($option_parents as $oppa)
                                <option value="{{ $oppa->id }}">{{ $oppa->name }}</option>
                                @endforeach
                            </select>
                            @error('id_parent')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-5">Create</button>
            </form>
            </div>
        </div>
    @endif
</div>