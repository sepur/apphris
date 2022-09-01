@extends('layouts.app-master')

@section('content')
        @auth
        
        <div class="container">
            
        <div class="detail-pelamar">
            
        <div class="container-pelamar">
 
            <h5 class="title-pelamar">Profile Applicant</h5>
                <!-- <a class="btn btn-close" href="{{ URL::previous() }}"></a> -->
                <div class="pelamar-content">
                    <div class="row justify-content-center row-pelamar">
                        <div class="col-lg-3 col-pelamar">
                            <div class="card card-pelamar">
                                <img src="{{ asset('storage/pelamar/' . $list->pelamar->photo) }}" class="img-pelamar" >
                            </div>
                        </div>
                    </div>
                    <h5 class="nama-pelamar">{{ $list->pelamar->nama_lengkap }}</h5>
                    <h5 class="job-pelamar"> {{ $list->loker->lowongan_kerja }} - {{ $list->loker->posisi->nama }}</h5>
                    <h5 class="nik-pelamar">NIK : {{ $list->pelamar->nik }}</h5>
                </div>

                <hr class="garis-pelamar"></hr>

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
                                <div class="text">{{ $list->pelamar->alamat}}
                                                    Rt. {{ $list->pelamar->rt}} 
                                                    Rw. {{ $list->pelamar->rw}} 
                                                    Desa. {{ $list->pelamar->desa}} 
                                                    Kecamatan. {{ $list->pelamar->kecamatan}} 
                                                    Kota/Kabupaten. {{ $list->pelamar->kota}} 
                                                    Provinsi. {{ $list->pelamar->provinsi}} 
                                                    Kodepos. {{ $list->pelamar->kodepos}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->userlamar->email}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Phone</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->no_hp}}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">DOB</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->tempat_lahir}}, {{ date('d-m-Y', strtotime($list->pelamar->tgl_lahir)) }}</div>
                                </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Family Relationship</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->hubungan_keluarga}}</div>
                                </div>
                        </div>
                        </div>

                        </div>
                      
                      
                      
                        
                    </div>
                    
                    <div class="col-lg-6 col-list-pelamar-2">
                    <div class="card card-list-pelamar">
                    <div class="title-list-pelamar"><h5 class="gris">Education</h5></div>
                    <div class="container">
                    <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Education</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                <div class="text">{{ $list->pelamar->pendidikan_terakhir}}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">School</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->nama_sekolah}}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Major</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->jurusan}}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Star From</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ date('d-m-Y', strtotime($list->pelamar->tahun_masuk)) }}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">Until</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ date('d-m-Y', strtotime($list->pelamar->tahun_lulus)) }}</div>
                                </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-lg-3 col-form-label">GPA</label>
                            <div class="col-lg-1">:</div>
                                <div class="col-lg-8 col-content">
                                    <div class="text">{{ $list->pelamar->ipk}}</div>
                                </div>
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
                            <a href="{{ route('verif.create', $list->id) }}" class="btn btn-proses">Proses</a>
                        </div>
                       
                    </div>
                </div> -->

                @if( $list->status =='In Process')<!--   -->
                <div class="pelamar-proses">
                
                    @if( $list->progres =='Offering Letter')  
                        <div class="row justify-content-center row-proses">
                            <div class="col-lg-1 col-proses">
                            </div> 

                    @elseif( $list->progres =='Contract')  
                    <div class="row justify-content-center row-proses">
                        <div class="col-lg-1 col-proses">
                        </div> 
                @else   
                        <div class="row justify-content-center row-proses">
                            <div class="col-lg-1 col-proses">   
                            </div> 
                    @endif
                            <div class="col-lg-1 col-proses">
                            </div>
                        </div>
                </div>
                @elseif( $list->status =='Rejected')
                <div class="row justify-content-center row-proses">
                            <div class="col-lg-3 col-proses">
                                <Button class="btn btn-danger">This Applicant Has Been Rejected</button>
                            </div> 
                            @elseif( $list->status =='Finish')
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
