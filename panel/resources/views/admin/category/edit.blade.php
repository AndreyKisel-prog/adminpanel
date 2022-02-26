@extends('layouts.admin_layout')

@section('title', 'Отредактируйте категорию')


@section('content')



    <div class="p-2 container">

        <div class="card card-info mt-4">
            <div class="card-header">
                <h2 class="card-title">Редактировать категорию: {{ $category['title'] }}</h2>
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

            <form action="{{ route('categories.update', $category['id']) }}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class=" input-group  ">
                        <input type="text" name="title" value="{{ $category['title'] }}" class="form-control"
                            placeholder="Введите категорию">
                        <button type="submit" class="btn btn-info ml-2">Сохранить изменения</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection()
