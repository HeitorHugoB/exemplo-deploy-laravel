

<?php $__env->startSection('title', 'Produto'); ?>

<?php $__env->startSection('content'); ?>

  <?php if($id != null): ?>
    <p>Exibindo produto id: <?php echo e($id); ?></p>
  <?php endif; ?>
<a href="/">Voltar para home</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\hdcevents\resources\views/product.blade.php ENDPATH**/ ?>