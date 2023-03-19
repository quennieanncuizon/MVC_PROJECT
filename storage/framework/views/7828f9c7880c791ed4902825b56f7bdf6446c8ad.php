
<?php $__env->startSection('content'); ?>

    <div class="section create">
 
        <h1>Add New Member</h1>
        <hr>
        
        
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('teams.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="name" value="<?php echo e(old('name')); ?>" autofocus>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone</strong>
                        <input type="text" name="phone" class="form-control" placeholder="phone" value="<?php echo e(old('phone')); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo e(old('email')); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="text" name="image" class="form-control" placeholder="Image location" value="<?php echo e(old('image')); ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bio</strong>
                        <textarea  rows="6" type="text" name="bio" class="form-control" placeholder="Bio" value="<?php echo e(old('bio')); ?>"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo e(route('teams.index')); ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('teams.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Pojects\Laravel-Baculio\resources\views/teams/create.blade.php ENDPATH**/ ?>