<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('storage/images/settings/app_favicon.ico')); ?>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/main.scss', 'resources/js/dashmix/app.js']); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <?php echo \Livewire\Livewire::styles(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo $__env->yieldContent('js'); ?>
</head>
<body>
    <div id="app">
        <div id="page-container" class="sidebar-o sidebar-mini enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template.main-aside')->html();
} elseif ($_instance->childHasBeenRendered('LftCOKX')) {
    $componentId = $_instance->getRenderedChildComponentId('LftCOKX');
    $componentTag = $_instance->getRenderedChildComponentTagName('LftCOKX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LftCOKX');
} else {
    $response = \Livewire\Livewire::mount('template.main-aside');
    $html = $response->html();
    $_instance->logRenderedChild('LftCOKX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <!-- END Side Overlay -->
            <!-- Sidebar -->
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template.main-nav')->html();
} elseif ($_instance->childHasBeenRendered('beX6P3c')) {
    $componentId = $_instance->getRenderedChildComponentId('beX6P3c');
    $componentTag = $_instance->getRenderedChildComponentTagName('beX6P3c');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('beX6P3c');
} else {
    $response = \Livewire\Livewire::mount('template.main-nav');
    $html = $response->html();
    $_instance->logRenderedChild('beX6P3c', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <!-- END Sidebar -->
            <!-- Header -->
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template.main-header')->html();
} elseif ($_instance->childHasBeenRendered('ZqZ7rLZ')) {
    $componentId = $_instance->getRenderedChildComponentId('ZqZ7rLZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZqZ7rLZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZqZ7rLZ');
} else {
    $response = \Livewire\Livewire::mount('template.main-header');
    $html = $response->html();
    $_instance->logRenderedChild('ZqZ7rLZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <!-- END Header -->
            <!-- Main Container -->
            <main id="main-container">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <!-- END Main Container -->
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('template.main-footer')->html();
} elseif ($_instance->childHasBeenRendered('IEuHQgM')) {
    $componentId = $_instance->getRenderedChildComponentId('IEuHQgM');
    $componentTag = $_instance->getRenderedChildComponentTagName('IEuHQgM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IEuHQgM');
} else {
    $response = \Livewire\Livewire::mount('template.main-footer');
    $html = $response->html();
    $_instance->logRenderedChild('IEuHQgM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <!-- Footer -->
        </div>
    </div>
    <?php echo $__env->yieldPushContent('modals'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'pharaonic-select2::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pharaonic-select2::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\jorge.romero\Documents\laragon\www\websigevo\resources\views/layouts/app.blade.php ENDPATH**/ ?>