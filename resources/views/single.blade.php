@extends('layouts.front')


@section('content')
    <div class="row">
        <div class="col-4">
            <div class="col-8">
                <h2>{{ $product->name }}</h2>
                <p>
                    {{ $product->description }}
                </p>
                <h3>
                    {{ $product->price }}
                </h3>
                <span>
                    Loja: {{ $product->store->nameclea }}
                </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <hr>
            {{ $product->body }}
        </div>
    </div>
@endsection
