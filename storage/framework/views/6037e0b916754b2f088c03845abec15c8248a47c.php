<button
    <?php echo $attributes->merge([
        'class' => 'btn btn-primary btn-sm',
        'type' => 'submit'
    ]); ?>

>
    <?php echo trim($slot) ?: __('Submit'); ?>

</button>
<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/vendor/form-components/bootstrap-5/form-submit.blade.php ENDPATH**/ ?>