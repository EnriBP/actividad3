

<?php $__env->startSection('title', "Formulario añadir libro"); ?>

<?php $__env->startSection('content'); ?>
    <?php if($id > 0): ?>
        <p>Se ha añadido correctamente.</p>
    <?php else: ?>
        <p>Ha ocurrido un error al insertar.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/addBookOk_Form.blade.php ENDPATH**/ ?>