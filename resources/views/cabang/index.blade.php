@extends('layouts.app-master')

@section('content')
    <div class="branch">
        <div class="container">
        <h5 class="title-branch">Branch</h5>
        <hr class="border"></hr>
		<div class="table-body">
            <h5 class="list-branch">Branch List</h5>
            <a href="{{ route('cabang.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Branch</a>	

            <div class="srcl-branch">
			<table class="table table-responsive data-table">
				<thead>
				<tr class="judul">
				    <th scope="col">No</th>
				    <th scope="col" width="20%">Name</th>
				    <th scope="col">Code</th>
				    <th scope="col" width="25%">Address</th>
				    <th scope="col">Phone</th>
				    <th scope="col">Other Phone</th>
                    <th scope="col">Status</th>
				    <th scope="col" width="12%" colspan="2">Actions</th>
				</tr>
				</thead>

                <tbody >
					@forelse ($cabs as $cab)
                                <tr class="isi">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $cab->nama }}</td>
                                    <td>{{ $cab->kode }}</td>
                                    <td>{{ Str::limit($cab->alamat, 35) }}</td>
                                    <td>{{ $cab->no_hp }}</td>
                                    <td>{{ $cab->no_telp }}</td>
                                    <td>{{ $cab->status }}</td>
                                    <td>
                                        <a href="/storage/cabang/{{$cab->documents}}" target="_blank" class="btn btn-sm btn-secondary" data-bs-toggle="modal" style="width: 40px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download">
                                        <i class="fas fa-download" style="color:#fff; "></i></a>
                                        <a href="{{ route('cabang.edit', $cab->id) }}" class="btn btn-sm btn-primary"  style="width: 40px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pencil-alt" style="color:#fff;"></i></a>
                                    </td>   
                                    <!-- <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('cabang.destroy', $cab->id) }}" method="POST">
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
                                  <a href="{{ route('cabang.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Branch</a>			
                              @endforelse
                </tbody>

				
            </table>
        </div>
        </div>
    </div>
    </div>
    

@endsection

