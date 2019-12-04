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
                <h2>Editar produto</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $product->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:150px" name="desc" placeholder="Descrição">{{ $product->desc }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <strong>Quantidade:</strong>
                            <input type="number" name="quantity" class="form-control" placeholder="1" value="{{ $product->quantity }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            <select name="category">
                                <option value="">Escolha uma categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? ' selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection