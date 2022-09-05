@extends('layouts.app')

@section('title', 'Books List')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Books</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('books.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
            </div>

        </div>

        {{-- Alert Messages --}}
        @include('common.alert')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Books</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="20%">Title</th>
                                <th width="20%">Author</th>
                                <th width="20%">ISBN</th>
                                <th width="20%">Published Date</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author->first_name.' '.$book->author->middle_name.' '.$book->author->last_name }}</td>
                                    <td>{{ $book->isbn }}</td>
                                    <td>{{ $book->published_date }}</td>
                                    <td style="display: flex">
                                        <a href="{{ route('books.edit', ['book_id' => $book->id]) }}"
                                            class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a class="btn btn-danger m-2" href="#" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $books->links() }}
                </div>
            </div>
        </div>

    </div>

    @include('books.delete-modal')

@endsection

@section('scripts')
    
@endsection
