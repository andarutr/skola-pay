<div>
    <div class="row edit-profile-wrap">
      <div class="col-lg-12 col-sm-9 col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
          <div class="row">
            <div class="col-lg-11">
                @if(session()->has('success'))
                    <livewire:partials.notification.success />
                @elseif(session()->has('failed'))
                    <livewire:partials.notification.failed />
                @endif
              <form wire:submit.prevent="changePassword">
                <div class="row gx-3">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                          <input class="form-control" type="password" wire:model="old_password" placeholder="Password Lama">
                          <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                            <span>Show</span>
                            <span class="d-none">Hide</span>
                          </a>
                          @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                          <input class="form-control" type="password" wire:model="new_password" placeholder="Password Baru">
                          <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                            <span>Show</span>
                            <span class="d-none">Hide</span>
                          </a>
                          @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                          <input class="form-control" type="password" wire:model="password_confirmation" placeholder="Konfirmasi Password Baru">
                          <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                            <span>Show</span>
                            <span class="d-none">Hide</span>
                          </a>
                          @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary mt-5">Save Changes</button>
              </form>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
</div>
