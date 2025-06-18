@csrf

<div class="mb-3">
    <label for="entry_type">Klienta ieraksta tips</label>
    <select name="entry_type" id="entry_type" class="form-control" required>
        <option value="">-- Izvēlies --</option>
        <option value="juridical" {{ old('entry_type', $client->entry_type ?? '') == 'juridical' ? 'selected' : '' }}>Juridiska persona</option>
        <option value="physical" {{ old('entry_type', $client->entry_type ?? '') == 'physical' ? 'selected' : '' }}>Fiziska persona</option>
    </select>
</div>

<div class="mb-3">
    <label for="type">Klienta tips</label>
    <select name="type" id="type" class="form-control" required>
        <option value="">-- Izvēlies --</option>
        <option value="client" {{ old('type', $client->type ?? '') == 'client' ? 'selected' : '' }}>Klients</option>
        <option value="supplier" {{ old('type', $client->type ?? '') == 'supplier' ? 'selected' : '' }}>Piegādātājs</option>
    </select>
</div>
<div class="mb-3">
    <label for="name">Nosaukums (name)</label>
    <input type="text" name="name" value="{{ old('name', $client->name ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="contact_person">Kontaktpersona</label>
    <input type="text" name="contact_person" value="{{ old('contact_person', $client->contact_person ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="registration_number">Reģistrācijas numurs</label>
    <input type="text" name="registration_number" value="{{ old('registration_number', $client->registration_number ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="legal_address">Juridiskā adrese</label>
    <input type="text" name="legal_address" value="{{ old('legal_address', $client->legal_address ?? '') }}" class="form-control">
</div>

<div class="mb-3 form-check">
    <input type="hidden" name="is_vat_payer" value="0"> <!-- Гарантирует, что поле отправится -->
    <input type="checkbox" name="is_vat_payer" class="form-check-input" id="is_vat_payer"
        value="1" {{ old('is_vat_payer', $client->is_vat_payer ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="is_vat_payer">PVN maksātājs</label>
</div>


<div class="mb-3">
    <label for="vat_rate">PVN likme</label>
    <input type="text" name="vat_rate" value="{{ old('vat_rate', $client->vat_rate ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="personal_code">Personas kods</label>
    <input type="text" name="personal_code" value="{{ old('personal_code', $client->personal_code ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="address">Adrese</label>
    <input type="text" name="address" value="{{ old('address', $client->address ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="physical_address">Fiziskā adrese</label>
    <input type="text" name="physical_address" value="{{ old('physical_address', $client->physical_address ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="correspondence_address">Korespondences adrese</label>
    <input type="text" name="correspondence_address" value="{{ old('correspondence_address', $client->correspondence_address ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="country">Valsts</label>
    <input type="text" name="country" value="{{ old('country', $client->country ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="client_id_number">Klienta ID numurs</label>
    <input type="text" name="client_id_number" value="{{ old('client_id_number', $client->client_id_number ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="document_email">Dokumentu e-pasts</label>
    <input type="email" name="document_email" value="{{ old('document_email', $client->document_email ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="balance">Bilance</label>
    <input type="number" step="0.01" name="balance" value="{{ old('balance', $client->balance ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="payment_days">Apmaksas dienas</label>
    <input type="number" name="payment_days" value="{{ old('payment_days', $client->payment_days ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="discount">Atlaide (%)</label>
    <input type="number" step="0.01" name="discount" value="{{ old('discount', $client->discount ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="notes">Piezīmes</label>
    <textarea name="notes" class="form-control">{{ old('notes', $client->notes ?? '') }}</textarea>
</div>




<div class="mb-3">
    <label for="full_name">Vārds, uzvārds</label>
    <input type="text" name="full_name" value="{{ old('full_name', $client->full_name ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="phone">Telefons</label>
    <input type="text" name="phone" value="{{ old('phone', $client->phone ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label for="email">E-pasts</label>
    <input type="email" name="email" value="{{ old('email', $client->email ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="group">Grupa</label>
    <input type="text" name="group" value="{{ old('group', $client->group ?? '') }}" class="form-control">
</div>

<button type="submit" class="btn btn-success">Saglabāt</button>
