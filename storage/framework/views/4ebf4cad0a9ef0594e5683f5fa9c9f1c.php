

<?php $__env->startSection('title', "Formulario añadir libro"); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('addBook')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        <label for="año_publicacion">Año de publicacion:</label>
        <input type="text" id="año_publicacion" name="año_publicacion" required>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>
        <label for="">Disponible:</label>
        <select name="disponible" id="" required>
            <option name="disponible" value="si">Si</option>
            <option name="disponible" value="no">No</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/addBook_Form.blade.php ENDPATH**/ ?>