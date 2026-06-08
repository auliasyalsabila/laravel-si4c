<?php $__env->startSection('title','edit fakultas'); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('fakultas.update', $fakultas->id)); ?>" method="post">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        
        <div class="form-group">
            <label for="nama" class="form-label">nama fakultas</label>
            <input name = 'nama' type="text" class="form-control" value="<?php echo e(old('nama') ?? $fakultas->nama); ?>">
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="singkatan" class="form-label">singkatan fakultas</label>
            <input name ='singkatan' type="text" class="form-control" value="<?php echo e(old('singkatan') ?? $fakultas->singkatan); ?>" placeholder="masukkan singkatan fakultas...">
            <?php $__errorArgs = ['singkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="dekan" class="form-label">nama dekan</label>
            <input name='dekan' type="text" class="form-control" value="<?php echo e(old('dekan') ?? $fakultas->dekan); ?>" placeholder="masukkan nama dekan...">
            <?php $__errorArgs = ['dekan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user1\Documents\laravel-si4c\resources\views/fakultas/edit.blade.php ENDPATH**/ ?>