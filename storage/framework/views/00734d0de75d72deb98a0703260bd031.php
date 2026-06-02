<?php $__env->startSection('title', 'fakultas'); ?>

<?php $__env->startSection('content'); ?>
    <a href=<?php echo e(route('fakultas.create')); ?> class="btn btn-primary mb-3">Tambah Fakultas</a>
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
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
            <th>Dekan</th>
            <th>Aksi</th>
        </tr>

        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->singkatan); ?></td>
                <td><?php echo e($item->dekan); ?></td>
                <td>
                    <a href="<?php echo e(route('fakultas.edit', $item->id)); ?>" 
                    class="btn btn-xs btn-info btn-rounded">Edit</a>
                    <form method="POST" action="<?php echo e(route('fakultas.destroy', $item->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" 
                        data-toggle="tooltip"
                            title='Delete' data-nama='<?php echo e($item->nama); ?>'>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\2428240155\laravel-si4c\resources\views/fakultas/index.blade.php ENDPATH**/ ?>