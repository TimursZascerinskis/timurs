

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pievienot jaunu grupu</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('client-groups.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nosaukums</label>
                    <input type="text" name="name" class="form-control" placeholder="Ievadi grupas nosaukumu" required>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-1"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button class="btn btn-success">💾 Saglabāt</button>
                <a href="<?php echo e(route('client-groups.index')); ?>" class="btn btn-secondary">⬅ Atpakaļ</a>
            </form>
        </div>
    </div>
</div>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/client_groups/create.blade.php ENDPATH**/ ?>