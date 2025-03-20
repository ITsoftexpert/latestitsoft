<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
    <h1>Add New Blog</h1>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <label>Title:</label>
        <input type="text" name="title" required>
        <label>Content:</label>
        <textarea name="content" id="editor"></textarea>
        <button type="submit">Submit</button>
    </form>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
</html>
<?php /**PATH F:\xampp\htdocs\itsoftexpert\resources\views/admin/create-blog.blade.php ENDPATH**/ ?>