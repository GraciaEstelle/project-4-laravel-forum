<div class="panel panel-default">
    <div class="panel-heading">
        <a href="#"><?php echo e($reply->owner->name); ?></a> said
        <?php echo e($reply->created_at->diffForHumans()); ?>

    </div>
    <div class="panel-body">
        <?php echo e($reply->body); ?>

    </div>
</div>