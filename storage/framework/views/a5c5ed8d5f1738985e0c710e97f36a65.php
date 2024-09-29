<?php if($errors->any() || Session::has('error') || Session::has('msg')): ?>
    <div class="flex flex-col gap-5 py-5">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-[red]/50 p-10 text-2xl font-extrabold text-white border-4 border-[red] rounded-3xl">
                    <?php echo e($err); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
            <div class="bg-[red]/50 p-10 text-2xl font-extrabold text-white border-4 border-[red] rounded-3xl">
                <?php echo e(Session::get('error')); ?></div>
        <?php endif; ?>
        <?php if(Session::has('msg')): ?>
            <div class="bg-[green]/50 p-10 text-2xl font-extrabold text-white border-4 border-[green] rounded-3xl">
                <?php echo e(Session::get('msg')); ?></div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/kyungrie/TastyFood/resources/views/components/messages.blade.php ENDPATH**/ ?>