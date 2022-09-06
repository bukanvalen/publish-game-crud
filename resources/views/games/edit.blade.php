@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Game</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('games.index') }}">Games</a></li>
                        <li class="breadcrumb-item active">Edit Game</li>
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
                    <form action="{{ route('games.edit', ['id' => $games->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="id_publisher">Publisher Name</label>
                            <select class="form-control" name="id_publisher" id="id_publisher" required="required">
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->id }}"
                                        {{ $publisher->id == $games->publisher->id ? 'selected' : '' }}>
                                        {{ $publisher->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Game Name</label>
                            <input type="text" name="name" id="name" class="form-control" required="required"
                                placeholder="Enter game name" value="{{ $games->name }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required="required"
                                placeholder="Enter description">{{ $games->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" accept=".jpg, .jpeg, .png" class="form-control p-1" name="image"><br>
                            <img src="{{ url('public/Image/' . $games->image) }}" style="height: 100px; width: 150px;">
                        </div>

                        <div class="text-right">
                            <a href="{{ route('games.index') }}" class="btn btn-outline-secondary mr-2"
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
