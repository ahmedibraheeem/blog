<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">

    <h1>Create a post</h1>
        <hr>
    <form method="POST" action="/blog/public/posts">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>

        </div>


        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>