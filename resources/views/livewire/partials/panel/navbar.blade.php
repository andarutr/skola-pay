<div>
    <div class="nav-end-wrap">
        <ul class="navbar-nav flex-row">
            <li class="nav-item">
                <div class="dropdown dropdown-notifications">
                    <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <h6 class="dropdown-header px-4 fs-6">Notifications<a href="@if(Auth::user()->id_role === 2){{ url('user/notification') }}@endif @if(Auth::user()->id_role === 1){{ url('admin/notification') }}@endif" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                        </h6>
                        <div data-simplebar class="dropdown-body  p-2">
                            {{-- Notification --}}
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-head">
                                        <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                            <span class="initial-wrap">
                                                <span class="feather-icon"><i data-feather="inbox"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Selamat Datang di Skolapay (Sistem Informasi Pembayaran)</div>
                                            <div class="notifications-info">
                                                <div class="notifications-time">{{ now() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown ps-2">
                    <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                        <div class="avatar avatar-rounded avatar-xs">
                            <img src="{{ Storage::url('public/profile/'.Auth::user()->picture) }}" alt="user" class="avatar-img">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <p>Selamat Datang {{ Auth::user()->name }}</p>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="/logout">@csrf
                            <button type="submit" class="dropdown-item" >Logout</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
