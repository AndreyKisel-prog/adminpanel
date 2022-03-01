@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')


    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <span aria-hidden="true">{{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                X
            </button>
        </div>
    @endif

    <div class="p-2 container">

        <div class="card card-info mt-4">
            <div class="card-header">
                <h2 class="card-title">Добавить статью</h2>
            </div>

            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{ route('posts.store') }}" method="POST" {{-- class="form-horizontal" --}}>
                @csrf
                <div class="card-body">
                    <label for="title">Title: </label>
                    <div class=" input-group">
                        <input type="text" name="title" class="form-control" placeholder="Header">
                    </div>

                    <label for="select" class="align-baseline mt-2">Category: </label>
                    <div class=" input-group">
                        <select class="custom-select my-1" name="category_id" id="select">
                            @foreach ($categories as $key => $value)
                                <option value={{ $value['id'] }}>{{ $value['title'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="text">Text: </label>
                    <div class=" input-group  ">
                        <textarea name="text" placeholder="input text" class="form-control"></textarea>
                    </div>

                    <div class=" input-group  d-flex justify-content-end">
                        <button type="submit" class="btn btn-info my-2 ">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>


@endsection
