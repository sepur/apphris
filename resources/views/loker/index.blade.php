@extends('layouts.app-master')

@section('content')
    <div class="loker">
        <div class="container">
        <h5 class="title-vacancy">Vacancies</h5>
        <hr class="border"></hr>
		<div class="table-body">
            <h5 class="list-vacancy">List Vacancies</h5>
            <a href="{{ route('loker.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Vacancy</a>			
			<table class="table table-responsive data-table">
				<thead>
				<tr class="judul">
				    <th scope="col" width="1%">No</th>
				    <th scope="col" width="22%">Position</th>
				    <th scope="col" width="20%">Department</th>
				    <th scope="col" width="15%">Placement</th>
				    <th scope="col"width="14%" >Total Applicant</th>
				    <th scope="col" width="15%">Post Date</th>
				    <th scope="col">Status</th>
				    <th scope="col" width="50%">Actions</th>
				</tr>
				</thead>
				<tbody >
					@forelse ($loks as $lok)
                                <tr class="isi">
                                    <td >{{ $loop->iteration }}.</td>
                                    <td class="position">{{ $lok->lowongan_kerja }}</td>
                                    <td class="departement">{{ $lok->posisi->nama }}</td>
                                    <td class="placment">{{ $lok->cabang->nama }}</td>
									<td class="total_app"><a class="btn btn-sm btn-grey total-applicant" href="/loker/listapply/{{$lok->id}}">{{ $lok->apply->count('pivot.id') }}</a></td>
                                    <!-- <td>{{ $lok->tanggal}}</td> -->
                                    <td class="post_date">{{ date('d-m-Y', strtotime($lok->tanggal)) }}</td>
                                    <td class="status">{{ $lok->status }}</td>
                                    <td class="btn-action">
                                    <a href="/loker/detail/{{$lok->id}}" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail"><i class="fas fa-eye" style="color:#fff; width:20px; "></i></a>
                                    <a href="{{ route('loker.edit', $lok->id) }}" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pencil-alt" style="color:#fff; width:20px;"></i></a>
                                    <!-- <div class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt" style="color:#fff; width:20px;" for="hapus"></i>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('loker.destroy', $lok->id) }}" method="POST">
                                        
                                        <input type="submit" id="hapus" value="" >
                                       
 
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    </div> -->
                                    
                                    </td>

                                    <!-- <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('loker.destroy', $lok->id) }}" method="POST">
                                        <div class="form-group" style="height: 10px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <input type="submit" class="btn btn-sm btn-danger" value="" style="width: 40px">
                                        <i class="fas fa-trash-alt" style="color:rgb(255, 255, 255); position:absolute; margin-left:-26px; margin-top:8px;"></i>
                                        </div>
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    </td>                                                                       -->
                                      
                
                                </tr>
                              @empty
                              
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                                  <a href="{{ route('loker.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Vacancy</a>			
                              @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div>
    

@endsection
