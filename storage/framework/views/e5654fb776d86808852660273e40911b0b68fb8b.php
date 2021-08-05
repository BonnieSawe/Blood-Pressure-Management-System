<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Staff</h3>
        </div>
    </div>
    <div class="container mx-auto mt-4">
        <div>
            <?php if(auth()->user()->role_id == 1): ?>
                <a href="<?php echo e(route('staff.create')); ?>" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold mb-3 py-2 px-4 rounded">
                    Create <i class="fa fa-plus"></i>
                </a>
            <?php endif; ?>
        </div>
        <br>
        <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('staff-table', [])->html();
} elseif ($_instance->childHasBeenRendered('MGQiqDo')) {
    $componentId = $_instance->getRenderedChildComponentId('MGQiqDo');
    $componentTag = $_instance->getRenderedChildComponentTagName('MGQiqDo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MGQiqDo');
} else {
    $response = \Livewire\Livewire::mount('staff-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('MGQiqDo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php /**PATH /home/vagrant/space/nursing-app/resources/views/livewire/staff.blade.php ENDPATH**/ ?>