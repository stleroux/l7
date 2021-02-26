<?php

// dd($modelName);

   if($modelName == 'finish'){
      return $routeName = 'admin.finishes.create';
   } else {
      return $routeName = 'admin.'.$modelName.'s.create';
   }
?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/common/inc/modelName.blade.php ENDPATH**/ ?>