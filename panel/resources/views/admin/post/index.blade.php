@extends('layouts.admin_layout')

@section('title', 'All posts')

@section('content')


    @if (session('success'))
        <div class="alert alert-success my-3" role="alert">
            <span aria-hidden="true">{{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                X
            </button>
        </div>
    @endif


    <h1>All posts</h1>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>img</th>
                    <th>text</th>
                    <th>id category</th>
                    <th>category title</th>
                    <th>created at</th>
                    <th>updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->img }}</td>
                        <td>{{ $post->text }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>{{ $post->category["title"] }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>

                        <td>
                            <a class='btn btn-warning' href="{{ route('posts.edit', $post['id']) }}">редактировать
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy', $post['id']) }}" method="POST"
                                style="display:inline-block">
                                @method("DELETE")
                                @CSRF
                                <button type='submit' class='btn btn-danger delete-btn'>удалить</button>
                            </form>

                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
