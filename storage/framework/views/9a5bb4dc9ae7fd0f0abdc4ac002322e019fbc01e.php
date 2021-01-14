<!-- FRONTEND MODULES -->

<div class="form-group">

   <label for="modules" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Modules'); ?>

   </label>

   <br />

   <table class="table table-sm table-bordered table-striped">
   	<tbody>
   		<tr>
   			<th>Blog</th>
   			<th>Carvings</th>
   			<th>Darts</th>
   			<th>Projects</th>
   			<th>Recipes</th>
   		</tr>
   		<tr>
				<td>
   				<select name="blog">
   					<option value="visible" <?php echo e(config('settings.blog') == 'visible' ? 'selected' : ''); ?>>Visible</option>
   					<option value="hidden" <?php echo e(config('settings.blog') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
   				</select>
   			</td>
   			<td>
   				<select name="carvings">
   					<option value="visible" <?php echo e(config('settings.carvings') == 'visible' ? 'selected' : ''); ?>>Visible</option>
   					<option value="hidden" <?php echo e(config('settings.carvings') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
   				</select>
   			</td>
				<td>
   				<select name="darts">
   					<option value="visible" <?php echo e(config('settings.darts') == 'visible' ? 'selected' : ''); ?>>Visible</option>
   					<option value="hidden" <?php echo e(config('settings.darts') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
   				</select>
   			</td>
   			<td>
   				<select name="projects">
   					<option value="visible" <?php echo e(config('settings.projects') == 'visible' ? 'selected' : ''); ?>>Visible</option>
   					<option value="hidden" <?php echo e(config('settings.projects') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
   				</select>
   			</td>
   			<td>
   				<select name="recipes">
   					<option value="visible" <?php echo e(config('settings.recipes') == 'visible' ? 'selected' : ''); ?>>Visible</option>
   					<option value="hidden" <?php echo e(config('settings.recipes') == 'hidden' ? 'selected' : ''); ?>>Hidden</option>
   				</select>
   			</td>
   		</tr>
   	</tbody>
   </table>

	<small>Indicate whether a module is visible (active) in the frontend</small>
   
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/modules.blade.php ENDPATH**/ ?>