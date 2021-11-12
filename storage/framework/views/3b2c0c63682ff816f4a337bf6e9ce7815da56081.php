

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/floating_labels.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.cart')); ?>"></i>
   Quote Request
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Quote Request</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-component')->html();
} elseif ($_instance->childHasBeenRendered('UXEfcH0')) {
    $componentId = $_instance->getRenderedChildComponentId('UXEfcH0');
    $componentTag = $_instance->getRenderedChildComponentTagName('UXEfcH0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UXEfcH0');
} else {
    $response = \Livewire\Livewire::mount('cart-component');
    $html = $response->html();
    $_instance->logRenderedChild('UXEfcH0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/cart.blade.php ENDPATH**/ ?>