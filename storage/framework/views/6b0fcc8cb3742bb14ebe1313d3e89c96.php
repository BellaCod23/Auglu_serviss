<?php $__env->startSection('title'); ?> Atsauksmes <?php $__env->stopSection(); ?>


<?php $__env->startSection('main_content'); ?>

<h1>Atsauksmes forma</h1>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($errors); ?>

        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form method="post" action="review/check">

    <?php echo csrf_field(); ?>
    <input type="email" name="email" id="email" placeholder="Ievadiet email" class="form-control"><br>

    <input type="text" name="subject" id="subject" placeholder="Ievadiet vārdu" class="form-control"><br>

    <textarea name="message" id="message" class="form-control" placeholder="Ievadiet tekstu"></textarea></textarea><br>

    <button type="submit" class="btn btn-success">Nosūtīt</button>

</form>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('augluserviss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zandapruse/Laravel/auglu_serviss/resources/views/review.blade.php ENDPATH**/ ?>