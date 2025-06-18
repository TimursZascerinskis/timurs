

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">👥 Klientu grupas</h2>
            <a href="<?php echo e(route('client-groups.create')); ?>" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> Pievienot grupu
            </a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php if($groups->count()): ?>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title mb-2">📌 <?php echo e($group->name); ?></h5>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="<?php echo e(route('client-groups.edit', $group)); ?>" class="btn btn-outline-primary btn-sm">
                                        ✏️ Rediģēt
                                    </a>
                                    <form action="<?php echo e(route('client-groups.destroy', $group)); ?>" method="POST" onsubmit="return confirm('Vai tiešām dzēst šo grupu?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            🗑 Dzēst
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                Pašlaik nav pievienotu klientu grupu.
            </div>
        <?php endif; ?>
        <a href="<?php echo e(route('clients.index')); ?>" class="btn btn-outline-primary mb-3">
    👥 Atpakaļ uz klientiem
</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/client_groups/index.blade.php ENDPATH**/ ?>