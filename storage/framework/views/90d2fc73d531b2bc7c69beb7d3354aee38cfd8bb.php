<thead>
    <tr>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key!=''): ?>
        <th class="p-2" wire:click="sortByColumn('<?php echo e($key); ?>')" style="cursor: pointer;">
            <?php echo e($c); ?>

            <?php if($sortColumn==$key): ?>
            <?php if($sortDirection=='asc'): ?>
                &uarr;
            <?php else: ?>
                &darr;
            <?php endif; ?>
            <?php endif; ?>
        </th>
        <?php else: ?>
        <th class="p-2"><?php echo e($key); ?></th>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($actions==true): ?>
        <th class="p-2">Acciones</th>
        <?php endif; ?>
    </tr>
</thead>
<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/components/table-header.blade.php ENDPATH**/ ?>