<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <title>
      Sign In - Time Wheels
    </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              'nunito': ['Nunito', 'sans-serif'],
              'product': ['"Product Sans"', 'sans-serif'],
            },
            colors: {
              'gold': '#D4A732',
              'purple': '#6F177D',
              'darkpurple': '#4B1454',
              'red': '#E02F2F',
              'darkred': '#BB2D2D',
              'offwhite': '#F5F5F5',
            },
          }
        }
      }
     </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
  </head>

  <body class="h-screen bg-offwhite">
    <div class="flex h-screen bg-cover" style="background-image: url('/images/Circle Motif.png');">
      <div class="m-auto">
        <img src="<?php echo e(asset('images/Time Wheels.png')); ?>" class="m-auto">
        <div class="w-96 py-5 px-10 m-5 shadow-2xl">
          <p class="font-extrabold text-4xl font-nunito text-center mb-5">
            Sign in
          </p>

          <?php if(Session::has('errors')): ?>
            <div class="bg-red text-white rounded-md text-center">
              <?php $__currentLoopData = Session::get('errors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                  <?php echo e($error); ?>

                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>

          <form method="POST" action="/signinaction">
            <?php echo csrf_field(); ?>
            <div class="border-b-2 border-black border-opacity-50 grid grid-cols-10 focus-within:border-opacity-100">
              <div class="w-fit m-auto scale-50">
                <img src="<?php echo e(asset('images/Username Icon.png')); ?>">
              </div>
              <div class="col-span-9">
                <input name="username" type="text" placeholder="Username" class="bg-transparent h-full w-full" value="<?php echo e(Session::get('username')); ?>">
              </div>
            </div>

            <div class="h-2.5"></div>

            <div class="border-b-2 border-black border-opacity-50 grid grid-cols-10 focus-within:border-opacity-100">
              <div class="w-fit m-auto scale-50">
                <img src="<?php echo e(asset('images/Password Icon.png')); ?>">
              </div>
              <div class="col-span-9">
                <input name="password" type="password" placeholder="Password" class="bg-transparent h-full w-full" value="<?php echo e(Session::get('password')); ?>">
              </div>
            </div>

            <div class="h-2.5"></div>

            <div class="grid grid-cols-10">
              <div class="w-fit">
                <input name="remember" type="checkbox" value="" class="w-4 h-4 accent-gold cursor-pointer">
              </div>
              <div class="w-fit col-span-9">
                <label class="font-nunito">Remember Me</label>
              </div>
            </div>

            <div class="h-10"></div>

            <div class="grid grid-cols-4 w-fit m-auto">
              <div class="transition-colors text-center bg-purple text-white rounded-md py-3 w-24 col-span-2 hover:bg-darkpurple cursor-pointer">
                <input type="submit" value="Sign in">
              </div>
              <div class="text-center flex justify-center items-center">
                <span>Or</span>
              </div>
              <div class="transition-colors flex justify-center items-center aspect-square scale-75 bg-red rounded-md hover:bg-darkred">
                <button class="font-product text-white text-4xl font-extrabold">G</button>
              </div>
            </div>
          </form>
        </div>
        <div class="transition m-auto text-center h-fit w-fit border-b-2 border-black hover:scale-105 cursor-pointer">
          <a href="<?php echo e(url('signup')); ?>">Create an account</a>
        </div>
      </div>
    </div>
  </body>
</html>
<?php /**PATH C:\laravel\Time Wheels\time-wheels\resources\views/signin.blade.php ENDPATH**/ ?>