

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Rediģēt grupu</h1>

        <form action="<?php echo e(route('client-groups.update', $clientGroup)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nosaukums</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($clientGroup->name); ?>" required>
            </div>
            <button class="btn btn-primary">Atjaunināt</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/client_groups/edit.blade.php ENDPATH**/ ?>