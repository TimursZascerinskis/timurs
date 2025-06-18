@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 bg-white rounded shadow space-y-8">
    <h2 class="text-3xl font-bold text-gray-800">✏️ Rediģēt klientu</h2>

    <form action="{{ route('clients.update', $client) }}" method="POST" class="space-y-10">
        @csrf
        @method('PUT')

        {{-- Klienta tips --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📌 Klienta tips</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="entry_type" class="block font-medium mb-1">Klienta ieraksta tips</label>
                    <select name="entry_type" id="entry_type" class="w-full border p-2 rounded">
                        <option value="klients" {{ old('entry_type', $client->entry_type) == 'klients' ? 'selected' : '' }}>Klients</option>
                        <option value="piegādātājs" {{ old('entry_type', $client->entry_type) == 'piegādātājs' ? 'selected' : '' }}>Piegādātājs</option>
                        <option value="abi" {{ old('entry_type', $client->entry_type) == 'abi' ? 'selected' : '' }}>Abi</option>
                    </select>
                    @error('entry_type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block font-medium mb-1">Tips</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="type" value="juridiska" {{ old('type', $client->type) == 'juridiska' ? 'checked' : '' }}> Juridiska persona</label>
                        <label><input type="radio" name="type" value="fiziska" {{ old('type', $client->type) == 'fiziska' ? 'checked' : '' }}> Fiziska persona</label>
                    </div>
                    @error('type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- Dati --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">🧾 Dati</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach(['name', 'registration_number', 'personal_code', 'full_name'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block font-medium mb-1">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                        <input type="text" name="{{ $field }}" id="{{ $field }}" value="{{ old($field, $client->$field) }}" class="w-full border p-2 rounded">
                        @error($field) <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>
        </section>

        {{-- PVN informācija --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">💰 PVN informācija</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <label class="block font-medium mb-1">PVN maksātājs</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="is_vat_payer" value="1" {{ old('is_vat_payer', $client->is_vat_payer) == '1' ? 'checked' : '' }}> Jā</label>
                        <label><input type="radio" name="is_vat_payer" value="0" {{ old('is_vat_payer', $client->is_vat_payer) == '0' ? 'checked' : '' }}> Nē</label>
                    </div>
                    @error('is_vat_payer') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="vat_rate" class="block font-medium mb-1">PVN likme</label>
                    <select name="vat_rate" id="vat_rate" class="w-full border p-2 rounded">
                        <option value="21" {{ old('vat_rate', $client->vat_rate) == '21' ? 'selected' : '' }}>21%</option>
                        <option value="0" {{ old('vat_rate', $client->vat_rate) == '0' ? 'selected' : '' }}>0%</option>
                    </select>
                    @error('vat_rate') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- Adrese --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📍 Adrese</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach(['legal_address', 'address', 'physical_address', 'correspondence_address'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block font-medium mb-1">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                        <input type="text" name="{{ $field }}" id="{{ $field }}" value="{{ old($field, $client->$field) }}" class="w-full border p-2 rounded">
                        @error($field) <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Kontakti --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📞 Kontakti</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach(['phone', 'email', 'document_email', 'country'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block font-medium mb-1">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                        <input type="{{ in_array($field, ['email', 'document_email']) ? 'email' : 'text' }}" name="{{ $field }}" id="{{ $field }}" value="{{ old($field, $client->$field) }}" class="w-full border p-2 rounded">
                        @error($field) <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Papildus informācija --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📂 Papildus informācija</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach(['client_id_number', 'payment_days', 'discount', 'balance', 'contact_person', 'group'] as $field)
                    <div>
                        <label for="{{ $field }}" class="block font-medium mb-1">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                        <input 
                            type="{{ in_array($field, ['payment_days', 'discount', 'balance']) ? 'number' : 'text' }}" 
                            step="{{ $field == 'balance' ? '0.01' : '1' }}"
                            name="{{ $field }}" id="{{ $field }}" 
                            value="{{ old($field, $client->$field) }}" 
                            class="w-full border p-2 rounded">
                        @error($field) <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>

            {{-- Grupas --}}
            <section class="mt-6">
                <h3 class="text-xl font-semibold mb-4">👥 Grupas</h3>
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($groups as $group)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="group_ids[]" value="{{ $group->id }}"
                                {{ $client->groups->contains($group->id) ? 'checked' : '' }}>
                            <span>{{ $group->name }}</span>
                        </label>
                    @endforeach
                </div>
            </section>

            <div class="mt-6">
                <label for="notes" class="block font-medium mb-1">Piezīmes</label>
                <textarea name="notes" id="notes" class="w-full border p-2 rounded h-24" placeholder="Papildus informācija...">{{ old('notes', $client->notes) }}</textarea>
                @error('notes') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </section>

        {{-- Pogas --}}
        <div class="flex justify-end gap-4">
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">💾 Saglabāt izmaiņas</button>
            <a href="{{ route('clients.index') }}" class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400 transition">↩️ Atpakaļ</a>
        </div>
    </form>
</div>
@endsection
