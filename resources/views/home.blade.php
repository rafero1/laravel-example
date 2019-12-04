@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>
            <br>
            <a class="btn btn-primary" href="{{ route('categories.index') }}">Categorias</a>
            <a class="btn btn-success" href="{{ route('products.create') }}">Novo produto</a>
            <br><br>
            @foreach ($products as $product)
                <div class="card">
                    <div class="card-header">{{ $product->name }} - {{ $product->quantity }} unidade</div>
                    <div class="card-body">
                        <p class="card-text">{{ $product->desc }}</p>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Mostrar</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remover</button>
                        </form>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
