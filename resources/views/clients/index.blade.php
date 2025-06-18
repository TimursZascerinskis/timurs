@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('client-groups.index') }}" class="btn btn-outline-secondary mb-3">
        📁 Apskatīt klientu grupas
    </a>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📋 Klienti</h2>
        <a href="{{ route('clients.create') }}" class="btn btn-success">➕ Pievienot klientu</a>
    </div>

    <form class="input-group mb-3" method="GET" action="{{ route('clients.index') }}">
        <input type="text" name="search" class="form-control" placeholder="Meklēt pēc vārda, e-pasta, utt." value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Meklēt</button>
    </form>

    <div class="dropdown mt-3">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        📁 Eksport & Import
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('clients.export') }}">📤 Eksportēt datus uz XLS</a></li>
        <li>
            <form action="{{ route('clients.import') }}" method="POST" enctype="multipart/form-data" id="import-form">
                @csrf
                <label class="dropdown-item" for="import-file" style="cursor: pointer;">📥 Importēt datus</label>
                <input type="file" name="file" id="import-file" class="d-none" onchange="document.getElementById('import-form').submit();">
            </form>
        </li>
    </ul>
</div>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nosaukums</th>
                <th>Kontaktpersona</th>
                <th>Telefons</th>
                <th>E-pasts</th>
                <th>Reģ.nr.</th>
                <th>Tips</th>
                <th>Grupas</th>
                <th>Darbības</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->contact_person }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->registration_number }}</td>
                    <td>{{ $client->type }}</td>
                    <td>
                        @forelse ($client->groups as $group)
                            <span class="badge bg-secondary">{{ $group->name }}</span>
                        @empty
                            <span class="text-muted">Nezināma</span>
                        @endforelse
                    </td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Rediģēt</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Vai tiešām dzēst šo klientu?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Dzēst</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Nav atrasti klienti.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $clients->links() }}
    </div>
</div>
@endsection
