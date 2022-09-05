@extends('layouts.app')

@section('title', 'Add Author')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Author</h1>
        <a href="{{route('authors.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Author</h6>
        </div>
        <form method="POST" action="{{route('authors.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        First Name<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('first_name') is-invalid @enderror" 
                            id="exampleFirstName"
                            placeholder="First Name" 
                            name="first_name" 
                            value="{{ old('first_name') }}">

                        @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Middle Nam<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('middle_name') is-invalid @enderror" 
                            id="exampleMiddle Name"
                            placeholder="Middle Name" 
                            name="middle_name" 
                            value="{{ old('middle_name') }}">

                        @error('last_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Last Name<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('last_name') is-invalid @enderror" 
                            id="exampleLastName"
                            placeholder="Last Name" 
                            name="last_name" 
                            value="{{ old('last_name') }}">

                        @error('last_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('authors.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>


@endsection