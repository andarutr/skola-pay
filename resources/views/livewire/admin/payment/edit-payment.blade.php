<div class="row edit-profile-wrap">
    <div class="col-lg-12 col-sm-9 col-12">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_block_1">
          <form wire:submit.prevent="update">
            @if(session()->has('success'))
            <script>
                document.getElementById('edit_pembayaran').scrollIntoView();
            </script>
            <livewire:partials.notification.success />
            @endif
            <div class="title title-xs title-wth-divider text-primary text-uppercase my-4" id="edit_pembayaran"><span>Personal Info</span></div>
            <div class="row gx-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label">Nama Siswa</label>
                  <input class="form-control" type="text" wire:model="name_student">
                  @error('name_student')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label">Nama Wali Murid</label>
                  <input class="form-control" type="text" wire:model="name_parent">
                  @error('name_parent')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
              </div>
            </div>
            <div class="row gx-3">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="text" wire:model="email_payment">
                    @error('email_payment')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input class="form-control" type="text" wire:model="phone_number" value="{{ $phone_number }}">
                    @error('phone_number')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>
            <div class="row gx-3">
                <div class="col-sm-6">
                    <label class="form-label">Jenis Pembayaran</label>
                    <select class="form-select" wire:model="jenis_pembayaran">
                      <option value="{{ $jenis_pembayaran }}">{{ $jenis_pembayaran }}</option>
                    </select>
                    @error('jenis_pembayaran')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Transfer Melalui</label>
                    <select class="form-select" wire:model="transfer_by">
                        <option value="{{ $transfer_by }}">{{ $transfer_by }}</option>
                        <option value="ATM">ATM</option>
                        <option value="M-Banking">M-Banking</option>
                        <option value="Indomaret">Indomaret</option>
                        <option value="Alfamart">Alfamart</option>
                        <option value="E-Wallet">E-Wallet(Ovo, Dana, Flip)</option>
                    </select>
                    @error('transfer_by')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>
            <div class="row gx-3">
                <div class="col-sm-6">
                    <label class="form-label">Pembayaran Bulan</label>
                    <select class="form-select" wire:model="month_payment">
                        <option value="{{ $month_payment }}">{{ $month_payment }}</option>
                        <option value="Januari {{ date('Y') }}">Januari {{ date('Y') }}</option>
                        <option value="Februari {{ date('Y') }}">Februari {{ date('Y') }}</option>
                        <option value="Maret {{ date('Y') }}">Maret {{ date('Y') }}</option>
                        <option value="April {{ date('Y') }}">April {{ date('Y') }}</option>
                        <option value="Mei {{ date('Y') }}">Mei {{ date('Y') }}</option>
                        <option value="Juni {{ date('Y') }}">Juni {{ date('Y') }}</option>
                        <option value="Juli {{ date('Y') }}">Juli {{ date('Y') }}</option>
                        <option value="Agustus {{ date('Y') }}">Agustus {{ date('Y') }}</option>
                        <option value="September {{ date('Y') }}">September {{ date('Y') }}</option>
                        <option value="Oktober {{ date('Y') }}">Oktober {{ date('Y') }}</option>
                        <option value="November {{ date('Y') }}">November {{ date('Y') }}</option>
                        <option value="Desember {{ date('Y') }}">Desember {{ date('Y') }}</option>
                    </select>
                    @error('month_payment')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Virtual Account</label>
                    <select class="form-select" wire:model="virtual_account">
                      <option value="{{ $virtual_account }}">Bank Muamalat {{ $virtual_account }}</option>
                    </select>
                    @error('virtual_account')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="col-sm-12">
                    <label class="form-label">Nominal</label>
                    <input type="text" class="form-control" wire:model="nominal_payment"/>
                    @error('nominal_payment')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>