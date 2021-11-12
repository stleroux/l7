<?php if($faqs->count() > 0): ?>

   
   <table class="table table-hover table-sm" id="datatable">

      <thead>
         <tr>
            <th class="no-sort" width="30px">
               <div class="icheck-primary d-inline">
                  <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                  <label for="checkbox_all"></label>
               </div>
            </th>
            
            <th>Question</th>
            <th>Category</th>
            <th>Published?</th>
            <th class="no-sort text-center" width="140px">Actions</th>
         </tr>
      </thead>

      <tbody>
         <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td>
                  <div class="icheck-primary d-inline">
                     <input
                     type="checkbox"
                     class="record checkbox_record"
                     name="entries[]"
                     onchange="showHide(this.checked)"
                     value="<?php echo e($faq->id); ?>"
                     id="<?php echo e($faq->id); ?>" />
                     <label for="<?php echo e($faq->id); ?>"></label>
                  </div>
               </td>
               
               <td><a href="<?php echo e(route('admin.faqs.show', $faq->id)); ?>"><?php echo e(ucfirst($faq->question)); ?></a></td>
               <td><?php echo e($faq->category); ?></td>
               <td><?php echo e(($faq->is_published ? 'Yes' : 'No')); ?></td>
               <td class="text-right">
                  <?php echo $__env->make('admin.faqs.index.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>

   </table>
   
<?php else: ?>
   <?php echo e(config('settings.noRecordsFound')); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/faqs/index/grid.blade.php ENDPATH**/ ?>