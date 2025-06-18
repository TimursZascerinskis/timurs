

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto p-6 bg-white rounded shadow space-y-8">
    <h2 class="text-3xl font-bold text-gray-800">✏️ Rediģēt klientu</h2>

    <form action="<?php echo e(route('clients.update', $client)); ?>" method="POST" class="space-y-10">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📌 Klienta tips</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="entry_type" class="block font-medium mb-1">Klienta ieraksta tips</label>
                    <select name="entry_type" id="entry_type" class="w-full border p-2 rounded">
                        <option value="klients" <?php echo e(old('entry_type', $client->entry_type) == 'klients' ? 'selected' : ''); ?>>Klients</option>
                        <option value="piegādātājs" <?php echo e(old('entry_type', $client->entry_type) == 'piegādātājs' ? 'selected' : ''); ?>>Piegādātājs</option>
                        <option value="abi" <?php echo e(old('entry_type', $client->entry_type) == 'abi' ? 'selected' : ''); ?>>Abi</option>
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
                        <label><input type="radio" name="type" value="juridiska" <?php echo e(old('type', $client->type) == 'juridiska' ? 'checked' : ''); ?>> Juridiska persona</label>
                        <label><input type="radio" name="type" value="fiziska" <?php echo e(old('type', $client->type) == 'fiziska' ? 'checked' : ''); ?>> Fiziska persona</label>
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
                <?php $__currentLoopData = ['name', 'registration_number', 'personal_code', 'full_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="<?php echo e($field); ?>" class="block font-medium mb-1"><?php echo e(ucfirst(str_replace('_', ' ', $field))); ?></label>
                        <input type="text" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" value="<?php echo e(old($field, $client->$field)); ?>" class="w-full border p-2 rounded">
                        <?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">💰 PVN informācija</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <label class="block font-medium mb-1">PVN maksātājs</label>
                    <div class="flex gap-4 mt-2">
                        <label><input type="radio" name="is_vat_payer" value="1" <?php echo e(old('is_vat_payer', $client->is_vat_payer) == '1' ? 'checked' : ''); ?>> Jā</label>
                        <label><input type="radio" name="is_vat_payer" value="0" <?php echo e(old('is_vat_payer', $client->is_vat_payer) == '0' ? 'checked' : ''); ?>> Nē</label>
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
                        <option value="21" <?php echo e(old('vat_rate', $client->vat_rate) == '21' ? 'selected' : ''); ?>>21%</option>
                        <option value="0" <?php echo e(old('vat_rate', $client->vat_rate) == '0' ? 'selected' : ''); ?>>0%</option>
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
                <?php $__currentLoopData = ['legal_address', 'address', 'physical_address', 'correspondence_address']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="<?php echo e($field); ?>" class="block font-medium mb-1"><?php echo e(ucfirst(str_replace('_', ' ', $field))); ?></label>
                        <input type="text" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" value="<?php echo e(old($field, $client->$field)); ?>" class="w-full border p-2 rounded">
                        <?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📞 Kontakti</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <?php $__currentLoopData = ['phone', 'email', 'document_email', 'country']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="<?php echo e($field); ?>" class="block font-medium mb-1"><?php echo e(ucfirst(str_replace('_', ' ', $field))); ?></label>
                        <input type="<?php echo e(in_array($field, ['email', 'document_email']) ? 'email' : 'text'); ?>" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" value="<?php echo e(old($field, $client->$field)); ?>" class="w-full border p-2 rounded">
                        <?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        
        <section>
            <h3 class="text-xl font-semibold mb-4">📂 Papildus informācija</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <?php $__currentLoopData = ['client_id_number', 'payment_days', 'discount', 'balance', 'contact_person', 'group']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <label for="<?php echo e($field); ?>" class="block font-medium mb-1"><?php echo e(ucfirst(str_replace('_', ' ', $field))); ?></label>
                        <input 
                            type="<?php echo e(in_array($field, ['payment_days', 'discount', 'balance']) ? 'number' : 'text'); ?>" 
                            step="<?php echo e($field == 'balance' ? '0.01' : '1'); ?>"
                            name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" 
                            value="<?php echo e(old($field, $client->$field)); ?>" 
                            class="w-full border p-2 rounded">
                        <?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <section class="mt-6">
                <h3 class="text-xl font-semibold mb-4">👥 Grupas</h3>
                <div class="grid grid-cols-2 gap-4">
                    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="group_ids[]" value="<?php echo e($group->id); ?>"
                                <?php echo e($client->groups->contains($group->id) ? 'checked' : ''); ?>>
                            <span><?php echo e($group->name); ?></span>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>

            <div class="mt-6">
                <label for="notes" class="block font-medium mb-1">Piezīmes</label>
                <textarea name="notes" id="notes" class="w-full border p-2 rounded h-24" placeholder="Papildus informācija..."><?php echo e(old('notes', $client->notes)); ?></textarea>
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
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">💾 Saglabāt izmaiņas</button>
            <a href="<?php echo e(route('clients.index')); ?>" class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400 transition">↩️ Atpakaļ</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/clients/edit.blade.php ENDPATH**/ ?>