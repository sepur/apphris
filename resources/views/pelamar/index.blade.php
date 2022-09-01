@extends('layouts.app-master')

@section('content')
<div class="applicant">
        <div class="container">
            <h5 class="title-applicant">Applicant</h5>
                <hr class="border"></hr>
	        <div class="table-body">
		<h5 class="list-applicant">All Applicant</h5>

         <form action="/pelamar" method="GET" class="report">
            <div class="input-group mb-2">
                <input type="date" class=" form-control col-form-input" name="startdate" value="{{request('startdate')}}">
                <input type="date" class=" form-control col-form-input" name="enddate" value="{{request('enddate')}}">
                <select class="custom-select form-control col-form-input" name="format" value="{{request('format')}}">
                    <option value="">---Select Option---</option>
                    <option value="view">View</option>
                    <option value="excel">Excel</option>
                    <option value="pdf">PDF</option>
                </select>
                <input type="submit" class="btn btn-sm btn-primary" value="Cetak" name="report">
            </div>
        </form>
<br>
            <div class="search-applicant">
                <form action="/pelamar" method="GET" class="search">
                <div class="input-group mb-2">
                    <input type="text" class="form-control form-control-sm col-form-input" name="search" value="{{request('search')}}">
                    <input type="submit" class="btn btn-sm btn-primary" value="CARI">
                </div>
	        </form>
        </div>
	
    <br>

	  <table class="table table-responsive  data-table">
	    <thead>
            <tr class="judul">
	            <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Relationship</th>
                <th scope="col">Education</th>
                <th scope="col">Position Applied</th>
                <th scope="col">Placement</th>
                <th scope="col">Progres</th>
                <th scope="col"  >Actions</th>
	        </tr>
	   </thead>
	   <tbody >
	   @forelse ($list as $det)
           @include('loker.modalreject')
           @include('loker.modalapprove')
            <tr class="isi">
                <td>{{ $loop->iteration }}.</td>
	            <td class="name">{{ $det->pelamar->nama_lengkap }}</td>
                <td>{{ $det->pelamar->hubungan_keluarga}}</td>
                <td>{{ $det->pelamar->pendidikan_terakhir }}</td>
                <td class="position">{{$det->loker->posisi->nama }} - {{$det->loker->lowongan_kerja }}</td>
                <td >{{ $det->loker->cabang->nama }}</td>
                <td class="progres">{{ $det->progres}}</td>
	            <td class="btn-action">
                    <a  href="/storage/pelamar/{{$det->pelamar->cv}}" target="_blank" class="btn btn-sm btn-secondary" data-bs-toggle="modal">
                    <i class="fas fa-download" style="color:#fff; "></i></a>

<!--
                 <a  href="/verif/cetakol/{{$det->id}}" class="btn btn-sm btn-info" data-bs-toggle="modal">
		 <i class="fas fa-download" style="color:#fff; "></i></a>
-->

           
	    <a href="/pelamar/detail/{{$det->id}}" target="_blank" class="btn btn-sm btn-info">
                 <i class="fas fa-eye" style="color:#fff;  "></i></a>
             
        <a href="{{ route('berkas.create', $det->id) }}/" class="btn btn-sm btn-primary">Berkas</a>
               <button class="btn btn-sm btn-danger btn-reject" data-toggle="modal" data-target="#exampleModalReject" data-id ="{{$det->id}}" data-whatever="@mdo">
                   <i class="fas fa-window-close"></i></button>
        
	       @if( $det->status =='Rejected')
	         <button class="btn btn-sm btn-danger">Has Rejected</button>
	       @elseif( $det->status =='Finish')
                 <button class="btn btn-sm btn-success">Has Finish</button> 
               @elseif( $det->status =='In Process')
	         @if( $det->progres =='Offering Letter')  
		<a href="{{ route('verif.createoffering', $det->id) }}" class="btn btn-sm btn-primary">Create Ol</a>
               <button class="btn btn-sm btn-danger btn-reject" data-toggle="modal" data-target="#exampleModalReject" data-id ="{{$det->id}}" data-whatever="@mdo">
                   <i class="fas fa-window-close"></i></button>
               
                 @elseif( $det->progres =='Contract')
		<a href="{{ route('verif.createemploye', $det->id) }}" class="btn btn-sm btn-primary">Contract</a>
                 <button class="btn btn-sm btn-danger btn-reject" data-toggle="modal" data-target="#exampleModalReject" data-id ="{{$det->id}}" data-whatever="@mdo">
                   <i class="fas fa-window-close"></i></button>
               
 
               @else   
	     <button class="btn btn-sm btn-success btn-approve" data-toggle="modal" data-target="#exampleModal" data-id ="{{$det->id}}" data-whatever="@mdo">
                   <i class="fas fa-calendar-check"></i></button>
              
              <button class="btn btn-sm btn-danger btn-reject" data-toggle="modal" data-target="#exampleModalReject" data-id ="{{$det->id}}" data-whatever="@mdo">
                   <i class="fas fa-window-close"></i></button>
               
               <!--<a href="{{ route('verif.create', $det->id) }}" class="btn btn-sm btn-primary">Proses</a>-->
                 @endif
              @endif
              @empty
              </td>
	       <div class="alert alert-danger">Data belum Tersedia. </div>
	      @endforelse
                </tbody>
	    </table>

        <div class="d-flex">
                {!! $list->links() !!}
            </div>



        </div>
        </div>
    </div>




<script>
    $('.btn-reject').on('click',function(){
        var dataaku = $(this).data('id');
        $("#cekidreject").val(dataaku);
    })
    $('.btn-approve').on('click',function(){
        var dataaku = $(this).data('id');
        $("#cekid").val(dataaku);
    })
 
</script>

<script>
    ClassicEditor
    .create( document.querySelector( '#note' ) )
    .catch( error => {
        console.log( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#notereject' ) )
    .catch( error => {
        console.log( error );
    } );
</script>
<div id="cover-spin"></div>
<style>
    #cover-spin {
    position:fixed;
    width:100%;
    left:0;right:0;top:0;bottom:0;
    background-color: rgba(255,255,255,0.7);
    z-index:9999;
    display:none;
}

@-webkit-keyframes spin {
	from {-webkit-transform:rotate(0deg);}
	to {-webkit-transform:rotate(360deg);}
}

@keyframes spin {
	from {transform:rotate(0deg);}
	to {transform:rotate(360deg);}
}

#cover-spin::after {
    content:'';
    display:block;
    position:absolute;
    left:48%;top:40%;
    width:40px;height:40px;
    border-style:solid;
    border-color:black;
    border-top-color:transparent;
    border-width: 4px;
    border-radius:50%;
    -webkit-animation: spin .8s linear infinite;
    animation: spin .8s linear infinite;
}
</style>
@endsection

