@extends('layouts.app-master')

@section('content')
    <div class="dash">
        @auth
        <div class="content-dashboard">
			<div class="container">
                    
					<div class="row row-content-hallo">
						<div class="col col-12 col-content-hallo">
							<div class="card card-hallo">
                             
                                <div class="row justify-content-between row-hallo">
									<div class="col-hallo-1 col-xl-4 col-lg-4 col-12">
										<h2 class="title-1"><span id="greetings"></span>, <span id="name"> {{ Auth::user()->name }}</span></h2>
										<h5 class="title-2 ">It's <span id="time"></span></h5>
									</div>
									<div class="col-hallo-2 col-xl-4 col-lg-4 col-12">
										<img src="../assets/bootstrap/img/salam.png" alt="dashboard">
									</div>
								</div>
                               
                              
                               
								
							</div>
						</div>
					</div>

                    <div class="row justify-content-center row-content">
                        <h5 class="title-static">Statistics</h5>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                                <div class="title-head">
                                    <h5 class="text-title">Applicant</h5>
                                </div>

                                <div class="garis"></div>

                                <div class="scrol-applicant">
                                @forelse ($list as $det)
                                <div class="card card-content-applicant">
                                    <div class="container container-card-content-applicant">
                                    <a target="_blank" href="/pelamar/detail/{{$det->id}}" style="text-decoration: none;">
                                    <div class="row row-app">
                                        <div class="col-xl-2 col-2 col-app">
                                        <img src="{{ asset('storage/pelamar/' . $det->pelamar->photo) }}" class="img-app">
                                        </div>
                                        <div class="col-xl-6 col-6 col-app">
                                            <div class="row row-app-1">
                                                <div class="col-12 col-app-1">
                                                    <h5 class="text-nama-lengkap text-truncate">{!!$det->pelamar->nama_lengkap !!}</h5>
                                                </div>
                                                <div class="col-12 col-app-1">
                                                    <h6 class="text-posisi text-truncate">{{ Str::limit($det->loker->posisi->nama, 8)  }} - {{ $det->loker->cabang->nama}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-4 col-app">
                                            <h5 class="text-date">{{ date('d-m-Y', strtotime($det->tanggal)) }}</h5>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                </div>
                                @empty
                                <div class="alert alert-danger">Data belum Tersedia. </div>
                                
                                @endforelse
                                </div>
                                
                              
                           
                               
                             
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                                <div class="title-head">
                                    <h5 class="text-title">Vacancies</h5>
                                </div>

                                <div class="garis"></div>

                                <div class="scrol-vacanci">
                                @forelse ($loks as $lok)
                                <div class="card card-content-vacanci">
                                    <div class="container container-card-content-vacanci">
                                    <div class="row row-vac">
                                        <div class="col-xl-5 col-10 col-vac">
                                        <h5 class="text-loker">{{ $lok->lowongan_kerja }}</h5>
                                        </div>
                                        <div class="col-xl-5 col-10 col-vac">
                                        <h6 class="text-loker" >{{ $lok->cabang->nama }}</h6>
                                        </div>
                                        <div class="col-xl-2 col-2 col-vac">
                                            <h5 class="text-jumlah"><a class="btn btn-sm btn-grey total-applicant" href="/loker/listapply/{{$lok->id}}">{{ $lok->apply->count('pivot.id') }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @empty
                                <div class="alert alert-danger">Data belum Tersedia. </div>
                                
                                @endforelse
                            </div>

                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                            <div class="title-head">
                                    <h5 class="text-title">Employees</h5>
                                </div>

                                <div class="garis"></div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-content">
                            <div class="card card-content">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
			</div>
		</div>		
        @endauth

        @guest
       <div class="content-guest">
        <div class="container-fluid container-guest">
            <div class="row justify-content-center row-guest-title">
                <div class="col-lg-4 col-guest-title">
                    <h5 class="title-1">Welcome To</h5>
                    <h5 class="title-2">Anyar Apps</h5>
                </div>
            </div>
            <div class="row row-guest">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-guest">
                        <div class="img-dash">
                        <img src="../assets/bootstrap/img/apps.png" class="guest-img" alt="">
                        </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 c0ol-sm-12 col-guest">
                    <div class="row justify-content-center row-guest-btn">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-guest-btn">
                        <a href="https://karir.anyargroup.co.id/" target="blank" class="btn-card">
                        <div class="card card-guest">
                        <img src="../assets/bootstrap/img/Vector.png" class="btn-img" alt="">
                        <h5 class="title-btn-dalam">Career</h5>
                        </div>
                       
                        <h5 class="title-btn">Career</h5>
                        </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-guest-btn">
                        <a href="/login" class="btn-card">
                        <div class="card card-guest">
                        <img src="../assets/bootstrap/img/Vector1.png" class="btn-img" alt="">
                        <h5 class="title-btn-dalam">Employee</h5>
                        </div>
                        
                        <h5 class="title-btn">Employee</h5>
                        </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-guest-btn">
                        <a href="#" class="btn-card">
                        <div class="card card-guest">
                        <img src="../assets/bootstrap/img/Vector2.png" class="btn-img" alt="">
                        <h5 class="title-btn-dalam">Attendance</h5>
                        </div>
                      
                        <h5 class="title-btn">Attendance</h5>
                        </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       </div>
        @endguest
        </div>

        @include('home.partials.scripts')
        
@endsection
