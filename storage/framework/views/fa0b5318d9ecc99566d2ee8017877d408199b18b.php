

<h1><?php echo e($data['subject']); ?></h1>
<p>
   <b>From : </b>
   <?php echo e($data['email']); ?>

</p>
<p>
   <b>Name: </b>
   <?php echo e($data['name']); ?>

</p>
<p>
   <b>Message :</b>
   <br />
   <?php echo e($data['message']); ?>

</p>

<?php if($data['subject'] == "Contact from Quote Request"): ?>
<p>
   <b>Cart Items :</b>
   <br />
   <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($row->qty); ?> x <?php echo e($row->name); ?> <br />      
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</p>
<?php endif; ?>
<br />


<?php /**PATH C:\sites\l7\resources\views/emails/contactForm/contact-form.blade.php ENDPATH**/ ?>