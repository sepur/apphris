@extends('layouts.app-master')

@section('content')
    
<div class="permission">
    <h5 class="title-permission">Permissions</h5>
    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>
    <hr class="border"></hr>
    <div class="table-body">
        <h5 class="list-permission">Manage your permissions</h5>
        <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-add mb-3"><i class="fas fa-plus"></i> Add permissions</a>			
        <table class="table table-responsive data-table">
            <thead>
            <tr class="judul">
                <th scope="col" width="40%">Name</th>
                <th scope="col" width="5%" colspan="2">Action</th> 
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr class="isi">
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-primary" style="width: 40px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pencil-alt" style="color:#fff; "></i></a>
                        </td>
                        <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                            <div class="form-group" style="height: 10px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <input type="submit" class="btn btn-sm btn-danger" value="" style="width: 40px">
                            <i class="fas fa-trash-alt" style="color:rgb(255, 255, 255); position:absolute; margin-left:-26px; margin-top:8px;"></i>
                            </div>
                            @csrf
                            @method('DELETE')
                        </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
            
       
        </table>
    </div>
</div>


@endsection