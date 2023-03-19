
<?php $__env->startSection('content'); ?>

    <div class="section index">
    
        <h1>Admin</h1>
        <hr>
        <div class="top-row">
            <div class="button pull-left">
                <a class="btn btn-info" href="<?php echo e(route('home.index')); ?>"> Home</a>
            </div>
            <div class="button pull-left">
                <a class="btn btn-success" href="<?php echo e(route('agents.create')); ?>"> Add new agent</a>
            </div>
    
        </div>
        <br>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

        <?php if($agents->isEmpty()): ?>
            <p>No agents found.</p>
            <?php else: ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Bio</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($agent->id); ?></td>
                                <td><?php echo e($agent->name); ?></td>
                                <td><?php echo e($agent->phone); ?></td>
                                <td><?php echo e($agent->email); ?></td>
                                <td><?php echo e($agent->image); ?></td>
                                <td><?php echo e($agent->bio); ?></td>
                                <td>
                                    <form action="<?php echo e(route('agents.destroy', $agent->id)); ?>" method="POST">
                                        <a class="btn btn-primary" href="<?php echo e(route('agents.edit', $agent->id)); ?>">Edit</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($agents->links()); ?>

        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('agents.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Acer\Desktop\Laravel-Baculio\resources\views/agents/index.blade.php ENDPATH**/ ?>