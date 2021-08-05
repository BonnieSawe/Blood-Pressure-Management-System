<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Livewire DataTable Example - Tutsmake.com</title>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
</head>
<body>
     
<div class="container">
     
    <div class="card">
      <div class="card-header">
        Laravel Livewire Example - Tutsmake.com
      </div>
      <div class="card-body">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users-table', [])->html();
} elseif ($_instance->childHasBeenRendered('TYfWomz')) {
    $componentId = $_instance->getRenderedChildComponentId('TYfWomz');
    $componentTag = $_instance->getRenderedChildComponentTagName('TYfWomz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TYfWomz');
} else {
    $response = \Livewire\Livewire::mount('users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('TYfWomz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

   
      </div>
    </div>
         
</div>
     
</body>
   
<?php echo \Livewire\Livewire::scripts(); ?>

   
</html>
<?php /**PATH /home/vagrant/space/nursing-app/resources/views/welcome.blade.php ENDPATH**/ ?>