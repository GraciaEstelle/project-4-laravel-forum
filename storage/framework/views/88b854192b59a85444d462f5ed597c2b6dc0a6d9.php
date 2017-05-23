<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php $__env->startComponent('threads.panel'); ?>
                <?php $__env->slot('title'); ?>
                    <a href="#"><?php echo e($thread->creator->name); ?></a> posted:
                    <?php echo e($thread->title); ?>

                <?php $__env->endSlot(); ?>
                    <?php echo e($thread->body); ?>

            <?php echo $__env->renderComponent(); ?>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php $__currentLoopData = $thread->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('threads.reply', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php if(auth()->check()): ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="post" action="<?php echo e(url($thread->path().'/replies')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <textarea class="form-control" name="body" id="body" rows="5" placeholder="Says...."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">post</button>
                    </form>
                </div>
            </div>
            <?php else: ?>
            <p class="text-center"> Please <a href="<?php echo e(route('login')); ?>">sign in</a> to participate</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>