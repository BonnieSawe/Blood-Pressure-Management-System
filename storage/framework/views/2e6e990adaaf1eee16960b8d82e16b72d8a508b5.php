<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Patients</h3>
        </div>
    </div>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('patients-table', [])->html();
} elseif ($_instance->childHasBeenRendered('0jSD4fK')) {
    $componentId = $_instance->getRenderedChildComponentId('0jSD4fK');
    $componentTag = $_instance->getRenderedChildComponentTagName('0jSD4fK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0jSD4fK');
} else {
    $response = \Livewire\Livewire::mount('patients-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('0jSD4fK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</div>
<?php /**PATH /home/vagrant/space/nursing-app/resources/views/livewire/patient.blade.php ENDPATH**/ ?>