<?php $__env->startSection('title', 'fakultas'); ?>
    
<?php $__env->startSection('content'); ?>
<a href=<?php echo e(route('fakultas.create')); ?> class="btn btn-primary mb-3">Tambah Fakultas</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Fakultas</th>
        <th>Singkatan</th>
        <th>Dekan</th>
    </tr>

    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop ->iteration); ?></td>
        <td><?php echo e($item->nama); ?></td>
        <td><?php echo e($item->singkatan); ?></td>
        <td><?php echo e($item->dekan); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2428240155 SI4C PAW1\laravel-si4c\resources\views/fakultas/index.blade.php ENDPATH**/ ?>