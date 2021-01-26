<table id="tbl" class="table table-sm text-center bg-info table-bordered">

	<?php for($i = 0; $i < 20; $i++): ?>
      <colgroup></colgroup>
   <?php endfor; ?>

	<thead>
      <tr>
         <th></th>
         <?php for($i = 1; $i < 21; $i++): ?>
            <th class="text-center"><?php echo e($i); ?></th>
         <?php endfor; ?>
         <th></th>
      </tr>
	</thead>

	<tbody>
		<tr>
         <th>Single</th>
         <?php for($i = 1; $i < 21; $i++): ?>
            <td class="rowcolSelected"
               onmouseover="changeImage('<?php echo e(asset('_darts/single/png/' .$i . '.png')); ?>')"
               onmouseout="changeBack('<?php echo e(asset('_darts/other/png/0.png')); ?>')"><?php echo e($i); ?></td>
         <?php endfor; ?>
			<td class="rowcolSelected"
            onmouseover="changeImage('<?php echo e(asset('_darts/other/png/bull.png')); ?>')"
            onmouseout="changeBack('<?php echo e(asset('_darts/other/png/0.png')); ?>')">Bull</td>
      </tr>

		<tr>
			<th>Double</th>
         <?php for($i = 1; $i < 21; $i++): ?>
            <td class="rowcolSelected"
               onmouseover="changeImage('<?php echo e(asset('_darts/double/png/d' .$i . '.png')); ?>')"
               onmouseout="changeBack('<?php echo e(asset('_darts/other/png/0.png')); ?>')"><?php echo e(($i * 2)); ?></td>
         <?php endfor; ?>
			<td class="rowcolSelected"
            onmouseover="changeImage('<?php echo e(asset('_darts/other/png/dbull.png')); ?>')"
            onmouseout="changeBack('<?php echo e(asset('_darts/other/png/0.png')); ?>')">2x Bull</td>
		</tr>

		<tr>
			<th>Triple</th>
         <?php for($i = 1; $i < 21; $i++): ?>
            <td class="rowcolSelected"
               onmouseover="changeImage('<?php echo e(asset('_darts/triple/png/t' .$i . '.png')); ?>')"
               onmouseout="changeBack('<?php echo e(asset('_darts/other/png/0.png')); ?>')"><?php echo e(($i * 3)); ?></td>
         <?php endfor; ?>
			<td></td>
		</tr>
	</tbody>
</table>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/inc/scoreboard.blade.php ENDPATH**/ ?>