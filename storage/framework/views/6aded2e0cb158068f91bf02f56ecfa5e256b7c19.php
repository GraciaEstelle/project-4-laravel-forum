<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php $__env->startComponent('threads.panel'); ?>
                <?php $__env->slot('title'); ?>
                Forum Threads
                <?php $__env->endSlot(); ?>
                <?php $__currentLoopData = $threads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article>
                    <h4>
                        <a href="<?php echo e(url($thread->path())); ?>">
                            <?php echo e($thread->title); ?>

                        </a>
                    </h4>
                    <div class="body"><?php echo e($thread->body); ?></div>
                </article>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>