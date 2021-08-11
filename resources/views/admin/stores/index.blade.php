@extends('layouts.app')

@section('content')
    @if (!$store)

        <a href="{{ route('admin.stores.create') }}" class="btn btn-lg btn-success">Criar Loja</a>
        
    @endif
    <table class="table table-str">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <div class="btn-group"> 
                            <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger ">Excluir</button>
                        </form>
                        </div>
                    </td>

                </tr>
        </tbody>
    </table>

@endsection
