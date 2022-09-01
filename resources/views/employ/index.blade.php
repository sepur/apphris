@extends('layouts.app-master')

@section('content')
    <div class="loker">
        <div class="container">
        <h5 class="title-vacancy">Employees</h5>
        <hr class="border"></hr>
		<div class="table-body">
            <h5 class="list-vacancy">List Employees</h5>
	    <div class="search-applicant">
        <form action="/employ" method="GET" class="report">
	    <div class="input-group mb-2">
                <select class="form-control col-form-input" id="cabang" name="cabang">
                @foreach ($cabs as $cab)
                   <option value="{{ $cab->id }}">{{ $cab->nama }}</option>
                @endforeach
                </select> 
                <select class="custom-select form-control col-form-input" name="format" value="{{request('format')}}">
                    <option value="">---Select Option---</option>
                    <option value="view">View</option>
                    <option value="excel">Excel</option>
                    <option value="pdf">PDF</option>
                </select>
                <input type="submit" class="btn btn-sm btn-primary" value="Cetak" name="report">
            </div>
        </form>


                <form action="/employ" method="GET" class="search">
                <div class="input-group mb-2">
                    <input type="text" class="form-control form-control-sm col-form-input" name="search" value="{{request('search')}}">
                    <input type="submit" class="btn btn-sm btn-primary" value="CARI">
                </div>
	        </form>
        </div>
        <br>
			<table class="table table-responsive data-table">
				<thead>
				<tr class="judul">
				    <th scope="col" >No</th>
				    <th scope="col" width="20%">No Induk Karyawan</th>
				    <th scope="col" width="20%">Nama</th>
				    <th scope="col" width="20%">No Identitas</th>
				    <th scope="col" width="20%">Cabang</th>
				    <th scope="col" width="20%">Jabatan</th>
				    <th scope="col" colspan="3">Actions</th>
				</tr>
				</thead>
				<tbody >
					@forelse ($employes as $employ)
                                <tr class="isi">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $employ->nomor_induk_karyawan }}</td>
                                    <td>{{ $employ->nama_lengkap }}</td>
                                    <td>{{ $employ->no_identitas}}</td>
                                    <td>{{ $employ->cabang->nama}}</td>
                                    <td>{{ $employ->jabatan->nama}}</td>
                                    <td>
                                       <a href="/employ/detail/{{$employ->id}}" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail"><i class="fas fa-eye" style="color:#fff; width:20px; "></i></a>
                                    </td>      
                                   
                              @empty
                              
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                               
                              @endforelse
                </tbody>
            </table>
            <div class="d-flex">
                {!! $employes->links() !!}
            </div>

        </div>            
        </div>
    </div>
    </div>
    

@endsection
