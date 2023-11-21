@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 mb-2 text-right">
            <a href="#" class="btn btn-success" id="btn-add" onclick="add_estudante()" {!! old() != null ? 'style="display: none;"' : '' !!}>
                <span class="bi bi-plus"></span>
                Novo</a>

            <div class="card" id="div-form-add" {!! old() != null ? '' : 'style="display: none;"' !!}>
                <div class="card-header bg-success">
                    <span class="card-title text-white">Novo Estudante</span>
                </div>
                <div class="card-body">
                    {{ Form::open([
                        'url' => 'estudantes/store',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('Tem a certeza?')",
                    ]) }}
                    <div class="row">


                        <div class="col-md-4 form-group mt-3">
                            <label for="bilhete_identidade" class="form-label">BI</label>
                            <input type="text" name="bilhete_identidade" class="form-control text-center text-uppercase"
                                id="bilhete_identidade" placeholder="Ex: 0001340HA034"
                                value="{{ old('bilhete_identidade') }}">
                        </div>
                        <div class="col-md-8 form-group mt-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome"
                                placeholder="Ex: Ana Domingos" value="{{ old('nome') }}">
                        </div>
                        <div class="col-6 mt-4 d-flex justify-content-end">
                            <a href="#" class="btn btn-secondary" onclick="add_estudante(1)">
                                Cancelar</a>
                        </div>
                        <div class="col-6 mt-4 d-flex">
                            <button class="btn btn-success" type="submit">
                                <span class="bi bi-save"></span>
                                Guardar</button>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="card-title text-white">Pesquisar</span>
                </div>
                <div class="card-body">
                    {{ Form::open(['url' => 'estudantes', 'method' => 'GET']) }}
                    <div class="row">
                        <div class="col-md-8 form-group mt-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome"
                                placeholder="Ex: Ana Domingos" value="{{ $_GET['nome'] ?? '' }}">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label for="bilhete_identidade" class="form-label">BI</label>
                            <input type="text" name="bilhete_identidade" class="form-control text-center text-uppercase"
                                id="bilhete_identidade" placeholder="Ex: 0001340HA034"
                                value="{{ $_GET['bilhete_identidade'] ?? '' }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="search">
                                <span class="bi bi-search"></span>
                                Pesquisar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            @if (isset($_GET['nome']))
                <div class="card">
                    <div class="card-body p-3">
                        <table class="table table-sm table-striped">

                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <script>
        function add_estudante($cancel = 0) {

            $btn_add = $('#btn-add');
            $div_form_add = $('#div-form-add');
            if (!$cancel) {
                $btn_add.hide();
                $div_form_add.show();
            } else {
                $btn_add.show();
                $div_form_add.hide();
            }
        }
    </script>
@endsection
