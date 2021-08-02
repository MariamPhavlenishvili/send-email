<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="box" style="width: 50%; text-align: center; margin:auto; padding: 50px">
        <?php if(count($errors)>0): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        <?php endif; ?>

        
        <form method="post" action="<?php echo e(url('/send')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" value="" name="subject">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>
            <div  class="mb-3 form-floating">
                <textarea class="form-control" name="message" placeholder="message" id="floatingTextarea2" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>
            <button type="submit" class="btn btn-primary" value="send">Send</button>
        </form>
    </div>

</body>
</html>
<?php /**PATH E:\SendEmail\emailSender\resources\views/emailSender.blade.php ENDPATH**/ ?>