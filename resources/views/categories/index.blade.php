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

                <a class="btn btn-primary" href="{{ route('home') }}">Voltar</a>
                <a class="btn btn-success" href="{{ route('categories.create') }}">Nova categoria</a>

                <br>
                <br>

                @foreach ($categories as $category)
                <div class="card">
                    <div class="card-header">{{ $category->name }}</div>
                    <div class="card-body">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Mostrar</a>
                            <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Editar</a>

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