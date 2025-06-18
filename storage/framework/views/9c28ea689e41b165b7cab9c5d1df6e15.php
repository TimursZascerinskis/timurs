

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto p-6 bg-white rounded shadow space-y-8">
    <h2 class="text-3xl font-bold text-gray-800">📝 Pievienot klientu</h2>

    <form action="<?php echo e(route('clients.store')); ?>" method="POST" class="space-y-10">
        <?php echo csrf_field(); ?>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📌 Klienta tips</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="entry_type" class="block font-medium mb-1">Klienta ieraksta tips</label>
                    <select name="entry_type" id="entry_type" class="w-full border p-2 rounded">
                        <option value="klients" <?php echo e(old('entry_type') == 'klients' ? 'selected' : ''); ?>>Klients</option>
                        <option value="piegādātājs" <?php echo e(old('entry_type') == 'piegādātājs' ? 'selected' : ''); ?>>Piegādātājs</option>
                        <option value="abi" <?php echo e(old('entry_type') == 'abi' ? 'selected' : ''); ?>>Abi</option>
                    </select>
                    <?php $__errorArgs = ['entry_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block font-medium mb-1">Tips</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="type" value="juridiska" <?php echo e(old('type', 'juridiska') == 'juridiska' ? 'checked' : ''); ?>> Juridiska persona</label>
                        <label><input type="radio" name="type" value="fiziska" <?php echo e(old('type') == 'fiziska' ? 'checked' : ''); ?>> Fiziska persona</label>
                    </div>
                    <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">🧾 Dati</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block font-medium mb-1">Nosaukums / Vārds</label>
                    <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="registration_number" class="block font-medium mb-1">Reģistrācijas numurs</label>
                    <input type="text" name="registration_number" id="registration_number" value="<?php echo e(old('registration_number')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['registration_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="personal_code" class="block font-medium mb-1">Personas kods</label>
                    <input type="text" name="personal_code" id="personal_code" value="<?php echo e(old('personal_code')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['personal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="full_name" class="block font-medium mb-1">Pilns vārds</label>
                    <input type="text" name="full_name" id="full_name" value="<?php echo e(old('full_name')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">💰 PVN informācija</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <label class="block font-medium mb-1">PVN maksātājs</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="is_vat_payer" value="1" <?php echo e(old('is_vat_payer') == '1' ? 'checked' : ''); ?>> Jā</label>
                        <label><input type="radio" name="is_vat_payer" value="0" <?php echo e(old('is_vat_payer', '0') == '0' ? 'checked' : ''); ?>> Nē</label>
                    </div>
                    <?php $__errorArgs = ['is_vat_payer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label for="vat_rate" class="block font-medium mb-1">PVN likme</label>
                    <select name="vat_rate" id="vat_rate" class="w-full border p-2 rounded">
                        <option value="21" <?php echo e(old('vat_rate') == '21' ? 'selected' : ''); ?>>21%</option>
                        <option value="0" <?php echo e(old('vat_rate') == '0' ? 'selected' : ''); ?>>0%</option>
                    </select>
                    <?php $__errorArgs = ['vat_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📍 Adrese</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="legal_address" class="block font-medium mb-1">Juridiskā adrese</label>
                    <input type="text" name="legal_address" id="legal_address" value="<?php echo e(old('legal_address')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['legal_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="address" class="block font-medium mb-1">Adrese</label>
                    <input type="text" name="address" id="address" value="<?php echo e(old('address')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="physical_address" class="block font-medium mb-1">Fiziskā adrese</label>
                    <input type="text" name="physical_address" id="physical_address" value="<?php echo e(old('physical_address')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['physical_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="correspondence_address" class="block font-medium mb-1">Korespondences adrese</label>
                    <input type="text" name="correspondence_address" id="correspondence_address" value="<?php echo e(old('correspondence_address')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['correspondence_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📞 Kontakti</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block font-medium mb-1">Telefons</label>
                    <input type="text" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="email" class="block font-medium mb-1">E-pasts</label>
                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="document_email" class="block font-medium mb-1">E-pasts dokumentiem</label>
                    <input type="email" name="document_email" id="document_email" value="<?php echo e(old('document_email')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['document_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label for="country" class="block font-medium mb-1">Valsts</label>
                    <input type="text" name="country" id="country" value="<?php echo e(old('country')); ?>" class="w-full border p-2 rounded">
                    <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </section>

       
<section>
    <h3 class="text-xl font-semibold mb-4">📂 Papildus informācija</h3>
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label for="client_id_number" class="block font-medium mb-1">Klienta ID</label>
            <input type="text" name="client_id_number" id="client_id_number" value="<?php echo e(old('client_id_number')); ?>" class="w-full border p-2 rounded">
            <?php $__errorArgs = ['client_id_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="payment_days" class="block font-medium mb-1">Apmaksas dienas</label>
            <input type="number" name="payment_days" id="payment_days" value="<?php echo e(old('payment_days', 14)); ?>" class="w-full border p-2 rounded">
            <?php $__errorArgs = ['payment_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="discount" class="block font-medium mb-1">Atlaide (%)</label>
            <input type="number" name="discount" id="discount" value="<?php echo e(old('discount', 0)); ?>" class="w-full border p-2 rounded">
            <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="balance" class="block font-medium mb-1">Bilance (€)</label>
            <input type="number" step="0.01" name="balance" id="balance" value="<?php echo e(old('balance', 0)); ?>" class="w-full border p-2 rounded">
            <?php $__errorArgs = ['balance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="contact_person" class="block font-medium mb-1">Kontaktpersona</label>
            <input type="text" name="contact_person" id="contact_person" value="<?php echo e(old('contact_person')); ?>" class="w-full border p-2 rounded">
            <?php $__errorArgs = ['contact_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
    <label for="groups" class="block font-medium mb-1">Grupas</label>
    <select name="groups[]" id="groups" multiple class="w-full border p-2 rounded">
        <?php $__currentLoopData = $clientGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($group->id); ?>" <?php echo e(collect(old('groups'))->contains($group->id) ? 'selected' : ''); ?>>
                <?php echo e($group->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['groups'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

    </div>

    <div class="mt-6">
        <label for="notes" class="block font-medium mb-1">Piezīmes</label>
        <textarea name="notes" id="notes" class="w-full border p-2 rounded h-24" placeholder="Papildus informācija..."><?php echo e(old('notes')); ?></textarea>
        <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</section>

        
        <div class="flex justify-end gap-4">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">💾 Saglabāt</button>
            <a href="<?php echo e(route('clients.index')); ?>" class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400 transition">❌ Atcelt</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/clients/create.blade.php ENDPATH**/ ?>