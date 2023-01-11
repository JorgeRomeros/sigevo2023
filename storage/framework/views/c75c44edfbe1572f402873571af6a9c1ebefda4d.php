<?php if(session()->has('livewire-alert')): ?>
    <script> 
        window.onload = event => {
            flashAlert(
                <?php echo json_encode(session('livewire-alert'), 15, 512) ?>
            ) 
        }
    </script>
<?php endif; ?><?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\vendor\jantinnerezo\livewire-alert\src/../resources/views/components/flash.blade.php ENDPATH**/ ?>