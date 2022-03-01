@extends('layouts.admin_layout')

@section('title', 'Edit post')

@section('content')



    <div class="p-2 container">

        <div class="card card-info mt-4">
            <div class="card-header">
                <h2 class="card-title">edit post: {{ $post['title'] }}</h2>
            </div>



            @if (session('success'))
                <div class="alert alert-success my-3" role="alert">
                    <span aria-hidden="true">{{ session('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        X
                    </button>
                </div>
            @endif


            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{ route('posts.update', $post['id']) }}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card-body">


                    <label for="title">Title: </label>
                    <div class=" input-group  ">
                        <input type="text" name="title" value="{{ $post['title'] }}" class="form-control">
                    </div>


                    <label for="select" class="align-baseline mt-2">Category: </label>
                    <div class=" input-group">
                        <select class="custom-select my-1" name="category_id" id="select">
                            @foreach ($categories as $category)
                                <option value={{ $category['id'] }} @if ($category['id'] == $post['category_id']) selected @endif>
                                    {{ $category['title'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="text">text: </label>
                    <div class=" input-group  ">
                        <textarea name="text" class="form-control">{{ $post['text'] }}</textarea>
                    </div>

                    <div class=" input-group  d-flex justify-content-end">
                        <button type="submit" class="btn btn-info my-2 ">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection()
