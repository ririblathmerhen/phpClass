<?php $__env->startSection('content'); ?>

<?php if(isset($_SESSION['user'])): ?>
<h1>Hello world</h1>
<?php endif; ?>

<table>
    <tr>
        <td>번호</td>
        <td>제목</td>
        <td>내용</td>
        <td>글쓴이</td>
    </tr>
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->title); ?></td>
        <td><?php echo e($item->content); ?></td>
        <td><?php echo e($item->writer); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout/master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\views/main.blade.php ENDPATH**/ ?>