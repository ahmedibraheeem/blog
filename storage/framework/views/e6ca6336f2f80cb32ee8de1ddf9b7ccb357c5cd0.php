
<div class="blog-post">
    <div class="blog-post">
    <h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
    <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?></p>

    <?php echo e($post->body); ?>

    </div>
</div>