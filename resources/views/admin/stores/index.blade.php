@extends('layouts.app')

@section('content')

    <table class="table table-str">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td></td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}} {{-- Paginação usar link --}}

@endsection
