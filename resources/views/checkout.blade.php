@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h2>Dados para Pagamento</h2>
                    <hr>
                </div>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8 form-group">
                        <label >Número do Cartão</label>
                        <input type="text" class="from-control" name="card_number">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-4 form-group">
                        <label >Mês de Expiração</label>
                        <input type="text" class="from-control" name="card_month">
                    </div>

                    <div class="col-md-4 form-group">
                        <label >Ano de Expiração</label>
                        <input type="text" class="from-control" name="card_year">
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-5 form-group">
                        <label >Código de Segurança</label>
                        <input type="text" class="from-control" name="card_cvv">
                    </div>
                </div>

                <button class="btn btn-success btn-lg">Efetuar Pagamento</button>


            </form>
        </div>
    </div>



@endsection
