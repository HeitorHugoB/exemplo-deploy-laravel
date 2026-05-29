



<?php $__env->startSection('title', 'Produtos'); ?>

<?php $__env->startSection('content'); ?>
<h1>Tela de Produtos</h1>
 <?php if($busca != ''): ?>
    <p>O usuário está buscando por: <?php echo e($busca); ?></p>
  <?php endif; ?>
<a href="/">Voltar para home</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\hdcevents\resources\views/products.blade.php ENDPATH**/ ?>