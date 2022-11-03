

<?php $__env->startSection('document_title', 'home'); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-fluid">
        <?php $__currentLoopData = $bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="url" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">desc</p>
                <p class="card-text">price</p>
            </div>
            <a href="">update</a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pert3\resources\views/home.blade.php ENDPATH**/ ?>