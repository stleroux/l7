<?php if(Request::is('admin/invoicer/invoices/quotes')): ?>
    <i class="<?php echo e(config('icons.invoicer-quotes')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
    <i class="<?php echo e(config('icons.invoicer-estimates')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/invoiced')): ?>
    <i class="<?php echo e(config('icons.invoicer-invoiced')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/paid')): ?>
    <i class="<?php echo e(config('icons.invoicer-paid')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/workOrders')): ?>
    <i class="<?php echo e(config('icons.invoicer-workOrders')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/completed')): ?>
    <i class="<?php echo e(config('icons.invoicer-completed')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/shipped')): ?>
    <i class="<?php echo e(config('icons.invoicer-shipped')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/pickedUp')): ?>
    <i class="<?php echo e(config('icons.invoicer-pickedUp')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/canceled')): ?>
    <i class="<?php echo e(config('icons.invoicer-canceled')); ?>"></i>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices')): ?>
    <i class="<?php echo e(config('icons.invoicer-all')); ?>"></i>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/index/headerIcons.blade.php ENDPATH**/ ?>