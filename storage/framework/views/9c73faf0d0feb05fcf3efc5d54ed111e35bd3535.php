<li class="breadcrumb-item">
    <a href="<?php echo e(route('admin.invoicer')); ?>">
        Invoicer
    </a>
</li>

<?php if(Request::is('admin/invoicer/invoices/quotes')): ?>
    <li class="breadcrumb-item">Quotes</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
    <li class="breadcrumb-item">Estimates</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/invoiced')): ?>
    <li class="breadcrumb-item">Invoiced</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/paid')): ?>
    <li class="breadcrumb-item">Paid</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/workOrders')): ?>
    <li class="breadcrumb-item">Work Orders</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/completed')): ?>
    <li class="breadcrumb-item">Completed</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/shipped')): ?>
    <li class="breadcrumb-item">Shipped</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/pickedUp')): ?>
    <li class="breadcrumb-item">Picked Up</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices/canceled')): ?>
    <li class="breadcrumb-item">Canceled</li>
<?php endif; ?>

<?php if(Request::is('admin/invoicer/invoices')): ?>
    <li class="breadcrumb-item">Invoices</li>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/index/breadcrumbs.blade.php ENDPATH**/ ?>