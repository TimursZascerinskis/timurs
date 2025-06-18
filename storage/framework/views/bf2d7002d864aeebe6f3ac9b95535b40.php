<?php echo csrf_field(); ?>

<div class="mb-3">
    <label for="entry_type">Klienta ieraksta tips</label>
    <select name="entry_type" id="entry_type" class="form-control" required>
        <option value="">-- Izvēlies --</option>
        <option value="juridical" <?php echo e(old('entry_type', $client->entry_type ?? '') == 'juridical' ? 'selected' : ''); ?>>Juridiska persona</option>
        <option value="physical" <?php echo e(old('entry_type', $client->entry_type ?? '') == 'physical' ? 'selected' : ''); ?>>Fiziska persona</option>
    </select>
</div>

<div class="mb-3">
    <label for="type">Klienta tips</label>
    <select name="type" id="type" class="form-control" required>
        <option value="">-- Izvēlies --</option>
        <option value="client" <?php echo e(old('type', $client->type ?? '') == 'client' ? 'selected' : ''); ?>>Klients</option>
        <option value="supplier" <?php echo e(old('type', $client->type ?? '') == 'supplier' ? 'selected' : ''); ?>>Piegādātājs</option>
    </select>
</div>
<div class="mb-3">
    <label for="name">Nosaukums (name)</label>
    <input type="text" name="name" value="<?php echo e(old('name', $client->name ?? '')); ?>" class="form-control">
</div>
<div class="mb-3">
    <label for="contact_person">Kontaktpersona</label>
    <input type="text" name="contact_person" value="<?php echo e(old('contact_person', $client->contact_person ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="registration_number">Reģistrācijas numurs</label>
    <input type="text" name="registration_number" value="<?php echo e(old('registration_number', $client->registration_number ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="legal_address">Juridiskā adrese</label>
    <input type="text" name="legal_address" value="<?php echo e(old('legal_address', $client->legal_address ?? '')); ?>" class="form-control">
</div>

<div class="mb-3 form-check">
    <input type="hidden" name="is_vat_payer" value="0"> <!-- Гарантирует, что поле отправится -->
    <input type="checkbox" name="is_vat_payer" class="form-check-input" id="is_vat_payer"
        value="1" <?php echo e(old('is_vat_payer', $client->is_vat_payer ?? false) ? 'checked' : ''); ?>>
    <label class="form-check-label" for="is_vat_payer">PVN maksātājs</label>
</div>


<div class="mb-3">
    <label for="vat_rate">PVN likme</label>
    <input type="text" name="vat_rate" value="<?php echo e(old('vat_rate', $client->vat_rate ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="personal_code">Personas kods</label>
    <input type="text" name="personal_code" value="<?php echo e(old('personal_code', $client->personal_code ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="address">Adrese</label>
    <input type="text" name="address" value="<?php echo e(old('address', $client->address ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="physical_address">Fiziskā adrese</label>
    <input type="text" name="physical_address" value="<?php echo e(old('physical_address', $client->physical_address ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="correspondence_address">Korespondences adrese</label>
    <input type="text" name="correspondence_address" value="<?php echo e(old('correspondence_address', $client->correspondence_address ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="country">Valsts</label>
    <input type="text" name="country" value="<?php echo e(old('country', $client->country ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="client_id_number">Klienta ID numurs</label>
    <input type="text" name="client_id_number" value="<?php echo e(old('client_id_number', $client->client_id_number ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="document_email">Dokumentu e-pasts</label>
    <input type="email" name="document_email" value="<?php echo e(old('document_email', $client->document_email ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="balance">Bilance</label>
    <input type="number" step="0.01" name="balance" value="<?php echo e(old('balance', $client->balance ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="payment_days">Apmaksas dienas</label>
    <input type="number" name="payment_days" value="<?php echo e(old('payment_days', $client->payment_days ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="discount">Atlaide (%)</label>
    <input type="number" step="0.01" name="discount" value="<?php echo e(old('discount', $client->discount ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="notes">Piezīmes</label>
    <textarea name="notes" class="form-control"><?php echo e(old('notes', $client->notes ?? '')); ?></textarea>
</div>




<div class="mb-3">
    <label for="full_name">Vārds, uzvārds</label>
    <input type="text" name="full_name" value="<?php echo e(old('full_name', $client->full_name ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="phone">Telefons</label>
    <input type="text" name="phone" value="<?php echo e(old('phone', $client->phone ?? '')); ?>" class="form-control">
</div>

<div class="mb-3">
    <label for="email">E-pasts</label>
    <input type="email" name="email" value="<?php echo e(old('email', $client->email ?? '')); ?>" class="form-control">
</div>
<div class="mb-3">
    <label for="group">Grupa</label>
    <input type="text" name="group" value="<?php echo e(old('group', $client->group ?? '')); ?>" class="form-control">
</div>

<button type="submit" class="btn btn-success">Saglabāt</button>
<?php /**PATH C:\Users\timiz\Rekari-main\resources\views/clients/_form.blade.php ENDPATH**/ ?>