<h1>Etapa 3 e 4</h1>

<p>Meu nome é <?php echo e($nome); ?>, e tenho <?php echo e($idade); ?> anos, e tabalho <?php echo e($profissao); ?></p>

<?php for($i=0; $i<count($arr); $i++): ?>
    <p><?php echo e($arr[$i]); ?> - Indice é <?php echo e($i); ?></p>
    <?php if($i==2): ?>
        <p>o Indice é <?php echo e($i); ?></p>
    <?php endif; ?>
<?php endfor; ?>

<?php $__currentLoopData = $arrNomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($loop->index); ?></p>
    <p><?php echo e($nome); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Praticandos\Laravel\hdcevents\resources\views/etapa3e4.blade.php ENDPATH**/ ?>