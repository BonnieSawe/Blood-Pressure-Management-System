<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Blood Pressure Observations</h3>
        </div>
    </div>
    <div class="container mx-auto mt-4">
        <div>
            <a href="<?php echo e(route('observations.create')); ?>" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold mb-3 py-2 px-4 rounded">
                Create <i class="fa fa-plus"></i>
            </a>
        </div>
        <br>
        <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('observations-table', [])->html();
} elseif ($_instance->childHasBeenRendered('ia7tDlc')) {
    $componentId = $_instance->getRenderedChildComponentId('ia7tDlc');
    $componentTag = $_instance->getRenderedChildComponentTagName('ia7tDlc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ia7tDlc');
} else {
    $response = \Livewire\Livewire::mount('observations-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('ia7tDlc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php /**PATH /home/vagrant/space/nursing-app/resources/views/livewire/observation.blade.php ENDPATH**/ ?>