

<?php $__env->startSection('title', 'Mostrar Libros'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($libros->isEmpty()): ?>
        <p>No hay libros</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicacion</th>
                    <th>Género</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $__env->renderEach('components.table_books', $libros, 'libro'); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/showBooks.blade.php ENDPATH**/ ?>