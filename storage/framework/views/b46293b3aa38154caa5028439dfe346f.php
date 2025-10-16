<?php $__env->startSection('content'); ?>
    <section class="about-area">
        <div class="container">
            <div class="d-flex about-me-wrap align-items-start gap-24">
                <div data-aos="zoom-in">
                    <div class="about-image-box shadow-box">
                        <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                        <div class="image-inner">
                            <img src="<?php echo e(asset('assets/images/about/mushary07.png')); ?>" alt="About Me">
                        </div>
                    </div>
                </div>

                <div class="about-details" data-aos="zoom-in">
                    <h1 class="section-heading" data-aos="fade-up"><img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star">
                        Self-summary <img src="<?php echo e(asset('assets/images/others/star.png')); ?>" alt="Star"></h1>
                    <div class="about-details-inner shadow-box">
                        <img src="<?php echo e(asset('assets/images/others/float-icon.png')); ?>" alt="Star">
                        <h1>MUSHARI H</h1>
                        <p>I’m passionate about building robust, scalable, and user-friendly web applications. Over the
                            years, I’ve developed and maintained projects across various domains including e-commerce,
                            logistics, SaaS platforms, and admin dashboards.</p>
                    </div>

                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-experience shadow-box">
                        <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                        <h3>EXPERIENCE</h3>
                        <ul>
                            <li>
                                <p class="date">2023 - Present</p>
                                <h2>Systems Engineer</h2>
                                <p class="type">Ahsan Solutions</p>
                            </li>
                            <li>
                                <p class="date">2021 - 2023</p>
                                <h2>Assistant Systems Engineer</h2>
                                <p class="type">Ahsan Solutions</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-education shadow-box">
                        <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                        <h3>EDUCATION</h3>
                        <ul>
                            <li>
                                <p class="date">2017 - 2020</p>
                                <h2>Bachelor of Computer Application</h2>
                                <p class="type">E.G.S. Pillay Arts & Science College, Nagapattinam</p>
                            </li>
                            <li>
                                <p class="date">2014 - 2016</p>
                                <h2>Higher Secondary School Certificate</h2>
                                <p class="type">St. Mary’s Higher Secondary School, Karaikal</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-12">
                    <div class="d-flex profile-contact-credentials-wrap gap-24">

                        <div data-aos="zoom-in">
                            <div class="about-profile-box info-box shadow-box h-full">
                                <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                                <div class="inner-profile-icons shadow-box">
                                    <a href="https://www.linkedin.com/in/mushary07" target="_blank"rel="noopener">
                                        <i class="iconoir-linkedin"></i>
                                    </a>
                                    <a href="https://www.instagram.com/mushary07" target="_blank"rel="noopener">
                                        <i class="iconoir-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/mushary07" target="_blank"rel="noopener">
                                        <i class="iconoir-facebook"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Stay with me</h4>
                                        <h1>Profiles</h1>
                                    </div>

                                    <a href="<?php echo e(route('contact')); ?>" class="about-btn">
                                        <img src="<?php echo e(asset('assets/images/others/icon.svg')); ?>" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="flex-1">
                            <div class="about-contact-box info-box shadow-box custom-padding-t">
                                <a class="overlay-link" href="<?php echo e(url('/contact')); ?>"></a>
                                <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                                <img src="<?php echo e(asset('assets/images/others/float-icon.png')); ?>" alt="Icon" class="star-icon">
                                <h1>Let's <br>work <span>together.</span></h1>
                                <a href="<?php echo e(url('/contact')); ?>" class="about-btn">
                                    <img src="<?php echo e(asset('assets/images/others/icon.svg')); ?>" alt="Button">
                                </a>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="h-full">
                            <div class="about-crenditials-box info-box shadow-box">
                                <a class="overlay-link" href="<?php echo e(route('credential')); ?>"></a>
                                <img src="<?php echo e(asset('assets/images/others/bg.png')); ?>" alt="BG" class="bg-img">
                                <img src="<?php echo e(asset('assets/images/about/credential.png')); ?>" alt="Sign">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>more about me</h4>
                                        <h1>Credentials</h1>
                                    </div>

                                    <a href="<?php echo e(route('credential')); ?>" class="about-btn">
                                        <img src="<?php echo e(asset('assets/images/others/icon.svg')); ?>" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\Portfolio\resources\views/about.blade.php ENDPATH**/ ?>