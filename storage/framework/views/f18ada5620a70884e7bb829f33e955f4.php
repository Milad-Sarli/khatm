<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'tenant' => filament()->getTenant(),
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'tenant' => filament()->getTenant(),
]); ?>
<?php foreach (array_filter(([
    'tenant' => filament()->getTenant(),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.avatar','data' => ['circular' => false,'src' => filament()->getTenantAvatarUrl($tenant),'attributes' => 
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->class(['fi-tenant-avatar'])
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['circular' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filament()->getTenantAvatarUrl($tenant)),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->class(['fi-tenant-avatar'])
    )]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $attributes = $__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__attributesOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb)): ?>
<?php $component = $__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb; ?>
<?php unset($__componentOriginal7aa0b6b1aa4a6b63824d7be5e541d1cb); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\khatm\vendor\filament\filament\src\/../resources/views/components/avatar/tenant.blade.php ENDPATH**/ ?>