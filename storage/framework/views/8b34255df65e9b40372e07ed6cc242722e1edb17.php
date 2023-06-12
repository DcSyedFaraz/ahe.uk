<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <meta name="robots" content="noindex">

    
    <meta name="csrf-token" content="xFfFMm0UfLUjLAT6s3EW3gIZplo9RTcKeiBHRHCz">

    
    <meta name="theme-color" content="#fff" />

    <title><?php echo $__env->yieldContent('title', env('APP_NAME')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>" />

    
    <meta property="og:url" content="<?php echo $__env->yieldContent('canonical'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', env('APP_NAME')); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>" />
    <meta property="og:image" content="<?php echo e(asset('imgs/logo.png')); ?>" />

    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title', ''); ?>" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('description'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('imgs/logo.png')); ?>" />

    
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', ''); ?>" />
    
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend-customcss.css')); ?>">
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon.png')); ?>">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/app.css')); ?>">


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        .iti {
            width: 100%;
            margin-top: 6px;
        }
    </style>

    
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    
    
    <?php echo $__env->yieldContent('links'); ?>

    <?php echo $__env->yieldContent('styles'); ?>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            font-family: 'Inter', sans-serif;
        }


        .line-cut {
            text-decoration: line-through #F78C03;
        }

        .progress {
            position: relative;
            margin: 4px;
            float: left;
            text-align: center;
        }

        .barOverflow {
            /* Wraps the rotating .bar */
            /* position: relative; */
            overflow: hidden;
            /* Comment this line to understand the trick */
            width: 90px;
            height: 45px;
            /* Half circle (overflow) */
            margin-bottom: -14px;
            /* bring the numbers up */
        }

        .bar {
            /* position: absolute; */
            top: 0;
            left: 0;
            width: 90px;
            height: 90px;
            /* full circle! */
            border-radius: 50%;
            box-sizing: border-box;
            border: 5px solid #eee;
            /* half gray, */
            border-bottom-color: #F78C03;
            /* half azure */
            border-right-color: #F78C03;
        }

        swiper-container {
            width: auto;
            height: auto;
            margin: 0%;
        }

        swiper-slide {
            width: auto;
            height: auto;
            overflow: hidden;
        }
    </style>

</head>

<body class="bg-slate-100">

    <?php echo $__env->make('partials.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>



    
    <?php echo $__env->make('partials.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    

    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
    


    

    <?php echo $__env->yieldContent('scripts'); ?>
    
</body>

</html>
<?php /**PATH E:\Syed Faraz Shahid\blog\resources\views/layouts/web.blade.php ENDPATH**/ ?>