
<?php $__env->startSection('title', trans('core::core.show_a_book')); ?>
<?php $__env->startSection('content'); ?>
    <h3><?php echo e(trans('core::core.book_store')); ?></h3>
    <p><a href="<?php echo e(route('roles.index_path')); ?>"><?php echo e(trans('core::core.home')); ?></a></p>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header"><?php echo e(trans('core::core.show')); ?></h5>
                <div class="card-body">
                    <label for="title"><?php echo e(trans('core::core.title')); ?>:</label>&nbsp;<?php echo e($data_view->name); ?>

                    <br>
                    <label for="author"><?php echo e(trans('core::core.author')); ?>:</label>&nbsp;<?php echo e($data_view->code); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp7.2.14\htdocs\laravel-dev\laravel-7x\platform\core\src/../resources/views/role/show.blade.php ENDPATH**/ ?>