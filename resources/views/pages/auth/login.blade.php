@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="hk-pg-wrapper py-0">
  <div class="hk-pg-body py-0">
    <!-- Container -->
    <div class="container-fluid">
      <!-- Row -->
      <div class="row auth-split">
        <div class="col-xl-5 col-lg-6 col-md-7 position-relative mx-auto">
          <div class="auth-content flex-column pt-8 pb-md-8 pb-13">
            <div class="text-center mb-7">
              <a class="navbar-brand me-0" href="/login">
                <img class="brand-img d-inline-block" src="/panel/dist/img/logo-light.png" alt="brand">
              </a>
            </div>
            <form class="w-100" action="{{ route('login') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-xl-7 col-sm-10 mx-auto">
                  @if(session('status'))
                    <div class="alert alert-primary" role="alert">
                      {{ session('status') }}
                    </div>
                  @endif
                  <div class="text-center mb-4">
                    <h4>Silahkan Login</h4>
                    <p> 
                      <ul>
                        <li>Murid dapat login menggunakan NIS</li>
                        <li>Wali Murid dapat login menggunakan nomor telepon</li>
                      </ul> 
                    </p>
                  </div>
                  <div class="row gx-3">
                    <div class="form-group col-lg-12">
                      <div class="form-label-group">
                        <label>Username</label>
                      </div>
                      <input class="form-control" type="text" name="username" placeholder="Masukkan Username" value="{{ old('username') }}">
                      @error('username')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="form-group col-lg-12">
                      <div class="form-label-group">
                        <label>Password</label>
                        <a href="javascript:;" class="fs-7 fw-medium" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password ?</a>
                      </div>
                      <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                          <input class="form-control" type="password" name="password" placeholder="Masukkan Password">
                          <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                            <span>Show</span>
                            <span class="d-none">Hide</span>
                          </a>
                          @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                        </span>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-uppercase btn-block">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6 col-md-5 col-sm-10 d-md-block d-none position-relative bg-primary-light-5">
          <div class="auth-content flex-column text-center py-8">
            <div class="row">
              <div class="col-xxl-7 col-xl-8 col-lg-11 mx-auto">
                <h2 class="mb-4">Thank's to Pro Jampack 2.0</h2>
              </div>
            </div>
            <img src="/panel/dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-50 mt-7" alt="login"/>
          </div>
          <p class="p-xs credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
        </div>
      </div>
      <!-- /Row -->
    </div>
    <!-- /Container -->
  </div>
  <!-- /Page Body -->
</div>

{{-- Modal --}}
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Silahkan hubungi admin!</p>
			</div>
		</div>
	</div>
</div>
@endsection