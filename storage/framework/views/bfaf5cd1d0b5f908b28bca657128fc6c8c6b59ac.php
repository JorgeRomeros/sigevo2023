<form
    method="<?php echo e($spoofMethod ? 'POST' : $method); ?>"
    <?php echo $attributes->merge(['class' => $hasError() ? 'needs-validation' : '']); ?>

>
    <style>
        .inline-space > :not(template) {
            margin-right: 1.25rem;
        }
    </style>

<?php if (! (in_array($method, ['HEAD', 'GET', 'OPTIONS']))): ?>
    <?php echo csrf_field(); ?>
<?php endif; ?>

<?php if($spoofMethod): ?>
    <?php echo method_field($method); ?>
<?php endif; ?>

    <?php echo $slot; ?>

</form>
<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/vendor/form-components/bootstrap-5/form.blade.php ENDPATH**/ ?>