
@extends('layouts.app-master')

@section('content')

    <div class="create-branch">
        <div class="container">
        @auth
        <h5 class="title-branch">Document Applicant Ads <hr class="garis-branch"></h5>
        <h5 class="text-create-1">Mohon mengisi bagian yang ditandai (*) dengan lengkap.</h5>
        <h5 class="text-create-2">Please input your information for required field (*)</h5>
        <hr>
        <form action="{{ route('berkas.store',$lamar->id )}}" method="POST" enctype="multipart/form-data">
        <div class="container container-branch">
            <div class="row row-branch">
                <div class="col col-branch">
                <h5 class="card-title">Document Applicant</h5>
                    <div class="card card-branch">
                        <div class="card-body">
                        @csrf
                        
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Scan CV (Curriculum Vitae) <span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('cv') is-invalid @enderror" name="cv" >
                                <!-- error message untuk title -->
                                @error('cv')
                                    <div class="alert alert-danger mt-2">
                                        {{ $cv }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Surat Lamaran Kerja<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('lamaran') is-invalid @enderror" name="lamaran" >
                                <!-- error message untuk title -->
                                @error('lamaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $lamaran }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Scan Pas Photo (4x6 berwarna)<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('photo') is-invalid @enderror" name="photo" >
                                
                                @error('lamaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $lamaran }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Scan Surat Keterangan Sehat<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('skck') is-invalid @enderror" name="skck">
                                <!-- error message untuk title -->
                                @error('skck')
                                    <div class="alert alert-danger mt-2">
                                        {{ $skck }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">kk<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('kk') is-invalid @enderror" name="kk">
                                <!-- error message untuk title -->
                                @error('kk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $kk }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">npwp<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('npwp') is-invalid @enderror" name="npwp">
                                <!-- error message untuk title -->
                                @error('npwp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $npwp }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">paklaring<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('paklaring') is-invalid @enderror" name="paklaring">
                                <!-- error message untuk title -->
                                @error('paklaring')
                                    <div class="alert alert-danger mt-2">
                                        {{ $paklaring }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">sim<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('sim') is-invalid @enderror" name="sim">
                                <!-- error message untuk title -->
                                @error('sim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $sim }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">sio<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('sio') is-invalid @enderror" name="sio">
                                <!-- error message untuk title -->
                                @error('sio')
                                    <div class="alert alert-danger mt-2">
                                        {{ $sio }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">sertipikat<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('sertipikat') is-invalid @enderror" name="sertipikat">
                                <!-- error message untuk title -->
                                @error('sertipikat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $sertipikat }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">ijazah<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('ijazah') is-invalid @enderror" name="ijazah">
                                <!-- error message untuk title -->
                                @error('ijazah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $ijazah }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row row-body">
                            <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">transkrip_nilai<span class="wajib">*</span></label>
                            <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
                            <input type="file" accept="application/pdf" class="form-control form-control-sm col-form-input @error('transkrip_nilai') is-invalid @enderror" name="transkrip_nilai">
                                <!-- error message untuk title -->
                                @error('transkrip_nilai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $transkrip_nilai }}
                                    </div>
                                @enderror
                            </div>
                        </div>
    




                </div>
            </div>

           
            <div class="row justify-content-center row-btn">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6 col-btn">
                <a href="{{url()->previous()}}" type="reset" class="btn btn-md btn-reset">Cancel</a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6 col-btn">
                <button type="submit" class="btn btn-md btn-simpan">Save</button>
                </div>
            </div>

        
    </div>
    </div>
</form>
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

   
@endsection

