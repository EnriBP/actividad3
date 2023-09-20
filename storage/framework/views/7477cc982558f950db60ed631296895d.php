

<?php $__env->startSection('title', 'Mostrar Prestamos'); ?>

<?php $__env->startSection('content'); ?>

    <?php if($prestamos->isEmpty()): ?>
        <p>No hay prestamos</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Id libro</th>
                    <th>Id usuario</th>
                    <th>Fecha préstamo</th>
                    <th>Fecha devolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $__env->renderEach('components.table_prestamos', $prestamos, 'prestamo'); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\enriq\libreria\resources\views/libreria/showPrestamo.blade.php ENDPATH**/ ?>