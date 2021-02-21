
<?php $__env->startSection('title', trans('core::core.role_list')); ?>
<?php $__env->startSection('content'); ?>
    <h3><?php echo e(trans('core::core.role_list')); ?></h3>
    <div><a href="<?php echo e(route('roles.create_path')); ?>"><?php echo e(trans('core::core.create')); ?></a></div>
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?php echo e(trans('core::core.role_name')); ?></th>
                <th class="text-center"><?php echo e(trans('core::core.role_code')); ?></th>
                <th class="text-center"><?php echo e(trans('core::core.created_at')); ?></th>
                <th class="text-center"><?php echo e(trans('core::core.actions')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data_views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->code); ?></td>
                <td class="text-center"><?php echo e(\Carbon\Carbon::make($data->created_at)->format('d/m/Y H:i:s')); ?></td>
                <td>
                    <a href="<?php echo e(route('roles.show_path', [$data->id])); ?>"><?php echo e(trans('core::core.show')); ?></a> |
                    <a href="<?php echo e(route('roles.edit_path', [$data->id])); ?>"><?php echo e(trans('core::core.edit')); ?></a>
                    <form action="<?php echo e(route('roles.destroy_path', [$data->id])); ?>" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="<?php echo e(trans('core::core.delete')); ?>">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4"><?php echo e(trans('core::core.no_data')); ?></td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <div class="text-center"><?php echo e($data_views->links()); ?></div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp7.2.14\htdocs\laravel-dev\laravel-7x\platform\core\src/../resources/views/role/index.blade.php ENDPATH**/ ?>