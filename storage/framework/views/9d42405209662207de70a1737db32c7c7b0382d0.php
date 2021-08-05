<?php $attributes = $attributes->exceptProps([
    'column',
    'sortingEnabled' => true,
    'sortable' => null,
    'direction' => null,
    'text' => null,
    'customAttributes' => [],
]); ?>
<?php foreach (array_filter(([
    'column',
    'sortingEnabled' => true,
    'sortable' => null,
    'direction' => null,
    'text' => null,
    'customAttributes' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<th
    <?php echo e($attributes->merge(array_merge(['class' => 'px-3 py-2 md:px-6 md:py-3 bg-gray-50'], $customAttributes))); ?>

>
    <?php if (! ($sortingEnabled && $sortable)): ?>
        <span class="block text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            <?php echo e($text ?? $slot); ?>

        </span>
    <?php else: ?>
        <button
            wire:click="sortBy('<?php echo e($column); ?>', '<?php echo e($text ?? $column); ?>')"
            <?php echo e($attributes->except('class')); ?>

            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider group focus:outline-none focus:underline"
        >
            <span><?php echo e($text ?? $slot); ?></span>

            <span class="relative flex items-center">
                <?php if($direction === 'asc'): ?>
                    <svg class="w-3 h-3 group-hover:opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                <?php elseif($direction === 'desc'): ?>
                    <div class="opacity-0 group-hover:opacity-100 absolute">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <svg class="w-3 h-3 group-hover:opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                <?php else: ?>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                <?php endif; ?>
            </span>
        </button>
    <?php endif; ?>
</th>
<?php /**PATH /home/vagrant/space/nursing-app/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/tailwind/components/table/heading.blade.php ENDPATH**/ ?>