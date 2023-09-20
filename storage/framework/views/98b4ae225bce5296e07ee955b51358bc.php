

<?php $__env->startSection('title', "Formulario devolución libro"); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('addDevolucion')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="fecha_devolucion">Fecha devolución</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" required>
        <input type="submit" value="Enviar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/addDevolucion_Form.blade.php ENDPATH**/ ?>