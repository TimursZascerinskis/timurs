@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">👥 Klientu grupas</h2>
            <a href="{{ route('client-groups.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> Pievienot grupu
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($groups->count())
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($groups as $group)
                    <div class="col">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title mb-2">📌 {{ $group->name }}</h5>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('client-groups.edit', $group) }}" class="btn btn-outline-primary btn-sm">
                                        ✏️ Rediģēt
                                    </a>
                                    <form action="{{ route('client-groups.destroy', $group) }}" method="POST" onsubmit="return confirm('Vai tiešām dzēst šo grupu?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            🗑 Dzēst
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                Pašlaik nav pievienotu klientu grupu.
            </div>
        @endif
        <a href="{{ route('clients.index') }}" class="btn btn-outline-primary mb-3">
    👥 Atpakaļ uz klientiem
</a>
    </div>
@endsection
