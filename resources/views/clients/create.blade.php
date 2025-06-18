@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 bg-white rounded shadow space-y-8">
    <h2 class="text-3xl font-bold text-gray-800">📝 Pievienot klientu</h2>

    <form action="{{ route('clients.store') }}" method="POST" class="space-y-10">
        @csrf

        {{-- Klienta tips --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📌 Klienta tips</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="entry_type" class="block font-medium mb-1">Klienta ieraksta tips</label>
                    <select name="entry_type" id="entry_type" class="w-full border p-2 rounded">
                        <option value="klients" {{ old('entry_type') == 'klients' ? 'selected' : '' }}>Klients</option>
                        <option value="piegādātājs" {{ old('entry_type') == 'piegādātājs' ? 'selected' : '' }}>Piegādātājs</option>
                        <option value="abi" {{ old('entry_type') == 'abi' ? 'selected' : '' }}>Abi</option>
                    </select>
                    @error('entry_type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block font-medium mb-1">Tips</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="type" value="juridiska" {{ old('type', 'juridiska') == 'juridiska' ? 'checked' : '' }}> Juridiska persona</label>
                        <label><input type="radio" name="type" value="fiziska" {{ old('type') == 'fiziska' ? 'checked' : '' }}> Fiziska persona</label>
                    </div>
                    @error('type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- Uzņēmuma / Personas dati --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">🧾 Dati</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block font-medium mb-1">Nosaukums / Vārds</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border p-2 rounded">
                    @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="registration_number" class="block font-medium mb-1">Reģistrācijas numurs</label>
                    <input type="text" name="registration_number" id="registration_number" value="{{ old('registration_number') }}" class="w-full border p-2 rounded">
                    @error('registration_number') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="personal_code" class="block font-medium mb-1">Personas kods</label>
                    <input type="text" name="personal_code" id="personal_code" value="{{ old('personal_code') }}" class="w-full border p-2 rounded">
                    @error('personal_code') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="full_name" class="block font-medium mb-1">Pilns vārds</label>
                    <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" class="w-full border p-2 rounded">
                    @error('full_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- PVN informācija --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">💰 PVN informācija</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <label class="block font-medium mb-1">PVN maksātājs</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="is_vat_payer" value="1" {{ old('is_vat_payer') == '1' ? 'checked' : '' }}> Jā</label>
                        <label><input type="radio" name="is_vat_payer" value="0" {{ old('is_vat_payer', '0') == '0' ? 'checked' : '' }}> Nē</label>
                    </div>
                    @error('is_vat_payer') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="vat_rate" class="block font-medium mb-1">PVN likme</label>
                    <select name="vat_rate" id="vat_rate" class="w-full border p-2 rounded">
                        <option value="21" {{ old('vat_rate') == '21' ? 'selected' : '' }}>21%</option>
                        <option value="0" {{ old('vat_rate') == '0' ? 'selected' : '' }}>0%</option>
                    </select>
                    @error('vat_rate') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- Adrese --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📍 Adrese</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="legal_address" class="block font-medium mb-1">Juridiskā adrese</label>
                    <input type="text" name="legal_address" id="legal_address" value="{{ old('legal_address') }}" class="w-full border p-2 rounded">
                    @error('legal_address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="address" class="block font-medium mb-1">Adrese</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" class="w-full border p-2 rounded">
                    @error('address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="physical_address" class="block font-medium mb-1">Fiziskā adrese</label>
                    <input type="text" name="physical_address" id="physical_address" value="{{ old('physical_address') }}" class="w-full border p-2 rounded">
                    @error('physical_address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="correspondence_address" class="block font-medium mb-1">Korespondences adrese</label>
                    <input type="text" name="correspondence_address" id="correspondence_address" value="{{ old('correspondence_address') }}" class="w-full border p-2 rounded">
                    @error('correspondence_address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

        {{-- Kontakti --}}
        <section>
            <h3 class="text-xl font-semibold mb-4">📞 Kontakti</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block font-medium mb-1">Telefons</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="w-full border p-2 rounded">
                    @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="email" class="block font-medium mb-1">E-pasts</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border p-2 rounded">
                    @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="document_email" class="block font-medium mb-1">E-pasts dokumentiem</label>
                    <input type="email" name="document_email" id="document_email" value="{{ old('document_email') }}" class="w-full border p-2 rounded">
                    @error('document_email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="country" class="block font-medium mb-1">Valsts</label>
                    <input type="text" name="country" id="country" value="{{ old('country') }}" class="w-full border p-2 rounded">
                    @error('country') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>
        </section>

       {{-- Papildu info --}}
<section>
    <h3 class="text-xl font-semibold mb-4">📂 Papildus informācija</h3>
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label for="client_id_number" class="block font-medium mb-1">Klienta ID</label>
            <input type="text" name="client_id_number" id="client_id_number" value="{{ old('client_id_number') }}" class="w-full border p-2 rounded">
            @error('client_id_number') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="payment_days" class="block font-medium mb-1">Apmaksas dienas</label>
            <input type="number" name="payment_days" id="payment_days" value="{{ old('payment_days', 14) }}" class="w-full border p-2 rounded">
            @error('payment_days') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="discount" class="block font-medium mb-1">Atlaide (%)</label>
            <input type="number" name="discount" id="discount" value="{{ old('discount', 0) }}" class="w-full border p-2 rounded">
            @error('discount') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="balance" class="block font-medium mb-1">Bilance (€)</label>
            <input type="number" step="0.01" name="balance" id="balance" value="{{ old('balance', 0) }}" class="w-full border p-2 rounded">
            @error('balance') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="contact_person" class="block font-medium mb-1">Kontaktpersona</label>
            <input type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}" class="w-full border p-2 rounded">
            @error('contact_person') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>
        <div>
    <label for="groups" class="block font-medium mb-1">Grupas</label>
    <select name="groups[]" id="groups" multiple class="w-full border p-2 rounded">
        @foreach($clientGroups as $group)
            <option value="{{ $group->id }}" {{ collect(old('groups'))->contains($group->id) ? 'selected' : '' }}>
                {{ $group->name }}
            </option>
        @endforeach
    </select>
    @error('groups') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
</div>

    </div>

    <div class="mt-6">
        <label for="notes" class="block font-medium mb-1">Piezīmes</label>
        <textarea name="notes" id="notes" class="w-full border p-2 rounded h-24" placeholder="Papildus informācija...">{{ old('notes') }}</textarea>
        @error('notes') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
    </div>
</section>

        {{-- Pogas --}}
        <div class="flex justify-end gap-4">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">💾 Saglabāt</button>
            <a href="{{ route('clients.index') }}" class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400 transition">❌ Atcelt</a>
        </div>
    </form>
</div>
@endsection
