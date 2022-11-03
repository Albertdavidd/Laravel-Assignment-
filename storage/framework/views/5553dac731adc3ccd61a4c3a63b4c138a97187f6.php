

<?php $__env->startSection('document_title', 'update'); ?>

<?php $__env->startSection('body'); ?>
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Update Bike</p>
    
    <form method="POST" enctype="multipart/form-data" action="/update/<?php echo e($modelBike->id); ?>" class="d-flex flex-column align-items-center">
            
            <?php echo csrf_field(); ?>
            
            <?php echo e(method_field('PUT')); ?>

            <div class="mb-3 w-100">
                <label for="InputName" class="form-label">Bike Name</label>
                <input type="text" class="form-control" name="nameValue">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPrice" class="form-label">Bike Price ($)</label>
                <input type="text" class="form-control" name="priceValue">
            </div>

            

            <button type="submit" class="btn btn-success">submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pert3\pert3\resources\views/update.blade.php ENDPATH**/ ?>