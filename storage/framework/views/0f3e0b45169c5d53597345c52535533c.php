<?php $__env->startSection('title', 'prodi'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered tabel-hover">
        <a href=<?php echo e(route('prodi.create')); ?> class="btn btn-primary mb-3">Tambah Prodi</a>
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
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Singkatan</th>
                <th>Kaprodi</th>
                <th>Fakultas</th>
                <th>Aksi</th>
            </tr>

            <?php $__currentLoopData = $prodis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($prodi->nama_prodi); ?></td>
                    <td><?php echo e($prodi->singkatan); ?></td>
                    <td><?php echo e($prodi->kaprodi); ?></td>
                    <td><?php echo e($prodi->fakultas->nama ?? '-'); ?></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('prodi.destroy', $prodi->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                data-toggle="tooltip" title='Delete' data-nama='<?php echo e($prodi->nama_prodi); ?>'>Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user1\Documents\laravel-si4c\resources\views/prodi/index.blade.php ENDPATH**/ ?>