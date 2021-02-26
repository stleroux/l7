<?php if($paginator->hasPages()): ?>

    <ul class="pagination pagination-sm float-right pb-1 mb-0 pr-3" role="navigation">

        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled btn btn-xs btn-maroon p-2 font-weight-bold">
                <span>First</span>
            </li>
        <?php else: ?>
            <a href="<?php echo e($paginator->toArray()['first_page_url']); ?>">
                <li class="btn btn-xs btn-maroon p-2 font-weight-bold">
                    First
                </li>
            </a>
        <?php endif; ?>

        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled btn btn-xs btn-maroon p-2 font-weight-bold">
                <span>Previous</span>
            </li>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">
                <li class="btn btn-xs btn-maroon p-2 font-weight-bold">
                    Previous
                </li>
            </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
            <?php if(is_string($element)): ?>
                <li class="disabled">
                    <span><?php echo e($element); ?></span>
                </li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="btn btn-xs btn-light p-2">
                            <span><?php echo e($page); ?></span>
                        </li>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>">
                            <li class="btn btn-xs btn-maroon p-2 font-weight-bold">
                                <?php echo e($page); ?>

                            </li>
                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        

        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">
                <li class="btn btn-xs btn-maroon p-2 font-weight-bold">
                    Next
                </li>
            </a>
        <?php else: ?>
            <li class="disabled btn btn-xs btn-maroon p-2 font-weight-bold">
                <span>Next</span>
            </li>
        <?php endif; ?>

        
        <?php if($paginator->lastPage() == $paginator->currentPage()): ?>
            <li class="disabled btn btn-xs btn-maroon p-2 font-weight-bold">
                <span>Last</span>
            </li>
        <?php else: ?>
            <a href="<?php echo e($paginator->toArray()['last_page_url']); ?>">
                <li class="btn btn-xs btn-maroon p-2 font-weight-bold">
                    Last
                </li>
            </a>
        <?php endif; ?>

    </ul>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/pagination/custom.blade.php ENDPATH**/ ?>