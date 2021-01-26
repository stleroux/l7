<ul class="nav nav-tabs" id="recipe-tab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="recipe-general-tab" data-toggle="pill" href="#recipe-general" role="tab" aria-controls="recipe-general" aria-selected="true">
         <?php if(
            $errors->has('title') ||
            $errors->has('category') ||
            $errors->has('ingredients') ||
            $errors->has('methodology')
         ): ?>
            <div class="text-danger">
               General
            </div>
         <?php else: ?>
            General
         <?php endif; ?>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="recipe-notes-tab" data-toggle="pill" href="#recipe-notes" role="tab" aria-controls="recipe-notes" aria-selected="false">Notes</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="recipe-image-tab" data-toggle="pill" href="#recipe-image" role="tab" aria-controls="recipe-image" aria-selected="false">Image</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="recipe-information-tab" data-toggle="pill" href="#recipe-information" role="tab" aria-controls="recipe-information" aria-selected="false">
         <?php if(
            $errors->has('prep_time_hours') ||
            $errors->has('prep_time_minutes') ||
            $errors->has('cook_time_hours') ||
            $errors->has('cook_time_minutes') ||
            $errors->has('servings')
         ): ?>
            <div class="text-danger">
               Information
            </div>
         <?php else: ?>
            Information
         <?php endif; ?>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="recipe-settings-tab" data-toggle="pill" href="#recipe-settings" role="tab" aria-controls="recipe-settings" aria-selected="false">Settings</a>
   </li>
</ul>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/forms/tabs.blade.php ENDPATH**/ ?>