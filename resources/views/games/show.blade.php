@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Show Game</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('publishers.index') }}">Games</a></li>
                        <li class="breadcrumb-item active">Show Game</li>
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
                    <form action="{{ route('games.edit', ['id' => $games->id]) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Game Name</label>
                            <input readonly type="text" name="name" id="name" class="form-control" required="required"
                                value="{{ $games->name }}" placeholder="Enter publisher name">
                        </div>

                        <div class="form-group">
                            <label for="publisher">Publisher Name</label>
                            <textarea readonly name="publisher" id="publisher" rows="3" class="form-control" required="required"
                                placeholder="Enter publisher">{{ $games->publisher->name }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea readonly name="description" id="description" rows="3" class="form-control" required="required"
                                placeholder="Enter description">{{ $games->description }}</textarea>
                        </div>                        

                        <div class="form-group">
                            <label for="description">Image</label><br>
                            <img src="{{ url('public/Image/' . $games->image) }}" style="height: 100px; width: 150px;">
                        </div>

                        <div class="text-right">
                            <a href="{{ route('games.index') }}" class="btn btn-outline-secondary mr-2"
                                role="button">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
