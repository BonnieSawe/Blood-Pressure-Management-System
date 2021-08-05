<?php $attributes = $attributes->exceptProps(['url' => null, 'reordering' => false, 'customAttributes' => []]); ?>
<?php foreach (array_filter((['url' => null, 'reordering' => false, 'customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(!$reordering && $attributes->has('wire:sortable.item')): ?>
    <?php
        $attributes = $attributes->filter(fn ($value, $key) => $key !== 'wire:sortable.item');
    ?>
<?php endif; ?>

<tr
    <?php echo e($attributes->merge($customAttributes)); ?>


    <?php if($url): ?>
        onclick="window.location='<?php echo e($url); ?>';"
        style="cursor:pointer"
    <?php endif; ?>
>
    <?php echo e($slot); ?>

</tr>
<?php /**PATH /home/vagrant/space/nursing-app/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/tailwind/components/table/row.blade.php ENDPATH**/ ?>