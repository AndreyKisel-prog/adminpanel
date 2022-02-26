@extends('layouts.admin_layout')

@section('title', 'Добавить категорию')

@section('content')


    <div class="p-2 container">

        <div class="card card-info mt-4">
            <div class="card-header">
                <h2 class="card-title">Добавить категорию</h2>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categories.store') }}"
            method="POST" class="form-horizontal"  >
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
