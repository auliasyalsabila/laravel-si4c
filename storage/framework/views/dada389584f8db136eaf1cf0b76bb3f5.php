<?php $__env->startSection('title','prodi'); ?>

<?php $__env->startSection('content'); ?>
<table class="table table-bordered tabel-hover">
    <a href=<?php echo e(route('prodi.create')); ?> class="btn btn-primary mb-3">Tambah Prodi</a>
    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>

    <?php $__currentLoopData = $prodis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($key + 1); ?></td>
        <td><?php echo e($prodi->nama_prodi); ?></td>
        <td><?php echo e($prodi->singkatan); ?></td>
        <td><?php echo e($prodi->kaprodi); ?></td>
        <td><?php echo e($prodi->fakultas->nama ?? '-'); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2428240155 SI4C PAW1\laravel-si4c\resources\views/prodi/index.blade.php ENDPATH**/ ?>