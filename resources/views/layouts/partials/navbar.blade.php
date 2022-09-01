@auth
<header class="p-3 bg-dark text-white page-without-sidebar page-header-fixed" id="page-container" >
  <div >
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a href="#" class="navbar-brand"><img src="{!! url('assets/bootstrap/img/anyargroup.png')!!}" alt="logo"></a>
			</div>
			<!-- end navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
      <ul class="nav navbar-nav me-auto mb-2 mb-lg-0" id="myDIV">
      
	    @can('home.index')		
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Dashboard</a>
        </li>
		@endcan
        @can('announcement.index')
		<li class="nav-item">
          <a class="nav-link
		  {{ Request::is('announcement') ? 'active' : '' }}" href="/announcement">Announcement</a>
        </li>
        @endcan 
		@can('pelamar.index')
		<li class="nav-item">
			<a class="nav-link
			{{ Request::is('pelamar') ? 'active' : '' }}" href="/pelamar">Applicant</a>
		  </li>
		 @endcan
        @can('employ.index')
        <li class="nav-item">
			<a class="nav-link
			{{ Request::is('employ') ? 'active' : '' }}" href="/employ">Employees</a>
		  </li>		
		@endcan

		@can('loker.index')
       <li class="nav-item">
          <a class="nav-link 
		  {{ Request::is('loker') ? 'active' : ''}} 
		  {{ Request::is('loker/create') ? 'active' : ''}} 
		  {{ Request::is('loker/create/detail/{id}') ? 'active' : ''}}" 
		  href="/loker">Vacancies</a>
        </li>
        @endcan

		
		<li class="nav-item">
			<a class="dropdown-toggle nav-link
			{{ Request::is('permissions') ? 'active' : '' }}
			{{ Request::is('permissions/create') ? 'active' : '' }}
			{{ Request::is('roles') ? 'active' : '' }}
			{{ Request::is('roles/create') ? 'active' : '' }}
			{{ Request::is('users') ? 'active' : '' }}
			{{ Request::is('users/create') ? 'active' : '' }}
			{{ Request::is('posisijob') ? 'active' : '' }}
			{{ Request::is('posisijob/create') ? 'active' : '' }}
			{{ Request::is('cabang') ? 'active' : '' }}
			{{ Request::is('cabang/create') ? 'active' : '' }}
			{{ Request::is('perusahaan') ? 'active' : '' }}" 
			data-toggle="dropdown">
			Manage
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				@can('perusahaan.index')
				<a href="/perusahaan" class="dropdown-item">Bussiness Company</a>
				@endcan
				@can('cabang.index')
				<a href="/cabang" class="dropdown-item">Branch</a>
				@endcan
				@can('posisijob.index')
				<a href="/posisijob" class="dropdown-item">Position Job</a>
				@endcan
				@can('permissions.index')
				<a href="/permissions" class="dropdown-item">Auth Permissions</a>
				@endcan
				@can('roles.index')
				<a href="/roles" class="dropdown-item">Auth Group</a>
				@endcan
				@can('users.index')
				<a href="/users" class="dropdown-item">Auth User</a>
				@endcan
			</div>
		</li>
	 
     
      </ul>
	  </div> 
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<div id = "clock" onload="currentTime()" style="color:#1572A1; font-size:14px; margin-top:16px; margin-right:10px; font-weight:600; font-family: 'Nunito Sans', sans-serif;"></div>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<!-- <span class="label">5</span> -->
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS</li>

						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ url('assets/bootstrap/img/person.png')}}" alt="" /> 
						<!-- <span class="d-none d-md-inline">Adam Schwartz</span> -->
						 <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!-- <a href="#" class="dropdown-item">Edit Profile</a>
						<a href="#" class="dropdown-item">Setting</a> -->
						<!-- <div class="dropdown-divider"></div> -->
						<a href="/logout" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->

			
		</div>    
	@endauth
  </div>
</header>

@include('layouts.partials.scripts')
