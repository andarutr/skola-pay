@extends('layouts.panel')

@section('title', 'Edit Profile')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Edit Profile</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row edit-profile-wrap">
      <div class="col-lg-12 col-sm-9 col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
            <form action="{{ url('admin/edit-profile') }}" method="POST" enctype="multipart/form-data">@csrf
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="media align-items-center">
                      <div class="media-head me-5">
                        <div class="avatar avatar-rounded avatar-xxl">
                          <img src="{{ Storage::url('public/profile/'.$user->picture) }}" alt="user" class="avatar-img">
                        </div>
                      </div>
                      <div class="media-body">
                        <div class="btn btn-soft-primary btn-file mb-1">
                          Upload Photo
                          <input type="file" class="upload" name="picture">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @if(session()->has('success'))
              <livewire:partials.notification.success />
              @endif
              <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Personal Info</span></div>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
                    @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" value="{{ $user->username }}" readonly/>
                  </div>
                </div>
              </div>
              <div class="row gx-3">
                <div class="col-sm-12">
                  <label class="form-label">Kelas (Boleh Dikosongkan)</label>
                  <select class="form-select" name="kelas">
                    <option value="{{ $user->id_kelas }}">{{ $user->nomor_kelas }} {{ $user->prodi_kelas }}</option>
                    @foreach($kelas as $kls)
                    <option value="{{ $kls->id_kelas }}">{{ $kls->nomor_kelas }} {{ $kls->prodi_kelas }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Additional Info</span></div>
              <div class="row gx-3">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input class="form-control" type="text" name="phone_number" value="{{ $user->phone_number }}">
                    @error('phone_number')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>
@endsection