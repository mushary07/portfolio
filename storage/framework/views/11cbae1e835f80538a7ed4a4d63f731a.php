<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content" data-aos="fade-up">
                <p><?php echo e($work['caption']); ?></p>
                <h1 class="section-heading">
                    <img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star">
                    <?php echo e($work['name']); ?>

                    <img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star">
                </h1>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="project-details-wrap">
        <div class="project-details-img" data-aos="zoom-in">
            <img src="<?php echo e(asset($work['banner-1'])); ?>" alt="Project Details">
        </div>

        <div class="container">
            <div data-aos="zoom-in">
                <div class="d-flex project-infos-wrap shadow-box mb-24">
                    <img src="<?php echo e(asset('assets/images/bg1.png')); ?>" alt="BG" class="bg-img">
                    <img src="<?php echo e(asset('assets/images/others/float-icon.png')); ?>" alt="Icon">
                    <div class="project-details-info flex-1">
                        <h3><?php echo e($work['name']); ?></h3>
                        <p><?php echo e($work['description']); ?></p>
                    </div>

                    <div class="project-details-info flex-1">
                        <h3>About</h3>
                        <p><?php echo e($work['about']); ?></p>
                    </div>
                </div>
            </div>

            <div class="project-details-2-img mb-24" data-aos="zoom-in">
                <img src="<?php echo e(asset($work['banner-2'])); ?>" alt="Project">
            </div>

            <div class="row mb-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="<?php echo e(asset($work['gallery-1'])); ?>" alt="Project">
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="<?php echo e(asset($work['gallery-2'])); ?>" alt="Project">
                    </div>
                </div>
            </div>

            <div class="row mb-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="<?php echo e(asset($work['gallery-3'])); ?>" alt="Project">
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="project-details-3-img">
                        <img src="<?php echo e(asset($work['gallery-4'])); ?>" alt="Project">
                    </div>
                </div>
            </div>

            <div data-aos="zoom-in">
                <div class="project-about-2 d-flex shadow-box mb-24">
                    <img src="<?php echo e(asset('assets/images/bg1.png')); ?>" alt="BG" class="bg-img">
                    <div class="left-details">
                        <img src="<?php echo e(asset('assets/images/others/float-icon.png')); ?>" alt="Icon">
                        <ul>
                            <?php $__currentLoopData = $work['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p><?php echo e($value['title']); ?></p>
                                    <h4><?php echo e($value['value']); ?></h4>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="right-details">
                        <h3>Description</h3>
                        <p><?php echo e($work['timeline_description']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-details-img" data-aos="zoom-in">
            <img src="<?php echo e(asset($work['banner-3'])); ?>" alt="Project Details">
        </div>

        <div class="container d-flex align-items-center justify-content-center gap-5" data-aos="zoom-in">
            <?php if($id > $minId): ?>
                <a href="<?php echo e(route('work-detail', [$id - 1])); ?>" class="small-btn shadow-box">
                    Previous Project
                </a>
            <?php endif; ?>

            <?php if($id < $maxId): ?>
                <a href="<?php echo e(route('work-detail', [$id + 1])); ?>" class="small-btn shadow-box">
                    Next Project
                </a>
            <?php endif; ?>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Portfolio\resources\views/work-detail.blade.php ENDPATH**/ ?>