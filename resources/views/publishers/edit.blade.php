@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Publisher</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('publishers.index') }}">Publishers</a></li>
                        <li class="breadcrumb-item active">Edit Publisher</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('publishers.edit', ['id' => $publishers->id]) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Publisher Name</label>
                            <input type="text" name="name" id="name" class="form-control" required="required"
                                value="{{ $publishers->name }}" placeholder="Enter publisher name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required="required"
                                placeholder="Enter description">{{ $publishers->description }}</textarea>
                        </div>

                        <div class="text-right">
                            <a href="{{ route('publishers.index') }}" class="btn btn-outline-secondary mr-2"
                                role="button">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
