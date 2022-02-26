@extends('layouts.admin_layout')

@section('title', 'Добавить категорию')

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
                <h2 class="card-title">Добавить категорию</h2>
            </div>

            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{ route('categories.store') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="card-body">
                    <div class=" input-group  ">
                        <input type="text" name="category" class="form-control" placeholder="Введите категорию">
                        <button type="submit" class="btn btn-info ml-2">Добавить</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection()
