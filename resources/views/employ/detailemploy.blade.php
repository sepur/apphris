@extends('layouts.app-master')

@section('content')
        @auth
        
        <div class="container">
            
        <div class="detail-pelamar">
            
        <div class="container-pelamar">
 
            <h5 class="title-pelamar">Profile Applicant</h5>
                <!-- <a class="btn btn-close" href="{{ URL::previous() }}"></a> -->
		<div class="pelamar-content">
		    @if(empty($lm->photo))
                    @else
		    <div class="row justify-content-center row-pelamar">
                        <div class="col-lg-3 col-pelamar">
			    <div class="card card-pelamar">
                            <img src="{{ asset('storage/pelamar/' . $lm->photo) }}" class="img-pelamar" >
                            </div>
                        </div>
                    </div>
                    @endif

                    <h5 class="nama-pelamar">{{ $employes->nama_lengkap }}</h5>
                    <h5 class="nik-pelamar">No Identitas (KTP) : {{$employes->no_identitas}}</h5>
                    <h5 class="nik-pelamar">No Induk Karyawan : {{ $employes->nomor_induk_karyawan }}</h5>

                </div>

                <hr class="garis-pelamar"></hr>

                <div class="container container-list-pelamar"></div>

                <div class="container container-list-pelamar">
                <div class="row justify-content-center row-list-pelamar">
                    <div class="col-lg-6 col-list-pelamar-1">
                        <div class="card card-list-pelamar">
                            <div class="title-list-pelamar"><h5 class="gris">Personal Data</h5></div>
                            <div class="container">
                            <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Address</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->alamat}}
                                                    Rt. {{ $employes->rt}} 
                                                    Rw. {{ $employes->alamat}} 
                                                    Desa. {{ $employes->desa}} 
                                                    Kecamatan. {{ $employes->kecamatan}} 
                                                    Kota/Kabupaten. {{ $employes->kota}} 
                                                    Provinsi. {{ $employes->provinsi}} 
                                                    Kode Pos. {{ $employes->kodepos}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->user->email}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Phone</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->no_hp}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">DOB</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $employes->tempat_lahir}}, {{ date('d-m-Y', strtotime($employes->tgl_lahir)) }}</div>
                                </div>
                        </div>

                     
                        </div>

                        </div>
                      
                      
                      
                        
                    </div>
                    
                    <div class="col-lg-6 col-list-pelamar-2">
                    <div class="card card-list-pelamar">
                    <div class="title-list-pelamar" style="margin-top:30px;"></div>
                    <div class="container">
                    <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Status</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->status_karyawan}}</div>
                                </div>
                        </div>
                    <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Branch</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->cabang->nama}}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Position</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $employes->jabatan->nama}}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Star From</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ date('d-m-Y', strtotime($employes->tahun_gabung)) }}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Until</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ date('d-m-Y', strtotime($employes->tahun_keluar)) }}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Salary</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text"> <div class="text">Rp.{{$english_format_number = number_format($employes->upah)}},00,-</div></div>
                                </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                </div>



                <!-- <div class="pelamar-proses">
                    <div class="row justify-content-center row-proses">
                    <div class="col-lg-1 col-proses">
                            <a href="{{ URL::previous() }}" class="btn btn-cancel">Cancel</a>
                        </div>
                        <div class="col-lg-1 col-proses">
                            <a href="{{ route('verif.create', $employes->id) }}" class="btn btn-proses">Proses</a>
                        </div>
                       
                    </div>
                </div> -->

                @if( $employes->status =='In Process')<!--   -->
                <div class="pelamar-proses">
                
                    @if( $employes->progres =='Offering Letter')  
                        <div class="row justify-content-center row-proses">
                            <div class="col-lg-1 col-proses">
                                <a href="{{ route('verif.createoffering', $employes->id) }}" class="btn btn-proses">Create Ol</a>
                            </div> 

                    @elseif( $employes->progres =='Contract')  
                    <div class="row justify-content-center row-proses">
                        <div class="col-lg-1 col-proses">
                            <a href="{{ route('verif.createemploye', $employes->id) }}" class="btn btn-proses">Contract</a>
                        </div> 
                @else   
                        <div class="row justify-content-center row-proses">
                            <div class="col-lg-1 col-proses">   
                                <a href="{{ route('verif.create', $employes->id) }}" class="btn btn-proses">Proses</a>
                            </div> 
                    @endif
                            <div class="col-lg-1 col-proses">
                                <a href="{{ URL::previous() }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                </div>
                @elseif( $employes->status =='Rejected')
                <div class="row justify-content-center row-proses">
                            <div class="col-lg-3 col-proses">
                                <Button class="btn btn-danger">This Applicant Has Been Rejected</button>
                            </div> 
                            @elseif( $employes->status =='Finish')
                <div class="row justify-content-center row-proses">
                            <div class="col-lg-3 col-proses">
                                <Button class="btn btn-success">This Applicant Has Become an Employee</button>
                            </div> 
                @endif

                                
                    
           
        </div>
    </div>
    </div>


                             

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
        @endauth

				
 </tbody>
 </table>
 
 </div>
     
   
@endsection
