<?php $__env->startSection('content'); ?>

<!-- rts- 404 area start -->
<div class="rts-404-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            <img src="assets/images/contact/shape/404.png" alt="">
                        </div>
                        <h2 class="title mt--40">
                            Oops! Nothing Was Found
                        </h2>
                        <p class="disc">Sorry, we couldn’t find the page you where looking for. We suggest <br> that you
                            return to homepage.</p>
                        <a class="rts-btn btn-primary" href="<?php echo e(url('home')); ?>">Back To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts- 404 area end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gvtech-jaycee/JCD/Emerged/website/resources/views/errors/404.blade.php ENDPATH**/ ?>