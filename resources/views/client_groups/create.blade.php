@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pievienot jaunu grupu</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('client-groups.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nosaukums</label>
                    <input type="text" name="name" class="form-control" placeholder="Ievadi grupas nosaukumu" required>
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-success">💾 Saglabāt</button>
                <a href="{{ route('client-groups.index') }}" class="btn btn-secondary">⬅ Atpakaļ</a>
            </form>
        </div>
    </div>
</div>


