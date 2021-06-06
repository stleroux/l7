
<?php if(
      (Config::get('settings.carvings') == 'visible') || 
      (Config::get('settings.projects') == 'visible') ||
      (Config::get('settings.recipes') == 'visible') ||
      (Config::get('settings.blog') == 'visible')
   ): ?>

   <div class="card card-trans-0 mb-2 border-red-2">
      <div class="card-header section_header p-2">
         <i class="fas fa-fw fa-glasses"></i>
         Sections of interest on the site
      </div>

      <div class="card-body p-2">
         
         <?php if(Config::get('settings.carvings') == 'visible'): ?>
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.projects')); ?>"></i>
                  <?php echo e($carvings->title); ?>

               </div>
               <div class="card-body card-trans-0 p-2 border-red-1">
                  <?php echo $carvings->body; ?>

               </div>
            </div>
         <?php endif; ?>

         <?php if(Config::get('settings.projects') == 'visible'): ?>
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.projects')); ?>"></i>
                  <?php echo e($projects->title); ?>

               </div>
               <div class="card-body card-trans-0 p-2 border-red-1">
                  <?php echo $projects->body; ?>

               </div>
            </div>
         <?php endif; ?>
         
         <?php if(Config::get('settings.recipes') == 'visible'): ?>
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.recipes')); ?>"></i>
                  <?php echo e($recipes->title); ?>

               </div>
               <div class="card-body p-2 border-red-1">
                  <?php echo $recipes->body; ?>

               </div>
            </div>
         <?php endif; ?>

         <?php if(Config::get('settings.blog') == 'visible'): ?>
            <div class="card card-trans-4 mb-2 border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.blog')); ?>"></i>
                  <?php echo e($blogs->title); ?>

               </div>
               <div class="card-body p-2 border-red-1">
                  <?php echo $blogs->body; ?>

               </div>
            </div>
         <?php endif; ?>

      </div>
   </div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/homepage/interests.blade.php ENDPATH**/ ?>