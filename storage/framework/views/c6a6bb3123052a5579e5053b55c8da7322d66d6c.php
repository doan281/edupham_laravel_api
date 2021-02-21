
<?php $__env->startSection('title', trans('core::core.role_list')); ?>
<?php $__env->startSection('content'); ?>
    <h3><?php echo e(trans('core::core.role_list')); ?></h3>
    <p><a href="<?php echo e(route('roles.index_path')); ?>"><?php echo e(trans('core::core.home')); ?></a></p>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header"><?php echo e(trans('core::core.create')); ?></h5>
                <div class="card-body">
                    <?php if(isset($errors)): ?>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <form action="<?php echo e(route('roles.store_path')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="title"><?php echo e(trans('core::core.role_name')); ?></label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="author"><?php echo e(trans('core::core.role_code')); ?></label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('core::core.save')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp7.2.14\htdocs\laravel-dev\laravel-7x\platform\core\src/../resources/views/role/create.blade.php ENDPATH**/ ?>