<!-- Подключение основного файла -->
@extends('lauts.app')

@section('content')
<div class="alert alert-info">
    <p>{{ $data->name }}</p>
    <p>{{ $data->email }}</p>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>{{ $data->created_at }}</p>
            </div>
            <div class="col">
                <a href="/contact/all"><button class="btn btn-warning">Назад</a>
            </div>
        </div>
    </div>
</div>
@endsection
