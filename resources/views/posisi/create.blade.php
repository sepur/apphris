@extends('layouts.app-master')

@section('content')
    <div class="create-posisi">
    <div class="container">
        <h5 class="title-create-posisi">Position Job Create</h5>
        <hr class="border"></hr>
		<div class="table-body">
            <h5 class="list-create-posisi">Name Position</h5>		
            <form action="{{ route('posisijob.store') }}" method="POST" enctype="multipart/form-data">
                        
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Enter Position">
                
                    @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="buton-action" style="">
                <a href="{{ URL::previous() }}" class="btn btn-sm btn-back">Back</a>
                <button type="reset" class="btn btn-sm btn-cancel">Cancel</button>
                <button type="submit" class="btn btn-sm btn-save">Save</button>
                </div>

            </form> 
        </div>
    </div>
    </div>
    

@endsection



