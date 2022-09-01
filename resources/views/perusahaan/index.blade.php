@extends('layouts.app-master')

@section('content')
    <div class="branch">
        <div class="container">
        <h5 class="title-branch">Company Business</h5>
        <hr class="border"></hr>
		<div class="table-body">
            <h5 class="list-branch">Company List</h5>
            <a href="{{ route('perusahaan.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Company</a>	
            <div class="srcl-branch">		
			<table class="table table-responsive data-table">
				<thead>
				<tr class="judul">
				    <th scope="col">No</th>
				    <th scope="col" width="30%">Name</th>
				    <th scope="col"  width="25%">Code</th>
                    <th scope="col" width="25%">Status</th>
                    <!-- <th scope="col">Logo</th> -->
				    <th scope="col" width="30%">Actions</th>
				</tr>
				</thead>
				<tbody>
					@forelse ($pts as $pt)
                                <tr class="isi">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $pt->nama }}</td>
                                    <td>{{ $pt->kode }}</td>
                                    <td>{{ $pt->status }}</td>
                                    <!-- <td>{{ $pt->logo }}</td> -->
                                    <td>
                                        <a href="/perusahaan/edit/{{$pt->id}}" class="btn btn-sm btn-primary"  style="width: 40px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pencil-alt" style="color:#fff;"></i></a>
                                    </td>   
                                    <!-- <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('perusahaan.destroy', $pt->id) }}" method="POST">
                                        <div class="form-group" style="height: 10px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <input type="submit" class="btn btn-sm btn-danger" value="" style="width: 40px">
                                        <i class="fas fa-trash-alt" style="color:rgb(255, 255, 255); position:absolute; margin-left:-26px; margin-top:8px;"></i>
                                        </div>
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    </td>                                                                      -->
                                </tr>
                              @empty
                              
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                                  <a href="{{ route('perusahaan.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Bussiness Company</a>			
                              @endforelse
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </div>
    

@endsection

