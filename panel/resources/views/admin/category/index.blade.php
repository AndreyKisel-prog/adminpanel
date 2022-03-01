@extends('layouts.admin_layout')

@section('title', 'all categories')

@section('content')

    <h1>all categories</h1>


    @if (session('success'))
        <div class="alert alert-success my-3" role="alert">
            <span aria-hidden="true">{{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                X
            </button>
        </div>
    @endif


    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a class='btn btn-warning'
                                href="{{ route('categories.edit', $category['id']) }}">edit
                            </a>
                            <form action="{{ route('categories.destroy', $category['id']) }}" method="POST"
                                style="display:inline-block">
                                @method("DELETE")
                                @CSRF
                                <button type='submit' class='btn btn-danger delete-btn'>delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
