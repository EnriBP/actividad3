

<?php $__env->startSection('title', "Formulario prestar libro"); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('addPrestamo')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="id_libro">Id libro</label>
        <input type="text" id="" name="libro_id" value="<?php $libro_id ?>" required>
        <label for="fecha_prestamo">Fecha préstamo</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" required>
        <input type="submit" value="Enviar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/addPrestamo_Form.blade.php ENDPATH**/ ?>