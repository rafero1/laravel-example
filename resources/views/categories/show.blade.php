@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                        <a class="btn btn-outline-primary" href="{{ route('categories.index') }}">Voltar</a>
                    </div>
                    <br>
                <div class="pull-left">
                    <h2> Categoria </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $category->name }}
                </div>
            </div>
        </div>
    </div>
@endsection