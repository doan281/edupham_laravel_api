<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/core/css/bootstrap.css')); ?>">
    <script src="<?php echo e(asset('vendor/core/js/jquery-3.3.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/core/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/core/js/bootstrap.js')); ?>"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH G:\xampp7.2.14\htdocs\laravel-dev\laravel-7x\platform\core\src/../resources/views/layout.blade.php ENDPATH**/ ?>