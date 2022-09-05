@extends('layouts.app')

@section('title', 'Add Book')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Book</h1>
        <a href="{{route('books.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Book</h6>
        </div>
        <form method="POST" action="{{route('books.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Title<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('title') is-invalid @enderror" 
                            id="exampleTitle"
                            placeholder="Title" 
                            name="title" 
                            value="{{ old('title') }}">

                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Total Pages<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('total_pages') is-invalid @enderror" 
                            id="exampleTotalPages"
                            placeholder="Total Pagese" 
                            name="total_pages" 
                            value="{{ old('total_pages') }}">

                        @error('total_pages')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Author<span style="color:red;">*</span></label>
                        
                        {{ Form::select('author_id', $authors,null, ['id'=>'author_id','class' => 'form-control form-control-user','placeholder' => 'Select Author','required', 'data-control'=>'select2']) }}

                        @error('author_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        ISBN<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('isbn') is-invalid @enderror" 
                            id="exampleisbn"
                            placeholder="ISBN" 
                            name="isbn" 
                            value="{{ old('isbn') }}">

                        @error('isbn')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Book Image Url<span style="color:red;">*</span></label>
                        <input 
                            type="text" 
                            class="form-control form-control-user @error('image_url') is-invalid @enderror" 
                            id="exampleImageUrl"
                            placeholder="Book Image Url" 
                            name="image_url" 
                            value="{{ old('image_url') }}">

                        @error('image_url')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Published Date<span style="color:red;">*</span></label>
                        <input 
                            type="date"
                            class="form-control form-control-user @error('published_date') is-invalid @enderror" 
                            id="exampleImageUrl"
                            placeholder="Published Date" 
                            name="published_date" 
                            value="{{ old('published_date') }}">

                        @error('published_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        Description<span style="color:red;">*</span></label>
                        <textarea 
                            rows="4" cols="4"  
                            class="form-control form-control-user @error('description') is-invalid @enderror" 
                            id="exampledescription"
                            placeholder="Description" 
                            name="description" 
                            value="{{ old('description') }}">
                            
                        </textarea>

                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('books.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>


@endsection