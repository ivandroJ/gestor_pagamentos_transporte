@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-3 m-1">
                    {{ Form::open(['url' => 'admin/registar']) }}

                    <div class="row">
                        <div class="col-md-12 form-group mb-2">
                            <label for="nome" class="label mb-1">Nome</label>
                            <input type="text" id="nome" name="name" class="form-control"
                                placeholder="Ex: João António" value="{{ old('name') }}">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="telemovel" class="label mb-1">Telemóvel</label>
                            <input type="tel" id="telemovel" name="telemovel" class="form-control"
                                placeholder="Ex: 900123123" value="{{ old('telemovel') }}">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="email" class="label mb-1">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Ex: exemplo@dominio.com" value="{{ old('email') }}">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="grupo" class="label mb-1">Grupo</label>
                            <select name="grupo_users_id" id="grupo" class="form-control">
                                <option value="" hidden>(Selecione o Grupo)</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{ $grupo->id }}"
                                        {{ old('grupo_users_id') == $grupo->id ? 'selected' : '' }}>
                                        {{ $grupo->designacao }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <a href="{{ url('admin/users') }}" class="btn btn btn-secondary">Cancelar</a>
                        </div>
                        <div class="col-sm-6 align-items-end justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
