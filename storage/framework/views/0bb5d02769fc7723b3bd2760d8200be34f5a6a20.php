<div class="row text-center card-header bg-dark">
	Hard Woods
</div>

<div class="row text-center">
	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Birch</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/paper-birch-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="birch" value="birch" <?php echo e(Session::get('material') == "birch" ? 'checked' : ''); ?> /></div>
		<div><a href="https://www.wood-database.com/paper-birch/" target="_blank" class="font-weight-normal">More Info</a></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Hard Maple</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/hard-maple-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="hardMaple" value="hardMaple" <?php echo e(Session::get('material') == "hardMaple" ? 'checked' : ''); ?> /></div>
		<div><a href="https://www.wood-database.com/hard-maple/" target="_blank" class="font-weight-normal">More Info</a></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Cherry</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/black-cherry-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="cherry" value="cherry" <?php echo e(Session::get('material') == "cherry" ? 'checked' : ''); ?> /></div>
		<div><a href="https://www.wood-database.com/black-cherry/" target="_blank" class="font-weight-normal">More Info</a></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Mahogany</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/mahogany-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="mahogany" value="mahogany" <?php echo e(Session::get('material') == "mahogany" ? 'checked' : ''); ?> /></div>
		
	</label>
</div>

<div class="row text-center card-header bg-dark">
	Soft Woods
</div>

<div class="row text-center">
	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Eastern Hemlock</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/eastern-hemlock-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="hemlock" value="hemlock" <?php echo e(Session::get('material') == "hemlock" ? 'checked' : ''); ?> /></div>
		<div><a href="https://www.wood-database.com/eastern-hemlock/" target="_blank" class="font-weight-normal">More Info</a></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Eastern White Pine</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/eastern-white-pine-10x10.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="whitePine" value="whitePine" <?php echo e(Session::get('material') == "whitePine" ? 'checked' : ''); ?> /></div>
		<div><a href="https://www.wood-database.com/eastern-white-pine/" target="_blank" class="font-weight-normal">More Info</a></div>
	</label>




</div>

<div class="row text-center card-header bg-dark">
	Other
</div>

<div class="row text-center">
	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1 text-center">MDF</div>
		<div class="text-center"><img src="<?php echo e(asset('customOrders/woodSamples/mdf-10x10.png')); ?>" class="img-fluid" class="" /></div>
		<div class="text-center"><input type="radio" name="material" id="mdf" value="mdf" <?php echo e(Session::get('material') == "mdf" ? 'checked' : ''); ?> /></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Chip Board</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/chipboard.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="chipboard" value="chipboard" <?php echo e(Session::get('material') == "chipboard" ? 'checked' : ''); ?> /></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Foam</div>
		<div><img src="<?php echo e(asset('customOrders/woodSamples/foam-board.png')); ?>" class="img-fluid" /></div>
		<div><input type="radio" name="material" id="foam" value="foam" <?php echo e(Session::get('material') == "foam" ? 'checked' : ''); ?> /></div>
	</label>

	<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
		<div class="mb-1">Laminate Flooring</div>
		<div>
			
			<i class="fab fa-5x fa-pagelines py-4"></i>
		</div>
		<div><input type="radio" name="material" id="laminate" value="laminate" <?php echo e(Session::get('material') == "laminate" ? 'checked' : ''); ?> /></div>
	</label>
</div><?php /**PATH C:\sites\l7\resources\views/UI/carvings/customOrders/partials/materials.blade.php ENDPATH**/ ?>