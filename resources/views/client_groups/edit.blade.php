@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Rediģēt grupu</h1>

        <form action="{{ route('client-groups.update', $clientGroup) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nosaukums</label>
                <input type="text" name="name" class="form-control" value="{{ $clientGroup->name }}" required>
            </div>
            <button class="btn btn-primary">Atjaunināt</button>
        </form>
    </div>
@endsection
