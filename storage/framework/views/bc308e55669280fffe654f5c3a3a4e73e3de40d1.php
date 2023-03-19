<h1><?php echo e($title); ?></h1>
<h2><?php echo e($heading); ?></h2>
<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e($item['flavor']); ?></h3>
    <p><?php echo e($item['desc']); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\mylaravel\resources\views/index.blade.php ENDPATH**/ ?>