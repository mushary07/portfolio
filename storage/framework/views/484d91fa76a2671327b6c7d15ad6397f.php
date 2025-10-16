<?php $__env->startComponent('mail::message'); ?>
    # New Contact Form Submission

    **Name:** <?php echo new \Illuminate\Support\EncodedHtmlString($data['name']); ?>

    **Email:** <?php echo new \Illuminate\Support\EncodedHtmlString($data['email']); ?>

    **Subject:** <?php echo new \Illuminate\Support\EncodedHtmlString($data['subject']); ?>


    ---

    <?php echo new \Illuminate\Support\EncodedHtmlString($data['message']); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Laravel\Portfolio\resources\views/emails/contact.blade.php ENDPATH**/ ?>