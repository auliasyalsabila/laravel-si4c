<?php $__env->startSection('title', 'Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="alert alert-success">
            <?php echo e($value); ?>

        </div>
    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
    <table class="table table-bordered table-hover">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($mhs->npm); ?></td>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->prodi->nama_prodi ?? '-'); ?></td>
                <td>
                    <?php if($mhs->foto): ?>
                        <img src="<?php echo e(asset('storage/' . $mhs->foto)); ?>" alt="Foto" width="50">
                    <?php else: ?>
                        <span class="text-muted">Tidak ada foto</span>
                    <?php endif; ?>
                </td>
                <td>
                    <form method="POST" action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='<?php echo e($mhs->nama); ?>'>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\2428240155\laravel-si4c\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>