

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(route('client-groups.index')); ?>" class="btn btn-outline-secondary mb-3">
        📁 Apskatīt klientu grupas
    </a>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📋 Klienti</h2>
        <a href="<?php echo e(route('clients.create')); ?>" class="btn btn-success">➕ Pievienot klientu</a>
    </div>

    <form class="input-group mb-3" method="GET" action="<?php echo e(route('clients.index')); ?>">
        <input type="text" name="search" class="form-control" placeholder="Meklēt pēc vārda, e-pasta, utt." value="<?php echo e(request('search')); ?>">
        <button class="btn btn-primary" type="submit">Meklēt</button>
    </form>

    <div class="dropdown mt-3">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        📁 Eksport & Import
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo e(route('clients.export')); ?>">📤 Eksportēt datus uz XLS</a></li>
        <li>
            <form action="<?php echo e(route('clients.import')); ?>" method="POST" enctype="multipart/form-data" id="import-form">
                <?php echo csrf_field(); ?>
                <label class="dropdown-item" for="import-file" style="cursor: pointer;">📥 Importēt datus</label>
                <input type="file" name="file" id="import-file" class="d-none" onchange="document.getElementById('import-form').submit();">
            </form>
        </li>
    </ul>
</div>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nosaukums</th>
                <th>Kontaktpersona</th>
                <th>Telefons</th>
                <th>E-pasts</th>
                <th>Reģ.nr.</th>
                <th>Tips</th>
                <th>Grupas</th>
                <th>Darbības</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($client->name); ?></td>
                    <td><?php echo e($client->contact_person); ?></td>
                    <td><?php echo e($client->phone); ?></td>
                    <td><?php echo e($client->email); ?></td>
                    <td><?php echo e($client->registration_number); ?></td>
                    <td><?php echo e($client->type); ?></td>
                    <td>
                        <?php $__empty_2 = true; $__currentLoopData = $client->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                            <span class="badge bg-secondary"><?php echo e($group->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                            <span class="text-muted">Nezināma</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('clients.edit', $client->id)); ?>" class="btn btn-sm btn-primary">Rediģēt</a>
                        <form action="<?php echo e(route('clients.destroy', $client->id)); ?>" method="POST" style="display:inline-block;" onsubmit="return confirm('Vai tiešām dzēst šo klientu?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Dzēst</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8" class="text-center">Nav atrasti klienti.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($clients->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\timiz\Rekari-main\resources\views/clients/index.blade.php ENDPATH**/ ?>