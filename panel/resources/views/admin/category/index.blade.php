@extends('layouts.admin_layout')

@section('title', 'Все категории')

@section('content')

<h1>Все категории</h1>

<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Название</th>
                <th>дата создания</th>
                <th>дата редактирования</th>
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
                        href="{{route('categories.edit', $category['id']) }}"
                        >редактировать</a>
                        <button class='btn btn-danger'>удалить</button>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>



@endsection




