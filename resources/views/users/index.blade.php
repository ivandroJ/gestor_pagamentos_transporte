@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 mb-2">
            <a href="{{ url('admin/users/create') }}" class="btn btn-sm btn-success">
                <i class="bi bi-plus"></i>
                Novo
            </a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-sm table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Grupo</th>
                                <th class="text-center">Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td class="text-center align-middle">{{ $user->id }}</td>
                                    <td class="text-center align-middle">{{ $user->primeiroUltimoNome() }}</td>
                                    <td class="text-center align-middle">{{ $user->grupoUsers->designacao }}
                                    </td>
                                    <td class="text-center align-middle">{{ $user->is_active ? 'Activo' : 'Inactivo' }}
                                    </td>
                                    <td class="text-center align-middle">
                                        <a href="{{ url('admin/users/' . $user->id) }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-list"></i>
                                            Detalhes
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="text-center text-bold">
                                        <b>Sem Registos</b>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
