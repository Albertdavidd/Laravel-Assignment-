

<?php $__env->startSection('document_title', 'home'); ?>

<?php $__env->startSection('body'); ?>
<div class="d-flex flex-column align-items-center mt-4">
    <p id="title" class="fs-1 fw-bold">Insert Bike</p>
    
    <form method="POST" enctype="multipart/form-data" action="/storeBike" class="d-flex flex-column align-items-center">
            
            <?php echo csrf_field(); ?>
           
            <div class="mb-3 w-100">
                <label for="InputName" class="form-label">Bike Name</label>
                <input type="text" class="form-control" name="nameValue" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 w-100">
                <label for="inputPrice" class="form-label">Bike Price ($)</label>
                <input type="text" class="form-control" name="priceValue" id="exampleInputPassword1">
            </div>
            <div class="mb-3 w-100">
                <label for="inputDescription" class="form-label">Bike Description</label>
                <textarea type="textarea" class="form-control" id="exampleInputPassword1" name="descValue"></textarea>
            </div>
            <div class="mb-3 w-100">
                <label for="inputBrand">Bike Brands</label>
                <select name="bikeBrand" class="form-select mt-2" aria-label="Default select example">
                    
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($b->brandId); ?>"><?php echo e($b->brandName); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="inputImage" class="form-label">Bike Image</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div>

            

            <button type="submit" class="btn btn-success">submit</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\5th term\tugas 1\gslc\resources\views/insertBike.blade.php ENDPATH**/ ?>