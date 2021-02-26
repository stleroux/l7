<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>TheWoodBarn.ca | <?php echo $__env->yieldContent('title'); ?></title>
</head>
   <body>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding-bottom: 5px">
         <tr>
            <td style="background-color: black; color: white; padding-bottom: 5px, padding-top: 5px; font-size: 24px">
               &nbsp;<?php echo e(ucwords($recipe->title)); ?>

            </td>
            <td style="background-color: black; color: white; font-size: 14px;" align="right" valign="bottom">
               From the Recipe Book at TheWoodBarn.ca&nbsp;
            </td>
         </tr>
      </table>

      <table width="100%" border="1" cellspacing="0" cellpadding="0" style="padding-bottom: 5px">
         <tr>
            <th>Category</th>
            <th>Servings</th>
            <th>Prep Time</th>
            <th>Cook Time</th>
            <th>Created By</th>
            <th>Created On</th>
            <th>Source</th>
         </tr>
         <tr align="center">
            <td><?php echo e(ucwords($recipe->category->name)); ?></td>
            <td><?php echo e($recipe->servings); ?></td>
            <td><?php echo e($recipe->prep_time); ?> minutes</td>
            <td><?php echo e($recipe->cook_time); ?> minutes</td>
            <td><?php echo e($recipe->user->first_name); ?> <?php echo e($recipe->user->last_name); ?></td>
            <td><?php echo e($recipe->created_at); ?></td>
            <td>
               <?php if($recipe->source): ?>
                  <?php echo e($recipe->source); ?>

               <?php else: ?>
                  N/A
               <?php endif; ?>
            </td>
         </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom: 5px">
         <tr>
            <th width="75%" style="background-color: grey; color: white; padding-bottom: 5px; padding-top: 3px" align="left">&nbsp;Ingredients</th>
            <th style="background-color: grey; color: white" align="left">&nbsp;Image</th>
         </tr>
         <tr>
            <td width="65%" valign="top">
               <?php echo $ingredients = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->ingredients); ?>

            </td>
            <td width="35%">
               <?php if($recipe->image): ?>
                  <img src="<?php echo e(public_path('_recipes/'.$recipe->image)); ?>" alt="" height="200px" width="220px" />
               <?php else: ?>
                  <img src="<?php echo e(public_path('_recipes/image_not_available.jpg')); ?>" alt="" height="200px" width="220px" />
               <?php endif; ?>
            </td>
         </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom: 5px">
         <tr>
            <th style="background-color: grey; color: white; padding-bottom: 5px; padding-top: 3px" align="left">&nbsp;Methodology</th>
         </tr>
         <tr>
            <td>
               <?php echo $methodology = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->methodology); ?>

            </td>
         </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-bottom: 5px">
         <tr>
            <th style="background-color: grey; color: white; padding-bottom: 5px; padding-top: 3px" align="left">&nbsp;Notes</th>
         </tr>
         <tr>
            <td>
               <?php if($recipe->public_notes): ?> 
                  <?php echo $recipe->public_notes = str_replace(array('<p>','</p>'),array('','<br />'),$recipe->public_notes); ?>

               <?php else: ?>
                  N/A
               <?php endif; ?>
            </td>
         </tr>
      </table>
   </body>
</html>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/printPDF.blade.php ENDPATH**/ ?>