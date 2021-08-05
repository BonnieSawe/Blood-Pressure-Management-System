<?php if(session()->has('message')): ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('warning')): ?>
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p><?php echo e(session('message')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('success')): ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <p><?php echo e(session('error')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH /home/vagrant/space/nursing-app/resources/views/layouts/messages.blade.php ENDPATH**/ ?>