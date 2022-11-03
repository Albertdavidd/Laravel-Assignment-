<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('document_title'); ?></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="">
        <a class="navbar-brand text-white" href="/">BikeShop</a>
        <a class="nav-link btn btn-dark text-white" href="/insertBike">Insert</a>
    </div>
    </nav>

    <?php echo $__env->yieldContent('body'); ?>
</body>
</html>
<?php /**PATH D:\pert3\resources\views/navbar.blade.php ENDPATH**/ ?>