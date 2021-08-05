<?php if($paginationEnabled && $showPerPage): ?>
    <div class="w-full md:w-auto ml-0 md:ml-2">
        <select
            wire:model="perPage"
            id="perPage"
            class="rounded-md shadow-sm block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo sm:text-sm sm:leading-5"
        >
            <?php $__currentLoopData = $perPageAccepted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
<?php endif; ?>
<?php /**PATH /home/vagrant/space/nursing-app/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/tailwind/includes/per-page.blade.php ENDPATH**/ ?>