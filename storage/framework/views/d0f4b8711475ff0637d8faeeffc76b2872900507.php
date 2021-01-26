<?php $__env->startSection('stylesheet'); ?>
   <style>
      .table-mini th,
      .table-mini td {
         padding: 0rem;
      }
   </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.movies')); ?>"></i>
   Movies
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Movies</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('admin.movies.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('functions'); ?>
   <?php echo $__env->make('admin.movies.blocks.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('movies-table', ['perPage'=>config('settings.perPage')])->html();
} elseif ($_instance->childHasBeenRendered('8nHOVhb')) {
    $componentId = $_instance->getRenderedChildComponentId('8nHOVhb');
    $componentTag = $_instance->getRenderedChildComponentTagName('8nHOVhb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8nHOVhb');
} else {
    $response = \Livewire\Livewire::mount('movies-table', ['perPage'=>config('settings.perPage')]);
    $html = $response->html();
    $_instance->logRenderedChild('8nHOVhb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>







<?php $__env->startSection('content1'); ?>


   <!-- ALPHABET -->
   <div class="text-center">
      <div class="btn-group p-1">
         <a href="<?php echo e(route('admin.movies.index')); ?>" class="<?php echo e(Request::is('admin/movies') ? "btn-secondary": "btn-primary"); ?> btn btn-sm">All</a>
         <?php $__currentLoopData = $letters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('admin.movies.index', $value)); ?>" class="<?php echo e(Request::is('admin/movies/'.$value) ? "btn-secondary": "btn-primary"); ?> btn btn-sm"><?php echo e(strtoupper($value)); ?></a>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>

   <div class="card mb-3">
      
      <!--CARD BODY-->
      <div class="card-body section_body p-2">
         <?php if($movies->count() > 0): ?>
            <table id="" class="table table-hover table-mini">
               <thead>
                  <tr>
                     <th class="no-sort" width="30px">
                        <div class="icheck-primary d-inline">
                           <input type="checkbox" class="checkbox_all" id="checkbox_all" onchange="showHide(this.checked)">
                           <label for="checkbox_all"></label>
                        </div>
                     </th>
                     <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('title', 'Title'));?></th>
                     <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('category', 'Genre'));?></th>
                     <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('running_time', 'Runtime'));?></th>
                     <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('views', 'Views'));?></th>
                     <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('col_no', "Col No"));?></th>
                     <th>IMDB N<sup>o</sup></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td>
                           <div class="icheck-primary d-inline">
                              <input
                                 name="entries[]"
                                 id="<?php echo e($movie->id); ?>"
                                 type="checkbox"
                                 class="record checkbox_record"
                                 value="<?php echo e($movie->id); ?>"
                                 onchange="showHide(this.checked)"
                              />
                              <label for="<?php echo e($movie->id); ?>"></label>
                           </div>
                        </td>
                        <td><a href="<?php echo e(route('admin.movies.show', $movie->id)); ?>"><?php echo e($movie->title); ?></a></td>
                        <td><?php echo e($movie->category); ?></td>
                        <td><?php echo e($movie->running_time); ?></td>
                        <td><?php echo e($movie->views); ?></td>
                        <td><?php echo e($movie->col_no); ?></td>
                        <td>
                           <?php if($movie->imdb_no): ?>
                              <a href="https://www.imdb.com/title/<?php echo e($movie->imdb_no); ?>" target="_blank"><?php echo e($movie->imdb_no); ?></a>
                           <?php endif; ?>
                        </td>
                        <td>
                           <div class="float-right">
                              <div class="btn-group">
                                 <a href="<?php echo e(route('admin.movies.edit', $movie)); ?>"
                                    title="Edit Movie">
                                    <i class="<?php echo e(config('icons.edit')); ?>"></i>
                                 </a>
                                 <a type="button"
                                    class="resetViews-model"
                                    data-toggle="modal"
                                    data-target="#resetViewsModal"
                                    data-id="<?php echo e($movie->id); ?>"
                                    data-url="<?php echo e(url('admin/movies/resetViews', $movie)); ?>"
                                    title="Reset Views Count"
                                    >
                                    <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
                                 </a>
                                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('movie-delete')): ?>
                                    <a type="button"
                                       class="destroy-model"
                                       data-toggle="modal"
                                       data-target="#destroyModal"
                                       data-id="<?php echo e($movie->id); ?>"
                                       data-url="<?php echo e(url('admin/movies', $movie)); ?>"
                                       title="Delete Movie"
                                       >
                                       <i class="<?php echo e(config('icons.trash')); ?> text-danger pl-1"></i>
                                    </a>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
            
         <?php else: ?>
            <?php echo e(config('settings.noRecordsFound')); ?>

         <?php endif; ?>
      </div>

   </div>

   

            
            <div class="row">
               <div class="col ml-2">
                  Showing <?php echo e($movies->firstItem()); ?> to <?php echo e($movies->lastItem()); ?> of <?php echo e($movies->total()); ?> entries
               </div>
               <div class="col text-right p-0 m-0">
                  <?php echo e($movies->links('admin.movies.pagination.custom')); ?>

               </div>
            </div>


   <?php echo $__env->make('modals.destroy', ['modelName'=>'movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.massDestroy', ['modelName'=>'movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.resetViews', ['modelName'=>'movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('modals.massResetViews', ['modelName'=>'movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.movies.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/movies/index.blade.php ENDPATH**/ ?>