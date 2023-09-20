

<?php $__env->startSection('title', 'Updating book'); ?>

<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('updateBook')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Título:</label>
        <input type="text" name="titulo" value="<?php echo e($libro->titulo); ?>">
        <label for="">Autor:</label>
        <input type="text" name="autor" value="<?php echo e($libro->autor); ?>">
        <label for="">Año de publicación:</label>
        <input type="number" name="año_publicacion" min="1900" max="2023" value="<?php echo e($libro->año_publicacion); ?>">
        <label for="">Género:</label>
        <input type="text" name="genero" value="<?php echo e($libro->genero); ?>">
        <label for="">Disponible:</label>
        <select name="disponible" required>
            <option name="disponible" value="<?php echo e($libro->disponible = 'si'); ?>">Si</option>
            <option name="disponible" value="<?php echo e($libro->disponible = 'no'); ?>">No</option>
        </select>
        <input type="submit" value="Cambie los datos">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/showBookForm.blade.php ENDPATH**/ ?>