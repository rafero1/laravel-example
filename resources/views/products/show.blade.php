@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                        <a class="btn btn-outline-primary" href="{{ route('home') }}">Voltar</a>
                    </div>
                    <br>
                <div class="pull-left">
                    <h2> Produto </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $product->name }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $product->desc }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    {{ $product->quantity }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    {{ $product->category->name }}
                </div>
            </div>
        </div>
    </div>
@endsection