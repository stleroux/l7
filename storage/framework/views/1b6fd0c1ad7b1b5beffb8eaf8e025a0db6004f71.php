
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
            <div class="card card-trans-0 mb-2 text-light border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.projects')); ?>"></i>
                  Carvings
               </div>
               <div class="card-body p-2 border-red-1">
                  <p>Check out the latest additions to the site.</p>
                  <p>These are carved locally in our shop.</p>
                  <p>If you would like to order one or multiple item(s), please contact us using the <a href="<?php echo e(route('contact')); ?>">contact us form</a></p>
               </div>
            </div>
         <?php endif; ?>

         <?php if(Config::get('settings.projects') == 'visible'): ?>
            <div class="card card-trans-0 mb-2 text-light border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.projects')); ?>"></i>
                  Wood Projects
               </div>
               <div class="card-body p-2 border-red-1">
                  <p>Check out this area to feast your eyes on the woodworking projects we have worked on in our shop.</p>
                  <p>There will be before and after pictures of the materials being used to create the different items as well as some info on the materials used in the finishing process and other relevant details.</p>
               </div>
            </div>
         <?php endif; ?>
         
         <?php if(Config::get('settings.recipes') == 'visible'): ?>
            <div class="card card-trans-0 mb-2 text-light border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.recipes')); ?>"></i>
                  Recipes
               </div>
               <div class="card-body p-2 border-red-1">
                  <p>The title says it all. Access this section to see recipes contributed by our members.</p>
               </div>
            </div>
         <?php endif; ?>

         <?php if(Config::get('settings.blog') == 'visible'): ?>
            <div class="card card-trans-0 mb-2 text-light border-black-2">
               <div class="card-header card_header p-2">
                  <i class="<?php echo e(config('icons.blog')); ?>"></i>
                  The Blog
               </div>
               <div class="card-body p-2 border-red-1">
                  <p>Here you will find the latest news of the site. Keep an eye on this section to find out what is happening with the site.</p>
               </div>
            </div>
         <?php endif; ?>

      </div>
   </div>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/homepage/interests.blade.php ENDPATH**/ ?>