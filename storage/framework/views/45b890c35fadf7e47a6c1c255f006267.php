<?php $__env->startSection('title', 'Tambah Data Fakultas'); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('prodi.store')); ?>" method="post">

      <?php echo csrf_field(); ?>


<div class="form-group">
  <label for="nama_prodi" class="form-label">Nama Program Studi</label>
  <input type="text" class="form-control" value="<?php echo e(old('nama_prodi')); ?>" placeholder="masukkan nama program studi.." name="nama_prodi">
  <?php $__errorArgs = ['nama_prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="form-group">
  <label for="singkatan" class="form-label">Singkatan Fakultas</label>
  <input type="text" class="form-control" id="singkatan" value="<?php echo e(old('singkatan')); ?>" placeholder="masukkan singkatan fakultas.." name="singkatan">
  <?php $__errorArgs = ['singkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="form-group">
  <label for="kaprodi" class="form-label">Nama Kaprodi</label>
  <input type="text" class="form-control" id="kaprodi" value="<?php echo e(old('kaprodi')); ?>" placeholder="masukkan nama kaprodi.." name="kaprodi">
  <?php $__errorArgs = ['kaprodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  
</div>


<div class="form-group">
  <label for="fakultas_id" class="form-label">Fakultas</label>
  <select class="form-control" id="fakultas_id" name="fakultas_id">
    <option value="">Pilih Fakultas</option>
    <?php $__currentLoopData = $fakultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($f->id); ?>" <?php echo e(old('fakultas_id') == $f->id ? 'selected' : ''); ?>><?php echo e($f->nama); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  <?php $__errorArgs = ['fakultas_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</div>


</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\2428240155\laravel-si4c\laravel-si4c\resources\views/prodi/create.blade.php ENDPATH**/ ?>