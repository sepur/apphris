@extends('layouts.app-master')

@section('content')
<div class="posisi">
    <h5 class="title-posisi">Position Job</h5>
    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>
    <hr class="border"></hr>
    <div class="table-body">
        <h5 class="list-posisi">List Position Job</h5>
        <a href="{{ route('posisijob.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add Position</a>			
        <table class="table data-table">
            <thead>
            <tr class="judul">
                <th scope="col" width="40%">Nama Position</th>
                <th scope="col" width="30%">Status</th>
                <th scope="col" width="10%" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($jobs as $job)
                  <tr class="isi">
                      <td>{{ $job->nama }}</td>
                      <td>{!! $job->status !!}</td>
                      <td>
                      <a href="{{ route('posisijob.edit', $job->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt" style="color:#fff; width:20px; "></i></a>
                       
                    </td>  
                    <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posisijob.destroy', $job->id) }}" method="POST">
                            <div class="form-group" style="height: 10px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <input type="submit" class="btn btn-sm btn-danger" value="" style="width: 40px">
                            <i class="fas fa-trash-alt" style="color:rgb(255, 255, 255); position:absolute; margin-left:-26px; margin-top:8px;"></i>
                            </div>
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                    
                  </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Post belum Tersedia.
                    </div>
                @endforelse
              </tbody>
        </table>
    </div>
</div>



    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
@endsection
