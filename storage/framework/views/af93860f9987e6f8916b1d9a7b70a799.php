<?php $__env->startSection('content'); ?>
    <section class="projects-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-heading" data-aos="fade-up"><img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star">
                        All Projects
                        <img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star">
                    </h1>
                </div>
                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div data-aos="zoom-in">
                            <div class="project-item shadow-box">
                                <a class="overlay-link" href="<?php echo e(route('work-detail', [$value['id']])); ?>" target="_blank"></a>
                                <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                                <div class="project-img">
                                    <img src="<?php echo e(asset($value['thumbnail'])); ?>" alt="Project">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="project-info">
                                        <p><?php echo e($value['caption']); ?></p>
                                        <h1><?php echo e($value['name']); ?></h1>
                                    </div>
                                    <a href="<?php echo e(route('work-detail', [$value['id']])); ?>" class="project-btn">
                                        <img src="<?php echo e(asset('assets/images/others/icon.svg')); ?>" alt="Button">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\Portfolio\resources\views/works.blade.php ENDPATH**/ ?>