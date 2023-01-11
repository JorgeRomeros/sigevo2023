
<div>
    <div class="modal <?php if($showModal): ?> show <?php endif; ?>" <?php if($showModal): ?> style="display:block; overflow-y:auto;" <?php endif; ?> id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php if (isset($component)) { $__componentOriginal482f2f94a511423fee1dd3ffdf704c90519dfbbc = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit.prevent' => 'addEscrito']); ?>
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Nuevo Escrito</h3>
                            <div class="block-options">
                                <button type="button" wire:click="close()" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content pb-3">
                            <?php app(\ProtoneMedia\LaravelFormComponents\FormDataBinder::class)->wire(); ?>
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'folio','label' => 'Folio'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'remitente','label' => 'Remitente'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'destinatario','label' => 'Destinatario'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <?php app(\ProtoneMedia\LaravelFormComponents\FormDataBinder::class)->endWire(); ?>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" wire:click="close()" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <?php if (isset($component)) { $__componentOriginald49072503c687d5977279cc274621cb08ed343b1 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSubmit::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSubmit::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Guardar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald49072503c687d5977279cc274621cb08ed343b1)): ?>
<?php $component = $__componentOriginald49072503c687d5977279cc274621cb08ed343b1; ?>
<?php unset($__componentOriginald49072503c687d5977279cc274621cb08ed343b1); ?>
<?php endif; ?>
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal482f2f94a511423fee1dd3ffdf704c90519dfbbc)): ?>
<?php $component = $__componentOriginal482f2f94a511423fee1dd3ffdf704c90519dfbbc; ?>
<?php unset($__componentOriginal482f2f94a511423fee1dd3ffdf704c90519dfbbc); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/livewire/escrito/escrito-add.blade.php ENDPATH**/ ?>