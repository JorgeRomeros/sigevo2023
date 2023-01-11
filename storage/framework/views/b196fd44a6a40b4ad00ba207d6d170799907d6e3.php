<div>
    <div class="container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Escritos <i class="fa fa-sheet-plastic"></i></h1>
                    <a wire:click="modalAddEscrito" class="btn btn btn-success me-1 mb-3" href="javascript:void(0)">
                        <i class="fa fa-fw fa-plus opacity-50"></i>
                        <span class="d-none d-sm-inline ms-1">Nuevo Escrito</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="block block-rounded">
                <div class="block-content table-responsive p-1" >
                    <div class="row my-3 px-3">
                        <div class="col-md-2 ms-auto">
                            <label class="text-right">
                                <input type="search" wire:model="search" class="form-control" placeholder="Buscar" >
                            </label>
                        </div>
                    </div>
                    <table class="table table-sm table-vcenter">
                        <?php if (isset($component)) { $__componentOriginalc30ad8c2a191ad4361a1cb232afac54beb39ce36 = $component; } ?>
<?php $component = App\View\Components\TableHeader::resolve(['columns' => $searchColumns,'sortColumn' => ''.e($sortColumn).'','sortDirection' => ''.e($sortDirection).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TableHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc30ad8c2a191ad4361a1cb232afac54beb39ce36)): ?>
<?php $component = $__componentOriginalc30ad8c2a191ad4361a1cb232afac54beb39ce36; ?>
<?php unset($__componentOriginalc30ad8c2a191ad4361a1cb232afac54beb39ce36); ?>
<?php endif; ?>
                        <tbody>
                            <?php $__currentLoopData = $escrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($e->folio); ?></th>
                                <th><?php echo e($e->remitente); ?></th>
                                <th><?php echo e($e->destinatario); ?></th>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo e(route('escrito.edit',$e->id)); ?>" class="btn btn-sm text-success" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a wire:click="modalDeleteEscrito(<?php echo e($e->id); ?>)" href="javascript:void(0)" class="btn btn-sm text-warning"  data-bs-toggle="tooltip" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('modals'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('escrito.escrito-add')->html();
} elseif ($_instance->childHasBeenRendered('l1148815079-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1148815079-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1148815079-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1148815079-0');
} else {
    $response = \Livewire\Livewire::mount('escrito.escrito-add');
    $html = $response->html();
    $_instance->logRenderedChild('l1148815079-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>;
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('escrito.escrito-delete')->html();
} elseif ($_instance->childHasBeenRendered('l1148815079-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1148815079-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1148815079-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1148815079-1');
} else {
    $response = \Livewire\Livewire::mount('escrito.escrito-delete');
    $html = $response->html();
    $_instance->logRenderedChild('l1148815079-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>;
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/livewire/escrito/escrito-list.blade.php ENDPATH**/ ?>