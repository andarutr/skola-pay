<!-- Vertical Nav -->
<div class="hk-menu">
	<!-- Brand -->
	<div class="menu-header">
		<span>
			<a class="navbar-brand" href="#">
				<img src="{{ url('assets/images/logo/logo.webp') }}" class="img-fluid" width="150">
			</a>
			<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
				<span class="icon">
					<span class="svg-icon fs-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<line x1="10" y1="12" x2="20" y2="12"></line>
							<line x1="10" y1="12" x2="14" y2="16"></line>
							<line x1="10" y1="12" x2="14" y2="8"></line>
							<line x1="4" y1="4" x2="4" y2="20"></line>
						</svg>
					</span>
				</span>
			</button>
		</span>
	</div>
	<!-- /Brand -->

	<!-- Main Menu -->
	<div data-simplebar class="nicescroll-bar">
		<div class="menu-content-wrap">
			@if(Auth::user()->id_role === 1)
				<div class="menu-group">
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Dashboard') active @endif">
							<a class="nav-link" href="{{ url('admin/dashboard') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-rocket"></i>
								</span>
								<span class="nav-link-text">Dashboard</span>
							</a>
						</li>
					</ul>	
				</div>
				<div class="menu-gap"></div>
				<div class="menu-group">
					<div class="nav-header">
						<span>Apps</span>
					</div>
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Edit Profile') active @endif">
							<a class="nav-link" href="{{ url('admin/edit-profile') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-person"></i>
								</span>
								<span class="nav-link-text">Edit Profil</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Change Password') active @endif">
							<a class="nav-link" href="{{ url('admin/change-password') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-shield-lock"></i>
								</span>
								<span class="nav-link-text">Change Password</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Pembayaran') active @endif">
							<a class="nav-link" href="{{ url('admin/pembayaran') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-credit-card"></i>
								</span>
								<span class="nav-link-text">Pembayaran</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Tagihan') active @endif">
							<a class="nav-link" href="{{ url('admin/tagihan') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-receipt"></i>
								</span>
								<span class="nav-link-text">Tagihan</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Feedback') active @endif">
							<a class="nav-link" href="{{ url('admin/feedback') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-emoji-smile"></i>
								</span>
								<span class="nav-link-text">Feedback</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'History') active @endif">
							<a class="nav-link" href="{{ url('admin/history') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-clock-history"></i>
								</span>
								<span class="nav-link-text">History</span>
							</a>
						</li>	
					</ul>
				</div>
				<div class="menu-gap"></div>
				<div class="menu-group">
					<div class="nav-header">
						<span>Access</span>
					</div>
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Linked Account') active @endif">
							<a class="nav-link" href="{{ url('admin/linked-account') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-link"></i>
								</span>
								<span class="nav-link-text">Linked Account</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'New Account') active @endif">
							<a class="nav-link" href="{{ url('admin/account') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-person-add"></i>
								</span>
								<span class="nav-link-text">New Account</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Remove Account') active @endif">
							<a class="nav-link" href="{{ url('admin/account/remove') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-person-fill-slash"></i>
								</span>
								<span class="nav-link-text">Remove Account</span>
							</a>
						</li>
					</ul>
				</div>
			@elseif(Auth::user()->id_role === 2)
				<div class="menu-group">
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Dashboard') active @endif">
							<a class="nav-link" href="{{ url('student/dashboard') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-rocket"></i>
								</span>
								<span class="nav-link-text">Dashboard</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="menu-gap"></div>
				<div class="menu-group">
					<div class="nav-header">	
						<span>Student</span>
					</div>
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Edit Profile') active @endif">
							<a class="nav-link" href="{{ url('student/edit-profile') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-person"></i>
								</span>
								<span class="nav-link-text">Edit Profil</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Change Password') active @endif">
							<a class="nav-link" href="{{ url('student/change-password') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-shield-lock"></i>
								</span>
								<span class="nav-link-text">Change Password</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Tagihan') active @endif">
							<a class="nav-link" href="{{ url('student/tagihan') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-receipt"></i>
								</span>
								<span class="nav-link-text">Data Tagihan</span>
							</a>
						</li>
					</ul>	
				</div>
			@else
				<div class="menu-group">
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Dashboard') active @endif">
							<a class="nav-link" href="{{ url('parent/dashboard') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-rocket"></i>
								</span>
								<span class="nav-link-text">Dashboard</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="menu-gap"></div>
				<div class="menu-group">
					<div class="nav-header">	
						<span>Parent</span>
					</div>
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Edit Profile') active @endif">
							<a class="nav-link" href="{{ url('parent/edit-profile') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-person"></i>
								</span>
								<span class="nav-link-text">Edit Profil</span>
							</a>
						</li>
						<li class="nav-item @if($menu == 'Change Password') active @endif">
							<a class="nav-link" href="{{ url('parent/change-password') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-shield-lock"></i>
								</span>
								<span class="nav-link-text">Change Password</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('pembayaran') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-credit-card"></i>
								</span>
								<span class="nav-link-text">Pembayaran SPP</span>
							</a>
						</li>
					</ul>
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Pembayaran') active @endif">
							<a class="nav-link" href="{{ url('parent/pembayaran') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-wallet2"></i>
								</span>
								<span class="nav-link-text">Data Pembayaran</span>
							</a>
						</li>
					</ul>	
					<ul class="navbar-nav flex-column">
						<li class="nav-item @if($menu == 'Tagihan') active @endif">
							<a class="nav-link" href="{{ url('parent/tagihan') }}">
								<span class="nav-icon-wrap">
									<i class="bi bi-receipt"></i>
								</span>
								<span class="nav-link-text">Data Tagihan</span>
							</a>
						</li>
					</ul>	
				</div>
			@endif
		</div>
	</div>
	<!-- /Main Menu -->
</div>
<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
<!-- /Vertical Nav -->