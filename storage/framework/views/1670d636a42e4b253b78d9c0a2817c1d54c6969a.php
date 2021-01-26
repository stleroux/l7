

<div class="modal bg-secondary" id="view<?php echo e($field); ?>Modal<?php echo e($model->id); ?>" tabindex="-1" role="dialog" aria-labelledby="view<?php echo e($field); ?>ModalLabel">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            
         <div class="modal-header bg-info">
            <h5 class="modal-title" id="printModalLabel">
               <?php if($field == 'user'): ?>
                  Author Details
               <?php elseif($field == 'modifiedBy'): ?>
                  Updated By
               <?php elseif($field == 'lastViewedBy'): ?>
                  Last Viewed By
               <?php endif; ?>
            </h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span>&times;</span>
            </button>
         </div>

         <div class="modal-body text-dark">
            <div class="row mb-3">
               <div class="col text-center">
                  <?php if($field == 'user'): ?>
                     <?php if(!empty($model->user->image)): ?>
                        <img src="/_profiles/<?php echo e($model->user->image); ?>" height="100" width="100">
                     <?php else: ?>
                        <img src="/_profiles/no_photo.jpg" height="100" width="100">
                     <?php endif; ?>
                  <?php elseif($field == 'modifiedBy'): ?>
                     <?php if(!empty($model->modifiedBy->image)): ?>
                        <img src="/_profiles/<?php echo e($model->modifiedBy->image); ?>" height="100" width="100">
                     <?php else: ?>
                        <img src="/_profiles/no_photo.jpg" height="100" width="100">
                     <?php endif; ?>
                  <?php elseif($field == 'lastViewedBy'): ?>
                     <?php if($model->lastViewedBy->image): ?>
                        <img src="/_profiles/<?php echo e($model->lastViewedBy->image); ?>" height="100" width="100">
                     <?php else: ?>
                        <img src="/_profiles/no_photo.jpg" height="100" width="100">
                     <?php endif; ?>
                  <?php else: ?>
                     <img src="/_profiles/no_photo.jpg" height="100" width="100">
                  <?php endif; ?>
               </div>
            </div>

            
               
                  <table class="table table-sm table-hover mb-0">
                     <tr>
                        <th class="text-right">Username</th>
                        <td class="text-left">
                           <?php if($field == 'user'): ?>
                              <?php echo e(($model->user->username ?? 'N/A')); ?>

                           <?php elseif($field == 'modifiedBy'): ?>
                              <?php echo e(($model->modifiedBy->username ?? 'N/A')); ?>

                           <?php elseif($field == 'lastViewedBy'): ?>
                              <?php echo e(($model->lastViewedBy->username?? 'N/A')); ?>

                           <?php endif; ?>
                        </td>
                     </tr>
                     <tr>
                        <th class="text-right">First Name</th>
                        <td class="text-left">
                           <?php if($field == 'user'): ?>
                              <?php if(isset($model->user->first_name)): ?>
                                 <?php echo e($model->user->first_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php elseif($field == 'modifiedBy'): ?>
                              <?php if(isset($model->modifiedBy->first_name)): ?>
                                 <?php echo e($model->modifiedBy->first_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php elseif($field == 'lastViewedBy'): ?>
                              <?php if(isset($model->lastViewedBy->first_name)): ?>
                                 <?php echo e($model->lastViewedBy->first_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php endif; ?>
                        </td>
                     </tr>
                     <tr>
                        <th class="text-right">Last Name</th>
                        <td class="text-left">
                           <?php if($field == 'user'): ?>
                              <?php if(isset($model->user->last_name)): ?>
                                 <?php echo e($model->user->last_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php elseif($field == 'modifiedBy'): ?>
                              <?php if(isset($model->modifiedBy->last_name)): ?>
                                 <?php echo e($model->modifiedBy->last_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php elseif($field == 'lastViewedBy'): ?>
                              <?php if(isset($model->lastViewedBy->last_name)): ?>
                                 <?php echo e($model->lastViewedBy->last_name); ?>

                              <?php else: ?>
                                 N/A
                              <?php endif; ?>
                           <?php endif; ?>
                        </td>
                     </tr>
                     <tr>
                        <th class="text-right">Email Address</th>
                        <?php if($field == 'user'): ?>
                           
                           <?php if($model->user->public_email): ?>
                              <td class="text-left"><?php echo e($model->user->email); ?></td>
                           <?php else: ?>
                              <td class="text-left">*************************</td>
                           <?php endif; ?>

                        <?php elseif($field == 'modifiedBy'): ?>
                           <?php if($model->modifiedBy->public_email): ?>
                              <td class="text-left"><?php echo e($model->modifiedBy->email); ?></td>
                           <?php else: ?>
                              <td class="text-left">*************************</td>
                           <?php endif; ?>
                        <?php elseif($field == 'lastViewedBy'): ?>
                           <?php if($model->lastViewedBy->public_email): ?>
                              <td class="text-left"><?php echo e($model->lastViewedBy->email); ?></td>
                           <?php else: ?>
                              <td class="text-left">*************************111</td>
                           <?php endif; ?>
                        <?php endif; ?>
                     </tr>
                     <tr>
                        <th class="text-right">Member Since</th>
                        <td class="text-left">
                           <?php if($field == 'user'): ?>
                              <?php if($model->user->created_at): ?>
                                 <?php echo e($model->user->created_at); ?>

                              <?php else: ?>
                                 Unknown
                              <?php endif; ?>
                           <?php elseif($field == 'modifiedBy'): ?>
                              <?php if($model->modifiedBy->created_at): ?>
                                 <?php echo e($model->modifiedBy->created_at); ?>

                              <?php else: ?>
                                 Unknown
                              <?php endif; ?>
                           <?php elseif($field == 'lastViewedBy'): ?>
                              <?php if($model->lastViewedBy->created_at): ?>
                                 <?php echo e($model->lastViewedBy->created_at); ?>

                              <?php else: ?>
                                 Unknown
                              <?php endif; ?>
                           <?php endif; ?>
                        </td>
                     </tr>
                  </table>
               
            
         </div>

         <div class="modal-footer p-1">
            <button type="button" class="btn btn-sm btn-outline-secondary px-1 py-0" data-dismiss="modal">Close</button>
         </div>
         
      </div>
   </div>
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/modals/author.blade.php ENDPATH**/ ?>