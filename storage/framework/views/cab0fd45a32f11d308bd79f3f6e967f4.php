<script src="<?php echo e(asset('assets/js/jquery-3.6.4.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggles = document.querySelectorAll('.theme-toggle');
        const icons = document.querySelectorAll('.theme-icon');
        const labels = document.querySelectorAll('.theme-label');
        const themeLink = document.getElementById('theme-style');

        const sunIcon =
            '<path d="M12 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zM4.22 4.22a1 1 0 011.42 0L7.05 5.63a1 1 0 01-1.42 1.42L4.22 5.64a1 1 0 010-1.42zM2 12a1 1 0 011-1h1a1 1 0 110 2H3a1 1 0 01-1-1zm2.22 7.78a1 1 0 011.42-1.42L7.05 18.37a1 1 0 11-1.42 1.42l-1.41-1.41zM12 21a1 1 0 011-1h0a1 1 0 010 2h0a1 1 0 01-1-1zm7.78-2.22a1 1 0 00-1.42-1.42L16.95 18.37a1 1 0 101.42 1.42l1.41-1.41zM21 12a1 1 0 00-1-1h-1a1 1 0 000 2h1a1 1 0 001-1zm-2.22-7.78a1 1 0 00-1.42 1.42l1.41 1.41a1 1 0 001.42-1.42L18.78 4.22zM12 6a6 6 0 000 12 6 6 0 000-12z"/>'
        const moonIcon = '<path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>'

        const applyTheme = theme => {
            themeLink.href = theme === 'dark' ?
                "<?php echo e(asset('assets/css/style.css')); ?>" :
                "<?php echo e(asset('assets/css/style-light.css')); ?>"

            icons.forEach(icon => icon.innerHTML = theme === 'dark' ? sunIcon : moonIcon)
            labels.forEach(label => label.textContent = theme === 'dark' ? 'Dark' : 'Light')
            localStorage.setItem('theme', theme)
        }

        // Load saved theme
        const savedTheme = localStorage.getItem('theme') || 'light'
        applyTheme(savedTheme)

        // Add toggle functionality
        themeToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const newTheme = localStorage.getItem('theme') === 'dark' ? 'light' : 'dark'
                applyTheme(newTheme)
            })
        })
    })
</script>
<?php /**PATH C:\Laravel\Portfolio\resources\views/components/scripts.blade.php ENDPATH**/ ?>