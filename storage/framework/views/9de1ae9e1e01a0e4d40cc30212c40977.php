<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
        .blog-content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    line-height: 1.6;
    font-size: 16px;
}
.blog-content img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 10px 0;
}

    </style>
</head>

<body>
    <h1>All Blogs</h1>
    <a href="<?php echo e(route('blogs.create')); ?>">Add New Blog</a>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($blog->title); ?></h2>
    <img src="<?php echo e(asset($blog->card_img)); ?>" alt="Blog Image" width="200">

    <p><?php echo $blog->content; ?></p>
    <hr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH F:\xampp\htdocs\itsoftexpert\resources\views/blogs/index.blade.php ENDPATH**/ ?>