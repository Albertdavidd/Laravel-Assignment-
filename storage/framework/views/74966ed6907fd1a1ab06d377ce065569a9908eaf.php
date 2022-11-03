

<?php $__env->startSection('document_title', 'home'); ?>

<?php $__env->startSection('body'); ?>
    <div class="container-fluid">
        <?php $__currentLoopData = $bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($b->bikeName); ?></h5>
                <p class="card-text"><?php echo e($b->bikeDescription); ?></p>
                <p class="card-text"><?php echo e($b->bikePrice); ?></p>
            </div>
            <a href="/updateBike/<?php echo e($b->id); ?>">update</a>

            <form action="delete/<?php echo e($b->id); ?>" method="POST" >
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('DELETE')); ?>

                <button type="submit">Delete</button>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5th term\tugas 1\gslc\resources\views/home.blade.php ENDPATH**/ ?>