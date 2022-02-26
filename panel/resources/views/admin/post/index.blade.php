@extends('layouts.admin_layout')

@section('title', 'Все статьи')

@section('content')
    <h1>Все статьи</h1>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Заголовок</th>
                    <th>img</th>
                    <th>text</th>
                    <th>категория</th>
                    <th>дата создания</th>
                    <th>дата редактирования</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->img }}</td>
                        <td>{{ $post->text }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
